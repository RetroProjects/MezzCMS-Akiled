<?php
$ranking_active = 'active';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/styles/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title><?= $config['hotelName'] ?>:  <?= $lang["TittleHader11"] ?></title>
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
                    <div class="page-content-collider-content highscores">
                        <div class="page-content-collider-content-highscores-ranking">
                            <div class="page-content-collider-content-highscores-ranking-head">
                                <img src="/assets/images/user-space/credits.png" alt="Más Monedas" class="page-content-collider-content-highscores-ranking-head-icon">
                                <h3 class="page-content-collider-content-highscores-ranking-head-title"><?= $lang["TopCredits"] ?></h3>
                            </div>
                            <div class="page-content-collider-content-highscores-ranking-content">

                                <?php
                                $belcr_get = $dbh->prepare("SELECT * from users ORDER BY `credits` DESC LIMIT 10");
                                $belcr_get->execute();
                                while ($belcr_row = $belcr_get->fetch()) {
                                ?>

                                    <div class="page-content-collider-content-highscores-ranking-content-item">
                                        <img src="/assets/images/user-space/credits.png">
                                        <img src="<?php echo $config['AvatarURL']; ?><?= filter($belcr_row['look']) ?>&size=b&head_direction=2&gesture=sml&headonly=1" alt="<?= filter($belcr_row['username']) ?> Avatar" class="page-content-collider-content-highscores-ranking-content-item-figure">
                                        <div class="page-content-collider-content-highscores-ranking-content-item-column">
                                            <a href="/profile/<?= filter($belcr_row['username']) ?>">
                                                <p class="page-content-collider-content-highscores-ranking-content-item-username"><?= filter($belcr_row['username']) ?></p>
                                            </a>
                                            <p class="page-content-collider-content-highscores-ranking-content-item-amount"><b class="page-content-collider-content-highscores-ranking-content-item-amount-bold"><?= filter($belcr_row['credits']) ?></b> <?= $lang["RkCredits"] ?></p>
                                        </div>
                                    </div>

                                <?php
                                }
                                echo "";
                                ?>

                            </div>
                        </div>
                        <div class="page-content-collider-content-highscores-ranking">
                            <div class="page-content-collider-content-highscores-ranking-head">
                                <img src="/assets/images/user-space/planeta.png" alt="Más Planetas" class="page-content-collider-content-highscores-ranking-head-icon">
                                <h3 class="page-content-collider-content-highscores-ranking-head-title"><?= $lang["TopPlanets"] ?></h3>
                            </div>
                            <div class="page-content-collider-content-highscores-ranking-content">

                                <?php
                                $belcr_get10 = $dbh->prepare("SELECT * from users ORDER BY `vip_points` DESC LIMIT 10");
                                $belcr_get10->execute();
                                while ($belcr_row10 = $belcr_get10->fetch()) {
                                ?>

                                    <div class="page-content-collider-content-highscores-ranking-content-item"><img src="/assets/images/user-space/planeta.png">
                                        <img src="<?php echo $config['AvatarURL']; ?><?= filter($belcr_row10['look']) ?>&size=b&head_direction=2&gesture=sml&headonly=1" alt="<?= filter($belcr_row10['username']) ?> Avatar" class="page-content-collider-content-highscores-ranking-content-item-figure">
                                        <div class="page-content-collider-content-highscores-ranking-content-item-column">
                                            <a href="/profile/<?= filter($belcr_row10['username']) ?>">
                                                <p class="page-content-collider-content-highscores-ranking-content-item-username"><?= filter($belcr_row10['username']) ?></p>
                                            </a>
                                            <p class="page-content-collider-content-highscores-ranking-content-item-amount"><b class="page-content-collider-content-highscores-ranking-content-item-amount-bold"><?= filter($belcr_row10['vip_points']) ?></b> <?= $lang["RkPlanets"] ?></p>
                                        </div>
                                    </div>

                                <?php
                                }
                                echo "";
                                ?>

                            </div>
                        </div>
                        <div class="page-content-collider-content-highscores-ranking">
                            <div class="page-content-collider-content-highscores-ranking-head">
                                <img src="/assets/images/user-space/esmeralda.png" alt="Más Esmeraldas" class="page-content-collider-content-highscores-ranking-head-icon">
                                <h3 class="page-content-collider-content-highscores-ranking-head-title"><?= $lang["TopEmerald"] ?></h3>
                            </div>
                            <div class="page-content-collider-content-highscores-ranking-content">

                                <?php
                                $belcr_get11 = $dbh->prepare("SELECT * from users ORDER BY `activity_points` DESC LIMIT 10");
                                $belcr_get11->execute();
                                while ($belcr_row11 = $belcr_get11->fetch()) {
                                ?>

                                    <div class="page-content-collider-content-highscores-ranking-content-item">
                                        <img src="/assets/images/user-space/esmeralda.png">
                                        <img src="<?php echo $config['AvatarURL']; ?><?= filter($belcr_row11['look']) ?>&size=b&head_direction=2&gesture=sml&headonly=1" alt="<?= filter($belcr_row11['username']) ?> Avatar" class="page-content-collider-content-highscores-ranking-content-item-figure">
                                        <div class="page-content-collider-content-highscores-ranking-content-item-column">
                                            <a href="/profile/<?= filter($belcr_row11['username']) ?>">
                                                <p class="page-content-collider-content-highscores-ranking-content-item-username"><?= filter($belcr_row11['username']) ?></p>
                                            </a>
                                            <p class="page-content-collider-content-highscores-ranking-content-item-amount"><b class="page-content-collider-content-highscores-ranking-content-item-amount-bold"><?= filter($belcr_row11['activity_points']) ?></b> <?= $lang["RkEmerald"] ?></p>
                                        </div>
                                    </div>

                                <?php
                                }
                                echo "";
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('includes/footer.php'); ?>
        <script src="/assets/scripts/app.js"></script>
    </div>
</body>

</html>