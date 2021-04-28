<?php
class db{
    
function OpenCon()
 {
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "abc_com";
 $conn = new mysqli($servername , $username, $password,$dbname) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function SelectQuery($conn,$sql)
 {
  $result = $conn->query($sql);
 return $result;
 }
 function CheckUsers($conn,$table,$userName,$password)
 {
  $result = $conn->query("SELECT * FROM ". $table." WHERE email='". $userName."' AND userPassword='". $password."'");
 return $result;
 }

 function insertUsers($conobj,$password,$fname, $lname,$type,$phone,$gender,$homeAddress,$email,$birth,$image)
 {
   $res=$conobj->prepare("INSERT INTO users(userPassword,firstname,lastname,userType,phone,gender,homeAddress,email,birthDate,imageName) VALUES (?,?,?,?,?,?,?,?,?,?)");
   $res->bind_param("ssssssssss",$password,$fname, $lname,$type,$phone,$gender,$homeAddress,$email,$birth,$image);
   if($res->execute())
   {
      $res->close();
      return TRUE;
   }
   else
   {
      return FALSE;
   }
 }

 function removeProduct($conn,$table,$pid){
   $sql = "DELETE FROM $table WHERE pid='$pid'";
   if ($conn->query($sql) === TRUE) {
      $result="Record delete successfully";
   } 
   else {
   $result="Not Exist!";
   }
   return $result;

 }

 function changePassword($con,$table,$password,$email)
 {
   $sql="UPDATE $table SET userPassword='$password' WHERE email ='$email'";
   if($con->query($sql) === TRUE)
   {
       return TRUE;
   }
   else 
   {
      return FALSE;
   }
 }



 

 function deleteManager($con,$userName)
 {
    $sql="DELETE from users WHERE email ='$userName'";
    if($con->query($sql) === TRUE)
    {
        return TRUE;
    }
    else 
    {
       return FALSE;
    }
 }

 
 function UpdateManager($conn,$table,$uname,$fname,$lname,$address,$phone,$gender)
 {
   $sql="UPDATE $table SET firstname='$fname',lastname='$lname', gender='$gender',phone='$phone',homeAddress='$address' WHERE email ='$uname'";
   if ($conn->query($sql) === TRUE) {
      $result="Record Updated successfully";
   } 
   else {
   $result="Error!";
   }
   return $result;
 }





 function updateUsers($con,$table,$fname,$lname,$phone,$gender,$homeAddress,$email,$birth,$type)
 {
   if($type != " ")
   {
      $sql="UPDATE $table SET firstname='$fname',lastname='$lname', gender='$gender',phone='$phone',userType='$type',homeAddress='$homeAddress',birthDate='$birth' WHERE email ='$email'";
   }
   else if($type ==" ")
   {
      $sql="UPDATE $table SET firstname='$fname',lastname='$lname', gender='$gender',phone='$phone',homeAddress='$homeAddress',birthDate='$birth' WHERE email ='$email'";
   }
    if($con->query($sql) === TRUE)
    {
        $con->close();
        return TRUE;
    }
    else 
    {
       return FALSE;
    }
 }

 function showMyProfile($conn,$table,$email)
 {
    $result = $conn->query("SELECT * FROM ". $table."  WHERE email='". $email."'");
    return $result;
 }

 function showAllProduct($conn,$table)
 {
    $result = $conn->query("SELECT * FROM ". $table."");
    return $result;
 }

 function showAllOrder($conn,$table1,$table2)
 {
    $result = $conn->query("SELECT * FROM ". $table1." t1, ". $table2." t2 where t1.pid = t2.pId");
    return $result;
 }

 function showAllEmployee($conn,$table,$role)
 {
    if($role != "")
    {
      $result = $conn->query("SELECT * FROM ". $table."  WHERE userType='". $role."'");
      return $result;
    }
    else
    {
      $result = $conn->query("SELECT * FROM ". $table."");
      return $result;
    }

 }

 function showSearchEmployee($conn,$table,$user)
 {
   $result = $conn->query("SELECT * FROM ". $table."  WHERE id='". $user."'");
   return $result;
 }
 
 function addUser($conobj,$password,$fname, $lname,$type,$phone,$gender,$homeAddress,$email,$birth,$image)
 {
   $res=$conobj->prepare("INSERT INTO users(userPassword,firstname,lastname,userType,phone,gender,homeAddress,email,birthDate,imageName) VALUES (?,?,?,?,?,?,?,?,?,?)");
   $res->bind_param("ssssssssss",$password,$fname, $lname,$type,$phone,$gender,$homeAddress,$email,$birth,$image);
   if($res->execute())
   {
      $res->close();
      return TRUE;
   }
   else
   {
      return FALSE;
   }
 }




function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>