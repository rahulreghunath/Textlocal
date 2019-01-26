<?php

namespace Rahulreghunath\Textlocal;

class Textlocal extends TextLocalOriginal
{
    private $sender;

    public function __construct()
    {
        parent::__construct('', '', config('textlocal.key'));
        $this->sender = config('textlocal.sender'); # Default sender name
    }

    /**
     * @param string $message
     * @param string $receiver
     * @param string $sender
     * @return array|mixed
     * @throws \Exception
     */
    public function send($message, $receiver, $sender = '')
    {
        $result = $this->sendSms([$receiver], $message, $sender != '' ? $sender : $this->sender);
        return $result;
    }
}
