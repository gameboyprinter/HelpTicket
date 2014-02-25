<?
	session_start();

	require("conf.php");
	$pass = $_POST['pass'];

	$md5 = md5($pass);

	$_SESSION['login'] = "f";

	if($md5 == ADMINPASS){
		$_SESSION['login'] = "t";
		echo "Logged in";
	}else{
		die("Incorrect password<br><a href=index.html>Return to index.</a>");
	}

	echo "<br><a href=index.html>Return to index.</a>";

?>
