<?php

namespace Rahulreghunath\Textlocal;

use Exception;

/**
 * Textlocal Laravel Wrapper Class
 *
 * This class is used to interface with Laravel and Textlocal API2 to send messages, manage contacts, retrieve messages from
 * inboxes, track message delivery statuses, access history reports
 *
 * @package      Rahulreghunath\Textlocal
 * @subpackage   API
 * @author       Rahul Reghunath <me@rahulr.me>
 */
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
     * @throws Exception
     */
    public function send($message, $receiver, $sender = '')
    {
        return $this->sendSms([$receiver], $message, $sender != '' ? $sender : $this->sender);
    }
}
