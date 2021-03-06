<?php

$db = new mysqli('127.0.0.1', 'root', 'root', 'mysqli');

$users = $db->query("SELECT email, created, CONCAT(first_name, ' ', last_name) as full_name, first_name, last_name FROM users");

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>MySQLi</title>
	</head>
	<body>
		<p>We currently have <?php echo $users->num_rows; ?> registered users.</p>
		<?php while ($user = $users->fetch_object()): ?>
			<div class="user">
				<h3><?php echo $user->email; ?></h3>
				<p><?php echo $user->full_name; ?></p>
			</div>
		<?php endwhile; ?>
	</body>
</html>