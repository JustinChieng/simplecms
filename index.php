<?php 
//get route from global variable
$path =  ($_SERVER["REQUEST_URI"]);
// remove beginning slash and ending slash
$path = trim ($path, '/');
// remove all the URL parameter that starts with ?
$path =  parse_url($path, PHP_URL_PATH);

var_dump($path);

switch ($path){
  case 'dashboard':
    require "pages/dashboard.php";
    break; 
  case 'login':
    require "pages/login.php";
    break;
  case 'signup':
    require "pages/signup.php";
    break;
  case 'manage-posts-add':
    require "pages/manage-posts-add.php";
    break;
  case 'manage-posts-edit':
    require "pages/manage-posts-edit.php";
    break;
  case 'manage-posts':
    require "pages/manage-posts.php";
    break;
  case 'manage-users-add':
    require "pages/manage-users-add.php";
    break;
  case 'manage-users-edit':
    require "pages/manage-users-edit.php";
    break;
  case 'manage-users':
    require "pages/manage-users.php";
    break;
  case 'post':
    require "pages/post.php";
    break;
  case 'logout':
    require "pages/logout.php";
    break;
  default:
    require "pages/home.php";
    break;
}