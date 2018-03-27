<?php
/**
 * Created by PhpStorm.
 * User: williamdelrosario
 * Date: 3/27/18
 * Time: 12:21 PM
 */

class User
{
    public function find_all_users()
    {
        global $database;

        $result_set = $database->query("SELECT * FROM users");
        return $result_set;
    }
}