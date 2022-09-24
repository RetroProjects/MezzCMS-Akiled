<?php
$fansite_active = 'active';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/styles/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title><?= $config['hotelName'] ?>: <?= $lang["TittleHader14"] ?></title>
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

        <div class="page-content-collider">
            <div class="page-content-max-width" style="width: 900px; justify-content: center;">
                <div class="page-content-collider-item">
                    <div class="page-content-collider-content fansites">
                        <div class="page-content-collider-content-fansites-left-side">
                            <h2 class="page-content-collider-content-fansites-title"><?= $lang["FsTitle"] ?></h2>
                            <div class="page-content-collider-content-fansites-list-space">
                                <p class="page-content-collider-content-fansites-list-space-title" style="margin-bottom: 20px;"><?= $lang["FsDesc"] ?></p>

                                <?php
                                $getFs = $dbh->prepare("SELECT * FROM cms_fansites c INNER JOIN users u ON c.ceo = u.username");
                                $getFs->execute();

                                if ($getFs->RowCount() > 0) {
                                    while ($FsRow = $getFs->fetch()) {
                                ?>

                                        <ul class="page-content-collider-content-fansites-list-space-list">
                                            <!-- <p class="page-content-collider-content-fansites-list-space-list-error">We don't have an official fansite yet.</p> -->
                                            <li class="page-content-collider-content-fansites-list-space-list-item">
                                                <a href="<?= filter($FsRow['link']) ?>" target="_blank" class="page-content-collider-content-fansites-list-space-list-item-url"><?= filter($FsRow['name']) ?></a>
                                            </li>
                                        </ul>

                                    <?php
                                    }
                                } else {
                                    ?>

                                    Não há fã-sites no momento!

                                <?php } ?>

                            </div>

                            <p class="page-content-collider-content-fansites-paragraph"><?= $lang["FsDesc2"] ?></p>
                            <p class="page-content-collider-content-fansites-paragraph"><?= $lang["FsDesc3"] ?></p>
                        </div>
                        <div class="page-content-collider-content-fansites-right-side">
                            <img src="/assets/images/collider/groups.png" alt="Fansites" class="page-content-collider-content-fansites-right-side-image">
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