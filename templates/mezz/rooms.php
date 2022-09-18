<?php
    $rooms_active = 'active';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/styles/app.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title><?=$config['hotelName']?>: Habitaciones</title>
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

        <?php include_once('includes/menu.php'); ?>

        <div class="page-content-collider">
            <div class="page-content-max-width" style="flex-direction: column;align-items: flex-start;">
                <div class="page-content-collider-item">
                    <div class="page-content-collider-head">
                        <span class="page-content-collider-head-icon rooms"></span>
                        <div class="page-content-collider-head-column">
                            <h2 class="page-content-collider-head-title"><?=$lang["RoomTitle"]?></h2>
                            <p class="page-content-collider-head-description"><?=$lang["RoomDesc"]?></p>
                        </div>
                    </div>
                    <div class="page-content-collider-content rooms">

                    <?php include_once('get/getRooms.php'); ?>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('includes/footer.php'); ?>
    </div>
	<script src="/assets/scripts/app.js"></script>
</body>
</html>