<html>
	<head>
		<title>Guess a number game</title>		
	</head>
	<body>
		
		<?php
		if (empty($_POST)) {
		$answer=rand(1,100);
		}
		echo "Random number generated: ";
		echo $answer;
		if ($_POST["guess"]) {
			echo "You guessed";
			echo $_POST["guess"];	
		}
					
		
		?>			
		
		<form method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
		Number: <input type="text" name="guess"><br>
		<input type="submit">		
		</form>
		
	</body>
</html>