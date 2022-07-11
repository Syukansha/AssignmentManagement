<?php
// connect to the database


// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    $id = $_POST['assignment-id'];
    $name = $_POST['assignment-name'];
    $instruction = $_POST['assignment-instruction'];
    $code = $_POST['code'];
    $date = date('Y-m-d');
    $student = $user_id;
    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx','pptx', 'py'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 10000000000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO submission(sub_name, size,class_code,sub_date,assignment_id,student_id) VALUES ('$filename', '$size','$code','$date','$id','$student')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
                header("location: student-class.php");
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}


?>