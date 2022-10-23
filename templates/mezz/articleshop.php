    <?php
    $shopcurrency_active = 'active';
    ?>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/assets/styles/app.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <title><?= $config['hotelName'] ?>: <?= $lang["Nnews"] ?></title>
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
                <div class="page-content-max-width" style="flex-direction: column;align-items: flex-start;">
                    <div class="page-content-collider-item">
                        <div class="page-content-collider-content shop">





                            <?php
                            if (isset($_POST['pack1'])) {
                                $belcr_get = $dbh->prepare("SELECT * FROM mezz_currency WHERE user_id = :userid AND id = :product_id  AND reclaim = '0' AND status_paypal LIKE 'COMPLETED'");
                                $belcr_get->bindParam(':userid', User::userData('id'));
                                $belcr_get->bindParam(':product_id', $_POST['producid']);
                                $belcr_get->execute();
                                if ($belcr_get->RowCount() > 0) {
                                    if (User::userData('online') == 0) {
                                        $belcr_shop = $dbh->prepare("SELECT * FROM mezz_currency WHERE user_id = :userid AND id = :product_id  AND reclaim = '0' AND status_paypal LIKE 'COMPLETED' LIMIT 1");
                                        $belcr_shop->bindParam(':userid', User::userData('id'));
                                        $belcr_shop->bindParam(':product_id', $_POST['producid']);
                                        $belcr_shop->execute();
                                        $shopidpay = $belcr_shop->fetch();

                                        $updateshop = $dbh->prepare("UPDATE mezz_currency SET reclaim = '1' WHERE user_id = :userid AND reclaim = '0' AND id_paypal = :idpaypal");
                                        $updateshop->bindParam(':userid', User::userData('id'));
                                        $updateshop->bindParam(':idpaypal', $shopidpay["id_paypal"]);
                                        $updateshop->execute();

                                        $cantidadesmeraldas = $_POST['esmeraldas'];
                                        $cantidadplanetas = $_POST["planetas"];
                                        $updatemonedero = $dbh->prepare("UPDATE users SET activity_points = activity_points + :cantidadesmeraldas, vip_points = vip_points + :cantidadplanetas WHERE id = :userid");
                                        $updatemonedero->bindParam(':cantidadesmeraldas', $cantidadesmeraldas);
                                        $updatemonedero->bindParam(':cantidadplanetas', $cantidadplanetas);
                                        $updatemonedero->bindParam(':userid', User::userData('id'));
                                        $updatemonedero->execute();

                                        echo '<div style=" background: #41883a; padding-left: 29px; padding-top: 5px; padding-bottom: 5px; margin-bottom: 11px; border-radius: 5px; color: #ffffff; width: 98%; ">Compra cofre de luz azul canjeado correctamente, puedes revisar tu inventario dentro del hotel</div>';
                                    } else {
                                        echo '<div style=" background: #a74040; padding-left: 29px; padding-top: 5px; padding-bottom: 5px; margin-bottom: 11px; border-radius: 5px; color: #ffffff; width: 98%; ">Debes estar desconectado del hotel para poder canjearlo</div>';
                                    }
                                } else {
                                    echo '<div style=" background: #a74040; padding-left: 29px; padding-top: 5px; padding-bottom: 5px; margin-bottom: 11px; border-radius: 5px; color: #ffffff; width: 98%; ">Hubo un error con tu compra, porfavor comunicate con el soporte tecnico del hotel</div>';
                                }
                            }
                            ?>


                            <div class="page-content-collider">
                                <div class="page-content-max-width" style="flex-direction: column;align-items: flex-start;">
                                    <div class="page-content-collider-item">
                                        <div class="page-content-collider-content shop">
                                            <h1 class="page-content-collider-content-shop-title">Tienda de monedas <?= $config['hotelName'] ?></h1>
                                            <div class="page-content-collider-content-shop-column">
                                                <div class="page-content-collider-content-shop-left-side">
                                                    <div class="page-content-collider-content-shop-left-side-special-offer" style="padding: 28px 88px;">

                                                        <div class="page-content-collider-content">

                                                            <?php
                                                            if (empty($_GET['id'])) {
                                                            ?>
                                                                <h2 class="page-content-collider-content-news-right-side-content-title"><?= $lang["Nnotfoundheader"] ?> »</h2>
                                                                <p><?= $lang["Nnotfoundtxt"] ?></p>


                                                                <?php
                                                            } else {
                                                                if (!is_numeric($_GET['id'])) {
                                                                    exit('Nothing!');
                                                                }

                                                                $news = $dbh->prepare("SELECT * FROM mezz_shop WHERE id = :newsid");
                                                                $news->bindParam(':newsid', $_GET['id']);
                                                                $news->execute();

                                                                if ($news->RowCount() == 1) {
                                                                    while ($news2 = $news->fetch()) {

                                                                ?>
                                                                        <a href="/articleshop/<?php echo filter($news2["id"]); ?>" class="page-content-collider-content-article">
                                                                            <span class="page-content-collider-content-article-promo pixelated" style="background-image: url('<?php echo filter($news2["image"]); ?>')"></span>
                                                                            <h2 class="page-content-collider-content-article-title" style=" text-align: center; "><?php echo filter($news2["price"]); ?>$</h2>
                                                                            <div class="page-content-collider-content-article-bottom-side">
                                                                                <div class="page-content-collider-content-article-bottom-side-avatar">
                                                                                    <span class="page-content-collider-content-article-bottom-side-avatar-figure pixelated" style="background-image: url(/assets/images/shop/esmeralda.png);background-size: 16px;image-rendering: pixelated;"></span>
                                                                                    <span class="page-content-collider-content-article-bottom-side-avatar-username"><?php echo filter($news2["esmeraldas"]); ?> esmeraldas</span>
                                                                                </div>
                                                                                <div class="page-content-collider-content-article-bottom-side-avatar">
                                                                                    <span class="page-content-collider-content-article-bottom-side-avatar-figure pixelated" style="background-image: url(/assets/images/user-space/planeta.png);background-size: 16px;image-rendering: pixelated;"></span>
                                                                                    <span class="page-content-collider-content-article-bottom-side-avatar-username"><?php echo filter($news2["planetas"]); ?> planetas</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <div class="page-content-collider-content-article">
                                                                            <div class="page-content-collider-content-article-bottom-side">
                                                                                <div id="smart-button-container" style="z-index: 1;margin-left: 26px;">
                                                                                    <div style="text-align: center;">
                                                                                        <div id="paypal-button-container"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <script src="https://www.paypal.com/sdk/js?client-id=<?= $config['payclient_id']; ?>&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
                                                                                <script>
                                                                                    function initPayPalButton() {
                                                                                        paypal.Buttons({
                                                                                            style: {
                                                                                                shape: 'rect',
                                                                                                color: 'gold',
                                                                                                layout: 'vertical',
                                                                                                label: 'paypal',

                                                                                            },

                                                                                            createOrder: function(data, actions) {
                                                                                                return actions.order.create({
                                                                                                    purchase_units: [{
                                                                                                        "description": "<?= filter($news2["planetas"]); ?>",
                                                                                                        "amount": {
                                                                                                            "currency_code": "USD",
                                                                                                            "value": <?= filter($news2["price"]); ?>,
                                                                                                            "breakdown": {
                                                                                                                "item_total": {
                                                                                                                    /* Required when including the `items` array */
                                                                                                                    "currency_code": "USD",
                                                                                                                    "value": <?= filter($news2["price"]); ?>
                                                                                                                }
                                                                                                            }
                                                                                                        },
                                                                                                        "items": [{
                                                                                                            "name": "<?= filter($news2["title"]); ?>",
                                                                                                            /* Shows within upper-right dropdown during payment approval */
                                                                                                            "description": "<?= filter($news2["esmeraldas"]); ?>",
                                                                                                            /* Item details will also be in the completed paypal.com transaction view */
                                                                                                            "unit_amount": {
                                                                                                                "currency_code": "USD",
                                                                                                                "value": <?= filter($news2["price"]); ?>
                                                                                                            },
                                                                                                            "quantity": "1"
                                                                                                        }, ]
                                                                                                    }]
                                                                                                });
                                                                                            },

                                                                                            onApprove: function(data, actions) {
                                                                                                let URL = '/shopvalidpack1'
                                                                                                actions.order.capture().then(function(detalles) {
                                                                                                    console.log(detalles)

                                                                                                    let url = '/shopvalidpack1'

                                                                                                    return fetch(url, {
                                                                                                        method: 'post',
                                                                                                        headers: {
                                                                                                            'content-type': 'application/json'
                                                                                                        },
                                                                                                        body: JSON.stringify({
                                                                                                            detalles: detalles
                                                                                                        })
                                                                                                    })
                                                                                                });
                                                                                                return actions.order.capture().then(function(orderData) {

                                                                                                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                                                                                                    const element = document.getElementById('paypal-button-container');
                                                                                                    element.innerHTML = '';
                                                                                                    element.innerHTML = '<div style=" background: #368321; border-radius: 5px; margin-top: -4px; color: #fff; width: 190px; padding: 3px;margin-left: 11px;">Compra realizada </div><div style="font-size: 14px;margin-top: 13px;color: #858585;margin-left: -42px;width: 289px;">Recarga la pagina y canjea tu compra</div><br>';


                                                                                                });
                                                                                            },
                                                                                            onError: function(err) {
                                                                                                console.log(err);
                                                                                            }
                                                                                        }).render('#paypal-button-container');
                                                                                    }
                                                                                    initPayPalButton();
                                                                                </script>
</div>

</div>
                                                                            <?php
                                                                        }
                                                                    } else {
                                                                            ?>

                                                                            <h2 class="page-content-collider-content-news-right-side-content-title"><?= $lang["NnotfoundheaderMezz"] ?> »</h2>

                                                                            <p><?= $lang["Nnotfoundtxtmezz"] ?></p>


                                                                    <?php
                                                                    }
                                                                }
                                                                    ?>
                                                                            </div>
                                                                        </div>
                                                        
                                                    <h1 class="page-content-collider-content-shop-title">Cofres Disponibles <?= $config['hotelName'] ?></h1>
                                                    <div class="page-content-collider-content-shop-column">
                                                        <div class="page-content-collider-content-shop-left-side">
                                                            <div class="page-content-collider-content-shop-left-side-special-offer">
                                                                <div class="page-content-collider-content">
                                                                    <?php
                                                                    $belcr_get = $dbh->prepare("SELECT * FROM mezz_currency WHERE user_id = :userid AND reclaim = '0'");
                                                                    $belcr_get->bindParam(':userid', User::userData('id'));
                                                                    $belcr_get->execute();
                                                                    if ($belcr_get->RowCount() == 1) {
                                                                    ?>









                                                                        <?php
                                                                        $sql = $dbh->prepare("SELECT * FROM mezz_currency WHERE user_id = :userid AND reclaim = '0'");
                                                                        $sql->bindParam(':userid', User::userData('id'));
                                                                        $sql->execute();
                                                                        while ($consuloro = $sql->fetch()) { ?>


                                                                            <div style=" background: url(/assets/images/fondos/cofre3.png);width: 143px; height: 107px; border-radius: 5px; margin-left: 10px; border: 2px solid #e7e7e7;">
                                                                                <div style="position: absolute;font-size: 11px;margin-top: 3px;border-radius: 3px;margin-left: 6px;color: #5f5f5f;padding: 3px 6px 3px 6px;background: #ebebeb;"><?= $consuloro['product'] ?></div>
                                                                                <form method="post" action="">
                                                                                    <input type="hidden" name="planetas" value="<?= $consuloro['planetas'] ?>" />
                                                                                    <input type="hidden" name="esmeraldas" value="<?= $consuloro['esmeraldas'] ?>" />
                                                                                    <input type="hidden" name="producto" value="<?= $consuloro['product'] ?>" />
                                                                                    <input type="hidden" name="producid" value="<?= $consuloro['id'] ?>" />

                                                                                    <button type="submit" name="pack1" style="margin-top: 68px;margin-left: 33px;position: absolute;width: 72px;color: #202020;outline: none;border: none;padding: 6px 6px 5px 6px;height: 26px;border-radius: 4px;border-width: 2px 2px 2px 2px;border-color: #000;border-style: solid;font-weight: bold;line-height: 9px;font-family: arial;font-size: 11px;cursor: pointer;box-sizing: border-box;background: linear-gradient(to bottom, #e5e5e5 50%, #cdcdcd 50%);box-shadow: inset 0 0 0px 2px #cdcdcd;overflow: hidden;text-overflow: ellipsis;letter-spacing: normal;white-space: nowrap;-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;text-shadow: none;">Canjear</button>
                                                                                </form>
                                                                            </div>



                                                                        <?php
                                                                        }
                                                                    } else {
                                                                        ?>

                                                                        <p><?= $lang["Nnotfoundtxtmezz2"] ?></p>

                                                                    <?php

                                                                    }


                                                                    ?>



                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="page-content-collider-content-shop-right-side">
                                                    <div class="page-content-collider-content-shop-right-side-box">
                                                        <h3 class="page-content-collider-content-shop-right-side-box-title"><?= $lang["MyPurse"] ?></h3>
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
                                                                <div class="page-content-collider-content-shop-right-side-box-content-item">
                                                                    <img src="/assets/images/user-space/planeta.png" alt="Planeta" class="page-content-collider-content-shop-right-side-box-content-item-icon">
                                                                    <p class="page-content-collider-content-shop-right-side-box-content-item-text"><?= User::userData('vip_points') ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-content-collider-content-shop-right-side-box">
                                                        <h3 class="page-content-collider-content-shop-right-side-box-title"><?= $lang["HelpPay"] ?></h3>
                                                        <div class="page-content-collider-content-shop-right-side-box-content">
                                                            <?= $lang["HelpPayDesc"] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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