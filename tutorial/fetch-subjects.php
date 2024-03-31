<?php
include('connect.php');

if(isset($_POST['dept_id'])) {
    $dept_id = mysqli_real_escape_string($conn, $_POST['dept_id']);
   
    // Select subjects from the 'subjects' table where 'dept_id' matches the selected department id
    $sql = "SELECT * FROM subjects WHERE dept_id = '$dept_id'";
    $result = mysqli_query($conn, $sql);

    if($result) {
        $out = ''; // Start with an empty option
        // Fetch subjects and generate options
        while($row = mysqli_fetch_assoc($result)) {   
            $out .= '<option value="' . $row['subj_id'] . '">' . $row['subj_nm'] . '</option>'; 
        }
        echo $out;
    } else {
        // Handle query error
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // If 'dept_id' parameter is not set, return an error message
    echo "Error: Department ID is not set.";  
}
?>
