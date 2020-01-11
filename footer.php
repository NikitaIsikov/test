
<?php

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
$userAns = $_POST['userAns'];
$trueAns = $_POST['trueAns'];
if ($userAns == $trueAns) {
	//echo "<p>true";
	$userans_bool = 'true';
	//echo " $userans_bool</p>";
} else {
	//echo "<p>false $userAns != $trueAns";
	$userans_bool = 'false';
	//echo " $userans_bool</p>";
}

//mmm, cookies
if ($switch == false || $q_num - 1 <= $last_id) {
	$cookie_name = $q_num - 1;
	$cookie_value = $userans_bool;
	$prev_id = $last_id - 1;
	setcookie($cookie_name, $cookie_value, time() + 86400
	, "/");
	//echo "<p>set cookie with name: \"$cookie_name\" and value: \"$cookie_value\"</p>";
}

if ($switch == true) {
	header("Location: result.php?total=$last_id");	
}

//echo "<pre>";
//print_r($_COOKIE);
//echo "</pre>";


?>

</body>
</html>