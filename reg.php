<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "puc";

$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $dbname
);
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$fname = $_POST['fname'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$cnum = $_POST['Cnum'];
$creg = $_POST['Creg'];
$fuel = $_POST['Fuel'];
$puc = $_POST['Puc'];

$q = "INSERT INTO Details VALUES ('$fname','$contact','$email','$cnum','$creg','$fuel','$puc')";

if (mysqli_query($conn, $q)) {
    echo "Records inserted successfully.";
} else {
    echo "ERROR: Could not able to execute $q. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
