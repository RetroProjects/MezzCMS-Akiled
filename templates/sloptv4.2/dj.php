<?php
	$menu="staff";
	include_once 'templantes/header.php';
?>
                        <div style="margin-top: 100px;width: 500px;float:left;width: 60%;">

			<?php
			$getdj = $dbh->prepare("SELECT id,rank FROM dj WHERE id > 0 and id < 3 ORDER BY id ASC");
			$getdj->execute();
			while ($dj = $getdj->fetch())
			{	
				echo '
		   						<div style="font-size: 24px;background: rgba(39, 39, 39, 0.92);border-radius: 3px 3px 0px 0px;padding: 5px;padding-left: 30px;border-bottom: 2px solid #404040;">' . $dj['rank'] . '</div>
							<fieldset class="form__fieldset form__fieldset--box" style="margin: 0;border-radius: 0px 0px 3px 3px;padding: 10px;margin-bottom: 20px;">


				';
				$getMembers = $dbh->prepare("SELECT id,username,motto,look,online,tarea,last_online FROM users WHERE dj = :djid");
				$getMembers->bindParam(':djid', $dj['id']);
				$getMembers->execute();
				if ($getMembers->RowCount() > 0)
				{
					while ($member = $getMembers->fetch())
					{
						$username = filter($member['username']);
						$motto = filter($member['motto']);
						$look = filter($member['look']);
						$online = filter($member['online']);
						$tarea = filter($member['tarea']);
						
						$d = floor($belrs_row['OnlineTime']/86400);
								$h = floor(($belrs_row['OnlineTime']-$d*86400)/3600);
								$time_str = $d.' '.$lang["topon1"].' '.$h.' '.$lang["topon2"].' ';
						if($online == 1){ $OnlineStatus = "online"; } else { $OnlineStatus = "offline"; }
						echo '
		<table width="95%" cellspacing="0" cellpadding="0" style=" padding-left: 15px; background: rgba(34, 34, 34, 0.27); float: left; margin-left: 10px!important; margin: 0;margin-bottom: 10px!important;">
<tr>
<td rowspan="3" width="35%" align="center" style=" background: url(/templates/sloptv4/assets/images/imgstaff'.(rand(1,4)).'.png); "><div style="background-image: url('.$config['lookUrl'].''.$look.'&amp;size=l&amp;direction=3&amp;head_direction=2);width: 100px; height: 123px; margin-left: -30px; background-repeat: no-repeat; -webkit-filter: drop-shadow(3px 1px 0 #fff) drop-shadow(-3px 2px 0 #fff) drop-shadow(0 -3px 0 #fff); margin-top: -30px; margin-bottom: 20px;"></div></td>
<td style="padding-left: 15px;"><a href="/home/' .$username . '" style=" color: #fff; "><p>' .$username . '</p></a></td>
</tr>
<tr>
<td style="padding-left: 15px;background: rgba(34, 34, 34, 0.62);"><p style=" font-size: 17px; ">' .$motto . '</p></td>
</tr>
<tr>
<td style="padding-left: 15px;background: rgba(34, 34, 34, 0.62);"><p style=" font-size: 17px; ">'.$lang["HkRankTarea"].': ' .$tarea . '</p></td>
</tr>

</table>
						';
					}
				}
				else
				{
					echo '<div style="padding: 20px;font-size: 17px;margin-top: -20px;margin-bottom: -20px;">'.$lang["Snostaff"].'</div>';
				}
				echo '
				</fieldset>';
			}
		?>

                        
                        </div>
						<div style="float: right;margin-top: 100px;width: 35%;">
						<div style="font-size: 24px;background: rgba(39, 39, 39, 0.92);border-radius: 3px 3px 0px 0px;padding: 5px;padding-left: 30px;border-bottom: 2px solid #404040;"><?=$lang["Staffinfodjs"]?></div>
						<fieldset class="form__fieldset form__fieldset--box" style="margin: 0;border-radius: 0px 0px 3px 3px;padding: 10px;margin-bottom: 20px;">


				<div style="padding: 20px;font-size: 17px;margin-top: -20px;margin-bottom: -20px;"><?= $lang["Staffinfo3"]?></div>
				            <div class="col-lg-4">
                <img src="/templates/<?= $config['skin']; ?>/assets/images/staff.png" alt="Staff">
            </div>
				</fieldset>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>