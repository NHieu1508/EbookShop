<?php
// Include configuration file
//require_once 'config_fb.php';
session_start();
// Remove access token from session
unset($_SESSION['facebook_access_token']);

unset($_SESSION['MaKH']);

unset($_SESSION['giohang']);

unset($_SESSION['fb_user_id']);
unset($_SESSION['fb_user_name']);
unset($_SESSION['fb_user_email']);
// Redirect to the homepage
header("Location:index.html");
?>