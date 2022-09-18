<head>
<title><?=$lang["Shoptitle"]?></title>
    <link rel="stylesheet" href="/templates/<?= $config['skin'] ?>/assets/css/shop.css?id=<?=$hotel['cache']?>">
</head>
<body>
<div id="b1">
    <div id="webcenter">

        <a href="/shop">
            <div id="b2">
                <div id="b3">
                    <img src="/templates/<?= $config['skin'] ?>/assets/images/shop.png" style=" transform: scale(2); image-rendering: pixelated; ">
                </div>
                <?=$lang["HeaderShop1"]?>
            </div>
        </a>
        
        <a href="/loteria">
            <div id="b2">
                <div id="b3">
                    <img src="/templates/<?= $config['skin'] ?>/assets/images/loteria.gif" style=" transform: scale(2); image-rendering: pixelated; ">
                </div>
                <?=$lang["HeaderShop4"]?>
            </div>
        </a>
        <a href="/placas">
            <div id="b2">
                <div id="b3">
                    <img src="/templates/<?= $config['skin'] ?>/assets/images/placa.gif" style=" transform: scale(2); image-rendering: pixelated; ">
                </div>
                <?=$lang["HeaderShop5"]?>
            </div>
        </a>

        <a href="/"><div id="b3inven">
            <div id="b3invenicone"></div>
        </div>
		</a>
    </div>
</div>

