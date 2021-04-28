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


</style>
</head>
<body>


<h1  align='center'>ABC.COM</h1>


<ul>
  <li><a href="ManagerHome.php" selected> Home</a></li>
  <li><a href="ManagerProfile.php" selected>My Profile</a></li>
  <li><a href="AddSeller.php">Add Seller</a></li>
  <li><a href="checkOrder.php">Check Order List </a></li>
  <li><a href="top.php">Top Selling Product</a></li>
  <li><a href="SearchUser.php">Search User</a></li>
  <li><a href="Logout.php">Logout</a></li>
  <li></li>
  
</ul>


<p id="demo"></p>

<?php 

    if (isset($_SESSION['userName'])) {
    echo "<h5> Logged in with ".$_SESSION['userName'].", Welcome to Manager's Homepage"."</h5>";

    }
    else{
    $msg="error";
    header("location:Login.php");
    // echo "<script>location.href='login.php'</script>";
    }
    ?>
  
  <div class="container categories">
    <div class="row">
      <div class="col-md-4">
        <div class="d-flex watch-bg justify-content-between align-items-center">
       
          <h1>Watch</h1>
          <img src="image/categories/watch.png" alt="">
         
          <button type="button" onclick="loadDoc()">View</button>
        </div>
      </div>
      <div class="col-md-4">
        <div class="d-flex justify-content-between align-items-center bag-bg">
          <h1>Bag</h1>
          <img src="image/categories/bag.png" alt="">
          <button type="button" onclick="loadDoc()">View</button>
        </div>
      </div>
      <div class="col-md-4">
        <div class="d-flex justify-content-between align-items-center shoes-bg">
          <h1>Shoes</h1>
          <img src="image/categories/shoes.png" alt="">
          <button type="button" onclick="loadDoc()">View</button>
        </div>
        <script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "watches.php", true);
  xhttp.send();
}
</script>
      </div>
    </div>
  </div>

  <h1 align='center'>Trending products</h1>

  <div class="container" id="shoes">
    <h3>Shoes</h3>

    <div class="card-deck">
      <div class="card" style="width: 18rem;">
    
        <img src="image/shoes/shoe-1.png" class="card-img-top" alt="..." >
        
        
        <div class="card-body">

        
          <h5 class="card-title">Supply 350</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional.
          </p>
          <h1>1200 Taka</h1>
          <a href="addProduct.php" class="btn btn-primary buy-now-btn" onclick="alert('Do You want to add?')">ADD >></a>
         
          
        
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="image/shoes/shoe-2.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Nike 360</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <h1>3200 Taka</h1>
          <a href="addProduct.php" class="btn btn-primary buy-now-btn">ADD >></a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="image/shoes/shoe-3.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Red Airmax</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional.</p>
          <h1>3500 Taka</h1>
          <a href="addProduct.php" class="btn btn-primary buy-now-btn">ADD >></a>
        </div>
      </div>

    </div>


  </div>

  <div class="container" id="backpack">
    <h3>Backpack</h3>
    <div class="card-deck">
      <div class="card">
        <img src="image/bags/bag-1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Red Bag</h5>
          <h5 class="card-title">3500 Taka</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
        <a href="addProduct.php" class="btn btn-primary buy-now-btn">ADD >></a>
        </div>
      </div>
      <div class="card">
        <img src="image/bags/bag-2.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Blue Bag</h5>
          <h5 class="card-title">3500 Taka</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
        <a href="addProduct.php" class="btn btn-primary buy-now-btn">ADD>></a>
        </div>
      </div>
      <div class="card">
        <img src="image/bags/bag-3.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Black Bag</h5>
          <h5 class="card-title">3500 Taka</h5>

          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This card has even longer content than the first to show that equal height action.</p>
        </div>
        <div class="card-footer">
        <a href="addProduct.php" class="btn btn-primary buy-now-btn">ADD >></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container orange-bg d-flex justify-content-center align-items-center" id="subscribe">
    <div>
      <h1>LET'S STAY IN TOUCH</h1>
      <h6>Get updates on sales, specials and more</h6>
      <input class="form-control" type="text">
      <br>
      <a href="addProduct.php" class="btn btn-primary buy-now-btn">Submit</a>
    </div>
  </div>


  <footer>
    <small>©2021. ABC.COM   All rights reserved. Sofia, Bulgaria.</small>
  </footer>



  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>