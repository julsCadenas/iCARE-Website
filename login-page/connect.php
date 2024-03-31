<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "icare";

$timeout_period = 20; 


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();

    if (!isset($_SESSION['login_attempts'])) {
        $_SESSION['login_attempts'] = 1;
        $_SESSION['last_login_attempt_time'] = time();
    } else {
        $_SESSION['login_attempts']++;
    }
    if ($_SESSION['login_attempts'] > 2) {
        if (time() - $_SESSION['last_login_attempt_time'] > $timeout_period) {
            $_SESSION['login_attempts'] = 1;
            $_SESSION['last_login_attempt_time'] = time();
        } else {
            echo "<script>alert('Maximum login attempts reached. Please try again later (20 seconds).')</script>";
            exit();
        }
    }
    
    $student_number = $_POST['stud_id'];
    $password = $_POST['pass'];
    
    $hashed_password = hash("sha256", $password);
    $sql = "SELECT * FROM student_accounts WHERE stud_id = ? AND pass = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $student_number, $hashed_password);
    
    $stmt->execute();
    
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    
        $_SESSION['student_number'] = $student_number;
        $_SESSION['stud_nm'] = $row['stud_nm'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['login_attempts'] = 0; 
        $_SESSION['last_login_attempt_time'] = time(); 
        header("Location: /dashboard/dashboard.php");
        exit();
    } else {
        // echo "<script>alert('Hashed Password: " . $hashed_password . "');</script>";
        header("Location: /login-page/login.php?error=Invalid student number or password.");
        exit();
    }
}
?>
