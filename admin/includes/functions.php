<?php
/**
 * Created by PhpStorm.
 * User: williamdelrosario
 * Date: 3/27/18
 * Time: 3:21 PM
 */

function classAutoLoader ($class)
{
    $class = strtolower($class);
    $the_path = "includes/{$class}.php";

    if (is_file($the_path) && !class_exists($class)){
        include $the_path;
    }

//    include 'includes/'.$class.'.php';
//
//    if(file_exists($the_path)) {
//        require_once ($the_path);
//    } else {
//        die("This file name {class}.php was not man....");
//    }
}

spl_autoload_register('classAutoLoader');
