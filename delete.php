<?php
$id=$_GET['id'];
require'db.php';
$delete_query="DELETE FROM all_info WHERE id=$id";
// //
// $sql="TRUNCATE user";
// // if(mysqli_query($conn,$sql)){
// //   echo"deleted";
// // }else{
// //   echo"no delete";
// // }
// $id= $_GET["id"];
//
// require'db.php';
// //$sql="DELETE FROM user WHERE id= $id ";
// if(mysqli_query($connect,$sql)){
//   header('location:inde.php');
// }else{
//   echo "no delete";
// }

?>
