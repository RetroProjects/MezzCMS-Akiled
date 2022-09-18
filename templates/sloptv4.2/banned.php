<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title><?= $lang["HeaderTitulo"]; ?></title>
      <link rel="stylesheet" href="/templates/<?= $config['skin'] ?>/assets/css/mant.css?23" type="text/css" media="all" />

</head>

<body style=" background: #222; ">
<div id="nin1">
			   <?php
							if (loggedIn())
							{
								$user = User::userData('username');
							}
							else
							{
								$user = null;
							}
							$banQuery = $dbh->prepare("SELECT * FROM bans WHERE (bantype = 'user' && value = :user) OR (bantype = 'ip' && value = '".userIp()."')");
							$banQuery->bindParam(':user', $user); 
							$banQuery->execute(); 
							while($banInfo = $banQuery->fetch())
							{
							?>
               <div id="nin12" style=" margin-top: 100px; margin-left: 20%; width: 60%; ">
                  <div id="nin13">
                     <div id="nin14"></div>
                     <div id="nin15">
                        <?=$lang["banned3"];?>
                     </div>
                  </div>
				  <div style="padding:10px;font-family: arial;color: #404040;">
							<?= $lang["Bvisitor"] ?>
							<b><?= $banInfo['reason']; ?></b>
							<br /><br />
							<?= $lang["Bbantil"] ?> <b><u><?php echo gmdate("d-m-Y H:i", $banInfo['added_date']); ?></u></b> <?= $lang["Buntil"] ?> <b><u><?php echo gmdate("d-m-Y H:i", $banInfo['expire']); ?></u></b>.<br />Ban ID: <b><?= $banInfo['id']; ?></b>
							<br>
				  </div>
               </div>						
							<?php 
							}
						?>
			  
</div>

</body>


</html>