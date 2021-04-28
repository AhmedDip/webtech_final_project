<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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

session_start();
if (empty($_SESSION["userName"])) {
    header("Location: Login.php"); // Redirecting To Home Page
}
?>
<?php
$orderId = $_GET['id'];
include  '../model/conn.php';

$status = "";
$post_status = "";
//$username = $_SESSION['userName'];
// echo $username;
$sql = "SELECT  *  FROM orders where oId	='$orderId'";
//echo $sql;
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        //$id = $row['oId'];
        $status = $row['status'];
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_status = $_POST['status'];
    $q = "UPDATE `orders` SET `status` = '$post_status' WHERE `orders`.`oId` = $orderId";
    $query = mysqli_query($con, $q);
    $submitmsg = "successfully updated";
    //echo $submitmsg;
    header("location:CheckOrderDeliver.php");
}
?>

    <form method="POST" action="">
        <label><b> Update Status: </b></label>
        <select name="status">
            <option value="accept" <?php if ($status == 'accept') {
                                        echo ' selected="selected"';
                                    } ?>>Accept</option>
            <option value="ontheway" <?php if ($status == 'ontheway') {
                                            echo ' selected="selected"';
                                        } ?>>On the Way</option>
            <option value="confirmed" <?php if ($status == 'confirmed') {
                                            echo ' selected="selected"';
                                        } ?>>Confirmed</option>
            <option value="rejected" <?php if ($status == 'rejected') {
                                            echo ' selected="selected"';
                                        } ?>>Rejected</option>
        </select>
        <input type="submit" value="Update" class="buy-now-button">
    </form>
</body>

</html>
    



