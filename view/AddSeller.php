<?php
session_start(); 
if(empty($_SESSION["userName"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
?>


<?php
include('../control/UserValidation.php');
?>

<!DOCTYPE HTML>
<html>
    <head>
    <script src="../javaScript/UserValidation.js"></script>
    <style>
        span{
            color:red;
        }

        h3{
            color:white;
            background-color: black;
        }

        input:focus {
  background-color: yellow;
}

.show {display: block;}
body {
 background-image: url("2.jpg");
 background-color: #cccccc;
}

    </style>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>

    <div class="header">
<div>



    
<h1 align='center'>ABC.COM</h1>
<ul>
  <li><a href="ManagerHome.php"> Home</a></li>
  <li><a href="ManagerProfile.php">My Profile</a></li>
  <li><a href="checkOrder.php">View Ordered Product </a></li>
  <li><a href="Logout.php">Logout</a></li>
  <li></li>
  
</ul>

    
    <a href="ManagerHome.php">Go Back</a>
   
   <p id="allError"><?php //echo $allError; ?>
         <table style='width:80%' border='5'>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validateForm()" enctype="multipart/form-data"> 

        <span>*Required Field</span> <br> <br>
            
            <tr>
            <td><label for="employeeType">User type : </label></td>
            <td>
            
            <input type="radio" id="employeeType" name="employeeType" value="Seller">
            <label for="selle">Seller</label>
            
            <span>*</span><p id="typeError"><?php //echo $typeError; ?></td>
            </tr>
           
            <tr>
            <td><label for="file">Upload image : </label></td>
            <td><input type="file" name="fileToUpload" id="fileToUpload">
            <span>*</span><p id="imageError"><?php //echo $imageError; ?></td>
            </tr>

            <tr>
            <td><label for="password">Password : </label></td>
            <td><input type="password" placeholder="Password" id="password" name="password" onkeyup="validatePassword()" >
            <span>*</span><p id="passError"><?php //echo $passError; ?></td>
            </tr>

            <tr>
            <td><label for="Cpassword">Confirm Password : </label></td>
            <td><input type="password" placeholder="Confirm password" id="Cpassword" name="Cpassword" onkeyup="validateCpassword()" >
            <span>*</span><p id="CpassError"><?php //echo $passError; ?></td>
            </tr> 
            
            <tr>
            <td><label for="first_name">First name : </label></td>
            <td><input type="text" placeholder="First name"  id="first_name" name="first_name" onkeyup="validateFname()" >
            <span>*</span><p id="fnameError"><?php //echo $fnameError; ?></td>
            </tr>

            <tr>
            <td><label for="last_name">Last name : </label></td>
            <td><input type="text" placeholder="Last name"  id="last_name" name="last_name" onkeyup="validateLname()" >
            <span>*</span><p id="lnameError"><?php //echo $lnameError; ?></td>
            </tr>

            <tr>
            <td><label for="phone">Phone number : </label></td>
            <td><input type="text" placeholder="phone "  id="phone" name="phone" onkeyup="validatePhone()" >
            <span>*</span><p id="phoneError"><?php //echo $phoneError; ?></td>
            </tr>

            <tr>
            <td><label for="gender">Gender : </label></td>
            <td><input type="radio" id="gender" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female">
            <label for="female">Female</label>
            <span>*</span><p id="genderError"><?php //echo $genderError; ?></td>
            </tr>

            <tr>
            <td><label for="address">Address : </label></td>
            <td><input type="text" placeholder="address"  id="address" name="address" onkeyup="validateAddress()"  > 
            <span>*</span><p id="addressError"><?php //echo $addressError; ?></td>
            </tr>

            <tr>
            <td><label for="email">E-mail : </label></td>
            <td><input type="text" placeholder="mymail@gmail.com"  id="email" name="email" onkeyup="validateEmail()" >
            <span>*</span><p id="emailError"><?php //echo $emailError; ?></td>
            </tr>

            

            <tr>
            <td><label for="birthday">Date Of birth:</label></td>
            <td> <input type="date" id="birthday" name="birthday">
            <span>*</span><p id="birthError"><?php //echo $birthError; ?></td>
            </tr>

            </table>

            <br> <br>
                          
            <!-- <input type="submit" name = "submit" value="REGISTER"> -->
            <button class="buy-now-button" name="submit" value="Submit">Add Seller</button>
    
        <br> <br>
        </form>
        <br>
        
      

<div class="footer">

<?php 

include ('footer/footer.php');
?>

</div>
    </body>
</html>