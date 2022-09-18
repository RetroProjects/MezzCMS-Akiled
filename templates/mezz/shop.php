<?php
    $shop_active = 'active';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/styles/app.css">
		<link rel="stylesheet" type="text/css" href="/assets/styles/shop.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title><?=$config['hotelName']?>: Tienda</title>
</head>
<body class="container">
<style>
.errorshop {
    color: #7d3632;
    font-size: 20px;
}
.successhop {
    color: #6fc95e;
    font-size: 20px;
}
</style>
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
                    <div class="page-content-collider-content shop">
                        <h1 class="page-content-collider-content-shop-title"><?=$lang["LoteriaTitle"]?></h1>
                        <div class="page-content-collider-content-shop-column">
                            <div class="page-content-collider-content-shop-left-side">
                                <div class="page-content-collider-content-shop-left-side-special-offer">
                                    <?=$lang["LoteriaDesc"]?>
                                    <br><br>
                                    <?php include_once("shop/loteria.php"); ?>
                                </div>
                                <div class="page-content-collider-content-shop-left-side-products">
                                    <h3 class="page-content-collider-content-shop-left-side-products-title"><?=$lang["PlacasTitle"]?></h3>
                                    <?php include_once("shop/placas.php"); ?>
                                </div>
																
                            </div>
                            <div class="page-content-collider-content-shop-right-side">
								<div class="page-content-collider-content-shop-right-side-box">
									<h3 class="page-content-collider-content-shop-right-side-box-title"><?=$lang["MyPurse"]?></h3>
									<div class="page-content-collider-content-shop-right-side-box-content">
										<div class="page-content-collider-content-shop-right-side-box-content-column">
											<div class="page-content-collider-content-shop-right-side-box-content-item">
												<img src="/assets/images/shop/credits.png" alt="Monedas" class="page-content-collider-content-shop-right-side-box-content-item-icon">
												<p class="page-content-collider-content-shop-right-side-box-content-item-text"><?= User::userData('credits') ?></p>
											</div>
											<div class="page-content-collider-content-shop-right-side-box-content-item">
												<img src="/assets/images/shop/esmeralda.png" alt="Esmeralda" class="page-content-collider-content-shop-right-side-box-content-item-icon">
												<p class="page-content-collider-content-shop-right-side-box-content-item-text"><?= User::userData('activity_points') ?></p>
											</div>
										</div>
									</div>
								</div>
                                <div class="page-content-collider-content-shop-right-side-box">
									<h3 class="page-content-collider-content-shop-right-side-box-title"><?=$lang["BuyVIP"]?></h3>
									<div class="page-content-collider-content-shop-right-side-box-content" style="display: block;">
                                    <?php buyvip(); ?>
                                    <?= $lang["VvipBuyslogan"] ?><br>
                                    <?= $lang["VvipBuyslogan2"] ?>
                                    <form method="post">
				                        <input type="submit" class="submit" value="<?= $lang            ["VvipBuyButton"] ?>" name="getvip" style="
                                            position: inherit;
                                            cursor: pointer;
                                            margin-top: 57px;
                                            bottom: 50px;
                                            transition: 0.05s;
                                            padding: 0px 25px 0px 25px;
                                            height: 50px;
                                            background: rgb(48,177,24);
                                            border-bottom: 4px solid rgb(37, 115, 23);
                                            border-radius: 8px;
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;
                                            font-size: 100%;
                                            color: white;
                                            margin-top: 10px;
                                        ">
			                        </form>
									</div>
								</div>
								<div class="page-content-collider-content-shop-right-side-box">
									<h3 class="page-content-collider-content-shop-right-side-box-title"><?=$lang["HelpPay"]?></h3>
									<div class="page-content-collider-content-shop-right-side-box-content">
										<?=$lang["HelpPayDesc"]?>
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
    <script>
        $().ready(function() {
	        setTimeout(function () {
		        $('.error').hide();
	        }, 3500);
        });
    </script>
</body>
</html>