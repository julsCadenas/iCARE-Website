<!DOCTYPE html>
<html lang="en">
<head>
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="icon" type="image/png" href="/images/feutech.PNG">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script type="text/javascript">
        function preventBack(){window.history.forward()}; 
        selTimeout("preventBack()", 0);
        window.onunload=function(){null;}
    </script>
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

    <button class="backBtn" onclick="back()"><</button>

    <form action="connect.php" method="post" onsubmit="return validateForm()">

        <div class="loginFrame">
    
            <h1 class="text">Welcome to iCare</h1>

            <?php if (isset($_GET['error'])) {?>
                <div style="text-align: center; margin-top: 10px; color: red;">Invalid Student Number or Password</div>
            <?php } ?>

            <div class="input-box">
                <input type="text" id="studentnumber" name="stud_id" placeholder="Student Number" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="password" id="password" name="pass" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>  

            <button type="submit" class="btn">Login</button>

        </div>

    </form>
     
    <script src="loginscript.js"></script>
</body>
</html>
