<?php

	if ($_POST) {
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$email = filter_var($email, FILTER_VALIDATE_EMAIL);
		$message = trim($_POST['message']);
		$message = htmlspecialchars($message);

			if (!empty($name) && !empty($email) && !empty($message)) {
				echo '
				<script>
				document.getElementById("contact-submit").addEventListener("click", changeEchoLocation);
				function changeEchoLocation() {
					var messageSent = "Your message has been sent";
					document.getElementById("contact-us-form").innerHTML = messageSent;
				}
				<script>
				';

				include('db.php');
			}

	}
?>
