<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>FEEDBACK</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('inc/head.php');
	?>
</head>
<body>
	<section id="container">
	<?php
			include('inc/header.php');
						
	?>
	
	<section id="content">
	<div>
		<p class="phead"> FEEDBACK </p>
		<form id="contact_form" action="proc/contact.php" method="POST">
			<label for="name">Name : <span> <input type="text" name="name" value="" required /> </span></label>
			<label for="email">Phone Number : <span><input type="text" name="phone number" value="" required /></span> </label>
			<label for="email"> Mail : <span><input type="text" name="Mail" value="" required /></span> </label>
			<label for="text">Your Feedback :<span> <textarea name="Feedback" value="" required></textarea> </span></label>
			<label for="submit"><span><input type="submit" name="submit" value="Submit" required /> </span></label>
		</form>
	</div>
	
	</section>
	<?php
			include('inc/footer.php');
	?>
	</section>
	
</body>
</html>