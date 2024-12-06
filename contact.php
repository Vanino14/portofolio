<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$errors = []; // Inisialisasi array untuk menyimpan error

	// Ambil data dari form
	$name = isset($_POST['name']) ? trim($_POST['name']) : '';
	$email = isset($_POST['email']) ? trim($_POST['email']) : '';
	$comment = isset($_POST['comment']) ? trim($_POST['comment']) : '';

	// Validasi server-side
	if (empty($name)) {
		$errors[] = 'Please enter your name.';
	}
	if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors[] = 'Please enter a valid email.';
	}
	if (empty($comment)) {
		$errors[] = 'Please enter your message.';
	}

	if (empty($errors)) {
		// Data valid, kirim email
		$to = 'mgunawan10@gmail.com';
		$from = $name . ' <' . $email . '>';
		$subject = 'Message via This web from ' . $name;
		$message = 'Name: ' . htmlspecialchars($name) . '<br/><br/>' .
			'Email: ' . htmlspecialchars($email) . '<br/><br/>' .
			'Message: ' . nl2br(htmlspecialchars($comment)) . '<br/>';

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		$headers .= 'From: ' . $from . "\r\n";

		if (mail($to, $subject, $message, $headers)) {
			echo 'Thank you! We have received your message.';
		} else {
			echo 'Sorry, an unexpected error occurred. Please try again later.';
		}
	} else {
		// Tampilkan error
		foreach ($errors as $error) {
			echo '<div style="color:red;">' . htmlspecialchars($error) . '</div>';
		}
	}
}
?>

<header class="intro">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h1 class="brand-heading">Get in Touch</h1>
					<p class="intro-text">
						The contact form is Workin'!
					</p>
					<a href="#contact" class="btn btn-circle page-scroll">
						<i class="fa fa-angle-double-down animated"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- Contact Section -->
<section id="contact">
	<div class="container content-section">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="done">
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">×</button>
						Your message has been sent. Thank you!
					</div>
				</div>
				<form method="post" id="contactform">
					<div class="form">
						<input type="text" name="name" placeholder="Your Name *">
						<input type="text" name="email" placeholder="Your E-mail Address *">
						<textarea name="comment" rows="7" placeholder="Type your Message *"></textarea>
						<input type="submit" id="submit" class="clearfix btn" value="Send">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>