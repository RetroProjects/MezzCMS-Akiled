<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/styles/app.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title><?=$config['hotelName']?>: Error 404</title>
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
            <div class="page-content-max-width" style="flex-direction: column;align-items: flex-start;">
                <div class="page-content-collider-item">
                   <div class="page-content-collider-content not-found">
						<span class="page-content-collider-content-not-found-image"></span>
						<h3 class="page-content-collider-content-not-found-title"><?=$lang["ErrorTitle"]?></h3>
						<p class="page-content-collider-content-not-found-text"><?=$lang["ErrorDesc"]?> <a href="/" class="page-content-collider-item-content-not-found-text-url"><?=$lang["ErrorDesc2"]?></a></p>
				   </div>
                </div>
            </div>
        </div>
        <?php include_once('includes/footer.php'); ?>
    </div>
	<script src="/assets/scripts/app.js"></script>
</body>
</html>