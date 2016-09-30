<html>
	<head>
		<title>Subjects</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<h1>Insert new subject</h1>

<?php

require_once "database.php";

if(isset($_POST['submit']))
{
	if(isset($_POST['cf']))
	{
		$cf = addslashes($_POST['cf']);
	}

	if(isset($_POST['name']))
	{
		$name = addslashes($_POST['name']);
	}

	if(isset($_POST['surname']))
	{
		$surname = addslashes($_POST['surname']);
	}

	$insert = "INSERT INTO subjects (cf, name, surname) VALUES ('$cf', '$name', '$surname')";

	if (mysql_query($insert) or die (mysql_error())){
    		echo "Subject inserted";
	}
}
else
{
?>
<div class="container">
		<form action="subjects.php" method="POST">
			<div class="form-group">
			CF:<br>
			<input name="cf" type="text" size="16"><br>
			</div>
			<div class="form-group">
			Name:<br>
			<input name="name" type="text" size="100"><br>
			</div>
			<div class="form-group">
			Surname:<br>
			<input name="surname" type="text" size="100"><br>
			</div>
			<input name="submit" type="submit" value="Insert" class="btn btn-default btn-lg btn-primary">
		</form>
</div>	
<?php
}
?>
	</body>
</html>
