<?php 
    include('connectDB.php');
    include('session.php');
    $lectid = $_GET['id'];
    $sqldelete = "DELETE FROM lecturer where lect_id = '$lectid'";

    $resultdelete = mysqli_query($conn,$sqldelete);

    if(isset($resultdelete)){
        echo "User success deleted";
        echo '<script>';
        echo 'alert("Successfully deleted!");';
        echo 'location="admin-lecturer.php";';
        echo '</script>';
    }
    else{
        echo "User failed deleted";
        echo '<script>';
        echo 'alert("Fail to delete");';
        echo 'location="admin-lecturer.php";';
        echo '</script>';
    }
?>