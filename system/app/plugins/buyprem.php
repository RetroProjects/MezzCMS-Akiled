<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}
	function buyprem()
	{
		global $dbh,$config,$lang;
		if (isset($_POST['getprem']))
		{
			if (User::userData('vip_points') >= $config['premCost'])
			{
				if (User::userData('online') == 1)
				{
					return html::error($lang["Vonline"]);
				}
				else
				{
					if (User::userData('rank_vip') == $config['premRankToGet'])
					{
						return html::error('Je bent al premium!');
					}
					else
					{
						$removeDiamonds = $dbh->prepare("
						UPDATE users SET 
						vip_points=vip_points - :cost
						WHERE 
						id=:id
						");
						$removeDiamonds->bindParam(':id', $_SESSION['id']);
						$removeDiamonds->bindParam(':cost', $config['premCost']);
						$removeDiamonds->execute();
						$giveVipRank = $dbh->prepare("
						UPDATE users SET 
						rank_vip = :viprank
						WHERE 
						id=:id
						");
						$giveVipRank->bindParam(':id', $_SESSION['id']);
						$giveVipRank->bindParam(':viprank', $config['premRankToGet']);
						$giveVipRank->execute();
						$giveVipBadge = $dbh->prepare("
						INSERT INTO
						user_badges
						(user_id, badge_id, badge_slot)
						VALUES
						(
						:id, 
						:badgeid, 
						0
						)");
						$giveVipBadge->bindParam(':id', $_SESSION['id']);
						$giveVipBadge->bindParam(':badgeid', $config['premBadge']);
						$giveVipBadge->execute();
						return html::errorSucces('Je hebt succesvol premium gekocht!');
					}
				}
			}
			else
			{
				return html::error($lang["VnoDimonds"]);
			}
		}
	}