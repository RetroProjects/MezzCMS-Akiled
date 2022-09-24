<?php
$emailS_active = 'active';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/styles/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title><?= $config['hotelName'] ?>: <?= $lang["TittleHader5"] ?></title>
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

        <div class="page-content-collider" style="background-color: transparent;">
            <div class="page-content-max-width">
                <div class="page-content-collider-item">
                    <div class="page-content-collider-content">
                        <div class="page-content-collider-content-settings">
                            <?php include_once("includes/menu_settings.php"); ?>
                            <link rel="stylesheet" href="/templates/brain/style/css/main2.css?v=22" type="text/css">
                            <div class="page-content-collider-content-settings-right-side">
                                <div class="page-content-collider-content-settings-right-side-item">
                                    <div class="page-content-collider-content-settings-right-side-item-column">
                                        <h3 class="page-content-collider-content-settings-right-side-item-title"><?= $lang["Sconfigemail"] ?></h3>

                                        <?php User::editEmail(); ?>
                                        <form action="" method="post">
                                            <input type="text" name="email" class="page-content-collider-content-settings-right-side-item-input" style="width: 100%;" placeholder="" value="<?= User::userData('mail') ?>">
                                            <p class="page-content-collider-content-settings-right-side-item-description"><?= $lang["Sconfigemaildesc"] ?></p>
                                            <button type="submit" name="account" id="avatarmotto" autocomplete="off" class="page-content-collider-content-settings-right-side-default-button fill save" style="float:right;"><?= $lang["SettingsButton"] ?></button>
                                        </form>

                                    </div>
                                </div>
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