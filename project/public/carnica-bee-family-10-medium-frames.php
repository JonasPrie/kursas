		<?php
			include('../app/views/header.php');
		?>

		<div class="col-12 main-page-container">

			<?php
				include('../app/views/menu.php');
			?>

			<main class="col-10 content-wrapper">
				<section class="all-content-blocks">
					<div class="col-8 blocks-in-all-content-blocks">
						<figure>
							<img src="../app/images/buckfast-bee-family-10-big.jpg" alt="Carnica bee family 10 frames" title="Carnica bee family 10 medium frames">
							<figcaption>Carnica Bee Family - 10 Medium Frames</figcaption>
						</figure>
					</div>
					<div class="col-8 product-page-product-information">
						<li><h1>Carnica Bee Family - 10 Medium Frames</h1></li>
						<li>Brand: Imanto bitynas</li>
						<li>Product code: ?</li>
						<li>Available: Yes</li>
						<p id="wrapper-price-tags-text-in-product-page">Price: 80.00&euro;</p>
						<div class="col-12">
							<div class="col-12 amount-input-field">Amount
								<p><input type="number" min="1" max="100" value="1" required></p>
							</div>
							<div class="col-12">
								<button id="add-to-cart-button-product-page" class="col-12">Add To Cart</button>
							</div>
						</div>
					</div>
				</section>
				<section class="col-8 bee-queen-product-description-text">
					<h3>Description</h3>
					<h4>Carnica Bee Family - 10 Medium Frames</h4>
					<p>Race: Carnica</p>
					<p>Price: 80&euro; for a family.</p>
					<p>Delivery price not included.</p>
				</section>
			</main>
		</div>

		<?php
			include('../app/views/footer.php');
		?>

	</body>

</html>
