<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<title>IIT Experiments</title>
	</head>
	<body>
		<h1 class="text-center">IIT Experiments</h1>
<?php

require_once "database.php";

$experiments = "SELECT * FROM experiments ORDER BY id";
$query_experiments = mysql_query($experiments) or die (mysql_error());

if(mysql_num_rows($query_experiments) > 0)
{
?>
		<h2>Experiments</h2>
<?php
		while($row = mysql_fetch_array($query_experiments))
		{
			$experiment_code = stripslashes($row['code']);
			$experiment_title = stripslashes($row['title']);
			$experiment_amount = stripslashes($row['amount']);

			echo "<strong>Code</strong>: $experiment_code | <strong>Title</strong>: $experiment_title | <strong>Amount</strong>: $experiment_amount €<br>";
		}
?>
		<hr/>
<?php
}

$subjects = "SELECT * FROM subjects ORDER BY id";
$query_subjects = mysql_query($subjects) or die (mysql_error());

if(mysql_num_rows($query_subjects) > 0)
{
?>
		<h2>Subjects</h2>
<?php
		while($row = mysql_fetch_array($query_subjects))
		{
			$subject_cf = stripslashes($row['cf']);
			$subject_name = stripslashes($row['name']);
			$subject_surname = stripslashes($row['surname']);
			echo "<strong>CF</strong>: $subject_cf | <strong>Name</strong>: $subject_name | <strong>Surname</strong>: $subject_surname<br>";
		}
?>
		<hr/>
<?php
}

$links = "SELECT subjects.cf, experiments.code, experiment_subject.date FROM subjects INNER JOIN experiment_subject ON (subjects.id = experiment_subject.subject_id) INNER JOIN experiments ON (experiment_subject.experiment_id = experiments.id) ORDER BY experiment_subject.date DESC";
$query_links = mysql_query($links) or die (mysql_error());

if(mysql_num_rows($query_links) > 0)
{
?>
		<h2>Links</h2>
<?php
		while($row = mysql_fetch_array($query_links))
		{
			$link_cf = stripslashes($row['cf']);
			$link_code = stripslashes($row['code']);
			$link_date = preg_replace('/^(.{4})-(.{2})-(.{2})$/','$3-$2-$1', stripslashes($row['date']));
			echo "<strong>Subject</strong>: $link_cf | <strong>Experiment</strong>: $link_code | <strong>Date</strong>: $link_date<br>";
		}
?>
		<hr/>
<?php
}
?>
	</body>
</html>
