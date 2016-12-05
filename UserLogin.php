<?php
session_start();
include_once 'connect.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: Homepage.html");
}
if(isset($_POST['LOGIN']))
{
 $username = mysql_real_escape_string($_POST['username']);
 $password = mysql_real_escape_string($_POST['password']);

 $result=mysql_query("SELECT * FROM user WHERE username='$username'");
 $row=mysql_fetch_array($result);
 if($row['password']==md5($password))
 {
  $_SESSION['user'] = $row['user_id'];
  header("Location: Homepage.html");
 }
 else
 {
  ?>
        <script>alert('Invalid Information');</script>
        <?php
 }
 
}
?>