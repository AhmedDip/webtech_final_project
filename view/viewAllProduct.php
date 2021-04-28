<?php
session_start(); 
include('../model/model.php');
include('../control/updatecheck.php');
include('../control/deletecheck.php');

if(empty($_SESSION["userName"])) // Destroying All Sessions
{
header("Location: ../view/Login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<head>


  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <style>
 
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

$userQuery = $connection->showAllProduct($conobj,"product");

if ($userQuery->num_rows > 0)
{
    echo "<table style='width:100%' border='1'>";
    echo "<tr><th> Product ID </th><th> Product Name </th><th> Brand </th><th> Price(Tk.) </th><th> Product Description </th></tr>";
   while($row = mysqli_fetch_assoc($userQuery))
   {
       echo "<tr><td>".$row["pid"]."</td><td>".$row["pname"]."</td><td>".$row["brand"]."</td><td>".$row["price"]."</td><td>".$row["descrip"]."</td></tr>";
   }
   echo "</table>";
}
else
{
echo "0 results found.";
}
$connection->CloseCon($conobj);
?>
<br><br>
<br>


  </div>
    </body>
</html>