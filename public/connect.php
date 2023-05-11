<?php

$con = new mysqli('localhost', 'root', '', 'elcarecrud');

if (!$con) {
    die(mysqli_error($con));
}
