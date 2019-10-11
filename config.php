<?php
   include('dbconnect.php');
   session_start();

   // Store Session Data
   $_SESSION['login_user']= $username;  // Initializing Session with value of PHP Variable

   if(isset($_SESSION['login_user'])){
   $user_check = $_SESSION['login_user'];
   $ses_sql = mysqli_query($conn,"select email from user_info where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   }
?>