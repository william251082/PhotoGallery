<?php
/**
 * Created by PhpStorm.
 * User: williamdelrosario
 * Date: 3/27/18
 * Time: 3:54 PM
 */

class Sessions
{
    private $signed_in = false;
    public $user_id;
    public $message;

    function __construct()
    {
        session_start();
        $this->check_the_login();
    }

    public function message($msg="")
    {
        if(!empty($msg)) {

            $_SESSION['message'] = $msg;

        } else {

            return $this->message;

        }
    }

    public function check_message()
    {
        if(isset($SESSION['message'])) {

            $this->message = $_SESSION['message'];
            unset($_SESSION['message']);

        } else {

            $this->message = "";

        }
    }

    public function is_signed_in()
    {
        return$this->signed_in;
    }

    public function login($user)
    {
        if ($user){
            $this->user_id = $_SESSION['user_id'] = $user->id;
            $this->signed_in = true;
        }
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($this->user_id);
        $this->signed_in = false;
    }

    private function check_the_login()
    {
        if(isset($_SESSION['user_id'])) {
            $this->user_id = $_SESSION['user_id'];
            $this->signed_in = true;
        } else {
            unset($this->user_id);
            $this->signed_in = false;
        }
    }
}

$session = new Sessions();