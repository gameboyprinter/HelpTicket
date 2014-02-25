<head>
	<META HTTP-EQUIV="refresh" CONTENT=".01;URL=list.php">
</head>
<?php
        require "conf.php";

	$id = $_GET['id'];
	$con = mysqli_connect(SQLSERVER, SQLUSER, SQLPASS, SQLDB);
	$result = mysqli_query($con, "SELECT Question FROM questions WHERE NumberID=" . $id . ";");
	$question = mysqli_fetch_row($result);
	echo "Question \"$question[0]\" deleted.";
	mysqli_query($con, "DELETE FROM questions WHERE NumberID=" . $id .";");
	echo "<br><a href=list.php>Return to list.</a>";
?>
