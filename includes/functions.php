<?php
function connectToDB() {
    $host = 'devkinsta_db';
    $dbname = 'Simple_CMS_2';
    $dbuser = 'root';
    $dbpassword = 'aqvEwR9D41FvwC6l';

    $database = new PDO (
        "mysql:host=$host;dbname=$dbname",
        $dbuser,
        $dbpassword
    );

    return $database;
}


