<?php

       $pass = $_POST['sqlpass'];
       $username = $_POST['sqluser'];
       $server = $_POST['sqlserver'];
       $db = $_POST['sqldb'];
       $adminpass = $_POST['adminpass'];


       $con = mysqli_connect($server, $username, $pass, $db);
       mysqli_query($con, "CREATE TABLE `questions` (
  `Name` varchar(500) DEFAULT NULL,
  `Question` varchar(5000) DEFAULT NULL,
  `IP` varchar(100) DEFAULT NULL,
  `Date` varchar(1000) DEFAULT NULL,
  `ID` varchar(2500) DEFAULT NULL,
  `Deletelink` varchar(5000) DEFAULT NULL,
  `NumberID` varchar(500) NOT NULL,
  `Banlink` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ");

       mysqli_query($con, "CREATE TABLE `bans` (
  `IP` varchar(100) NOT NULL,
  `Period` varchar(10) NOT NULL,
  `UnbanLink` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1");

       $adminpass = md5($adminpass);

       $data = "<?php //Auto generated MySQL config file.\n
        define(\"SQLUSER\", \"$username\");\n
        define(\"SQLPASS\", \"$pass\");\n
        define(\"SQLSERVER\", \"$server\");\n
        define(\"SQLDB\", \"$db\");\n
	define(\"ADMINPASS\", \"$adminpass\")?>";

       file_put_contents("data/conf.php", $data);


       exec("cp data/* .");
       exec("rm data/ -Rf");
       exec("rm install.html");

       echo "<a href=index.html>Install complete, click here to return</a>";

       exec("rm submitinstall.php");

?>

