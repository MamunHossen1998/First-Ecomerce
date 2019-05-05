<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="py-5">
          <a class="btn btn-info" href="index.php"> student list </a>
        </div>
        <div class="col-lg-6 m-auto">

        <div class="">
          <div class="text-center py-4">
            <h2 class="btn btn-danger "> Insert form </h2>
          </div>
          <form class="p-3 mb-2 bg-success text-white"action="store.php" method="post">

            <div class="py-3">
              <label for=""> Name </label>
              <input required type="text" name="fname" class="form-control" placeholder="Enter the name">
            </div>

            <div class="py-3">
              <label for=""> Email </label>
              <input required type="email" name="email" class="form-control" placeholder="Enter the email">
            </div>
            <div class="py-3">
              <label for=""> Password </label>
              <input type="password" name="password" class="form-control" placeholder="Enter the password">
            </div>
            <div class="py-3">
              <label for=""> Mobile </label>
              <input type="number" name="pn_number" class="form-control" placeholder="Enter the Pn_number">
            </div>
            <div class="py-2">
              <button type="submit"class="d-inline  p-2 bg-primary text-white"  class="form-control"  name="submit"> submit </button>
            </div>
          </form>

        </div>

      </div>
      </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
