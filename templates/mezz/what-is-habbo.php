<?php
    $whatishabbo_active = 'active';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/styles/app.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title><?= $config['hotelName'] ?>: ¿Qué es <?= $config['hotelName'] ?>?</title>
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
                            <h2 class="page-content-collider-content-playing-habbo-item-title">
                                <?=$lang["FAQtitle1"]?>
                            </h2>
                            <p class="page-content-collider-content-playing-habbo-item-description">
                                <?= $config['hotelName'] ?> <?=$lang["FAQdesc1"]?> 
                                    <b class="page-content-collider-content-playing-habbo-item-bolder">
                                        <?=$lang["FAQdesc1bold"]?>
                                    </b> 
                                <?=$lang["FAQdesc1.2"]?>
                            </p>
                        </div>

                        <div class="page-content-collider-content-playing-habbo-item">
                                <h2 class="page-content-collider-content-playing-habbo-item-title">
                                        <?=$lang["FAQtitle2"]?>
                                </h2>
                                <p class="page-content-collider-content-playing-habbo-item-description">
                                    <img src="/assets/images/playing-habbo/ill_15.png" alt="More than just a game..." class="page-content-collider-content-playing-habbo-item-image">
                                        <?=$lang["FAQdesc2"]?> 
                                    <b class="page-content-collider-content-playing-habbo-item-bolder">
                                        <?=$lang["FAQdesc2bold"]?>
                                    </b> 
                                        <?=$lang["FAQdesc2.1"]?> 
                                    <b class="page-content-collider-content-playing-habbo-item-bolder">
                                        <?=$lang["FAQdesc2.1bold"]?>
                                    </b> 
                                        <?=$lang["FAQdesc2.2"]?>
                                </p>
                        </div>

                        <div class="page-content-collider-content-playing-habbo-item">
                            <h2 class="page-content-collider-content-playing-habbo-item-title">
                                <?=$lang["FAQtitle3"]?>
                            </h2>
                            <p class="page-content-collider-content-playing-habbo-item-description">
                                <?=$lang["FAQdesc3"]?> 
                                <b class="page-content-collider-content-playing-habbo-item-bolder">
                                    <?=$lang["FAQdesc3bold"]?>
                                </b> 
                                <?=$lang["FAQdesc3.1"]?>
                            </p>
                        </div>

                        <div class="page-content-collider-content-playing-habbo-item">
                            <h2 class="page-content-collider-content-playing-habbo-item-title">
                                <?=$lang["FAQtitle4"]?>
                            </h2>
                            <p class="page-content-collider-content-playing-habbo-item-description">
                                <img src="/assets/images/playing-habbo/ill_16.png" alt="Express yourself" class="page-content-collider-content-playing-habbo-item-image">
                                <?=$lang["FAQdesc4"]?> 
                                <b class="page-content-collider-content-playing-habbo-item-bolder">
                                    <?=$lang["FAQdesc4bold"]?>
                                </b> 
                                <?=$lang["FAQdesc4.1"]?>
                            </p>
                        </div>

                        <div class="page-content-collider-content-playing-habbo-item">
                            <h2 class="page-content-collider-content-playing-habbo-item-title">
                                <?=$lang["FAQtitle5"]?>
                            </h2>
                            <p class="page-content-collider-content-playing-habbo-item-description">
                                <?= $config['hotelName'] ?> 
                                <?=$lang["FAQdesc5"]?> 
                                <b class="page-content-collider-content-playing-habbo-item-bolder">
                                    <?=$lang["FAQdesc5bold"]?></b>, <?=$lang["FAQdesc5.1"]?>
                                </p>
                            <p class="page-content-collider-content-playing-habbo-item-description">
                                <?=$lang["FAQdesc5.2"]?> 
                                <?=$lang["FAQdescshoplink"]?>
                            </p>
                        </div>

                        <div class="page-content-collider-content-playing-habbo-item">
                            <h2 class="page-content-collider-content-playing-habbo-item-title">
                                <?=$lang["FAQtitle6"]?>
                            </h2>
                            <p class="page-content-collider-content-playing-habbo-item-description">
                                <img src="/assets/images/playing-habbo/ill_17.png" alt="Always here to help..." class="page-content-collider-content-playing-habbo-item-image">
                                <?=$lang["FAQdesc6"]?> 
                                <?=$lang["FAQdescsafetylink"]?>
                            </p>
                            <p class="page-content-collider-content-playing-habbo-item-description">
                                <?=$lang["FAQdesc6.1"]?> 
                                <b class="page-content-collider-content-playing-habbo-item-bolder">
                                    <?=$lang["FAQdesc6bold"]?>
                                </b>
                                <?=$lang["FAQdesc6.2"]?>
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