<?php
    $howtoplay_active = 'active';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/styles/app.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title><?= $config['hotelName'] ?>: Cómo jugar</title>
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
        <div class="page-content-collider">
            <div class="page-content-max-width" style="width: 900px; justify-content: center;">
                <div class="page-content-collider-item">
                    <div class="page-content-collider-content playing-habbo">

                        <div class="page-content-collider-content-playing-habbo-item">
                            <h1 class="page-content-collider-content-playing-habbo-item-big-title">
                                <?=$lang["FAQtitle7"]?>
                            </h3>
                            <p class="page-content-collider-content-playing-habbo-item-description">
                                <?=$lang["FAQdesc7"]?>
                            </p>
                        </div>

                        <div class="page-content-collider-content-playing-habbo-item dashed">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title">
                                <?=$lang["FAQtitle8"]?>
                            </h3>
                            <p class="page-content-collider-content-playing-habbo-item-description">
                                <img src="/assets/images/playing-habbo/navigator.png" alt="Explore rooms" class="page-content-collider-content-playing-habbo-item-image">
                                <?=$lang["FAQdesc8"]?>
                            </p>
                        </div>

                        <div class="page-content-collider-content-playing-habbo-item dashed">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title">
                                <?=$lang["FAQtitle9"]?>
                            </h3>
                            <p class="page-content-collider-content-playing-habbo-item-description">
                                <img src="/assets/images/playing-habbo/askfriend.png" alt="Make friends" class="page-content-collider-content-playing-habbo-item-image">
                                <?=$lang["FAQdesc9"]?>
                            </p>
                        </div>

                        <div class="page-content-collider-content-playing-habbo-item dashed">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title">
                                <?=$lang["FAQtitle10"]?>
                            </h3>
                            <p class="page-content-collider-content-playing-habbo-item-description">
                                <img src="/assets/images/playing-habbo/gamehub.png" alt="Visit game rooms" class="page-content-collider-content-playing-habbo-item-image">
                                <?=$lang["FAQdesc10"]?>
                            </p>
                        </div>

                        <div class="page-content-collider-content-playing-habbo-item dashed">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title">
                                <?=$lang["FAQtitle11"]?>
                            </h3>
                            <p class="page-content-collider-content-playing-habbo-item-description">
                                <img src="/assets/images/playing-habbo/shop.png" alt="Go shopping" class="page-content-collider-content-playing-habbo-item-image">
                                <?=$lang["FAQdesc11"]?>
                            </p>
                        </div>

                        <div class="page-content-collider-content-playing-habbo-item">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title">
                                <?=$lang["FAQtitle12"]?>
                            </h3>
                            <p class="page-content-collider-content-playing-habbo-item-description">
                                <?=$lang["FAQdesc12"]?>
                            </p>
                            <p class="page-content-collider-content-playing-habbo-item-description">
                                <?=$lang["FAQdesc12.1"]?>
                            </p>
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