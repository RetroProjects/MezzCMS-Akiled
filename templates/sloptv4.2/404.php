<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title><?= $lang["title404"]; ?></title>
    <link rel="stylesheet" href="/templates/<?= $config['skin']; ?>/assets/css/404.css?<?=$hotel['cache']; ?>" type="text/css">
    <script type="text/javascript" src="/templates/<?= $config['skin']; ?>/assets/js/app.js?<?=$hotel['cache']; ?>"></script>

</head>

<body>
<div class="position-absolute w-100 h-100vh bg-orange d-flex align-items-center justify-content-center flex-column">
        <h1 class="text-white font-weight-600" style="font-size: 3.3rem !important;"><?=$lang["desc404"];?></h1>
        <h4 class="text-white font-weight-600"><?= $lang["title404"]; ?></h4>
    </div>
</body>
</html>