<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'eren');
    define('DB_PASS', '1234567890');
    define('DB_NAME', 'feedback_project'); 

    // create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //check connection
    if($conn->connect_error) {
        die('Connection Failed' . $conn->connect_error);
    }

    