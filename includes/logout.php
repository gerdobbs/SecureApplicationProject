<?php
include_once 'functions.php';
<<<<<<< HEAD

=======
include_once 'headers.php';
>>>>>>> 6a5e11963ec6a3f9c4786008946050bd38c13c7f
sec_session_start();
 
// Unset all session values 
$_SESSION = array();
 
// get session parameters 
$params = session_get_cookie_params();
 
// Delete the actual cookie. 
setcookie(session_name(),
        '', time() - 42000, 
        $params["path"], 
        $params["domain"], 
        $params["secure"], 
        $params["httponly"]);
 
// Destroy session 
session_destroy();
header('Location: ../index.php');