<?php
session_start(); 
if(empty($_SESSION["userName"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
include('../model/model.php');
?>

<?php

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

.show {display: block;}
body {
 background-image: url("2.jpg");
 background-color: #cccccc;
}


</style>
</head>
<body>



<h1 align='center'>ABC.COM</h1>
<ul>
  <li><a href="ManagerHome.php"> Home</a></li>
  <li><a href="ManagerProfile.php">My Profile</a></li>
  <li><a href="checkOrder.php">View Ordered Product </a></li>
  <li><a href="Logout.php">Logout</a></li>
  <li></li>
  
</ul>
    
<?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery = $connection->showAllOrder($conobj,"product","orders");

if ($userQuery->num_rows > 0)
{
    echo "<table style='width:100%' border='1'>";
    echo "<tr><th>Order ID</th><th>Product ID</th><th>Product name</th><th>Brand</th><th>Price(Tk.)</th><th>Description</th><th>Quantity</th><th>Discount</th><th>Total Price</th></tr>";
   while($row = mysqli_fetch_assoc($userQuery))
   {
       echo "<tr><td>".$row["oId"]."</td><td>".$row["pid"]."</td><td>".$row["pname"]."</td><td>".$row["brand"]."</td><td>".$row["price"]."</td><td>".$row["descrip"]."</td><td>".$row["quantity"]."</td><td>".$row["discount"]."</td><td>".$row["totalPrice"]."</td></tr>";
   }
   echo "</table>";
}
else
{
echo "No ordered yet.";
}
$connection->CloseCon($conobj);
?>

<br><br>

<br>

<br><br>

  </div>
    </body>
</html>