<?php
	include_once 'templantes/header-shop.php';

?>
<style>
.errorshop {
    color: #fff;
    background: #c23028;
    font-size: 20px;
    padding: 10px;
    text-transform: uppercase;
    margin-top: 120px;
    margin-left: 150px;
    position: absolute;
    z-index: 9999999999999999999;
}
.successhop {
    color: #fff;
    background: #222;
    font-size: 20px;
    padding: 10px;
    text-transform: uppercase;
    margin-top: 120px;
    margin-left: 150px;
    position: absolute;
    z-index: 9999999999999999999;
}
</style>
<div id="boutiqueload" style="display: block;">
    <div id="b279"></div>
    <div id="b280"></div>
    <div id="b281"></div>
    <div id="b282"></div>
    <div id="b283">
        <div id="b284" style=" transform: scale(2); image-rendering: pixelated; background: url(/themes/<?= $config['skin'] ?>/assets/images/bank.gif) no-repeat; background-position: center; "></div>
        <div id="b285"><?=$lang["shopcatban"]?>
        </div>
    </div>
    <div id="b286">
        <div id="b287"></div>
        <input id="b291" value="50" disabled>
    </div>
	<form method="POST">
    <div id="b292">
        <div id="b293"></div>
        <div id="b294">500</div>
        <button id="b295" type="submit" name="canjeardiamonds" style=" border: 0; ">
            <?=$lang["shopcatbanboton"]?>
        </button>
    </div>
	</form>
    <div style="top:75px;z-index:999;" id="fermeture"></div>
</div>
<?php
if(isset($_POST["canjeardiamonds"]))
{
	if(User::userData('online') == "0")
	{
		if(User::userData('credits') >='500')
		{
			if ($config['hotelEmu'] == 'arcturus')
			{
				$addcanjear = $dbh->prepare("UPDATE users SET credits=credits-500 WHERE id=".User::userData('id'));
				$addcanjear->execute();
				$addcanjearadd = $dbh->prepare("UPDATE users_currency SET amount=amount+50 WHERE user_id=".User::userData('id')." AND type=5");
				$addcanjearadd->execute();
			}
			else
			{
				$addcanjear = $dbh->prepare("UPDATE users SET credits=credits-500, vip_points=vip_points+50 WHERE id=".User::userData('id'));
				$addcanjear->execute();
			}
		}
		else
		{
			echo"<div class='errorshop'>".$lang["shopcanjearerr2"]."</div>";
		}
	}
	else
	{
		echo"<div class='errorshop'>".$lang["shopcanjearerr1"]."</div>";
	}
}
	  ?>
<div id="b64">
   <div id="b65" style="top: 10px;">
      <div id="b66">
         <div class="bduckets" id="bduckets" style=" background: url(/themes/<?= $config['skin'] ?>/assets/images/credits.png);transform: scale(2); image-rendering: pixelated; width: 19px; height: 17px; margin-top: 10px; margin-left: 10px;"></div>
         <div id="duckets" style="margin-left: 20px;margin-top: 5px;"><?= User::userData('credits') ?></div>
      </div>
      <div id="b66">
         <div class="bdiamants" id="bdiamants"></div>
         <div id="diamants"><?= User::userData('vip_points') ?></div>
      </div>

   </div>
</div>
</body>