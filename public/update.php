<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "Select * from `crud` where Id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['Name'];
$email = $row['Email'];
$phone = $row['Phone'];
$address = $row['Address'];
$bookservice = $row['bookService'];
$bookmember = $row['bookMember'];
$eventDT = $row['eventdt'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $bookservice = $_POST['bookService'];
    $bookmember = $_POST['bookMember'];
    $eventDT = $_POST['eventdt'];

    $sql = "update `crud` set Id=$id,Name='$name',Email='$email',Phone='$phone',Address='$address',bookService='$bookservice',bookMember='$bookmember',eventdt='$eventDT' where Id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        //echo "Updated successfully";
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
                <input type="text" class="form-control" placeholder="Enter your Name" name="name" autocomplete="off" value=<?php echo $name; ?>>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your Email" name="email" autocomplete="off" value=<?php echo $email; ?>>
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="Enter your Phone Number" name="phone" autocomplete="off" value=<?php echo $phone; ?>>
            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Enter your Address" name="address" autocomplete="off" value=<?php echo $address; ?>>
            </div>

            <div class="form-group">
                <label>Book Service</label>
                <input type="text" class="form-control" placeholder="(1,2,3,4)" name="bookService" autocomplete="off" value=<?php echo $bookservice; ?>>
            </div>

            <div class="form-group">
                <label>Book Member</label>
                <input type="text" class="form-control" placeholder="(Ana, Gary, Rachel, James)" name="bookMember" autocomplete="off" value=<?php echo $bookmember; ?>>
            </div>

            <div class="form-group">
                <label>Date & Time</label>
                <input type="datetime-local" class="form-control" placeholder="Choose Youre Date and Time" name="eventdt" autocomplete="off" value=<?php echo $eventDT; ?>>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>