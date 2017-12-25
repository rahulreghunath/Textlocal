<?php

namespace rahulreghunath\textlocal;


class Textlocal
{
    private $key;

    public function __construct()
    {

        $this->key = config('textlocal.key'); # authentication key

    }

    public function send()
    {
        return 'sdf';
		
    }

}
