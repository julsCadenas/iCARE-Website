<?php
session_start();

if(isset($_SESSION['prof_id'])) {
    $prof_id = $_SESSION['prof_id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "icare";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $update_sql = "UPDATE professors SET onoff = 'OFFLINE' WHERE prof_id = ?";
    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->bind_param("i", $prof_id);
    $update_stmt->execute();

    $update_stmt->close();
    $conn->close();

    unset($_SESSION['prof_id']);
    session_destroy();
}

header("Location: login-staff.php");
exit();
?>

