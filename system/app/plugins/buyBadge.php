<?php
	/**
	  *	@author Tim M. (Developer BrainCMS)
	  */
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}
	function buyBadge()
	{
		global $dbh,$config, $lang;
		if (isset($_POST['buyBadgeSubmit']) && isset($_POST['buyBadge']))
		{
			$getBadgeInfo = $dbh->prepare("SELECT * FROM shop_badge WHERE id = :id");
			$getBadgeInfo->bindParam(':id', $_POST['buyBadge']);
			$getBadgeInfo->execute();
			$getBadgeInfoData = $getBadgeInfo->fetch();
			if ($getBadgeInfoData['price'] !== null)
			{
				$price = $getBadgeInfoData['price'];
				if (User::userData('vip_points') >= $price) 
				{
					$addUserBadge = $dbh->prepare("
					INSERT INTO
						user_badges
							(user_id, badge_id, badge_slot)
					VALUES
							(:user_id, :badge_id, '0')
						");
					$addUserBadge->bindParam(':user_id', User::userData('id'));
					$addUserBadge->bindParam(':badge_id', $getBadgeInfoData['code']);
					$addUserBadge->execute();

					$removeDiamonds = $dbh->prepare("
					UPDATE users SET 
						vip_points=vip_points - :cost
					WHERE 
						id=:id
						");
					$removeDiamonds->bindParam(':id', User::userData('id'));
					$removeDiamonds->bindParam(':cost', $price);
					$removeDiamonds->execute();

					return html::errorSucces($lang["Bsuccess"]);
				}
				else 
				{
					return html::error($lang["Benoughdiamonds"]);
				}
			}
			else
			{
				return html::error($lang["Bnovalid"]);
			}
		}
	}