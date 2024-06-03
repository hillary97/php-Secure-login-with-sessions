<?php
session_start();

if(!isset($_SESSION["kama"]) || $_SESSION["kama"] != true )
{
	$_SESSION['status']="login first";
	header("location:login.php");
	die();
}
else{

}
?>