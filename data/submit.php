<link rel="stylesheet" type="text/css" href="custom.css">
<?php
require "conf.php";
require "func.php";
$name=$_POST['name'];
$q=$_POST['question'];
$ip=$_SERVER['REMOTE_ADDR'];
$date=date("r");
$time=time();
$period=get_period();
$timestamp="<a href=reply.php?id=$time&name=$name>Reply to this question</a>";
$deletelink="<a href=submitdelete.php?id=$time>Delete this question</a>";
$banlink="<a href=addban.php?id=$time>Ban the person who posted this question</a>";
//echo $timestamp;
$newq=htmlentities($q);
$newname=htmlentities($name);
if(empty($newname))
	die("Please enter a name. <br/> <a href=\"index.html\">Return to index</a>");
if(strlen($newq)>140)
	die("Your question was too long. <br/> <a href=\"index.html\">Return to index</a>");
if(empty($newq))
	die("Please enter a question. <br/> <a href=\"index.html\">Return to index</a>");
$con=mysqli_connect(SQLSERVER,SQLUSER,SQLPASS,SQLDB) or die(mysqli_connect_error());
$result=mysqli_query($con,"SELECT IP FROM bans WHERE Period=".$period.";");
$bans=mysqli_fetch_row($result);
foreach($bans as $bannedip) {
if("$bannedip"=="$ip")
	die("<div id=center>You are banned from Help Tickets!</div>");
}
mysqli_query($con,"INSERT INTO questions VALUES(\"$newname\", \"$newq\", \"$ip\", \"$date\", \"$timestamp\", \"$deletelink\", \"$time\", \"$banlink\");") or die(mysqli_connect_error());
header('Location: index.html');
?>
