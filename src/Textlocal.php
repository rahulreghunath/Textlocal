<?php

namespace Rahulreghunath\Textlocal;


class Textlocal
{
    private $key;

    public function __construct()
    {

        $this->key = config('textlocal.key'); # authentication key

    }

    public function send($message,$sender)
    {
        $xmlData = '
    <SMS>
    <Account apiKey="'.$this->key.'" Test="0" Info="1" JSON="0">
    <Sender From="OPTKET">
    <Messages>
    <Msg ID="16" Number="' . $sender . '">
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
