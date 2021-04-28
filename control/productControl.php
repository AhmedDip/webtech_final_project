<?php 

$a= $_POST["pname"];

$b= $_POST["brand"];

$c= $_POST["price"];

$d= $_POST["des"];



?>

<?php 
echo "Data Inserted";

$conn=mysqli_connect("localhost","root","","abc_com");

$sql = "INSERT INTO product (pname ,brand, price, descrip) values ('$a' ,'$b','$c','$d')";

mysqli_query ($conn, $sql);


?>

<?php
session_start(); 
if(empty($_SESSION["userName"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Document</title>
    
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <style>

.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: black;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
body {
 background-image: url("1.jpg");
 background-color: #cccccc;
}


  </style>
</head>
<body>

<h1 align='center'>ABC.COM</h1>
<ul>
  <li><a href="../view/ManagerHome.php" selected> Home</a></li>
  <li><a href="../view/changePassword.php">Change Password</a></li>
  <li><a href="../view/ManagerProfile.php" selected>My Profile</a></li>
  <li><a href="../view/SearchUser.php">Search User</a></li>
  <li><a href="../view/AddSeller.php">Add Seller</a></li>
  <li><a href="../view/checkOrderDeliver.php">Check Order</a></li>
  <li><a href="../view/top.php">Top Products</a></li>
  <li><a href="../view/SearchUser.php">Search User</a></li>
  <li><a href="../view/products.php">Products</a></li>
  <li><a href="categories.php">Categories</a></li>
  

  <li><a href="Logout.php">Logout</a></li>
  <li></li>
  
</ul>

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Click Here</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
   
  </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>

    



</body>
</html>