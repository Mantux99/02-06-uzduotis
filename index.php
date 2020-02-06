<?php
include_once './app/php/php.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	
	<title>Hello, world!</title>
</head>
<body>
	<form method="GET">
		<section class="container mt-5">
		<div class="form-row d-flex justify-content-center">
			<div class="form-group col-md-2">
				<label for="inputname">Vardas</label>
				<input type="text" class="form-control" id="inputname" name="name">
			</div>
			<div class="form-group col-md-2">
				<label for="inputyears">Amzius</label>
				<input type="text" class="form-control" id="inputyears" name="year">
			</div>
			<div class="form-group col-md-2">
				<label for="inputcity">Miestas</label>
				<input type="text" class="form-control" id="inputcity" name="city">
			</div>
			<div class="form-group col-md-2">
				<label for="inputcountry">Salis</label>
				<input type="text" class="form-control" id="inputcountry" name="country">
			</div>
			<button type="submit" class="btn">Sign in</button>
		</div>

		<table class="table">
		<thead>
		<?php foreach ($_GET as $key => $value):?>
		<th>
			<?php print $key; ?>
			
		</th>
		<?php endforeach; ?>
		</thead>

		<tr>
		<?php foreach ($_GET as $value):?>

			<td><?php 
			if (!empty($value)) {
				print $value;
			}	?></td>
			<?php endforeach; ?>
		</tr>
	

		
		</table>

		</section>

	</form>


 	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://kit.fontawesome.com/f41043dc75.js"></script>
	<script type="text/javascript" src="./assets/js/jquery.js"></script>
	<script type="text/javascript" src="./assets/js/bootstrap.bundle.js"></script>
	<script type="text/javascript" src="./assets/js/bootstrap.js"></script>
</body>
</html>