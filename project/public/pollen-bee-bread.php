		<?php
			include('../app/views/header.php');
		?>

		<div class="col-12 main-page-container">

			<?php
				include('../app/views/menu.php');
			?>

			<main class="col-10 content-wrapper">
				<section class="shipping-container">
					<div class="col-6 shipping-fields-and-text">
						<span>Shipping local</span>
					</div>
					<div class="col-6 shipping-fields-and-text">
						<span>Shipping EU</span>
					</div>
				</section>
				<section class="first-content-block-row first-content-background">
					<article class="first-content-block-text">
						<p>Buckfast Bee Queens: Virgin or Mated</p><br>
						<p id="second-row-text">Carnica Bee Queens: Virgin or Mated</p><br>
						<p id="third-row-text">Various Honey, Pollen and Bee Bread</p>
						<p id="try-our-products-text">Try our products now</p>
					</article>
				</section>
				<section class="all-content-blocks">
					<div class="col-8 blocks-in-all-content-blocks">
						<figure>
							<a href="pollen-100g.php">
								<img src="../app/images/pollen-medium.jpg" alt="Bee picked Pollen 100g" title="Bee picked Pollen 100g">
							</a>
							<figcaption>Bee picked Pollen 100g</figcaption>
						</figure>
						<h2>
							<a href="pollen-100g.php">
								Bee picked Pollen - 100g
							</a>
						</h2>
						<p>Pollen. Be picked pollen.</p>
						<p class="wrapper-price-tags-text">Price: 3.00&euro;</p>
						<p class="read-more-text">
							<a href="pollen-100g.php">
								More About Bee picked Pollen
							</a>
						</p>
						<div class="col-9 cart-call-buttons-in-content-block-wrapper">
							<button onclick="alertFunction()" class="col-6 cart-call-button fas fa-shopping-cart"></button>
							<button onclick="alertFunction()" class="col-6 cart-call-button fas fa-phone"></button>
						</div>
					</div>
					<div class="col-8 blocks-in-all-content-blocks">
						<figure>
							<a href="pollen-500g.php">
								<img src="../app/images/pollen-medium.jpg" alt="Bee picked Pollen 500 grams" title="Bee picked Pollen 500g">
							</a>
							<figcaption>Bee picked Pollen 500g</figcaption>
						</figure>
						<h2>
							<a href="pollen-500g.php">
								Bee picked Pollen - 500g
							</a>
						</h2>
						<p>Eat it. Be healthy.</p>
						<p class="wrapper-price-tags-text">Price: 15.00&euro;</p>
						<p class="read-more-text">
							<a href="pollen-500g.php">
								More About Bee picked Pollen
							</a>
						</p>
						<div class="col-9 cart-call-buttons-in-content-block-wrapper">
							<button onclick="alertFunction()" class="col-6 cart-call-button fas fa-shopping-cart"></button>
							<button onclick="alertFunction()" class="col-6 cart-call-button fas fa-phone"></button>
						</div>
					</div>
				</section>
				<section class="all-content-blocks">
					<div class="col-8 blocks-in-all-content-blocks">
						<figure>
							<a href="bee-bread-100g.php">
								<img src="../app/images/bee-bread-medium.jpg" alt="Bee bread 100g" title="Bee bread 100g">
							</a>
							<figcaption>Bee bread</figcaption>
						</figure>
						<h2>
							<a href="bee-bread-100g.php">
								Bee Bread - 100g
							</a>
						</h2>
						<p>Bee bread. Not just a bread.</p>
						<p class="wrapper-price-tags-text">Price: 5.00&euro;</p>
						<p class="read-more-text">
							<a href="bee-bread-100g.php">
								More About Bee Bread
							</a>
						</p>
						<div class="col-9 cart-call-buttons-in-content-block-wrapper">
							<button onclick="alertFunction()" class="col-6 cart-call-button fas fa-shopping-cart"></button>
							<button onclick="alertFunction()" class="col-6 cart-call-button fas fa-phone"></button>
						</div>
					</div>
					<div class="col-8 blocks-in-all-content-blocks">
						<figure>
							<a href="bee-bread-500g.php">
								<img src="../app/images/bee-bread-medium.jpg" alt="Bee bread 500 grams" title="Bee bread 500g">
							</a>
							<figcaption>Bee bread</figcaption>
						</figure>
						<h2>
							<a href="bee-bread-500g.php">
								Bee Bread - 500g
							</a>
						</h2>
						<p>Eat it. Be healthy.</p>
						<p class="wrapper-price-tags-text">Price: 25.00&euro;</p>
						<p class="read-more-text">
							<a href="bee-bread-500g.php">
								More About Bee Bread
							</a>
						</p>
						<div class="col-9 cart-call-buttons-in-content-block-wrapper">
							<button onclick="alertFunction()" class="col-6 cart-call-button fas fa-shopping-cart"></button>
							<button onclick="alertFunction()" class="col-6 cart-call-button fas fa-phone"></button>
						</div>
					</div>
				</section>
			</main>
		</div>

		<?php
			include('../app/views/footer.php');
		?>

		</div>
	</body>

</html>
