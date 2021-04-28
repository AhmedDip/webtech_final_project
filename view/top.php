<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


  <h1  align='center'>ABC.COM</h1>
  <ul>
  <li><a href="ManagerHome.php"> Home</a></li>
  <li><a href="ManagerProfile.php">My Profile</a></li>
  <li><a href="AddSeller.php">Add Seller</a></li>
  <li><a href="checkOrder.php">Check Order List </a></li>
  <li><a href="top.php">Top Selling Product</a></li>
  <li><a href="SearchUser.php">Search User</a></li>
  <li><a href="Logout.php">Logout</a></li>
  <li></li>
  
</ul>

<h3>Top 10 Selling product on ABC.COM</h3>
<br>


<div id='showCD'></div><br>
<input type="button" onclick="previous()" value="Back" class="buy-now-button">
<input type="button" onclick="next()" value="Next" class="buy-now-button">







<script>
var i = 0, len;
displayCD(i);

function displayCD(i) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this, i);
    }
  };
  xmlhttp.open("GET", "top.xml", true);
  xmlhttp.send();
}

function myFunction(xml, i) {
  var xmlDoc = xml.responseXML; 
  x = xmlDoc.getElementsByTagName("CD");
  len = x.length;
  document.getElementById("showCD").innerHTML =
  "<b>Product: " +
  x[i].getElementsByTagName("PRODUCT")[0].childNodes[0].nodeValue +

  "</b><h5>Brand:</b> " +
  x[i].getElementsByTagName("BRAND")[0].childNodes[0].nodeValue +

  "<br>Description: " +
  x[i].getElementsByTagName("DES")[0].childNodes[0].nodeValue +

  "<br>Rating: " +
  x[i].getElementsByTagName("RATING")[0].childNodes[0].nodeValue +

  "<br>Price: " + 
  x[i].getElementsByTagName("PRICE")[0].childNodes[0].nodeValue;
}

function next() {
  if (i < len-1) {
    i++;
    displayCD(i);
  }
}

function previous() {
  if (i > 0) {
    i--;
    displayCD(i);
  }
}
</script>

</body>
</html>
