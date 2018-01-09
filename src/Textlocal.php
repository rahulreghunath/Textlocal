<?php

namespace Rahulreghunath\Textlocal;

class Textlocal
{
    private $key, $sender;

    public function __construct()
    {

        $this->key = config('textlocal.key'); # Authentication key
        $this->sender = config('textlocal.sender'); # Default sender name

    }

    public function send($message, $receiver, $sender = null)
    {
		
        $xmlData = '
            <SMS>
            <Account apiKey="' . $this->key . '" Test="0" Info="1" JSON="0">
            <Sender From="' . $sender != null ? $sender : $this->sender . '">
            <Messages>
            <Msg ID="16" Number="' . $receiver . '">
            <Text>' . $message . '</Text>
            </Msg>
            </Messages>
            </Sender>
            </Account>
            </SMS>';
        $post = 'data=' . urlencode($xmlData);
        $url = "http://api.textlocal.in/xmlapi.php";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
		
    }
}
