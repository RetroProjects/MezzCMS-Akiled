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
    margin-bottom: 20px;
    position: fixed;
    margin-top: -70px;
    margin-left: 60px;
    z-index: 9999999999;
}
.successhop {
    color: #fff;
    background: #222;
    font-size: 20px;
    padding: 10px;
    text-transform: uppercase;
    margin-bottom: 20px;
    position: fixed;
    margin-top: -70px;
    margin-left: 60px;
    z-index: 9999999999;
}
</style>
<div id="boutiqueload" style="display: block;">
    <div id="b279"></div>
    <div id="b280"></div>
    <div id="b281"></div>
    <div id="b282"></div>
    <div id="b283">
        <div id="b284" style=" transform: scale(2); image-rendering: pixelated; background: url(/templates/<?= $config['skin'] ?>/assets/images/placa.gif) no-repeat; background-position: center; "></div>
        <div id="b285"><?=$lang["ShopTitlecat"]?> <?=$lang["HeaderShop5"]?>
        </div>
    </div>

<div id="b286" style="width: 60%;padding: 20px;margin-top: 120px;font-size: 150%;height: 290px;left: calc(35% - 212px);color: #fff;background: #ffffff2b;">


<?php
if ($config['hotelEmu'] == 'arcturus')
{
	$tablebadge='users_badges';
	$codetable='badge_code';
}
else
{
	$tablebadge='user_badges';
	$codetable='badge_id';
}
$getBadges = $dbh->prepare("SELECT * FROM cms_badges ORDER BY id DESC");
$getBadges->execute();
while($badges = $getBadges->fetch())
{
$contarbadge = $dbh->prepare("SELECT * FROM ".$tablebadge." WHERE (user_id=".User::userData('id').") AND (".$codetable."='".$badges["badge_id"]."')");
$contarbadge->execute();
$contar = $contarbadge->fetch();
if($contar==0)
{
?>
<form method="POST">
<div class="ysnz29299" id="b104" style="width: 332px;">
<img style="transform:scale(2);" draggable="false" oncontextmenu="return false" src="<?= $config['badgeURL'] ?><?= $badges["badge_id"] ?>.gif">
<button id="b62" type="submit" name="comprarbadge<?= $badges["badge_id"] ?>" style="left: calc(10% + 5px);top: 33px;height:  65px;font-size: 27px;">
		<div id="b63"></div>
		<?= $lang["comprarplacap"] ?> 5 <div id="bdiamants" style=" background: url(/templates/<?= $config['skin'] ?>/assets/images/esmeralda.png); transform: scale(2); image-rendering: pixelated; width: 15px; height: 17px; margin-top: 0px; margin-left: 15px"></div>
		</button>
</div>
</form>

<?php 
		if(isset($_POST["comprarbadge".$badges["badge_id"]]))
		{
			if(User::userData('online') == "0")
			{
					$contarbadge = $dbh->prepare("SELECT * FROM ".$tablebadge." WHERE (user_id=".User::userData('id').") AND (".$codetable."='".$badges["badge_id"]."')");
					$contarbadge->execute();
					$contar = $contarbadge->fetch();
				if($contar==0)
				{
					if(User::userData('vip_points')>='5')
					{
						if ($config['hotelEmu'] == 'arcturus')
						{
							$quitardiamonds = $dbh->prepare("UPDATE users_currency SET amount=amount-5 WHERE user_id=".User::userData('id')." AND type=5");
							$quitardiamonds->execute();
						}
						else
						{
							$quitardiamonds = $dbh->prepare("UPDATE users SET vip_points=vip_points-5 WHERE id=".User::userData('id'));
							$quitardiamonds->execute();
						}
						$ponerplaca = $dbh->prepare("INSERT INTO ".$tablebadge." (user_id, ".$codetable.") VALUES (".User::userData('id').", '".$badges["badge_id"]."')");
						$ponerplaca->execute();
						echo "<div class='successhop'>".$lang["comprarbadge"]."".$badges["badge_id"]."</div><meta http-equiv='refresh' content='2;URL=/placas' />";

					}
					else
					{
						echo "<div class='errorshop'>".$lang["shoperror1"]."</div>";//Mensaje de no tienes suficientes diamantes
					}
				}
				else
				{
					echo "<div class='errorshop'>".$lang["errorplacadoble"]."</div>";
				}
			}
			else
			{
				echo "<div class='errorshop'>".$lang["shoperror3"]."</div>";//mensaje de que debe estas desconectado
			}
		}

}
else
{
?>
<form method="POST">
<div class="ysnz29299" id="b104" style="width: 332px;">
<img style="transform:scale(2);" draggable="false" oncontextmenu="return false" src="<?= $config['badgeURL'] ?><?= $badges["badge_id"] ?>.gif">
<button id="b62" type="submit" name="comprarbadge<?= $badges["badge_id"] ?>" style="left: calc(10% + 5px);top: 33px;height: 65px;font-size: 27px;background: rgb(189, 27, 27);border-bottom: 4px solid rgb(82, 40, 40);">
		<div id="b63"></div>
		<?= $lang["inventariobadge"] ?>
		</button>
</div>
</form>
<?php
}
}
?>





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
         <div class="bdiamants" id="bdiamants" style=" background: url(/templates/<?= $config['skin'] ?>/assets/images/esmeralda.png);transform: scale(2); image-rendering: pixelated; width: 15px; height: 17px; margin-top: 10px; margin-left: 0px;"></div>
         <div id="diamants" style="margin-left: 20px;margin-top: 5px;"><?= User::userData('vip_points') ?></div>
      </div>

   </div>
</div>
</body>