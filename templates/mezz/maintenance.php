<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/styles/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Virtual World, Avatar Chat and Pixel Art - <?= $config['hotelName'] ?></title>
</head>

<body class="container">
    <script src="/assets/scripts/page-load.js"></script>
    <div class="page-content">
        <header class="page-content-header pixelated">
            <div class="page-content-max-width">
                <div class="page-content-header-column">
                    <img src="https://habbofont.net/font/habbo_new_big/habbo.gif" alt="Habbo Big Logo" class="page-content-header-logo">
                </div>
            </div>
        </header>
        <div class="page-content-collider" style="background-color: transparent;">
            <div class="page-content-max-width" style="flex-direction: column;align-items: flex-start;">
                <div class="page-content-collider-item">
                    <div class="page-content-collider-content maintenance">
                        <div class="page-content-collider-content-maintenance-box">
                            <h2 class="page-content-collider-content-maintenance-box-title">Maintenance Break</h2>
                            <p class="page-content-collider-content-maintenance-box-text">Sorry! Habbo is being worked on al. Use moment. We'll be back soon. We promise.</p>
                            <img src="/assets/images/maintenance/frank.png" alt="Maintenance" class="page-content-collide-item-content-maintenance-box-image">
                        </div>
                        <iframe src="https://discord.com/widget?id=952572046196494426&theme=light" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('includes/footer.php'); ?>
        <script src="/assets/scripts/app.js"></script>
    </div>
</body>

</html>