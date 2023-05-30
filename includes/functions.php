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


//function to check if the user is an admin (long way)
function isAdmin() {
    if ( isset( $_SESSION['user']['role'] ) && $_SESSION['user']['role'] === 'admin') {
        return true;
    } else {
        return false;
    }
}

function isEditor() {
    if ( isset( $_SESSION['user']['role'] ) && $_SESSION['user']['role'] === 'editor') {
        return true;
    } else {
        return false;
    }
}

//shortway
//function isAdmin() {
//    return isAdmin() || isEditor() ? true : false;
//}