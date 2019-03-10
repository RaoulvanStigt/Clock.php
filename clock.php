<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="60.0">
	<meta name=”viewport” content=”width=device-width, initial-scale=1.0″/>
	<link rel="stylesheet" type="text/css" href="clock.css">
</head>
<body>
	<?php include 'headerMenu.php';?>  
		<div class="container">
		<?php
			date_default_timezone_set("Europe/Amsterdam");
			$H = date("H");

			if ($H > 6 and $H < 12) {
				echo "Goede Morgen!";
				echo "<br>";
				echo '<body style="background-image:url(img/morning.png)">';
			}

			if ($H > 12 and $H < 18) {
				echo "Goede Middag!";
				echo "<br>";
				echo '<body style="background-image:url(img/afternoon.png)">';
			}

			if ($H > 18 and $H < 0) {
				echo "Goede Avond!";
				echo "<br>";
				echo '<body style="background-image:url(img/evening.png)">';
			}

			if ($H > 00 and $H < 6) {
				echo "Goede Nacht!";
				echo "<br>";
				echo '<body style="background-image:url(img/night.png)">';
			}

			echo "Het is nu " . date("$H:i");
			

		?>
	</div>
</body>
</html>