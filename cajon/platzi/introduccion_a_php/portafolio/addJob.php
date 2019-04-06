<?php

use App\Models\Job;

if (!empty($_POST)) {
	$job = new Job();
	$job->title = $_POST['title'];
	$job->description = $_POST['description'];
	$job->months = $_POST['months'];
	$job->visible = $_POST['visible'];
	$job->save();
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Add Job</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" 
			integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>Add Job</h1>
		<form action="addJob.php" method="POST">
			<label for="title">Title:</label>
			<input type="text" name="title"/>
			<br>
			<label for="description">Description:</label>
			<input type="text" name="description" />
			<br>
			<label for="months">Months:</label>
			<input type="number" name="months" />
			<br>
			<label for="visible">Visible:</label>
			<select name="visible">
				<option selected="" disabled="">...</option>
				<option value="0">No</option>
				<option value="1">Yes</option>
			</select>
			<br>
			<button type="submit">Save</button>
		</form>
	</body>
</html>
