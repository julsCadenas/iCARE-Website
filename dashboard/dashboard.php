<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dash-style.css">
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
        <img src="/images/tams.PNG" alt="tams" id="tams">
        <img src="/images/feutech.PNG" alt="feutech" id="feutech">
    </div> 

    <div id="sidePanel">
        <form id="logoutForm" action="/login-page/logout.php" method="POST">
            <button type="submit" id="logoutBtn">Logout</button>
        </form>
    </div>

    <div id="mainContent">
        <button id="menuBtn">&#9776;</button>
    </div>

    <div class="buttons">
        <button class="monitorButton" onclick="facultyBtn()">Faculty Monitoring</button>
        <button class="appointmentButton" onclick="tutorial()">Schedule a Tutorial</button>
        <button class="consultationButton" onclick="consult()">Schedule a Consultation</button>
        <button class="aboutButton" onclick="about()">About Us</button>
    </div>

    <script src="dash-script.js"></script>
</body>
</html>