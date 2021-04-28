<?php 

include('../model/model.php');


$pid = "";
$pidError= "";





if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $pid = test_input($_POST["pid"]);
 
  if(empty($pid)||(!preg_match("/^[0-9 ]*$/",$pid))){
      echo "Please Enter product ID  ";
       }
  

else {
    
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->removeProduct($conobj,"product",$_POST['pid']);

echo $userQuery;
$connection->CloseCon($conobj);
   

}


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>