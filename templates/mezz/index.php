<?php
    $index_active = 'active';
?>

<html lang="en">
<style>
    .error {
        background: rgba(217, 7, 7, .85);
        border-color: rgba(217, 7, 7, .94);
        color: #FFFFFF;
        text-align-last: center;
        padding: 5px;
        display: block;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/styles/app.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title><?=$lang["DescHotel"];?> - <?=$lang["NameHotel"];?></title>
</head>
<body class="container">
    <?php User::Login(); ?>
	<script src="/assets/scripts/page-load.js"></script>
    <div class="page-content">
        <?php include_once("auth/login.php"); ?>
        <?php include_once("includes/menu.php"); ?>
        <div class="page-content-collider">
            <div class="page-content-max-width" style="flex-direction: column;align-items: flex-start;">
            <?php include_once("get/getInfosIndex.php"); ?>
            <?php include_once("get/getPhotos.php"); ?>
            </div>
        </div>
        <?php include_once("includes/footer.php"); ?>
    </div>
	<script src="/assets/scripts/app.js"></script>
    <script src="/templates/brain/style/js/jquery.min.js"></script>
</body>
</html>