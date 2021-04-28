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
  <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #0f2f44
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #0f2f44
}
h2{color: orange;}
body{background-color:aliceblue;}
</style>


</head>

<body>
<div class="header"><h2>ABC.COM</h2></div>

<ul>
  
  <li><a href="SellerProfile.php">My Profile </a></li> 

  </ul>


<?php
$radio1=$radio2=$radio3="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUsers($conobj,"users",$_SESSION["userName"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {
    echo "<form action='' method='post'>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
  
      echo "<table><tr><td>User Id :</td><td> <input type='text' name='id' value=".$row["id"]." disabled></td></tr>";
      
      echo "<tr><td>Firstname :</td><td> <input type='text' name='fname' value=".$row["firstname"]." ></td></tr>";

      echo "<tr><td>Lastname :</td><td> <input type='text' name='lname' value=".$row["lastname"]." ></td></tr>";
   
      echo "<tr><td>Email :</td><td> <input type='text' name='email' value=".$row["email"]." disabled></td></tr>";

      echo "<tr><td>Password :</td><td> <input type='text' name='password' value=".$row["userPassword"]." ></td></tr>";
    
      echo "<tr><td>Address :</td><td> <input type='text' name='address' value=".$row["homeAddress"]." ></td></tr>";

      echo "<tr><td>Phone :</td><td> <input type='text' name='phone' value=".$row["phone"]." ></td></tr>";
  
      if($row["gender"]=='female')
      {$radio1="checked";}
      else if($row["gender"]=='male')
      {$radio2="checked";}
      else {$radio3="checked";}

      echo "<tr><td>Gender :</td><td> <input type='radio' name='gender' value='female' $radio1>Female
      <input type='radio' name='gender' value='male' $radio2>Male
      <input type='radio' name='gender' value='other' $radio3>Other </td></tr></table>" ;

    

    }
    echo "<br><br>Update My Account";
    echo   "<br><br> <input name='update' type='submit' onclick='onUpdate()' value='Update'>";
    echo "<br><br>Delete My Account";
    echo   "<br><br> <input name='delete' type='submit' value='Delete' onclick='myFunction()'></form>";
  } else {
    echo "0 results";
  }

?>
  <p id="demo"></p>
 
<script>
function onUpdate() {
  var txt;
  var r = confirm("Want to update Your Profile????");
  if (r == true) {
    txt = "You pressed OK!!";
  } else {
    txt = "You pressed Cancel!!";
    event.preventDefault();
  }
  document.getElementById("demo").innerHTML = txt;
}


function myFunction() {
  var txt;
  var r = confirm("Want to delete Your Profile????");
  if (r == true) {
    txt = "You pressed OK!!";
  } else {
    txt = "You pressed Cancel!!";
    event.preventDefault();
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>

<br><br>

<a href="SellerHome.php">Back</a>
</center>


<br><br>

<br>
  <div class="footer">

</div>
</body>
</html>