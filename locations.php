<?php
session_start();
$user = $_SESSION['user'] ?? null;
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PELAGIC CLUB</title>
	<meta name="description" content="Night club, Ukraine Odesa, Near the sea, Locations page.">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/index.css">

	<!-- ICONS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=location_on" />
</head>
<body class="locations_html">
	<header>
		<hr>

		<?php if ($user): ?>
		<div style="position: absolute; top: 32px; left: 20px;" class="glowing_div">
            <span>🜲 Welcome, <?= htmlspecialchars($user) ?></span>
		</div>
		<?php endif; ?>

		<h1>PELAGIC CLUB</h1>

		<div style="position: absolute; top: 20px; right: 20px;">
			<?php if ($user): ?>
				<form action="logout.php" method="POST" style="display: inline;">
					<button type="submit" class="any_button">Logout</button>
				</form>
			<?php else: ?>
				<a href="login.php" class="any_button">Login</a>
			<?php endif; ?>
		</div>

		<hr>
	</header>

	<nav>
		<div class="navbar">
			<ul>
				<li><a href="index.php">About us</a></li>
				<li><a href="programs.php">Programs</a></li>
				<li><a class="selected" href="locations.php">Locations</a></li>
				<li><a href="contact_us.php">Contact us</a></li>
			</ul>
		</div>
		<hr>
	</nav>

	<main>
		<section>
			<div class="glowing_div">
				<h2>Locations</h2>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We are located in the well known “Arcadia” - the best place to enjoy the sea with style. Once you came here - it is hard to leave this place.<br><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We are also presenting coupons for free drinks and hotel discounts at almost all clubs, bars and hotel nearby.<br><br>
	    		<span class="material-symbols-outlined">location_on</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zdorovya Track, Odesa</p>
			</div>

			<div>
				<img src="images/locations_3.jpg" class="glowing_div">
			</div>
		</section>

		<aside>
			<img src="images/locations_2.png" alt="Location on the map." class="glowing_div">
		</aside>
	</main>

	<footer>
		<hr>	
		<p>&copy;Copyrights reserved</p>
	</footer>

</body>
</html>