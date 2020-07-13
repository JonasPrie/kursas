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
							<img src="../app/images/linden-honey-big.jpg" alt="Linden honey" title="Linden Honey">
							<figcaption>Linden honey</figcaption>
						</figure>
					</div>
					<div class="col-8 bee-queen-product-page-text">
						<li><h1>Linden Honey</h1></li>
						<li>Brand: Imanto bitynas</li>
						<li>Product code: ?</li>
						<li>Available: Yes</li>
						<p id="wrapper-price-tags-text-in-product-page">Price: 6.50&euro;</p>
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
					<h4>Linden Honey</h4>
					<p>Linden honey. Honey delivered during July month. Mostly it is taken from lindens.</p>
					<span>You can save money if you buy larger amount:</span>
					<p><strong>1kg = 6.5 &euro;</strong></p>
					<p><strong>3kg and more = 6 &euro;/kg</strong></p>
				</div>
			</div>
		</div>

		<?php
			include('../app/views/footer.php');
		?>

	</body>

</html>
