<?php
$privacyS_active = 'active';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/styles/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title><?= $config['hotelName'] ?>: <?= $lang["TittleHader3"] ?></title>
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

        <?php include_once('includes/menu.php'); ?>

        <div class="page-content-collider" style="background-color: transparent;">
            <div class="page-content-max-width">
                <div class="page-content-collider-item">
                    <div class="page-content-collider-content">
                        <div class="page-content-collider-content-settings">
                            <?php include_once("includes/menu_settings.php"); ?>
                            <form action="" method="POST">
                                <div class="page-content-collider-content-settings-right-side">

                                    <?php User::editAkiledSettings();
                                    $getUser = $dbh->prepare("SELECT * FROM users WHERE id = :id");
                                    $getUser->bindParam(':id', $_SESSION['id']);
                                    $getUser->execute();
                                    $stats = $getUser->fetch();
                                    ?>
                                    <div class="page-content-collider-content-settings-right-side-item">
                                        <div class="page-content-collider-content-settings-right-side-item-column">
                                            <h3 class="page-content-collider-content-settings-right-side-item-title"><?= $lang["Sallowfriends"] ?></h3>
                                            <p class="page-content-collider-content-settings-right-side-item-description"><?= $lang["Sallowfriendsdesc"] ?></p>
                                        </div>
                                        <div class="page-content-collider-settings-right-side-item-buttons">

                                            <select name="block_newfriends" class="page-content-collider-settings-right-side-item-buttons-default-button fill active">
                                                <option class="page-content-collider-settings-right-side-item-buttons-default-button" <?php if ($stats['block_newfriends'] == "1") echo 'selected'; ?> value="1">Sí
                                                </option>
                                                <option class="page-content-collider-settings-right-side-item-buttons-default-button" <?php if ($stats['block_newfriends'] == "0") echo 'selected'; ?> value="0">No</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="page-content-collider-content-settings-right-side-item">
                                        <div class="page-content-collider-content-settings-right-side-item-column">
                                            <h3 class="page-content-collider-content-settings-right-side-item-title"><?= $lang["Sallowtrade"] ?></h3>
                                            <p class="page-content-collider-content-settings-right-side-item-description"><?= $lang["Sallowtradedesc"] ?></p>
                                        </div>
                                        <div class="page-content-collider-settings-right-side-item-buttons">

                                            <select name="accept_trading" class="page-content-collider-settings-right-side-item-buttons-default-button fill active">
                                                <option class="page-content-collider-settings-right-side-item-buttons-default-button" <?php if ($stats['accept_trading'] == "1") echo 'selected'; ?> value="1">Sí</option>
                                                <option class="page-content-collider-settings-right-side-item-buttons-default-button" <?php if ($stats['accept_trading'] == "0") echo 'selected'; ?> value="0">No</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="page-content-collider-content-settings-right-side-item">
                                        <div class="page-content-collider-content-settings-right-side-item-column">
                                            <h3 class="page-content-collider-content-settings-right-side-item-title"><?= $lang["Sallowonline"] ?></h3>
                                            <p class="page-content-collider-content-settings-right-side-item-description"><?= $lang["Sallowonlinedesc"] ?></p>
                                        </div>
                                        <div class="page-content-collider-settings-right-side-item-buttons">

                                            <select name="hide_online" class="page-content-collider-settings-right-side-item-buttons-default-button fill active">
                                                <option class="page-content-collider-settings-right-side-item-buttons-default-button" <?php if ($stats['hide_online'] == "1") echo 'selected'; ?> value="1">Sí</option>
                                                <option class="page-content-collider-settings-right-side-item-buttons-default-button" <?php if ($stats['hide_online'] == "0") echo 'selected'; ?> value="0">No</option>
                                            </select>

                                        </div>
                                    </div>
                                    <button type="submit" name="akiledsettings" class="page-content-collider-content-settings-right-side-default-button fill save"><?= $lang["SettingsButton"] ?></button>

                                </div>
                            </form>
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