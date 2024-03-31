<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['remarks']) && is_array($_POST['remarks'])) {
        $conn = mysqli_connect("localhost", "root", "", "icare");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        foreach ($_POST['remarks'] as $time => $remarksValue) {
            // Use the current key-value pair from $_POST['remarks']
            $time = mysqli_real_escape_string($conn, $time);
            $remarksValue = mysqli_real_escape_string($conn, $remarksValue);
            $sql = "UPDATE tutorial SET remarks='$remarksValue' WHERE time='$time'";
            if (!mysqli_query($conn, $sql)) {
                echo "Error updating remarks: " . mysqli_error($conn);
            }
        }

        mysqli_close($conn);
        echo "Remarks updated successfully.";
        header("Location: /tutor-staff/tut-staff.php");
    } else {
        echo "No remarks data submitted.";
    }
}

?>
