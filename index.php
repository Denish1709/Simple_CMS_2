<?php
session_start();

// require all the functions files
require "includes/functions.php";

// your website path
// parse_url will remove all the query string starting from the ?
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
// remove / using trim()
$path = trim( $path, '/');

switch ($path) {
    case 'auth/login':
        require "includes/auth/login.php";
        break;
    case 'auth/signup':
        require "includes/auth/signup.php";
        break;
    case 'dashboard': //condition
        require "pages/dashboard.php";
        break;
    case 'login': //condition
        require "pages/login.php";
        break;
    case 'logout': //condition
        require "pages/logout.php";
        break;
    case 'manage-posts': //condition
        require "pages/manage-posts.php";
        break;
    case 'manage-posts-add': //condition
        require "pages/manage-posts-add.php";
        break;
    case 'manage-posts-edit': //condition
        require "pages/manage-posts-edit.php";
        break;
    case 'manage-users': //condition
        require "pages/manage-users.php";
        break;
    case 'manage-users-add': //condition
        require "pages/manage-users-add.php";
        break;
    case 'manage-users-changepwd': //condition
        require "pages/manage-users-changepwd.php";
        break;
    case 'manage-users-edit': //condition
        require "pages/manage-users-edit.php";
        break;
    case 'signup':
        require "pages/signup.php";
        break;
    case 'post':
        require "pages/post.php";
        break;
    default:
        require "pages/home.php";
        break;
}
?>