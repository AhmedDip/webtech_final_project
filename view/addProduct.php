<?php
session_start(); 
if(empty($_SESSION["userName"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
body {
 background-image: url("1.jpg");
 background-color: #cccccc;
}


input:focus {
  background-color: yellow;
}


</style>
</head>
<body>



<h1  align='center'>ABC.COM</h1>


<ul>
  <li><a href="ManagerHome.php" selected> Home</a></li>
  <li><a href="changePassword.php">Change Password</a></li>
  <li><a href="ManagerProfile.php" selected>My Profile</a></li>
  <li><a href="SearchUser.php">Search User</a></li>
  <li><a href="AddSeller.php">Add Seller</a></li>
  <li><a href="checkOrderDeliver.php">Check Order</a></li>
  <li><a href="top.php">Top Products</a></li>
  <li><a href="SearchUser.php">Search User</a></li>
  <li><a href="products.php">Products</a></li>
  <li><a href="categories.php">Categories</a></li>
  

  <li><a href="Logout.php">Logout</a></li>
  <li></li>
  
</ul>
<br> <br>



<fieldset align='center'>





<form action="../control/productControl.php" method="post">


 <b>Product Name:</b>  <br>
 <input type="text" name="pname" id="">

<br> <br>

 <b>Brand :</b>  <br>
<input type="text" name="brand" id="">

<br> <br>

<b> Price :</b> <br>
<input type="text" name="price" id="">
<br> <br>

<b> Description :</b>  <br>
<input type="text" name="des" id="">

<br> <br>

<b> Image :</b>  <br>

<input type="file" name="img" id="">

<br> <br>

<input type="submit" value="Add Product" class="buy-now-button" >




</fieldset>




</form>
	
</body>
</html>