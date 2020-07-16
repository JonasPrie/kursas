<?php
	include('../app/views/header.php');
?>

		<div class="col-12 main-page-container">

			<?php
				include('../app/views/menu.php');
			?>

			<main class="col-10 about-us">
				<h1>About Apiary</h1>
				<p>Beekeeper: Imantas Masiulis</p>
				<p>Address:<br>Draugystės g. 5, Pagiriai, <br>
					Vilniaus r. LT-14118</p>
				<p>Mob.: 860006272<br>
					Email: imantas.masiulis@gmail.com </p>
				<p><bold>Apiary pass number 183</bold></p>
				<p>Our Products:</p>
				<ul>
					<li>Bee Honey</li>
					<li>Bee Bread</li>
					<li>Bee Pollen</li>
					<li>Bee Queens:
						<ul>
							<li>Buckfast</li>
							<li>Carnica</li>
						</ul>
					</li>
					<li>Virgin Bee Queen</li>
					<li>Mated Bee Queen</li>
				</ul>
				<figure>
					<img src="../app/images/bitynas.jpg" alt="Imantas apiary" title="Imantas apiary">
					<figcaption>Imantas apiary</figcaption>
				</figure>
			</main>
		</div>

		<?php
			include('../app/views/footer.php');
		?>

	</body>

</html>
