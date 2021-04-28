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

    
 
</style>

    <h1 align='center'>ABC.COM</h1>

    
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

<body>


<div>
<ul>
  <li><a href="ManagerHome.php"> Home</a></li>
  <li><a href="ManagerProfile.php">My Profile</a></li>
  <li><a href="checkOrder.php">View Ordered Product </a></li>
  <li><a href="Logout.php">Logout</a></li>
  <li></li>
  
</ul>
<?php 

    if (isset($_SESSION['userName'])) {
    echo "<h5> Logged in with ".$_SESSION['userName'].", Welcome Order Details Page"."</h5>";

    }
    else{
    $msg="error";
    header("location:Login.php");
    // echo "<script>location.href='login.php'</script>";
    }
    ?>


</div>
</div>
<center>
<br><br><br>

<?php
   include('../model/model.php');
   $connection = new db();
   $conobj=$connection->OpenCon();
   
   $userQuery = $connection->showAllOrder($conobj,"product","orders");

     if ($userQuery->num_rows > 0)
     {
        echo "<table border='1'><tr><th>Order ID</th><th>Buyer ID</th><th>Product ID</th><th>Product name</th><th>Brand</th><th>Price(Tk.)</th><th>Description</th><th>Quantity</th><th>Discount</th><th>Total Price</th><th>Status</th></tr>";
        while($row = mysqli_fetch_assoc($userQuery))
        {
            echo "<tr><td>".$row["oId"]."</td><td>".$row["bId"]."</td><td>".$row["pid"]."</td><td>".$row["pname"]."</td><td>".$row["brand"]."</td><td>".$row["price"]."</td><td>".$row["descrip"]."</td><td>".$row["quantity"]."</td><td>".$row["discount"]."</td><td>".$row["totalPrice"]."</td><td>".$row["status"]."</td></tr>";
        }
        echo "</table>";
     }
     else
     {
     echo "No ordered yet.";
     }
     $connection->CloseCon($conobj);
 ?>
 <a href="ManagerHome.php">Back</a>

 <br><br>

<br>
</center>

     <?php 
     
     
     include('footer/footer.php');
     ?>
  

</div>
 </body>
</html>
