<?php
	session_start();

        require "conf.php";
	$con = mysqli_connect(SQLSERVER, SQLUSER, SQLPASS, SQLDB);
	$ip = $_SERVER['REMOTE_ADDR'];
	
        $modipresult = mysqli_query($con, "SELECT * FROM moderators");
        $modip = mysqli_fetch_row($modipresult);

	if($_SESSION['login'] == 't'){
		$result = mysqli_query($con, "SELECT * FROM questions ORDER BY id");
		echo "<a href=logout.php>Click here to log out</a>";
	}
	if(!isset($_SESSION['login']) || !$_SESSION['login'] == 't')
		$result = mysqli_query($con, "SELECT Name, Question, Date, ID FROM questions ORDER BY ID;");

	echo "<table cellspacing=\"0\" cellpadding = \"0\">";

	while($row = mysqli_fetch_row($result)){
		echo "<tr>";
		foreach($row as $cell)
    		echo "<td>&nbsp;&nbsp;&nbsp;$cell&nbsp;&nbsp;&nbsp;</td>";
		echo "</tr>\n";
 	}

	echo "</table>";
?>
