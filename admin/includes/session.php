<?php
/**
 * Created by PhpStorm.
 * User: williamdelrosario
 * Date: 3/27/18
 * Time: 3:54 PM
 */

class Sessions
{
    private $signed_in;
    public $user_id;

    function __construct()
    {
        session_start();
    }
}

$session = new Sessions();