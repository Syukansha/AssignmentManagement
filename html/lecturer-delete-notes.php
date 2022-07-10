<?php 
    include('connectDB.php');
    $noteid = $_GET['noteid'];
    $sqldelete = "DELETE FROM notes where note_id = '$noteid'";

    $resultdelete = mysqli_query($conn,$sqldelete);

    if(isset($resultdelete)){
        echo "notes success deleted";
        header("location: lecturer-notes.php");
    }
    else{
        echo "notes failed deleted";
    }
?>