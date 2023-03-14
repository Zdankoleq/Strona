<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista</title>
</head>
<body>
	<ul type="square">
		<li>Wielkopolska
			<ol type="1">
				<li>Poznań</li>
				<li>Gniezno</li>
			</ol>
		</li>
		<li>Dolnośląskie</li>
		<li>Zachodniopomorskie
			<ol>
			<li>Startgard</li>
			</ol>
		</li>
	</ul>
<?php
//require,require_max,include,include_once
include "./scripts/list.php";
include_once "./scripts/list.php";
?>
</body>
</html>