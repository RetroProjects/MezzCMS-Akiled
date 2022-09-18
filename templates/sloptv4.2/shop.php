<?php
	include_once 'templantes/header-shop.php';

?>

<div id="boutiqueload" style="display: block;">
    <div id="b279" ></div><?php
	include_once 'templantes/header-shop.php';

?>

<div id="boutiqueload" style="display: block;">
    <div id="b279" ></div>
    <div id="b280"></div>
    <div id="b281"></div>
    <div id="b282"></div>
    <div id="b283">
        <div id="b284" style=" transform: scale(2); image-rendering: pixelated; background: url(/templates/<?= $config['skin'] ?>/assets/images/shop.png) no-repeat; background-position: center; "></div>
        <div id="b285"><?=$lang["HeaderShop1"]?> <?=$config['hotelName']?>
        </div>
    </div>

<div id="b286" style="width: 60%;padding: 20px;margin-top: 150px;font-size: 150%;height: 250px;left: calc(35% - 212px);color: #fff;background: #ffffff2b;">
<?=$lang["Shopcat1"]?></div>
    <div style="top:75px;z-index:999;" id="fermeture"></div>
</div>
<div id="b64">
   <div id="b65" style="top: 10px;">
      <div id="b66">
         <div class="bduckets" id="bduckets" style=" background: url(/templates/<?= $config['skin'] ?>/assets/images/credits.png);transform: scale(2); image-rendering: pixelated; width: 19px; height: 17px; margin-top: 10px; margin-left: 10px;"></div>
         <div id="duckets" style="margin-left: 20px;margin-top: 5px;"><?= User::userData('credits') ?></div>
      </div>
      <div id="b66">
         <div class="bdiamants" id="bdiamants" style=" background: url(/templates/<?= $config['skin'] ?>/assets/images/esmeralda.png);transform: scale(2); image-rendering: pixelated; width: 15px; height: 17px; margin-top: 10px; margin-left: 0px;"></div>
         <div id="diamants" style="margin-left: 20px;margin-top: 5px;"><?= User::userData('vip_points') ?></div>
      </div>

   </div>
</div>
</body>