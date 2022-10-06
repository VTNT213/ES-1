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

$contact = $_POST['mnum'];
$cnum = $_POST['cnum'];

$q = "SELECT * FROM details WHERE Contact = '$contact' AND Cnum = '$cnum'";

$result = mysqli_query($conn, $q);

if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Login Successful!')</script>
    <script>window.location.href='index.html'</script>";
} else {
    echo "<script>alert('Login Failed!')</script>
    <script>window.location.href='register.html'</script>";
}
