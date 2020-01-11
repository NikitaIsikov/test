<h2><?=$q_num?>) <?=$question?></h2>
<?php $counter = $q_num + 1; ?>
<form method="POST">
	<p>
		<input type="radio" name=userAns value=1>
		<span><?=$opt1?></span>
	</p>
	<p>
		<input type="radio" name=userAns value=2>
		<span><?=$opt2?></span>
	</p>
	<p>
		<input type="radio" name=userAns value=3>
		<span><?=$opt3?></span>
	</p>
	<p>
		<input type="radio" name=userAns value=4>
		<span><?=$opt4?></span>
	</p>
	<p>
		<input type="hidden" name="counter" value="<?=$counter?>" >
		<input type="hidden" name="trueAns" value="<?=$true_option?>" >
		<button type="submit">Ответить</button>
	</p>
</form>