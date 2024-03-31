<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "icare";
$studname = $_POST['stud_nm'];
$studentid = $_POST['stud_id'];
$email = $_POST['email'];
$descript = $_POST['descript'];
$dept_id = $_POST['dept_id'];
$subject_id = $_POST['subj_id'];
$prof_id = $_POST['prof_id'];
$time = $_POST['time'];

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$stmt = $conn->prepare("insert into consult(stud_nm,stud_id,email,descript,dept_id,subj_id,prof_id,time) values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sissiiis",$studname, $studentid, $email, $descript, $dept_id,$subject_id,$prof_id, $time);
    
    // Execute query
    $stmt->execute();
    
    echo"Successfully Submitted...";
    header("Location: /consultation/consultation.php");
    $stmt->close();
    $conn->close();
}

