<?php
include 'connect.php';
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];

  $sql = "insert into `crud`(Name,Email,Phone,Address) values('$name','$email','$phone','$address')";
  $result = mysqli_query($con, $sql);
  if ($result) {
    // echo "Data inserted successfully";
    header('location:display.php');
  } else {
    die(mysqli_error($con));
  }
}
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

  <title>CRUD Operation</title>
</head>

<body>
  <div class="container my-5">
    <form method="POST">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" placeholder="Enter your Name" name="name" autocomplete="off">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Enter your Email" name="email" autocomplete="off">
      </div>

      <div class="form-group">
        <label>Phone</label>
        <input type="text" class="form-control" placeholder="Enter your Phone Number" name="phone" autocomplete="off">
      </div>

      <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" placeholder="Enter your Address" name="address" autocomplete="off">
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

</html>