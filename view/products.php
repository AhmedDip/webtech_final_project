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

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Click Here</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="viewAllProduct.php">View Products</a>
    <a href="addProduct.php">Add Products</a>
    <a href="searchProduct.php">Search Products</a>
    <a href="removeProduct.php">Delete Products</a>
    <a href="viewAllOrder.php">View All Order</a>
    <a href="couponCode.php">Coupon Code</a>
    <a href="#tools">Tools</a>
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