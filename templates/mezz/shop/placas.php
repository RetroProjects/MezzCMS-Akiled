<?php

	$tablebadge='user_badges';
	$codetable='badge_id';

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
<div class="ysnz29299" id="buttombadges">
<img style="transform:scale(2);" draggable="false" oncontextmenu="return false" src="<?= $config['badgeURL'] ?><?= $badges["badge_id"] ?>.gif">
<button id="buttombadgegreen" type="submit" name="comprarbadge<?= $badges["badge_id"] ?>" style="left: calc(10% + 5px);top: 33px;height:  65px;font-size: 15px;">
		<div id="b63"></div>
		<?= $lang["comprarplacap"] ?> 5 <div id="bdiamants" style=" background: url(/assets/images/shop/esmeralda.png); transform: scale(2); image-rendering: pixelated; width: 15px; height: 17px; margin-top: 0px; margin-left: 15px"></div>
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
					if(User::userData('activity_points')>='5')
					{
							$quitardiamonds = $dbh->prepare("UPDATE users SET activity_points=activity_points-5 WHERE id=".User::userData('id'));
							$quitardiamonds->execute();
						
						$ponerplaca = $dbh->prepare("INSERT INTO ".$tablebadge." (user_id, ".$codetable.") VALUES (".User::userData('id').", '".$badges["badge_id"]."')");
						$ponerplaca->execute();
						echo "<div class='successhop'>".$lang["comprarbadge"]."".$badges["badge_id"]."</div><meta http-equiv='refresh' content='2;URL=/shop' />";

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
<div class="ysnz29299" id="buttombadges">
<img style="transform:scale(2);" draggable="false" oncontextmenu="return false" src="<?= $config['badgeURL'] ?><?= $badges["badge_id"] ?>.gif">
<button id="buttombadgegreen" type="submit" name="comprarbadge<?= $badges["badge_id"] ?>" style="left: calc(10% + 5px);top: 33px;height: 65px;font-size: 15px;background: rgb(189, 27, 27);border-bottom: 4px solid rgb(82, 40, 40);">
		<div id="b63"></div>
		<?= $lang["inventariobadge"] ?>
		</button>
</div>
</form>
<?php
}
}
?>