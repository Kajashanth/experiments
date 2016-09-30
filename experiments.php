<html>
	<head>
		<title>Experiments</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<h1>Insert new experiment</h1>

<?php

require_once "database.php";

if(isset($_POST['submit']))
{
	if(isset($_POST['code']))
	{
		$code = addslashes($_POST['code']);
	}

	if(isset($_POST['title']))
	{
		$title = addslashes($_POST['title']);
	}

	if(isset($_POST['amount']))
	{
		$amount = addslashes($_POST['amount']);
	}

	$insert = "INSERT INTO experiments (code, title, amount) VALUES ('$code', '$title', '$amount')";

	if (mysql_query($insert) or die (mysql_error())){
    		echo "Experiment inserted";
	}
}
else
{
?>
<div class="container">
		<form action="experiments.php" method="POST">
			<div class="form-group">
			Code:<br>
			<input name="code" type="text" size="10"><br>
			</div>
			<div class="form-group">
			Title:<br>
			<input name="title" type="text" size="100"><br>
			</div>
			<div class="form-group">
			Amount:<br>
			<input name="amount" type="number" min="0" max="30"><br>
			</div>
			<input name="submit" type="submit" value="Insert" class="btn btn-default btn-lg btn-primary">
		</form>	
</div>
<?php
}
?>
	</body>
</html>
