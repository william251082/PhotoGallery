<?php

// Database Connection Constants

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','root');
define('DB_NAME','gallery_db');

$connection = mysqli_connect(DB_HOST,DB_USER, DB_PASS,DB_NAME);

if($connection) {
    echo "true";
}