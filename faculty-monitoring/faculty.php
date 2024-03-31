<?php
session_start();

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "icare"; 


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="faculty.css">
    <link rel="icon" type="image/png" href="/images/feutech.PNG">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
    <title>iCARE</title>
</head>
<body>

    <div class="template">
        <img src="/images/dahon.JPG" alt="dahon" id="dahon">
        <img src="/images/icare.PNG" alt="icare" id="icare">
        <img src="/images/feutech.PNG" alt="feutech" id="feutech">
        <img src="/images/tams.PNG" alt="tams" id="tams">
    </div> 

    <div id="sidePanel">
        <form id="logoutForm" action="/login-staff/logout.php" method="POST">
            <button type="submit" id="logoutBtn">Logout</button>
        </form>
        <button id="facultyBtn" onclick="dash()">Dashboard</button>
        <button id="facultyBtn" onclick="consultBtn()">Service Request Form</button>
        <button id="facultyBtn" onclick="tutorBtn()">Tutorials Request Form</button>
        <button id="facultyBtn" onclick="scheduleBtn()">Faculty Schedule</button>
    </div>
    <div id="mainContent">
        <button id="menuBtn">&#9776;</button>
    </div>

    <div class="scheduleContainer">
        <h1 class="tableHeader">Faculty Monitoring</h1>

        <div class="tablebuttons">
            <button class="cpeBtn" id="cpeBtn">CPE</button>
            <button class="eeeBtn" id="eeeBtn">EEE</button>
            <button class="meBtn" id="meBtn">ME</button>
            <button class="ceBtn" id="ceBtn">CE</button>
            <button class="hscBtn" id="hscBtn">HSC</button>
            <button class="mpsBtn" id="mpsBtn">MPS</button>
            <button class="itBtn" id="itBtn">IT</button>
            <button class="csBtn" id="csBtn">CS</button>
        </div>

        <br class="breakline">

        <div class="cpeTable" id="cpeTable">
            <table class="schedule">
                <thead>
                    <tr>
                        <th>Professor Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    $sql = "SELECT prof_nm, onoff FROM professors WHERE dept_id = 1";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td id='profname'>" . $row["prof_nm"] . "</td>";
                    $statusColor = ($row["onoff"] == "ONLINE") ? "green" : "red";
                    echo "<td id='onoff' style='color: $statusColor;'>" . $row["onoff"] . "</td>";
                    echo "</tr>";
                    }
                    } else {
                    echo "<tr><td colspan='4'>No professors found</td></tr>";
                    }

                    ?>
                </tbody>
            </table>
        </div>

        <div class="eeeTable" id="eeeTable">
        <table class="schedule">
                <thead>
                    <tr>
                        <th>Professor Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    $sql = "SELECT prof_nm, onoff FROM professors WHERE dept_id = 2";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td id='profname'>" . $row["prof_nm"] . "</td>";
                    $statusColor = ($row["onoff"] == "ONLINE") ? "green" : "red";
                    echo "<td id='onoff' style='color: $statusColor;'>" . $row["onoff"] . "</td>";
                    echo "</tr>";
                    }
                    } else {
                    echo "<tr><td colspan='4'>No professors found</td></tr>";
                    }

                    ?>
                </tbody>
            </table>
        </div>

        <div class="meTable" id="meTable">
        <table class="schedule">
                <thead>
                    <tr>
                        <th>Professor Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    $sql = "SELECT prof_nm, onoff FROM professors WHERE dept_id = 3";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td id='profname'>" . $row["prof_nm"] . "</td>";
                    $statusColor = ($row["onoff"] == "ONLINE") ? "green" : "red";
                    echo "<td id='onoff' style='color: $statusColor;'>" . $row["onoff"] . "</td>";
                    echo "</tr>";
                    }
                    } else {
                    echo "<tr><td colspan='4'>No professors found</td></tr>";
                    }

                    ?>
                </tbody>
            </table>
        </div>

        <div class="ceTable" id="ceTable">
        <table class="schedule">
                <thead>
                    <tr>
                        <th>Professor Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    $sql = "SELECT prof_nm, onoff FROM professors WHERE dept_id = 4";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td id='profname'>" . $row["prof_nm"] . "</td>";
                    $statusColor = ($row["onoff"] == "ONLINE") ? "green" : "red";
                    echo "<td id='onoff' style='color: $statusColor;'>" . $row["onoff"] . "</td>";
                    echo "</tr>";
                    }
                    } else {
                    echo "<tr><td colspan='4'>No professors found</td></tr>";
                    }

                    ?>
                </tbody>
            </table>
        </div>

        <div class="hscTable" id="hscTable">
        <table class="schedule">
                <thead>
                    <tr>
                        <th>Professor Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    $sql = "SELECT prof_nm, onoff FROM professors WHERE dept_id = 5";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td id='profname'>" . $row["prof_nm"] . "</td>";
                    $statusColor = ($row["onoff"] == "ONLINE") ? "green" : "red";
                    echo "<td id='onoff' style='color: $statusColor;'>" . $row["onoff"] . "</td>";
                    echo "</tr>";
                    }
                    } else {
                    echo "<tr><td colspan='4'>No professors found</td></tr>";
                    }

                    ?>
                </tbody>
            </table>
        </div>

        <div class="mpsTable" id="mpsTable">
        <table class="schedule">
                <thead>
                    <tr>
                        <th>Professor Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    $sql = "SELECT prof_nm, onoff FROM professors WHERE dept_id = 6";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td id='profname'>" . $row["prof_nm"] . "</td>";
                    $statusColor = ($row["onoff"] == "ONLINE") ? "green" : "red";
                    echo "<td id='onoff' style='color: $statusColor;'>" . $row["onoff"] . "</td>";
                    echo "</tr>";
                    }
                    } else {
                    echo "<tr><td colspan='4'>No professors found</td></tr>";
                    }

                    ?>
                </tbody>
            </table>
        </div>

        <div class="itTable" id="itTable">
        <table class="schedule">
                <thead>
                    <tr>
                        <th>Professor Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    $sql = "SELECT prof_nm, onoff FROM professors WHERE dept_id = 7";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td id='profname'>" . $row["prof_nm"] . "</td>";
                    $statusColor = ($row["onoff"] == "ONLINE") ? "green" : "red";
                    echo "<td id='onoff' style='color: $statusColor;'>" . $row["onoff"] . "</td>";
                    echo "</tr>";
                    }
                    } else {
                    echo "<tr><td colspan='4'>No professors found</td></tr>";
                    }

                    ?>
                </tbody>
            </table>
        </div>

        <div class="csTable" id="csTable">
        <table class="schedule">
                <thead>
                    <tr>
                        <th>Professor Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    $sql = "SELECT prof_nm, onoff FROM professors WHERE dept_id = 8";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td id='profname'>" . $row["prof_nm"] . "</td>";
                    $statusColor = ($row["onoff"] == "ONLINE") ? "green" : "red";
                    echo "<td id='onoff' style='color: $statusColor;'>" . $row["onoff"] . "</td>";
                    echo "</tr>";
                    }
                    } else {
                    echo "<tr><td colspan='4'>No professors found</td></tr>";
                    }

                    ?>
                </tbody>
            </table>
        </div>

    <script src="faculty.js"></script>
</body>
</html>
