<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="consult-staff.css">
    <link rel="icon" type="image/png" href="/images/feutech.PNG">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
    <title>iCARE</title>
</head>
<body>

    <div class="template">
        <img src="/images/tams.PNG" alt="tams" id="tams">
        <img src="/images/dahon.JPG" alt="dahon" id="dahon">
        <img src="/images/icare.PNG" alt="icare" id="icare">
        <img src="/images/feutech.PNG" alt="feutech" id="feutech">
    </div> 

    <div id="sidePanel">
        <form id="logoutForm" action="/login-staff/logout.php" method="POST">
            <button type="submit" id="logoutBtn">Logout</button>
        </form>
        <button id="facultyBtn" onclick="dash()">Dashboard</button>
        <button id="facultyBtn" onclick="tutBtn()">Tutorial Requests Form</button>
        <button id="facultyBtn" onclick="facultyBtn()">Faculty Monitoring</button>
        <button id="facultyBtn" onclick="scheduleBtn()">Faculty Schedule</button>
    </div>

    <div id="mainContent">
        <button id="menuBtn">&#9776;</button>
    </div>

    <div class="responseContainer">
        <h1 id="tableHeader">Service Request Form 

        <div class="tablebuttons">
            <button class="sucBtn" id="sucBtn">SUCCESSFUL</button>
            <button class="unsucBtn" id="unsucBtn">UNSUCCESSFUL</button>
            <button class="unclassBtn" id="unclassBtn">UNCLASSIFIED</button>
        </div>

        <br class="breakline">
        </h1>

        <div class="sucTable" id="sucTable">

            <table class="responses">
                <thead>
                    <tr>
                        <th>Time</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Student #</th>
                        <th>Service</th>
                        <th>Subject</th>
                        <th>Faculty</th>
                        <th>Professor</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $conn = mysqli_connect("localhost", "root", "", "icare");
                        if ($conn->connect_error) {
                            die("Connection Failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT c.time, c.stud_nm, c.email, c.stud_id, c.descript, s.subj_nm, d.dept_nm, p.prof_nm, c.remarks FROM consult c JOIN departments d ON c.dept_id = d.dept_id JOIN professors p ON c.prof_id = p.prof_id JOIN subjects s ON c.subj_id = s.subj_id WHERE c.remarks='Successful';";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<th>".$row["time"]."</th>";
                                echo "<th>".$row["stud_nm"]."</th>";   
                                echo "<th>".$row["email"]."</th>";
                                echo "<th>".$row["stud_id"]."</th>";
                                echo "<th>".$row["descript"]."</th>";
                                echo "<th>".$row["subj_nm"]."</th>";
                                echo "<th>".$row["dept_nm"]."</th>";
                                echo "<th>".$row["prof_nm"]."</th>";
                                echo "<th>";
                                echo "<form action='table-update.php' method='POST' >";
                                echo "<select name='remarks[".$row['time']."]'>";
                                echo "<option value='' ".($row["remarks"] == '' ? 'selected' : '')."></option>";
                                echo "<option value='Successful'" . ($row["remarks"] == 'Successful' ? ' selected' : '') . ">Successful</option>";
                                echo "<option value='Unsuccessful'" . ($row["remarks"] == 'Unsuccessful' ? ' selected' : '') . ">Unsuccessful</option>";
                                echo "</select>";
                                echo "<input type='hidden' name='time' value='".$row['time']."'>";
                                echo "<button onclick='submitForm(this)' type='submit' class='submitBtn'>submit</button>";
                                echo "</form>";
                                echo "</th>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } else {
                         
                        }
                    ?>
                </tbody>
            </table>

        </div>

        <div class="unsucTable" id="unsucTable">

            <table class="responses">
                <thead>
                    <tr>
                        <th>Time</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Student #</th>
                        <th>Service</th>
                        <th>Subject</th>
                        <th>Faculty</th>
                        <th>Professor</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $conn = mysqli_connect("localhost", "root", "", "icare");
                        if ($conn->connect_error) {
                            die("Connection Failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT c.time, c.stud_nm, c.email, c.stud_id, c.descript, s.subj_nm, d.dept_nm, p.prof_nm, c.remarks FROM consult c JOIN departments d ON c.dept_id = d.dept_id JOIN professors p ON c.prof_id = p.prof_id JOIN subjects s ON c.subj_id = s.subj_id WHERE c.remarks='Unsuccessful';";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<th>".$row["time"]."</th>";
                                echo "<th>".$row["stud_nm"]."</th>";   
                                echo "<th>".$row["email"]."</th>";
                                echo "<th>".$row["stud_id"]."</th>";
                                echo "<th>".$row["descript"]."</th>";
                                echo "<th>".$row["subj_nm"]."</th>";
                                echo "<th>".$row["dept_nm"]."</th>";
                                echo "<th>".$row["prof_nm"]."</th>";
                                echo "<th>";
                                echo "<form action='table-update.php' method='POST' >";
                                echo "<select name='remarks[".$row['time']."]'>";
                                echo "<option value='' ".($row["remarks"] == '' ? 'selected' : '')."></option>";
                                echo "<option value='Successful'" . ($row["remarks"] == 'Successful' ? ' selected' : '') . ">Successful</option>";
                                echo "<option value='Unsuccessful'" . ($row["remarks"] == 'Unsuccessful' ? ' selected' : '') . ">Unsuccessful</option>";
                                echo "</select>";
                                echo "<input type='hidden' name='time' value='".$row['time']."'>";
                                echo "<button onclick='submitForm(this)' type='submit' class='submitBtn'>Submit Remarks</button>";
                                echo "</form>";
                                echo "</th>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } else {
                            
                        }
                    ?>
                </tbody>
            </table>

        </div>

        <div class="unclassTable" id="unclassTable">    

            <table class="responses">
                <thead>
                    <tr>
                        <th>Time</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Student #</th>
                        <th>Service</th>
                        <th>Subject</th>
                        <th>Faculty</th>
                        <th>Professor</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $conn = mysqli_connect("localhost", "root", "", "icare");
                        if ($conn->connect_error) {
                            die("Connection Failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT c.time, c.stud_nm, c.email, c.stud_id, c.descript, s.subj_nm, d.dept_nm, p.prof_nm, c.remarks FROM consult c JOIN departments d ON c.dept_id = d.dept_id JOIN professors p ON c.prof_id = p.prof_id JOIN subjects s ON c.subj_id = s.subj_id WHERE c.remarks=' ';";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<th>".$row["time"]."</th>";
                                echo "<th>".$row["stud_nm"]."</th>";   
                                echo "<th>".$row["email"]."</th>";
                                echo "<th>".$row["stud_id"]."</th>";
                                echo "<th>".$row["descript"]."</th>";
                                echo "<th>".$row["subj_nm"]."</th>";
                                echo "<th>".$row["dept_nm"]."</th>";
                                echo "<th>".$row["prof_nm"]."</th>";
                                echo "<th>";
                                echo "<form action='table-update.php' method='POST' >";
                                echo "<select name='remarks[".$row['time']."]'>";
                                echo "<option value='' ".($row["remarks"] == '' ? 'selected' : '')."></option>";
                                echo "<option value='Successful'" . ($row["remarks"] == 'Successful' ? ' selected' : '') . ">Successful</option>";
                                echo "<option value='Unsuccessful'" . ($row["remarks"] == 'Unsuccessful' ? ' selected' : '') . ">Unsuccessful</option>";
                                echo "</select>";
                                echo "<input type='hidden' name='time' value='".$row['time']."'>";
                                echo "<button onclick='submitForm(this)' type='submit' class='submitBtn'>Submit Remarks</button>";
                                echo "</form>";
                                echo "</th>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } else {
                           
                        }
                    ?>
                </tbody>
            </table>

        </div>

    </div>

    <script src="consult-staff.js"></script>
</body>
</html>
