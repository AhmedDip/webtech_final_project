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
    echo "<br><br><b>Update My Account  </b>";
    echo   "<input name='update' type='submit' value='Update'class='buy-now-button' >";
    echo "<br><br><b>Delete My Account  </b>";
    echo   "<input name='delete' type='submit' value='Delete' class='buy-now-button' onclick='myFunction()'></form>";
  } else {
    echo "0 results";
  }

  // <button class="buy-now-button" name="submit" value="Submit">Submit</button>
?>


<p id="demo"></p>

<script>
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
<br>

<a href="ManagerHome.php">Back to the HomePage</a>
</center>

<br> <br> <br>


  <div class="footer">

  <?php 
  
  include ('footer/footer.php');
  
  ?>
</div>
</body>
</html>