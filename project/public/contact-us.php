<?php
	require( __DIR__ . '/../app/src/app.php');
	include('../app/views/header.php');
?>

		<div class="col-12 main-page-container">

			<?php
				include('../app/views/menu.php');
				include('../app/views/content.php');
			?>

		</div>

		<?php
			include('../app/views/footer.php');
		?>

	</body>

</html>
