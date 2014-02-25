<head><link rel="stylesheet" type="text/css" href="flat-ui.css"> <link rel="stylesheet" type="text/css" href="custom.css"></head>
<font color=#e74c3c><center><h1>Bans</h1></center><font size=6>
<?php
        require "conf.php";

	$con = mysqli_connect(SQLSERVER, SQLUSER, SQLPASS, SQLDB);
	$ip = $_SERVER['REMOTE_ADDR'];

	$result = mysqli_query($con, "SELECT * FROM bans;");

	echo "<table border=\"1\">";

	while($row = mysqli_fetch_row($result)){
		echo "<tr>";
		foreach($row as $cell)
    		echo "<td><font color=#e74c3c size=6>$cell</font></td>";
		echo "</tr>\n";
 	}

	echo "</table>";
	echo "<meta http-equiv=\"refresh\" content=\"1\">";
	echo "<a href=\"index.html\">Submit another question.";
?>
