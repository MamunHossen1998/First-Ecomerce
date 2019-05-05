<?php

$id=$_GET['Id'];

require'db.php';


 $name=$_POST['fname'];
 $age=$_POST['age'];!
 $email=$_POST['email'];
 $password=$_POST['password'];
 $mobile=$_POST['mobile'];


 $sql="UPDATE user SET Name='$name',Age='$age',Email='$email',Password='$password',Mobile='$mobile' WHERE Id=$id ";
if(mysqli_query($connect,$sql)){
 header('location:view.php?Id='.$id);

}else{
  echo"No Inserted";
}


?>
