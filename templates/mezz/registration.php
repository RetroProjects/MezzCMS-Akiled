<html lang="en">
<style>
    .error {
        text-align: center;
        font-size: 15px;
        background: #f44336;
        display: none;
        width: 100%;
        color: #fff;
        padding: 0 10px;
        border-radius: 2px;
        line-height: 40px;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/styles/app.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <title><?= $lang["Rtittle"]; ?> - <?= $lang["NameHotel"]; ?></title>
</head>
<span class="error" id="top"></span>

<body class="container" style="width: 100%;">
    <script src="/assets/scripts/page-load.js"></script>
    <?php
    $security = rand(100000, 900000);
    ?>
    <div class="page-content">
        <?php User::Register(); ?>
        <?php User::Login(); ?>
        <?php include_once("auth/login.php"); ?>
        <?php include_once("includes/menu.php"); ?>
        <div class="page-content-collider">
            <div class="page-content-max-width" style="flex-direction: column;align-items: flex-start;">
                <div class="page-content-collider-item" style="align-items: center;">
                    <div class="page-content-collider-content registration">
                        <div class="page-content-collider-content-registration">
                            <h2 class="page-content-collider-content-registration-title"><?= $lang["Rtitulos"]; ?></h2>
                            <?php include_once("auth/register.php"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once("includes/footer.php"); ?>
    </div>
    <script src="/assets/scripts/app.js"></script>
</body>

</html>
<script src="https://code.jquery.com/jquery-latest.min.js?v=4" type="text/javascript"></script>