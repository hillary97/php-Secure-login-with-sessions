<?php


$jina="kaman";
$mail="hillarynthome97@gmail.com";

session_start();

if(isset($_SESSION['uname'])){
echo "<h1>". $_SESSION['uname']."</h1>";

echo "<a href='user.php'>Go to user</a>";

echo "<br>";
echo "<a href='logout.php'>logout</a>";
}
else {
	if($_POST['name']==$jina && $_POST['email'] == $mail){
		$_SESSION['uname']=$jina;
		header("location:code.php");
	}
	else{
		echo "username or password incorrect";
		//echo "<script>location.href='login.php'</script>";
	}

	}

?>
