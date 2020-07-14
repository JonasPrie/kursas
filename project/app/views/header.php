<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="../app/css/styles.css" rel="stylesheet">
		<link href="../app/css/menu.css" rel="stylesheet">
		<link href="../app/css/media.css" rel="stylesheet">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Imantas Beekeeping</title>
	</head>

	<body>
		<div class="col-12 main-page-with-header-footer">
			<header class="col-12 header-container">
					<div class="col-5 left-header-field-name-text">
						<span>
							<a href="index.php">Imantas Beekeeper</a>
						</span>
					</div>
					<div class="col-6 search-field">
						<i class="fa fa-search" aria-hidden="true"></i>
						<div class="header-search">
							<form>
								<input type="text" placeholder="Search..">
							</form>
						</div>
					</div>
					<div class="col-6 shopping-cart">
						<i class="fas fa-phone"></i>
						<span>
							<a href="tel:+37060001544">+37060001544</a>
						</span>
						<i class="far fa-user"></i>
						<span>Account</span>
						<i class="fas fa-shopping-cart"></i>
						<span>Cart</span>
					</div>
					<div class="col-3 right-header-field-date">
						<?php
							date_default_timezone_set("Europe/Vilnius");
							echo date("H:i:s") . " " . date("d/m/Y");
						?>
					</div>
			</header>
