<?php
	include_once 'templantes/header-shop.php';

?>
<style>
.errorshop {
    color: #7d3632;
    font-size: 20px;
}
.successhop {
    color: #6fc95e;
    font-size: 20px;
}
</style>

<div id="boutiqueload" style="display: block;">
    <div id="b279"></div>
    <div id="b280"></div>
    <div id="b281"></div>
    <div id="b282"></div>
    <div id="b283">
        <div id="b284" style=" transform: scale(2); image-rendering: pixelated; background: url(/templates/<?= $config['skin'] ?>/assets/images/loteria.gif) no-repeat; background-position: center; "></div>
        <div id="b285"><?=$lang["ShopTitlecat"]?> <?=$lang["HeaderShop4"]?>
        </div>
    </div>

<div id="b286" style="width: 60%;padding: 20px;margin-top: 150px;font-size: 150%;height: 350px;left: calc(35% - 212px);color: #fff;background: #ffffff2b;">
<div id="b103">
      
<div id="b48">

<div style="position:relative;" id="settings45">
	<form method="POST">

<input type="text" placeholder="<?=$lang["ShopcatLot"]?> 1-10" name="num1" class="indexinput" style="width:calc(100% - 25px);" autocomplete="off"><br><br>
<input type="text" placeholder="<?=$lang["ShopcatLot"]?> 1-10" name="num2" class="indexinput" style="width:calc(50% - 25px);" autocomplete="off">
<div id="indexformsepare"></div>
		<button style="left: calc(52% + 5px);font-size: 32px;bottom: -3px;" id="b62" type="submit" name="comprarloteria">
		<div id="b63" ></div>
		<?= $lang["loteriabotton"] ?> : <?= $config['precioloteria'] ?>
		<div id="bdiamants" style=" background: url(/templates/<?= $config['skin'] ?>/assets/images/esmeralda.png); transform: scale(2); image-rendering: pixelated; width: 15px; height: 17px; margin-top: 0px; margin-left: 15px"></div>
		</button>
</form>
		<?php
					$premioloteria=$config['precioloteria']*2;
				if(User::userData('online') == "0")
				{
					if(isset($_POST["comprarloteria"]))
					{
						if (!empty($_POST['num1']))
						{	
							if (!empty($_POST['num2']))
							{
									if(User::userData('vip_points')>=$config['precioloteria'])
									{
										$num1=$_POST['num1'];
										$num2=$_POST['num2'];
										$aletorio1=rand(1,10);
										$aletorio2=rand(1,10);
										echo"<div class='successhop' style=' color: #fff; '>".$lang["tusnumerosloteria"]." ".$num1. " y ". $num2."</div>";
										if(($num1==$aletorio1  and $num2==$aletorio2) or ($num1==$aletorio2 and $num2==$aletorio1))
										{
											if ($config['hotelEmu'] == 'arcturus')
											{
												$addloteria = $dbh->prepare("UPDATE users_currency SET amount=amount+".$premioloteria." WHERE user_id=".User::userData('id')." AND type=5");
												$addloteria->execute();
											}
											else
											{
												$addloteria = $dbh->prepare("UPDATE users SET vip_points=vip_points+".$premioloteria." WHERE id=".User::userData('id'));
												$addloteria->execute();
											}
												echo"<div class='successhop'>".$lang["Loteriasucces"]." ".$aletorio1. " y ". $aletorio2."</div>";//Aqui es el codigo de que gano los 2 numeros
										}
										else
										{
											if(($num1==$aletorio1) or ($num1==$aletorio2))
											{
												echo "<div class='successhop'>".$lang["Loterianumsolo"]." ".$aletorio1. " y ". $aletorio2."</div>";
											}
											else
											{
												if(($num2==$aletorio2) or ($num2==$aletorio1))
												{
													echo "<div class='successhop'>".$lang["Loterianumsolo"]." ".$aletorio1. " y ". $aletorio2."</div>";
												}
												else
												{
														if ($config['hotelEmu'] == 'arcturus')
														{
															$addloteria = $dbh->prepare("UPDATE users_currency SET amount=amount-".$config['precioloteria']." WHERE user_id=".User::userData('id')." AND type=5");
															$addloteria->execute();
														}
														else
														{
															$addloteria = $dbh->prepare("UPDATE users SET vip_points=vip_points-".$config['precioloteria']." WHERE id=".User::userData('id'));
															$addloteria->execute();
														}
													echo"<div class='errorshop' style=' background: #c23028; color: #fff; padding: 10px; margin-top: 10px; '>". $lang["Loterianogano"]." ".$aletorio1. " y ". $aletorio2."</div>"; //Aqui el codigo si no gano nada
												}
											}
										}
									}
									else
									{
										echo"<div class='errorshop' style=' background: #c23028; color: #fff; padding: 10px; margin-top: 10px; '>".$lang["shoperror1"]."</div>";
									}
							}
							else
							{
									echo"<div class='errorshop' style=' background: #c23028; color: #fff; padding: 10px; margin-top: 10px; '>".$lang["invalidnum2"]."</div>";	
							}
						}
						else
						{
									echo"<div class='errorshop' style=' background: #c23028; color: #fff; padding: 10px; margin-top: 10px; '>".$lang["invalidnum1"]."</div>";	
						}
					}
				}
				else
				{
					echo"<div class='errorshop' style=' background: #c23028; color: #fff; padding: 10px; margin-top: 10px; '>".$lang["shoperror3"]."</div>";
				}
				
				?>
<div id="b37">
         <h2 style="font-size:100%;margin-top: 5px;font-weight: 100;"><?=$lang["loteriamsj1"]?></h2>
         <p style="font-size: 90%;font-weight: 100;margin-top: -10px;"><?=$lang["loteriamsj2"]?></p>
      </div>
</div>

</div>
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