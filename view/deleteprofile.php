<?php
session_start();
if (empty($_SESSION["userName"])) {
    header("Location: Login.php"); // Redirecting To Home Page
}
 include  '../model/conn.php';
 $id=$_SESSION['userName']; 
 $q="DELETE FROM users WHERE email='$id'";
 echo $q;
 mysqli_query($con,$q);
 //header('location:Login.php');
