<!DOCTYPE html>
<? $id=$_GET['id']; $name=$_GET['name'];
if(empty($name))
	die("You can't respond to a response!");
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>File a Help Ticket</title>
	</head>
	<body>
		<h1>File a Help Ticket</h1>
		<form name="info" action="submitresponse.php" method="POST">
			Name: <input type="text" name=name>
			<? echo "<input type=hidden name=replyname value=$name>"; echo " <input type=hidden name=replyto value=$id>";?>
			<br>
			Answer: <input type="text" name=question>
			<br>
			<input type="submit" value="Submit Question">
		</form>
	</body>
</html>
