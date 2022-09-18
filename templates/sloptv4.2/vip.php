<?php
	include_once 'templantes/header-shop.php';

?>

<div id="boutiqueload" style="display: block;">
    <div id="b279"></div>
    <div id="b280"></div>
    <div id="b281"></div>
    <div id="b282"></div>
    <div id="b283">
        <div id="b284" style=" transform: scale(2); image-rendering: pixelated; background: url(/templates/<?= $config['skin'] ?>/assets/images/SVIP.gif) no-repeat; background-position: center; "></div>
        <div id="b285"><?= $lang["ShopTitlecat"] ?> Suscripción VIP
        </div>
    </div>

<div id="b286" style="width: 60%;padding: 20px;margin-top: 150px;font-size: 150%;height: 250px;left: calc(35% - 212px);color: #fff;background: #ffffff2b;">

   
   <div id="cityclubelem" class="cc7">
<div class="cc8">Suscripción VIP
</div>
<div class="cc9">
<div class="cc10">

<div class="cc12">Tiempo restante
</div>

<div id="cityclubtime" class="cc14">
<x style="cursor:pointer;" onclick="openCityClub()"><u>3 Días</u></x> </div>
</div>
<div class="cc15">
<img src="https://www.habbo.com/habbo-imaging/avatarimage?figure=hr-3163-45.ca-3511-1.hd-180-2.lg-275-62.sh-3206-64.ch-215-1297&amp;size=l&amp;direction=2&amp;head_direction=2">
</div>
</div>
<div onclick="joinCityClub()" id="joinclub" class="cc16" style="top: 5px;background: #2f4861;"> 
<div class="cc17"></div>
<div id="joinclubtext" class="cc18">

		Comprar 1 mes : <?=$config['preciovip'];?>
		<div id="bdiamants" style=" float: right; top: -8px; "></div>

</div>

<div class="cc19">


</div>
</div>
<div onclick="joinCityClub()" id="joinclub" class="cc16">
<div class="cc30"></div>
<div id="joinclubtext" class="cc18">

		Comprar 3 meses : 80
		<div id="bdiamants" style=" float: right; top: -8px; "></div>
<?php buyvip(); ?>
			<?= $lang["VvipBuyslogan"] ?>
			<form method="post">
				<input type="submit" class="submit" value="<?= $lang["VvipBuyButton"] ?>" name="getvip" style="margin-top: 10px;">
			</form>
</div>
</div>
<div class="cc19">


</div>
</div>
</div>
   
<div id="b48" style=" margin-top: 18px; ">
<?= $lang["Shopdesc"] ?></div>



</div>
    <div style="top:75px;z-index:999;" id="fermeture"></div>
</div>
<div id="b64">
   <div id="b65" style="top: 10px;">
      <div id="b66">
         <div class="bduckets" id="bduckets" style=" background: url(/templates/<?= $config['skin'] ?>/assets/images/credits.png);transform: scale(2); image-rendering: pixelated; width: 19px; height: 17px; margin-top: 10px; margin-left: 10px;"></div>
         <div id="duckets" style="margin-left: 20px;margin-top: 5px;"><?= User::userData('credits') ?></div>
      </div>
      <div id="b66">
         <div class="bdiamants" id="bdiamants"></div>
         <div id="diamants"><?= User::userData('vip_points') ?></div>
      </div>

   </div>
</div>
</body>