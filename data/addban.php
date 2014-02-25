<head>
	<META HTTP-EQUIV="refresh" CONTENT="2;URL=listban.php">
</head>
<?php
        require "conf.php";
        require "func.php";

	$id = $_GET['id'];

	$period = get_period();

	$con = mysqli_connect(SQLSERVER, SQLUSER, SQLPASS, SQLDB);

	$result = mysqli_query($con, "SELECT Name, IP FROM questions WHERE NumberID=" . $id . ";");

	$info = mysqli_fetch_row($result);
	$name = $info[0];
	$ip = $info[1];

	echo "$name, posting with the IP address $ip, has been banned from help tickets during period $period.";

	$unbanlink = "<a href=unban.php?ip=$ip&period=$period>Unban this person</a>";

	mysqli_query($con, "INSERT INTO bans VALUES(\"$ip\", \"$period\", \"$unbanlink\");");

?>
