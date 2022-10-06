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

$cnum = $_POST['cnum'];

$q = "SELECT * FROM details WHERE Cnum = '$cnum'";

//show all details
echo "<table border='1'>";
echo "<tr><td>Full Name</td><td>Contact</td><td>Email</td><td>Car Number</td><td>Car Registration</td><td>Fuel</td><td>PUC Validity Date</td></tr>";
$result = mysqli_query($conn, $q);

while ($row = mysqli_fetch_array($result)) {
    echo "<tr><td>" . $row['Fname'] . "</td>";
    echo "<td>" . $row['Contact'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
    echo "<td>" . $row['Cnum'] . "</td>";
    echo "<td>" . $row['Creg'] . "</td>";
    echo "<td>" . $row['Fuel'] . "</td>";
    echo "<td>" . $row['puc'] . "</td></tr>";
}
echo "</table>";

// Close connection
mysqli_close($conn);
