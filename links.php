<html>
	<head>
		<title>Link</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<h1>Insert new link</h1>

<?php

require_once "database.php";

if(isset($_POST['submit']))
{
	if(isset($_POST['subject_id']))
	{
		$subject_id = addslashes($_POST['subject_id']);
	}

	if(isset($_POST['experiment_id']))
	{
		$experiment_id = addslashes($_POST['experiment_id']);
	}

	$insert = "INSERT INTO experiment_subject (subject_id, experiment_id, date) VALUES ('$subject_id', '$experiment_id', now())";

	if (mysql_query($insert) or die (mysql_error())){
    		echo "Link inserted";
	}
}
else
{
?>
<div class="container">
		<form action="link.php" method="POST">
<?php
	$experiments = "SELECT * FROM experiments ORDER BY id";
	$query_experiments = mysql_query($experiments) or die (mysql_error());

	if(mysql_num_rows($query_experiments) > 0)
	{
		echo "<div class='form-group'>";
		echo "Experiment:<br>";
		echo "<select name='experiment_id'>";
		while($row = mysql_fetch_array($query_experiments))
		{
			$value = stripslashes($row['id']);
			$description = stripslashes($row['code']) . ' - ' . stripslashes($row['title']);
			echo "<option value='$value'>$description</option>";
		}
		echo "</select><br></div>";
	}
?>

<?php
	$subjects = "SELECT * FROM subjects ORDER BY id";
	$query_subjects = mysql_query($subjects) or die (mysql_error());

	if(mysql_num_rows($query_subjects) > 0)
	{
		echo "<div class='form-group'>";
		echo "Subject:<br>";
		echo "<select name='subject_id'>";
		while($row = mysql_fetch_array($query_subjects))
		{
			$value = stripslashes($row['id']);
			$description = stripslashes($row['name']) . ' ' . stripslashes($row['surname']);
			echo "<option value='$value'>$description</option>";
		}
		echo "</select><br></div>";
	}	
?>
			<input name="submit" type="submit" value="Insert" class="btn btn-default btn-lg btn-primary">
		</form>	
</div>
<?php
}
?>
	</body>
</html>
