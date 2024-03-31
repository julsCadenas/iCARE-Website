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
        // Maximum attempts reached, check if timeout has expired
        if (time() - $_SESSION['last_login_attempt_time'] > $timeout_period) {
            $_SESSION['login_attempts'] = 1;
            $_SESSION['last_login_attempt_time'] = time();
        } else {
            // Timeout period hasn't expired yet, redirect with an error message
            echo "<script>alert('Maximum login attempts reached. Please try again later (20 seconds).')</script>";
            exit();
        }
    }

    $staff_number = $_POST['staff_id'];
    $password = $_POST['pass'];
    
    $hashed_password = hash("sha256", $password);

    $sql = "SELECT * FROM staff_accounts WHERE staff_id = ? AND pass = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $staff_number, $hashed_password);
    
    $stmt->execute();
    
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
        $prof_id = $row['staff_id'];
        
        session_start();
        $_SESSION['prof_id'] = $prof_id;
        
        $update_sql = "UPDATE professors SET onoff = 'ONLINE' WHERE prof_id = ?";
        
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("i", $prof_id);
        
        $update_stmt->execute();

        $_SESSION['login_attempts'] = 0; // Reset login attempts on successful login
        $_SESSION['last_login_attempt_time'] = time();
        header("Location: /dashboard-staff/dash-staff.php"); 
        exit();
    } else {
        // echo "<script>alert('Hashed Password: " . $truncatedHash . "');</script>";
        header("Location: login-staff.php?error=Invalid student number or password."); 
        exit();
    }
}
?>
