<?php
   include('connectDB.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select admin_name from admin where admin_name = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['admin_name'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>