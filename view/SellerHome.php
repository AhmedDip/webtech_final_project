<?php  

session_start(); 
if(empty($_SESSION["userName"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
 
       <title>Seller Home</title> 
       <link rel="stylesheet" href="../css/style.css">
       <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #0f2f44
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #0f2f44
}
h2{color: orange;}
body{background-color:aliceblue;}
</style>
    </head>
    <body>

    <div class="header"><h2 align="center">ABC.COM</h2></div>

    <ul>
  
  <li><a href="SellerProfile.php">Profile</a></li>
  <li><a href="../lab5/displayProduct.php"> Product details </a></li>
  <li><a href="../lab5/displayProduct.php">product</a></li> 
  <li><a href="../lab5/addProduct.php">Add Product</a></li> 
  
  <li><a href="Logout.php">Logout</a></li> 


  </ul>
  <h1 align="center">Welcome to seller home!</h1>
</div>








    </body>
</html>