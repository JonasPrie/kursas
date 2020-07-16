		<main id="contact-us-form">
			<p id="contact-form-message">eo</p>
			<div class="contact-us-container">
				<form id="contact" action="contact-us.php" method="post">
					<h3>Contact Us</h3>
					<h4>We would love to hear from you today</h4>
					<p><input type="text" name="name" placeholder="Your name" required autofocus></p>
					<p><input type="email" name="email" placeholder="Your email" required></p>
					<p><textarea placeholder="Your message..." name="message" required></textarea></p>
					<p><button onclick="getElementById('contact-us-container').innerHTML=Date()" name="submit" type="submit" id="contact-submit">Send</button></p>
				</form>
			</div>
		</main>
