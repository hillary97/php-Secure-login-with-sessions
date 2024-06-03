
<?php
session_start();
if(isset($_SESSION['uname'])){
	echo "Welcome to our users database";
}

else{
	header("location:login.php");
}
?>
