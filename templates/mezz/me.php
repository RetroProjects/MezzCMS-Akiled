<?php
    $me_active = 'active';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/styles/app.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Home: <?= User::userData('username') ?></title>
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
                <?php include_once("get/getNews.php"); ?>
                <?php include_once("get/getPhotos.php"); ?>
            </div>
        </div>
        <?php include_once('includes/footer.php'); ?>
		<script src="/assets/scripts/app.js"></script>
    </div>
</body>
</html>