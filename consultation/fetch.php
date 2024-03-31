<?php
include('connect.php');

if(isset($_POST['id'])) {
    $dept_id = mysqli_real_escape_string($conn, $_POST['id']);
    
    $sql = "SELECT * FROM professors WHERE dept_id = '$dept_id'";
    $result = mysqli_query($conn, $sql);

    if($result) {
        $out = '';
        while($row = mysqli_fetch_assoc($result)) {   
            $out .= '<option value="' . $row['prof_id'] . '">' . $row['prof_nm'] . '</option>'; 
        }
        echo $out;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Error: Department ID is not set.";
}
?>
