<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "icare";

$name = $_POST['name'];
$stunum = $_POST['stud_id'];
$email = $_POST['email'];
$daytime = $_POST['time'];
$topic = $_POST['topic'];
$dept = $_POST['dept_id'];
$subj = $_POST['subj_id'];
$prof = $_POST['prof_id'];

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$stmt = $conn->prepare("insert into tutorial(name,stud_id,email,time,topic,dept_id,subj_id,prof_id) values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sisssiii",$name,$stunum,$email,$daytime,$topic,$dept,$subj,$prof);
    
    // Execute query
    $stmt->execute();
    
    echo"Successfully Submitted...";
    header("Location: /tutorial/tutorial.php");
    $stmt->close();
    $conn->close();
}

