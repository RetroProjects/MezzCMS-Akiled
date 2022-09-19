<?php
    $photos_active = 'active';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/styles/app.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title><?= $config['hotelName'] ?>: Fotos</title>
</head>
<body class="container">
<?php User::Login(); ?>
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
        
        <?php include_once('includes/menu.php'); ?>

        <div class="page-content-collider">
            <div class="page-content-max-width" style="flex-direction: column;align-items: flex-start;">
                <div class="page-content-collider-item">
                    <div class="page-content-collider-head">
                        <span class="page-content-collider-head-icon camera"></span>
                        <div class="page-content-collider-head-column">
                            <h2 class="page-content-collider-head-title"><?=$lang["Plastphotos"]?></h2>
                            <p class="page-content-collider-head-description"><?=$lang["Pdescphotos"]?></p>
                        </div>
                    </div>
                    <div class="page-content-collider-content">
                    <?php 

                        $getPhotos = $dbh->prepare("SELECT * FROM user_photos JOIN users ON user_photos.user_id = users.id ORDER BY time DESC LIMIT 20");
                        $getPhotos->execute();

                        if ($getPhotos->RowCount() > 0)
                        {
                            while ($photosRow = $getPhotos->fetch())
                            {
                            ?>

                            <div class="page-content-collider-content-photos">
                            <span class="page-content-collider-content-photos-promo pixelated" style="background-image: url(<?php echo $config['roomphotos'] ?><?= filter($photosRow['photo']) ?>.png)"></span>
                            <div class="page-content-collider-content-photos-bottom-side">
                                <a href="/profile/<?= filter($photosRow['username']) ?>" class="page-content-collider-content-photos-bottom-side-avatar">
                                    <span class="page-content-collider-content-photos-bottom-side-avatar-figure pixelated" style="background-image: url('<?php echo $config['AvatarURL']; ?><?= filter($photosRow['look']) ?>&action=std&direction=2&head_direction=2&img_format=undefined&gesture=sml&headonly=1&size=b')"></span>
                                    <span class="page-content-collider-content-photos-bottom-side-avatar-username"><?= filter($photosRow['username']) ?></span>
                                </a>
                            </div>
                        </div>
                                
                        <?php
                        }
                        }
                        else
                        {
                            echo'No hay fotos en este momento.';
                        }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
       <?php include_once('includes/footer.php'); ?>
    </div>
	<script src="/assets/scripts/app.js"></script>
</body>
</html>