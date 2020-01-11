<!DOCTYPE html>
<html>
<head>
	<title>Викторина</title>
</head>
<body>

<?php
$con 	   = mysqli_connect('localhost', 'root', '', 'quiz');
$reqestMax 	= "SELECT MAX(questions.id) as last_id 
			   FROM questions";
$queryMax  	= mysqli_query($con, $reqestMax);
$rowMax    	= mysqli_fetch_assoc($queryMax);
extract($rowMax);

if (isset($_POST['counter']) && $_POST['counter'] <= $last_id) {
	$refresh = false;
	$switch = 0;
	$q_num = $_POST['counter'];
} elseif (isset($_POST['counter']) && $_POST['counter'] == $last_id + 1) {
	$refresh = true;
	$switch = 1;
	$q_num = $_POST['counter'];
	require 'footer.php';
} else {
	$refresh = false;
	$switch = 0;
	$q_num = 1;	
}

if ($switch == false) {
	//MySQL connection
	$reqest = "SELECT questions.question, options.opt1, options.opt2, options.opt3, options.opt4, options.true_option
			   FROM questions 
			   JOIN options ON questions.id = options.id 
			   WHERE questions.id = $q_num";
	$result = mysqli_query($con, $reqest);

	// processing DB's data
	if ($result == NULL) {
		echo mysqli_error($con);
	} else {
		$row = mysqli_fetch_assoc($result);
		extract($row);
		//echo "$question . $opt1 . $opt2 . $opt3 . $opt4 . $true_option . $last_id";
	}
	require 'question.php';
	if (isset($_POST['counter'])) {
		require 'footer.php';
	}
}

?>