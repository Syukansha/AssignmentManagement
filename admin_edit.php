<!DOCTYPE html>
<html lang="en">
<?php
    include('connectDB.php');
    include('session.php');
    if(!isset($_SESSION['login_user'])){
    header('location:login.php');
}
$sql = "select admin_name, admin_phone, admin_email, password from admin where admin_id = $user_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$adminname = $_POST['adminName'];
$adminemail = $_POST['adminEmail'];
$adminphone = $_POST['adminPhone'];
$password = $_POST['adminPass'];

$conn->close();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
</head>
<body>
     
    <section id="sidebar">
        <ul>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="student.php">Student</a></li>
            <li><a href="lecturer.php">Lecturer</a></li>
        </ul>
    </section>
    <form id="myform" method="POST" >
        <h3>Update Admin</h3>
        <table>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="adminName" id="adminName" placeholder="<?php echo $row['admin_name'];?>"></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text" name="adminEmail" id="adminEmail" placeholder="<?php echo $row['admin_email'];?>"></td>
            </tr>
            <tr>
                <td>Phone: </td>
                <td><input type="text" name="adminPhone" id="adminPhone" placeholder="<?php echo $row['admin_phone'];?>"></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="adminPass" id="adminPass"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" id="submit"></td>
            </tr>
                
            
        </table>
    </form>
    
</body>
</html>
