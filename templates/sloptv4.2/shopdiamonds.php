<?php
	include_once 'templantes/header-shop.php';

?>

<div id="boutiqueload" style="display: block;">
    <div id="b279"></div>
    <div id="b280"></div>
    <div id="b281"></div>
    <div id="b282"></div>
    <div id="b283">
        <div id="b284" style=" transform: scale(2); image-rendering: pixelated; background: url(/templates/<?= $config['skin'] ?>/assets/images/shop.gif) no-repeat; background-position: center; "></div>
        <div id="b285"><?= $lang["ShopTitlecat"] ?> Diamantes
        </div>
    </div>

<div id="b286" style="width: 60%;padding: 20px;margin-top: 150px;font-size: 150%;height: 250px;left: calc(35% - 212px);color: #fff;background: #ffffff2b;">



<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="5CT9UMHXCMKEY">
<table>
<tr><td><input type="hidden" name="on0" value="Precios">Comprar via <b>Paypal</b></td></tr><tr><td><select name="os0" class="indexinput" style="font-size: 20px;margin-top: 10px;">
	<option value="40 Diamantes">40 Diamantes €1.50 EUR</option>
	<option value="60 Diamantes">60 Diamantes €2.50 EUR</option>
	<option value="80 Diamantes">80 Diamantes €3.50 EUR</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="EUR">
<button style="left: calc(42% + 5px);font-size: 25px;bottom: -1px;height: 61px;" id="b62" name="submit" name="comprarloteria">
<div id="b63"></div>
Comprar
</button>



<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>





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