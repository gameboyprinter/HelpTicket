<?php
        require "conf.php";

	$name = $_POST['name'];
	$q = $_POST['question'];
	$ip = $_SERVER['REMOTE_ADDR'];
	$replyname = $_POST['replyname'];
	$replyto = $_POST['replyto'];
	$date = date("r");

	$time = $replyto . "r";

	$timestamp = "<a href=reply.php?id=$time>Reply to this question</a>";
	$deletelink = "<a href=submitdelete.php?id=$time>Delete this question</a>";
	$banlink = "<a href=addban.php?id=$time>Ban the person who posted this question</a>";

	//echo $timestamp;

	$newq = htmlentities($q);
	$newname = htmlentities($name);
	$newname .= " in reply to $replyname.";

	$con = mysqli_connect(SQLSERVER, SQLUSER, SQLPASS, SQLDB) or die(mysqli_connect_error());

	mysqli_query($con, "INSERT INTO questions VALUES(\"$newname\", \"$newq\", \"$ip\", \"$date\", \"$timestamp\", \"$deletelink\", \"$time\", \"$banlink\");") or die(mysqli_connect_error());

	echo "<a href=\"list.php\">Response Submitted. Click here to see.</a>";
?>
