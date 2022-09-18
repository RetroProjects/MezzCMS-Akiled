<form method="POST">

	<center style="margin-bottom: -50px;">
		<input 
			type="text" 
			placeholder="<?=$lang["ShopcatLot"]?> 1-10" 
			name="num1" 
			class="indexinputloteria" 
			autocomplete="off">
			<br><br>
			<input 
			type="text" 
			placeholder="<?=$lang["ShopcatLot"]?> 1-10" 
			name="num2" 
			class="indexinputloteria" 
			autocomplete="off"
		>
			<div id="indexformsepare"></div>
				<button id="buttomloteria" type="submit" name="comprarloteria">
					<div id="b63" ></div>
						<?= $lang["loteriabotton"] ?> : <?= $config['precioloteria'] ?>
							<div 
								id="bdiamants" 
								style=" background: url(/assets/images/shop/esmeralda.png); transform: scale(2); image-rendering: pixelated; width: 15px; height: 17px; margin-top: 0px; margin-left: 15px">
							</div>
					</button>
		</center>
</form>
				<?php
					$premioloteria=$config['precioloteria']*2;
						if(User::userData('online') == "0") {
							if(isset($_POST["comprarloteria"])) {
								if (!empty($_POST['num1'])) {	
									if (!empty($_POST['num2'])) {
										if(User::userData('activity_points')>=$config['precioloteria']) {

											$num1=$_POST['num1'];
											$num2=$_POST['num2'];
											$aletorio1=rand(1,10);
											$aletorio2=rand(1,10);
												echo"<div class='successhop' style=' color: black; '>".$lang["tusnumerosloteria"]." ".$num1. " y ". $num2."</div>";

										if(($num1==$aletorio1  and $num2==$aletorio2) or ($num1==$aletorio2 and $num2==$aletorio1)) {

												$addloteria = $dbh->prepare("UPDATE users SET activity_points=activity_points+".$premioloteria." WHERE id=".User::userData('id'));
												$addloteria->execute();
											
												echo"<div class='successhop'>".$lang["Loteriasucces"]." ".$aletorio1. " y ". $aletorio2."</div>";//Aqui es el codigo de que gano los 2 numeros

										} else {

											if(($num1==$aletorio1) or ($num1==$aletorio2)) {
												echo "<div class='successhop'>".$lang["Loterianumsolo"]." ".$aletorio1. " y ". $aletorio2."</div>";

											} else {

												if(($num2==$aletorio2) or ($num2==$aletorio1)) {
													echo "<div class='successhop'>".$lang["Loterianumsolo"]." ".$aletorio1. " y ". $aletorio2."</div>";

												} else {

															$addloteria = $dbh->prepare("UPDATE users SET activity_points=activity_points-".$config['precioloteria']." WHERE id=".User::userData('id'));
															$addloteria->execute();
														
													echo"<div class='errorshop' style=' background: #c23028; color: #fff; padding: 10px; margin-top: 10px; '>". $lang["Loterianogano"]." ".$aletorio1. " y ". $aletorio2."</div>"; //Aqui el codigo si no gano nada
												}
											}
										}

									} else {
										echo"<div class='errorshop' style=' background: #c23028; color: #fff; padding: 10px; margin-top: 10px; '>".$lang["shoperror1"]."</div>";
									}

							} else {
									echo"<div class='errorshop' style=' background: #c23028; color: #fff; padding: 10px; margin-top: 10px; '>".$lang["invalidnum2"]."</div>";	
							}

						} else {
									echo"<div class='errorshop' style=' background: #c23028; color: #fff; padding: 10px; margin-top: 10px; '>".$lang["invalidnum1"]."</div>";	
						}
					}
					
				} else {
					echo"<div class='errorshop' style=' background: #c23028; color: #fff; padding: 10px; margin-top: 10px; '>".$lang["shoperror3"]."</div>";
				}
				
				?>