<?php
session_start();
include_once 'connect.php';

if(!isset($_SESSION['user'])) {
 header("Location: UserLogin.php");
}

$result=mysql_query("SELECT * FROM user WHERE userID=".$_SESSION['user']);
$userresult=mysql_fetch_array($result);
?>

<?php
session_start();
$databasename = "Cheapomail";
$host = "localhost";
$user = "admin";
$password = "";

$connection =  @mysql_connect($host,user,$password,$databasename)
OR die ("connection failed".mysqli_connect_error());

$id = $_SESSION["id"];
$query = "SELECT * FROM message WHERE recipientID = '$id' ORDER BY id DESC LIMIT 10";
$database = mysql_select_db($databasename,$connection);
$rows = mysql_query($query);
?>

<?php
session_start();

if(!isset($_SESSION['user']))
{
 header("Location: UserLogin.html");
}
else if(isset($_SESSION['user'])!="")
{
 header("Location: Homepage.html");
}

if(isset($_GET['logout']))
{
 session_destroy();
 unset($_SESSION['user']);
 header("Location: UserLogin.html");
}
?>