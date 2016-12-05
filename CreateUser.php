<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: Homepage.html");
}
include_once 'connect.php';

if(isset($_POST['CREATE NEW USER']))
{
 $firstname = mysql_real_escape_string($_POST['firstname']);
 $lastname = mysql_real_escape_string($_POST['lastname']);
 $username = mysql_real_escape_string($_POST['username'])
 $password = md5(mysql_real_escape_string($_POST['password']));
 
	 if(mysql_query("INSERT INTO user (firstname, lastname, username, password) VALUES('$firstname','$lastname','$username', $password)"))
	 {
	  ?>
	        <script>alert(' Registration successful.');</script>
	        <?php
	 }
	 else
	 {
	  ?>
	        <script>alert('There was an error while registering user.');</script>
	        <?php
	 }
	}
	?>