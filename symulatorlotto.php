<!DOCTYPE html>
<HTML>
<head>

		<meta charset="utf-8">
		<title>Symulator lotto</title>

</head>
<body>

	<h2>Symulator gry LOTTO</h2>

		<form action="symulatorlotto.php" method="POST">
			<fieldset>
				<legend>Wybierz 6 liczb</legend>


	<?php 
	
		for($i=1; $i<50; $i++){

ECHO<<<END
				<p>
					<label>
						Wybierz $i
						<input type="checkbox" name="szostka[$i]" value="wybor $i"">
					</label>
				</p>
END;
		}
?>
	<input type="submit" value="Wyślij">
			</fieldset>
		</form>


	
</body>
</html>
