<?php
    session_start();

    if(isset($_SESSION['student_number'])) {

        $student_number = $_SESSION['student_number'];
        $stud_nm = $_SESSION['stud_nm'];
        $email = $_SESSION['email'];
    } else {

        echo "Session variable not set.";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tutorial.css">
    <link rel="icon" type="image/png" href="/images/feutech.PNG">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>iCARE</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>
<body>
<?php
    include('connect.php');
?>
    <div class="template">
        <img src="/images/tams.PNG" alt="tams" id="tams">
        <img src="/images/dahon.JPG" alt="dahon" id="dahon">
        <img src="/images/icare.PNG" alt="icare" id="icare">
        <img src="/images/feutech.PNG" alt="feutech" id="feutech">
    </div>

    <div class="book">
        <h1>Book a Tutorial</h1>
    </div>
    
    <div class="urinfo">
        <h2>Your Information</h2>
    </div>

    <div class="prof">
        <h2>Tutor Information</h2>
    </div>

    <form action="connect_cons.php" method="post"> 
    
        <button class="backBtn" onclick="back(event)"><</button>

        <div class="studentInfo">
            <input type="text" name="name" id="studentname" placeholder="Student Name" value="<?php echo isset($_SESSION['stud_nm']) ? $_SESSION['stud_nm'] : ''; ?>">
            <input type="text" name="stud_id" id="studentid" placeholder="Student ID" value="<?php echo isset($_SESSION['student_number']) ? $_SESSION['student_number'] : ''; ?>">
            <input type="text" name="email" id="email" placeholder="Email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>">
            <input class="form-control" type="datetime-local" name="time" id="day" placeholder="Desired Date & Time">
        </div> 

        <div class="facultyInfo">

            <input type="text" name="topic" id="name" placeholder="Topic">
            
            <select name="dept_id" id="first">
                <option value="">Department</option>

                <?php $sql = "SELECT * FROM departments";
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($result)) {?>
                    <option value="<?php echo $row['dept_id'] ?>"><?php echo $row['dept_nm'] ?></option>
                <?php }?>

            </select>
            <select name="subj_id" id="second">
                <option value="">Course</option>
            </select>
            <select name="prof_id" id="third">
                <option value="">Instructor</option>
            </select>

        </div>

        <div class="submitBtn">
            <button type="submit">Submit</button>
        </div>

    </form>

    <script src="tutorial.js"></script>

    <script>
        
        config = {
            enableTime:true,
            enableSeconds: true,
            dateFormat: "Y-m-d H:i:S",
            altInput: true,
            altFormat: "F j, Y (h:i:S K)"
        }

        flatpickr("#input[type=datetime-local]",config);

        $(document).ready(function(){
            $('#first').change(function(){
                var deptID = $(this).val();
                
                $.ajax({
                    type: 'POST',
                    url: 'fetch.php',
                    data: {id: deptID},
                    success: function(data) {
                        $('#third').html(data); // Populate professors
                        
                        // Fetch subjects based on selected department
                        $.ajax({
                            type: 'POST',
                            url: 'fetch-subjects.php',
                            data: {dept_id: deptID},
                            success: function(data) {
                                $('#second').html(data); // Populate subjects
                            }
                        });
                    }
                });
            });
        });

         var selectedDept = $('#first').val();
         if (selectedDept) {
            $('#first').trigger('change');
         }

         function back(event){
            event.preventDefault();
            window.open("/dashboard/dashboard.php","_self");
        }

    </script>    

</body>
</html>