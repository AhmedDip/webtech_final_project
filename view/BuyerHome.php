<?php  

session_start(); 
if(empty($_SESSION["userName"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
    <style type="text/css">

.heading-style{
color:black;
background-color:pink;
text-align:center;
font-family:cursive;
font-weight:bold;
font-style:italic;
text-decoration:underline;
margin:20px;
padding:20px;
border:3px red solid;





}

.para-style{
background-color:pink;
font-family:cursive;
color:black;
font-weight:bold;
font-style:italic;
text-indent:50px;
text-transform:lowercase;
word-spacing:10px;
}







#customers {
  font-family: cursive, Helvetica, sans-serif;
  font-style:italic;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #40E0D0;
  color: black;
}



</style>

       <title>Seller Home</title> 
       <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>

    <div class="header"><h2>ABC.COM</h2></div>

    <ul>
  
  <li><a href="BuyerHome.php"> Home </a> </li>
  <li><a href="BuyerProfile.php"> Profile </a></li>
  <li><a href="viewUser.php"> View </a></li>
  <li><a href="json.php"> Give review </a> </li>
  <li><a href="searchUser.php"> Search </a></li>
  <li><a href="shopping_cart.php"> Add to cart </a></li>
  <li><a href="CheckOrder.php"> Check Order & Delivery </a></li>
  <li><a href="Logout.php">Logout</a></li> 

  </ul>
  
</div>

<body>
<div >
<h1 class="heading-style"> ABC company </h1>




<table id="customers">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Ahmed Dip</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>2</td>
    <td>SRM Shishir</td>
    <td>Sweden</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Samiha Nowrin</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>4</td>
    <td>Shakira </td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>5</td>
    <td>justin traudue</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>6</td>
    <td>Parth samthan</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>7</td>
    <td>Burak Deniz</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>8</td>
    <td>Ranbir kapoor</td>
    <td>Italy</td>
  </tr> 
  <tr>
    <td>9</td>
    <td>Aditiya Roy Kapoor</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>10</td>
    <td>Shaheer seikh</td>
    <td>France</td>
  </tr>
</table>  <br>
 
    <h3>Do you want to <a href="Logout.php">Logout</a></h3>
</center>

<br><br>
<br><br>

<br><br>


</body>

<br>

  <p><a href="AboutUs.php">About Us</a></p>
</div>
    </body>
</html>