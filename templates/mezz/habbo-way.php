<?php
$hacerono_active = 'active';
?>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/assets/styles/app.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<title><?= $config['hotelName'] ?>:  <?= $lang["TittleHader13"] ?></title>
</head>

<body class="container">
	<script src="/assets/scripts/page-load.js"></script>
	<div class="page-content">
		<?php
		if (!isset($_SESSION['id'])) {
			include('auth/login.php');
		} else {
			include('auth/logged.php');
		}
		?>
		<?php include_once("includes/menu.php"); ?>
		<div class="page-content-collider">
			<div class="page-content-max-width" style="justify-content: center;">
				<div class="page-content-collider-item">
					<div class="page-content-collider-content playing-habbo habbo-way">
						<div class="page-content-collider-content-left-side">
							<h1 class="page-content-collider-content-playing-habbo-item-big-title"><?= $lang["FAQtitle13"] ?></h3>
								<div class="page-content-collider-content-playing-habbo-item">
									<h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle14"] ?></h3>
									<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_1a.png" alt="Play games" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc14"] ?></p>
								</div>
								<div class="page-content-collider-content-playing-habbo-item">
									<h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle15"] ?></h3>
									<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_2a.png" alt="Chat" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc15"] ?></p>
								</div>
								<div class="page-content-collider-content-playing-habbo-item">
									<h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle16"] ?></h3>
									<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_3a.png" alt="Find that special pixel someone" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc16"] ?></p>
								</div>
								<div class="page-content-collider-content-playing-habbo-item">
									<h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle17"] ?></h3>
									<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_4a.png" alt="Help" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc17"] ?></p>
								</div>
								<div class="page-content-collider-content-playing-habbo-item">
									<h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle18"] ?></h3>
									<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_5a.png" alt="Create" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc18"] ?></p>
								</div>
								<div class="page-content-collider-content-playing-habbo-item">
									<h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle19"] ?></h3>
									<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_6a.png" alt="Trade" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc19"] ?></p>
								</div>
								<div class="page-content-collider-content-playing-habbo-item">
									<h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle20"] ?></h3>
									<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_7a.png" alt="Marketplace trading" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc20"] ?></p>
								</div>
								<div class="page-content-collider-content-playing-habbo-item">
									<h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle21"] ?></h3>
									<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_8a.png" alt="Put on games" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc21"] ?></p>
								</div>
						</div>
						<div class="page-content-collider-content-right-side">
							<h1 class="page-content-collider-content-playing-habbo-item-big-title"><?= $lang["FAQtitle22"] ?></h3>
								<div class="page-content-collider-content-playing-habbo-item">
									<h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle23"] ?></h3>
									<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_1a.png" alt="Cheat" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc23"] ?></p>
								</div>
								<div class="page-content-collider-content-playing-habbo-item">
									<h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle24"] ?></h3>
									<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_2b.png" alt="Troll" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc24"] ?></p>
								</div>
								<div class="page-content-collider-content-playing-habbo-item">
									<h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle25"] ?></h3>
									<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_3b.png" alt="Cyber" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc25"] ?></p>
								</div>
								<div class="page-content-collider-content-playing-habbo-item">
									<h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle26"] ?></h3>
									<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_4b.png" alt="Trick" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc26"] ?></p>
								</div>
								<div class="page-content-collider-content-playing-habbo-item">
									<h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle27"] ?></h3>
									<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_5b.png" alt="Script" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc27"] ?></p>
								</div>
								<div class="page-content-collider-content-playing-habbo-item">
									<h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle28"] ?></h3>
									<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_6b.png" alt="Scam" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc28"] ?></p>
								</div>
								<div class="page-content-collider-content-playing-habbo-item">
									<h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle29"] ?></h3>
									<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_7b.png" alt="Sell for real money" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc29"] ?></p>
								</div>
								<div class="page-content-collider-content-playing-habbo-item">
									<h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle30"] ?></h3>
									<p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/habboway_8b.png" alt="Place or accept bets" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc30"] ?></p>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include_once('includes/footer.php'); ?>
	</div>
	<script src="/assets/scripts/app.js"></script>
</body>

</html>