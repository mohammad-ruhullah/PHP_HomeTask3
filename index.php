<?php
	include 'function.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Calculator</title>
</head>
<body>

	<div class="container">
		<h1 id = "php">PHP <br> Calculator</h1>
		<div class="underline"> </div>
		<div class = "calculator">

			<div class="result">

				<div class="display">


				<?php

		if (isset($_POST['Addition'])) {
			$number1PHP = $_POST['num1'];
			$number2PHP = $_POST['num2'];
			

			if (empty($number1PHP) or empty($number2PHP)) {
				echo "<h1 >Enter <br> Two Number..!</h>";
			}else{
				$myClass = new Calculation;

				$result = $myClass -> addition($number1PHP, $number2PHP);
				echo "<p class='output2'> .. ($number1PHP + $number2PHP) .. <br></p>";
				echo "<span class='output'>$result<span>";

				
			}
		}
		else if (isset($_POST['Sub'])) {
			$number1PHP = $_POST['num1'];
			$number2PHP = $_POST['num2'];
			

			if (empty($number1PHP) or empty($number2PHP)) {
				echo "<h1 >Enter <br> Two Number..!</h>";
			}else{
				$myClass = new Calculation;

				$result = $myClass -> Sub($number1PHP, $number2PHP);
				echo "<p class='output2'> ..    ($number1PHP - $number2PHP).. <br></p>";
				echo "<span class='output'>$result<span>";

			}
		}
		else if (isset($_POST['Multi'])) {
			$number1PHP = $_POST['num1'];
			$number2PHP = $_POST['num2'];
			

			if (empty($number1PHP) or empty($number2PHP)) {
				echo "<h1 >Enter <br> Two Number..!</h>";
			}else{
				$myClass = new Calculation;

				$result = $myClass -> Multi($number1PHP, $number2PHP);
				echo "<p class='output2'> ..    ($number1PHP * $number2PHP).. <br></p>";
				echo "<span class='output'>$result<span>";

			}
		}
		else if (isset($_POST['Divi'])) {
			$number1PHP = $_POST['num1'];
			$number2PHP = $_POST['num2'];
			

			if (empty($number1PHP) or empty($number2PHP)) {
				echo "<h1 >Enter <br> Two Number..!</h>";
			}else{
				$myClass = new Calculation;

				$result = $myClass -> Divi($number1PHP, $number2PHP);
				echo "<p class='output2'> ..    ($number1PHP / $number2PHP).. <br></p>";
				echo "<span class='output'>$result<span>";

			}
		}else{
			echo " ";
		}



	?>

				
				
			</div>
				
			</div>

			

			<form action="" method="post">
			<div class="input">		
				<input type="number" id="num1" name="num1" placeholder="First Number">
				<br>
				<input type="number" id="num2" name="num2" placeholder="First Number">
				



				<!-- //------------------- -->



	
			</div>


			<div class="opeator">
				<input type="submit" name="Addition" value="+">
				<input type="submit" name="Sub" value="-">
				<input type="submit" name="Multi" value="*">
				<input type="submit" name="Divi" value="/">
				
			</div>
			</form>
			
		</div>
		

	</div>

</body>
</html>