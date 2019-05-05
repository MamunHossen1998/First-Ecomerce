<?php
          require'header&fotter_part/header.php';
?>
<?php
require'db.php';
$sql="SELECT *FROM all_info";
$result=mysqli_query($connect,$sql);
?>

<div class="container">
  <div class="row mt-4">
    <div class="col-md-2">
      <a class="btn btn-info" href="insert.php"> Add New Student </a><br><br>
      <!---<a class="btn btn-info" href="view.php">Student Page </a>---->
    </div>
    <div class="col-md-10">

      <h1 class="text-center text-primary"> Student List </h1>
      <br>
      <table class="table table-bordered bg-light">
        <thead class="bg-dark text-white">
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Mobile</th>
            <th>Action</th>
        </thead>
        <tbody>
          <?php
          foreach ($result as $value){
          ?>
             <tr>
               <td><?=$value['id']?></td>
               <td><?php echo $value['name']?></td>
               <td><?php echo $value['email']?></td>
               <td><?php echo $value['password']?></td>
                <td><?php echo $value['pn_number']?></td>
               <td>
                   <a class="btn btn-success" href="view.php?id=<?=$value['id'];?>"> View </a>
                  <a class="btn btn-danger" href="edit.php?id=<?=$value['id'];?>"> Edit </a>
                     <a class="btn btn-warning" onclick="return confirm('Are you sure')" href="delete.php?id=<?=$value['id'];?>"> Delete </a>

               </td>
             </tr>
              <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php
     require "header&fotter_part/footer.php";
?>
