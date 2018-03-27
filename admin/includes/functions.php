<?php
/**
 * Created by PhpStorm.
 * User: williamdelrosario
 * Date: 3/27/18
 * Time: 3:21 PM
 */

spl_autoload_register(function ($class)
{
    $class = strtolower($class);
    $the_path = "includes/{$class}.php";

    include 'includes/'.$class.'.php';

    if(file_exists($the_path)) {
        require_once ($the_path);
    } else {
        die("This file name {class}.php was not man....");
    }
});
