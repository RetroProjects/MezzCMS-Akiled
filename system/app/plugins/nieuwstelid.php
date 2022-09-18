<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}
	function NieuwsteLid()
	{
		global $config;
		echo'<style>.staff-offline
		{
		text-indent: -9999px;
		width: 0px;
		margin-right: 25px;
		height: 0px;
		border: 5px solid #F37373;
		box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.2);
		border-radius: 50%;
		float: right;
		}
		.staff-online{text-indent: -9999px;
		width: 0px;
		margin-right: 25px;
		height: 0px;
		border: 5px solid #73F375;
		box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.2);
		border-radius: 50%;
		float: right;
		}
		text-dec. {
			color: #FF970F;
		}
		</style>
		';
		global $dbh,$lang;
		$latestUser = $dbh->prepare("SELECT id,username,motto,look,online FROM users ORDER BY ID DESC LIMIT 1");  
		$latestUser->execute();
		$getUserData = $latestUser->fetch();
		If($latestUser->RowCount() > 0)
		{
			if($getUserData['online'] == 1){ $OnlineStatus = "online"; } else { $OnlineStatus = "offline"; }
			echo '<div class="userNew" style="height: 110px;  background: url(https://retroripper.com/habbo-imaging/avatarimage?figure='.filter($getUserData['look']).'&action=sit,wav,crr=45&gesture=sml&direction=2&head_direction=2);float: left;background-repeat: no-repeat;"></div>';
			echo '<div style="margin-top: 25px;"> <b>'.$lang["Hname"].'</b> <a style="" href ="/home/'.filter($getUserData['username']).'"><b style="background-image: url();color: #FF970F;text-decoration: underline;">'.filter($getUserData['username']).'</a><span class="staff-'.$OnlineStatus.'"></span></b> ';
			echo '<div style=""><b>'.$lang["Hmotto"].'</b>  '.filter($getUserData['motto']).'</div>'.userlike($getUserData['id']).'';
		}
		else
		{
			echo '<div class="userNew" style="height: 110px;  background: url(https://retroripper.com/habbo-imaging/avatarimage?figure=hr&action=sit,wav,crr=45&gesture=sml&direction=2&head_direction=2);float: left;background-repeat: no-repeat;"></div>';
			echo '<div style="margin-top: 15px;"> <b>'.$lang["Hname"].'</b> <b style="background-image: url();color: #FF970F;text-decoration: underline;">Geen speler!</b> ';
			echo '<div style="word-wrap: break-word;width: 270px;"><div style=""><b>'.$lang["Hmotto"].'</b> Er is geen motto!</div></div><br>';
			echo '<div style=""><b>Beschrijving:</b><br />Er is geen beschrijving gevonden!</div></div>';
		}
	}