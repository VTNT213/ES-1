<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table1 {
            border: 1px solid black !important;
            border-collapse: collapse !important;
            width: 65% !important;
            margin: auto !important;
            padding: 2% !important;
            background-color: silver !important;
        }

        .detail {
            font-size: 20px;
            border-collapse: collapse;
            width: 80%;
            margin: auto;

        }

        .brdr {
            margin: auto;
            margin-top: 80px;
            backdrop-filter: blur(20px);
            padding-bottom: 10px;
        }

        .t1 {
            text-align: right;
            padding: 10px !important;
        }

        .flow {
            width: 300px;
            align-items: center !important;
            overflow: hidden;

        }

        .certi {

            border: 1px solid black !important;
            border-collapse: collapse !important;
            width: 65% !important;
            margin: auto !important;
            padding: 2% !important;
        }

        .f1 {
            text-align: center;
            border: 1px solid black !important;
            padding: 1%;

        }

        .title {
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 22px;
            border-radius: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="style.css">

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <nav>
        <div class="nav-bar">
            <div class="titlelogo">
                <i class='bx bx-menu sidebarOpen'></i>
                <span class="logo navLogo"><a href="index.html">Emission Care</a></span>
            </div>

            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="index.html">Emission Care</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="register.html">Registration</a></li>
                    <li><a href="about.html">About</a></li>
                </ul>
            </div>

            <div class="darkLight-searchBox">
                <div class="dark-light">
                    <i class='bx bx-circle-half half'></i>
                    <i class='bx bx-brightness bright'></i>
                </div>

                <div class="searchBox">
                    <div class="searchToggle">
                        <i class='bx bx-x cancel'></i>
                        <i class='bx bx-search search'></i>
                    </div>

                    <div class="search-field">
                        <input type="text" placeholder="Search...">
                        <i class='bx bx-search'></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class='table1'>
        <a href="index.html"><button class="btn">Back</button></a>


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
        $result = mysqli_query($conn, $q);

        //show all details
        echo "<p class='title'>| User Datails |</p>";
        echo "<table class='detail'>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr class='row1'><th class='t1'>Full Name:</th><td>&nbsp;</td><td>" . $row['Fname'] . "</td></tr>";
            echo "<tr class='row1'><th class='t1'>Contact:</th><td></td><td>" . $row['Contact'] . "</td></tr>";
            echo "<tr class='row1'><th class='t1'>Email:</th><td></td><td>" . $row['Email'] . "</td></tr>";
            echo "<tr class='row1'><th class='t1'>Car Number:</th><td></td><td>" . $row['Cnum'] . "</td></tr>";
            echo "<tr class='row1'><th class='t1'>Car Registration:</th><td></td><td>" . $row['Creg'] . "</td></tr>";
            echo "<tr class='row1'><th class='t1'>Fuel:</th><td></td><td>" . $row['Fuel'] . "</td></tr>";
            echo "<tr class='row1'><th class='t1'>PUC Validity Date:</th><td></td><td>" . $row['puc'] . "</td></tr>";
        }

        echo "</table>";
        echo "<hr>";

        // Close connection
        mysqli_close($conn);

        ?>
        <table class="brdr" border=1>
            <tr>
                <th class='f1'>Vehicle Type</th>
                <th class='f1'>Percentage of CO</th>
                <th class='f1'>Hydrocarbon measured in ppm</th>
            </tr>
            <tr>
                <td class="flow f1">2 and 3 wheeled vehicles (2 or 4 stroke) that are manufactured on or before 31st March 2000</td>
                <td class='f1'>4.5</td>
                <td class='f1'>9000</td>
            </tr>
            <tr>
                <td class="flow f1">2 and 3 wheeled vehicles (2 stroke) that are manufactured after 31st March 2000</td>
                <td class='f1'>3.5</td>
                <td class='f1'>6000</td>
            </tr>
            <tr>
                <td class="flow f1">2 and 3 wheeled vehicles (4 stroke) that are manufactured after 31st March 2000</td>
                <td class='f1'>3.5</td>
                <td class='f1'>4500</td>
            </tr>
            <tr>
                <td class="flow f1">4 wheeled vehicles that are manufactured as per the Pre Bharat Stage II Norms</td>
                <td class='f1'>3</td>
                <td class='f1'>1500</td>
            </tr>
            <tr>
                <td class="flow f1">4 wheeled vehicles that are manufactured as per the Pre Bharat Stage II, Stage III or subsequent Norms</td>
                <td class='f1'>0.5</td>
                <td class='f1'>750</td>
            </tr>
        </table>

    </div>
</body>

</html>