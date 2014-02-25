<head>
	<META HTTP-EQUIV="refresh" CONTENT="2;URL=listban.php">
</head>
<?php
        require "conf.php";
	
        $ip = $_GET['ip'];
	$period = $_GET['period'];

	$con = mysqli_connect(SQLSERVER, SQLUSER, SQLPASS, SQLDB);

	mysqli_query($con, "DELETE FROM bans WHERE IP=\"$ip\" AND Period=$period;");

	echo "User was unbanned";
?>
