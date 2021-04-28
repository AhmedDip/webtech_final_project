<?php
session_start();

//  Destroying All Sessions
 if (session_destroy())
{
setcookie('userName',$_POST['userName'],time()-1);
header("Location: Login.php"); // Redirecting To Home Page
}
?>