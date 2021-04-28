<?php
session_start(); 
if(empty($_SESSION["userName"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
include('../model/model.php');
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
  
    </head>
    <body>

    <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <div class="sticky">
<div class="header">
</div>

<h1 align='center'>ABC.COM</h1>
<ul>
  <li><a href="ManagerHome.php"> Home</a></li>
  <li><a href="ManagerProfile.php">My Profile</a></li>
  <li><a href="checkOrder.php">View Ordered Product </a></li>
  <li><a href="Logout.php">Logout</a></li>
  <li></li>
  
</ul>

</div>

</div>

 <?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery = $connection->showAllEmployee($conobj,"users","Seller");

// function showSearchEmployee($conn,$table,$user)
// {
//   $result = $conn->query("SELECT * FROM ". $table."  WHERE id='". $user."'");
//   return $result;
// }

if ($userQuery->num_rows > 0)
{
    echo "<table style='width:100%' border='1'>";
    echo "<tr><th>User ID</th><th>firstname</th><th>lastname</th><th>userType</th><th>phone</th><th>gender</th><th>homeAddress</th><th>email</th><th>birthDate</th></tr>";
   while($row = mysqli_fetch_array($userQuery))
   {
       echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["userType"]."</td><td>".$row["phone"]."</td><td>".$row["gender"]."</td><td>".$row["homeAddress"]."</td><td>".$row["email"]."</td><td>".$row["birthDate"]."</td></tr>";
   }
   echo "</table>";
}
else
{
echo "error occurred";
}
$connection->CloseCon($conobj);
?>
<br><br>

  </div>
    </body>
</html>