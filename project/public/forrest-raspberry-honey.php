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
							<img src="../app/images/forrest-raspberry-honey-big.jpg" alt="Forrest and raspberry honey" title="Forrest and raspberry Honey">
							<figcaption>Forrest and raspberry honey</figcaption>
						</figure>
					</div>
					<article class="col-8 product-page-product-information">
						<li><h1>Forrest and Raspberry Honey</h1></li>
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
					</article>
				</section>
				<section class="col-8 bee-queen-product-description-text">
					<h3>Description</h3>
					<h4>Forrest and Raspberry Honey</h4>
					<p>Forrest and raspberry honey. Ujuj, very tasty.</p>
					<span>You can save money if you buy larger amount:</span>
					<p><strong>1kg = 6.5 &euro;</strong></p>
					<p><strong>3kg and more = 6 &euro;/kg</strong></p>
				</section>
			</main>
		</div>

		<?php
			include('../app/views/footer.php');
		?>

	</body>

</html>
