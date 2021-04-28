<?php
include('../control/productRemoveVal.php');
?>
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

.show {display: block;}
body {
 background-image: url("2.jpg");
 background-color: #cccccc;
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


<!-- <script src="../javaScript/productValidate.js"></script> -->

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  <br><br>
    <lable>Product ID</lable>
     <lable>:</lable>  <input type="text" id="pid" name="pid" value="<?php echo @$_POST['pid'];?>" > 
     <input type="submit" value="Delete" class="buy-now-button">

<br><br>
 

</form> 


<?php
//include('../control/DB/DBconnection.php');
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery = $connection->showAllProduct($conobj,"product");

if ($userQuery->num_rows > 0)
{
  echo "<table id='addpro'>";
   echo "<tr><th>Product ID</th><th>Product name</th><th>Brand</th><th>Price(Tk.)</th><th>Product Description</th></tr>";
   while($row = mysqli_fetch_assoc($userQuery))
   {
       echo "<tr> <td>".$row["pid"]."</td> <td>".$row["pname"]."</td> <td>".$row["brand"]."</td> <td>".$row["price"]."</td> <td>".$row["descrip"]."</td> </tr>";
   }
   echo "</table>";
}
else
{
echo "Error!!";
}
$connection->CloseCon($conobj);
?>


<br><br>

<br>

<br>
</div>
</body>
</html>