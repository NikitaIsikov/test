<!DOCTYPE html>
<html>
<head>
	<title>Результаты</title>
</head>
<body>
<h1>Ваш результат: </h1>

<?php
$score = 0;
$total = $_GET['total'];

foreach ($_COOKIE as $key => $bool) {
	echo "<p>$key) $bool;</p>";
	if ($bool == 'true') {
		$score++;
	}
	unset($_COOKIE["$key"]);
	setcookie("$key", null, -1, '/'); 
}
?>
<p>________________</p>
<p>Вы ответили правильно на <br>
	<b><?=$score?>/<?=$total?></b> вопросов
</p>
<form action="head.php">
	<button type="submit">Хочу ещё раз!</button>
</form>
</body>
</html>

