<?php

	if ($_POST) {
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$email = filter_var($email, FILTER_VALIDATE_EMAIL);
		$message = trim($_POST['message']);
		$message = htmlspecialchars($message);

		if (!empty($name) && !empty($email) && !empty($message)) {

			include('db.php');

			if ($isFormSaved) {
					echo "<script>
						alert('Forma sėkmingai pateikta');
					</script>
					";
			}
		}
	}
?>
