<?php 
    include('connectDB.php');
    include('session.php');
    $studentID = $_GET['id'];
    $sqldelete = "DELETE FROM students where student_id = '$studentID'";

    $resultdelete = mysqli_query($conn,$sqldelete);

    if(isset($resultdelete)){
        echo "User success deleted";
        echo '<script>';
        echo 'alert("Successfully deleted!");';
        echo 'location="admin-student.php";';
        echo '</script>';
    }
    else{
        echo "User failed deleted";
        echo '<script>';
        echo 'alert("Fail to delete!");';
        echo 'location="admin-student.php";';
        echo '</script>';
    }
?>