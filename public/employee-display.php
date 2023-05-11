<?php
include 'connect.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>BOOKING LIST</title>
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <!-- <a href="user.php" class="text-light">Add Booking</a> -->
            <a href="employee-login.php" class="text-light">Log Out</a>
        </button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Booking List</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Service Booked</th>
                    <th scope="col">Team Member Booked</th>
                    <th scope="col">Date & Time Booked</th>
                    <!-- <th scope="col">Operations</th> -->
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "Select * from `crud`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['Id'];
                        $name = $row['Name'];
                        $email = $row['Email'];
                        $phone = $row['Phone'];
                        $address = $row['Address'];
                        $bookservice = $row['bookService'];
                        $bookmember = $row['bookMember'];
                        $eventDT = $row['eventdt'];
                        echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $name . '</td>
                        <td>' . $email . '</td>
                        <td>' . $phone . '</td>
                        <td>' . $address . '</td>
                        <td>' . $bookservice . '</td>
                        <td>' . $bookmember . '</td>
                        <td>' . $eventDT . '</td>
                        <td>
</td>
                    </tr>';
                    }
                }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>