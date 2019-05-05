<?php
   require 'header&fotter_part/header.php';
?>
<?php
$id= $_GET['id'];
require 'db.php';
$select_query="SELECT *FROM all_info WHERE id=$id";
$result=mysqli_query($connect,$select_query);
$after_assoc=mysqli_fetch_assoc($result);
//var_dump($std);
?>

<div class="container">
  <div class="row mt-4 ">
    <div class="col-md-10 m-auto">
      <h1 class="text-center bg-primary"> Student List </h1>
      <h3>First github</h3>
      <br>
      <table class="table table-bordered bg-light">
        <tr>
          <th>Id</th>
          <td><?php echo $after_assoc['id'];?></td>
        </tr>
        <tr>
          <th>Name</th>
          <td><?php echo $after_assoc['name'];?></td>
        </tr>
        <tr>
          <th>Email</th>
          <td><?php echo $after_assoc['email'];?></td>
        </tr>
        <!-- <tr>
          <th>Password</th>
          <td><?php echo $after_assoc['Password'];?></td>
        </tr> -->
        <tr>
          <th>Mobile</th>
          <td><?php echo $after_assoc['pn_number'];?></td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>


<?php
  require 'header&fotter_part/footer.php';

 ?>
