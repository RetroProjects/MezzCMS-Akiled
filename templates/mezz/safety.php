<?php
$safety_active = 'active';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/styles/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title><?= $config['hotelName'] ?>: La seguridad</title>
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
            <div class="page-content-max-width" style="width: 900px; justify-content: center;">
                <div class="page-content-collider-item">
                    <div class="page-content-collider-content playing-habbo">
                        <div class="page-content-collider-content-playing-habbo-item">
                            <h1 class="page-content-collider-content-playing-habbo-item-big-title"><?= $lang["FAQtitle31"] ?></h3>
                                <p class="page-content-collider-content-playing-habbo-item-description"><?= $lang["FAQdesc31"] ?></p>
                        </div>
                        <div class="page-content-collider-content-playing-habbo-item dashed">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle32"] ?></h3>
                            <p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/safetytips1_n.png" alt="Protect Your Personal Info" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc32"] ?></p>
                        </div>
                        <div class="page-content-collider-content-playing-habbo-item dashed">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle33"] ?></h3>
                            <p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/safetytips2_n.png" alt="Protect Your Privacy" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc33"] ?></p>
                        </div>
                        <div class="page-content-collider-content-playing-habbo-item dashed">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle34"] ?></h3>
                            <p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/safetytips3_n.png" alt="Don't Give In To Peer Pressure" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc34"] ?></p>
                        </div>
                        <div class="page-content-collider-content-playing-habbo-item dashed">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle35"] ?></h3>
                            <p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/safetytips4_n.png" alt="Keep Your Pals In Pixels" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc35"] ?></p>
                        </div>
                        <div class="page-content-collider-content-playing-habbo-item dashed">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle36"] ?></h3>
                            <p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/safetytips5_n.png" alt="Don't Be Scared To Speak Up" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc36"] ?></p>
                        </div>
                        <div class="page-content-collider-content-playing-habbo-item dashed">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle37"] ?></h3>
                            <p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/safetytips6_n.png" alt="Ban The Cam" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc37"] ?></p>
                        </div>
                        <div class="page-content-collider-content-playing-habbo-item">
                            <h3 class="page-content-collider-content-playing-habbo-item-mini-title"><?= $lang["FAQtitle38"] ?></h3>
                            <p class="page-content-collider-content-playing-habbo-item-description"><img src="/assets/images/playing-habbo/safetytips7_n.png" alt="Stick To The Real Habbo!" class="page-content-collider-content-playing-habbo-item-image"><?= $lang["FAQdesc38"] ?></p>
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