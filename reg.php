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

$fname = $_POST['flname'];
$contact = $_POST['mnum'];
$email = $_POST['mail'];
$cnum = $_POST['cnum0'];
$creg = $_POST['creg'];
$fuel = $_POST['fuel'];
$puc = $_POST['puc'];

$q = "INSERT INTO details VALUES ('$fname','$contact','$email','$cnum','$creg','$fuel','$puc')";

if (mysqli_query($conn, $q)) {
    echo "<script>alert('Details Submitted Successfully!')</script>
    <script>window.location.href='register.html'</script>";
} else {
    echo "ERROR: Could not able to execute $q. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
