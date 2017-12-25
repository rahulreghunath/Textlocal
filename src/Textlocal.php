<?php
/**
 * Created by PhpStorm.
 * User: Teen Techies
 * Date: 10-11-2017
 * Time: 07:20 PM
 */

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
