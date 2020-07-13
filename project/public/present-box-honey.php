		<?php
			include('../app/views/header.php');
		?>

		<div class="col-12 main-page-container">
			<?php
				include('../app/views/menu.php');
			?>
			<div class="col-10 content-wrapper">
				<div class="all-content-blocks">
					<div class="col-8 blocks-in-all-content-blocks">
						<figure>
							<img src="../app/images/honey-box-present-big.jpg" alt="Present box honey with tea" title="Present box honey with tea">
							<figcaption>Present box honey with tea</figcaption>
						</figure>
					</div>
					<div class="col-8 bee-queen-product-page-text">
						<li><h1>Present Box Honey With Tea</h1></li>
						<li>Brand: Imanto bitynas</li>
						<li>Product code: ?</li>
						<li>Available: Yes</li>
						<p id="wrapper-price-tags-text-in-product-page">Price: 25.00&euro;</p>
						<div class="col-12">
							<div class="col-12 amount-input-field">Amount
								<p><input type="number" min="1" max="100" value="1" required></p>
							</div>
							<div class="col-12">
								<button id="add-to-cart-button-product-page" class="col-12">Add To Cart</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-8 bee-queen-product-description-text">
					<h3>Description</h3>
					<h4>Present box honey with tea</h4>
					<p>You can always surprise Your friend or family member with this beautiful box full of honey and tea.</p>
				</div>
			</div>
		</div>

		<?php
			include('../app/views/footer.php');
		?>

	</body>

</html>
