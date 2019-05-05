<?php
require'db.php';
//echo$_POST['fname'];
 $name=$_POST['fname'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $mobile=$_POST['pn_number'];


 $sql="INSERT INTO all_info(name, email, password, pn_number) VALUES ('$name','$email','$password','$mobile')";
if(mysqli_query($connect,$sql)){
 header('location:index.php');
  //echo"inserted";
}else{
  echo"No Inserted";
}


?>
