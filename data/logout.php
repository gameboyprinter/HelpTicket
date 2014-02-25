<?
	session_start();
	unset($_SESSION['login']);
	session_destroy();
	echo "Logged out<br><a href=index.html>Click here to return to index.</a>";
?>
