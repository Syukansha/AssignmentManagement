<?php 
    include('connectDB.php');
    include('session.php');
    $studentID = $_GET['id'];
    $sqldelete = "DELETE FROM students where student_id = '$studentID'";

    $resultdelete = mysqli_query($conn,$sqldelete);

    if(isset($resultdelete)){
        echo "User success deleted";
        header("location: admin-student.php");
    }
    else{
        echo "User failed deleted";
    }
?>