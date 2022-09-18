<?php
    $profile_active = 'active';
	$menu="me";

	if(empty($_GET['user']))
	    {
	        header("Location:/");
	    }

	$news = $dbh->prepare("SELECT * FROM users WHERE username = :name");
	$news->bindParam(':name', $_GET['user']);
	$news->execute();
	if ($news->RowCount() == 0)
	    {
	        header("Location:/");
	    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/styles/app.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Perfil de: <?= userHome('username'); ?></title>
</head>

<body class="container">
	<script src="/assets/scripts/page-load.js"></script>
    <div class="page-content">

    <?php
        if (!isset($_SESSION['id']))
        {
            include('auth/login.php');
        } else {
            include('auth/logged.php');
        }
	?>

        <?php include_once("includes/menu.php"); ?>

        <div class="page-content-collider" style="background-color: transparent;">
            <div class="page-content-max-width" style="flex-direction: column;align-items: flex-start;">
                <div class="page-content-collider-item">
                    <div class="page-content-collider-content profile">
                        <div class="page-content-collider-content-profile">
                            <div class="page-content-collider-content-profile-avatar">
                                <img src="<?php echo $config['AvatarURL']; ?><?= userHome('look'); ?>&direction=2&head_direction=3&gesture=sml&action=wav&size=l" alt="<?= filter(userHome('username')); ?>" class="page-content-collider-content-profile-avatar-figure">
                                <div class="page-content-collider-content-profile-avatar-column">
                                    <p class="page-content-collider-content-profile-avatar-small-text">Mi nombre es,</p>
                                    <h3 class="page-content-collider-content-profile-avatar-username"><?= filter(userHome('username')); ?></h3>
                                    <p class="page-content-collider-content-profile-avatar-motto"><?= filter(userHome('motto')); ?></p>
                                </div>
                            </div>
                            <div class="page-content-collider-content-profile-purse">
                                <div class="page-content-collider-content-profile-purse-item credits">
                                    <img src="http://akiled.localhost/templates/sloptv4.2/assets/images/credits.png">
                                    <p class="page-content-collider-content-profile-purse-item-text"><?= filter(userHome('credits')); ?></p>
                                    <p class="page-content-collider-content-profile-purse-item-text" style="margin-top: -25px;">Monedas</p>
                                </div>
                                <div class="page-content-collider-content-profile-purse-item planeta">
                                <img src="http://akiled.localhost/templates/sloptv4.2/assets/images/planeta.png">
                                    <p class="page-content-collider-content-profile-purse-item-text"><?= userHome('activity_points'); ?></p>
                                    <p class="page-content-collider-content-profile-purse-item-text" style="margin-top: -25px;">Planetas</p>
                                </div>
                                <div class="page-content-collider-content-profile-purse-item esmeralda">
                                <img src="http://akiled.localhost/templates/sloptv4.2/assets/images/esmeralda.png">
                                    <p class="page-content-collider-content-profile-purse-item-text"><?= userHome('vip_points'); ?></p>
                                    <p class="page-content-collider-content-profile-purse-item-text" style="margin-top: -25px;">Esmeraldas</p>
                                </div>
                            </div>
                            <div class="page-content-collider-content-profile-card-wrapper">
                                <div class="page-content-collider-content-profile-card-wrapper-aligner badges">
                                    <?php include_once("get/profile/homeBadges.php"); ?>
                                </div>
                            </div>
                            <div class="page-content-collider-content-profile-card-wrapper">
                                <div class="page-content-collider-content-profile-card-wrapper-aligner groups">
                                    <?php include_once("get/profile/homeGroups.php"); ?>
                                </div>
                            </div>
                            <div class="page-content-collider-content-profile-card-wrapper">
                                <div class="page-content-collider-content-profile-card-wrapper-aligner rooms">
                                    <?php include_once("get/profile/homeRooms.php"); ?>
                                </div>
                            </div>
                            <div class="page-content-collider-content-profile-card-wrapper">
                                <div class="page-content-collider-content-profile-card-wrapper-aligner friends">
                                <?php include_once("get/profile/homeFriends.php"); ?>
                                </div>
                            </div>
                            <?php include_once("get/profile/homePhotos.php"); ?>
                            <h3 class="page-content-collider-content-profile-date">Unido a <?=$config['hotelName']?> en <?= date('d-m-Y', userHome('account_created')); ?></h3>
                            <div class="page-content-collider-content-profile-icon">
                                <i class="page-content-collider-content-profile-icon-heart"></i>
                                <i class="page-content-collider-content-profile-icon-heart"></i>
                                <i class="page-content-collider-content-profile-icon-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('includes/footer.php'); ?>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src="/assets/scripts/app.js"></script>
    </div>
</body>
</html>