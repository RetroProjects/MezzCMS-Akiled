<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}
	/* 
		Functions list Class Html.
		--------------- 
		checkBan();
		page();
		pageHK();
		error();
		errorSucces();
		loadPlugins();
	*/
	class html 
	{
		private static function callback($replace)
		{
			global $config;
			$str = array (
			'hotelname' => $config['hotelName'],
			'online' => Game::usersOnline(),
			'url' =>$config['hotelUrl'],
			'skin' =>$config['skin']
			);
			if(loggedIn()){ 
				$strLogin = array (
				'username' => User::userData('username'),
				'rank' => User::userData('rank'),
				'motto' => User::userData('motto'),
				'look' => User::userData('look'),
				'mail' => User::userData('mail'),
				'credits' => User::userData('credits'),
				'activity_points' => User::userData('activity_points'),
				'vip_points' => User::userData('vip_points'),
				);
			}
			foreach($strLogin as $key => $value)
			{
				$replace = str_ireplace('{' . $key . '}', $value, $replace);
			}
			foreach($str as $key => $value)
			{
				$replace = str_ireplace('{' . $key . '}', $value, $replace);
			}
			return $replace;
		}
		private static function checkBan($ip, $username = null)
		{
			global $dbh;
			$ipBan = $dbh->prepare("SELECT * FROM bans WHERE bantype = 'ip' && value = :ip");
			$ipBan->bindParam(':ip', $ip);
			$ipBan->execute();
			if ($ipBan->RowCount() === 1)
			{
				$queryIp = $dbh->prepare("SELECT * FROM bans WHERE bantype = 'ip' && value = :ip");
				$queryIp->bindParam(':ip', $ip);
				$queryIp->execute();
				while ($rowIp = $queryIp->fetch())
				{
					if ($rowIp['expire'] >= strtotime('now'))
					{
						return true;
					}
					else
					{
						return false;
					}
				}
			}
			else if ($username !== null)
			{
				$userBan = $dbh->prepare("SELECT * FROM bans WHERE bantype = 'user' && value = :username");
				$userBan->bindParam(':username', $username);
				$userBan->execute();
				if ($userBan->RowCount() === 1)
				{
					$userBan = $dbh->prepare("SELECT * FROM bans WHERE bantype = 'user' && value = :username");
					$userBan->bindParam(':username', $username);
					$userBan->execute();
					while ($rowUser = $userBan->fetch())
					{
						if ($rowUser['expire'] >= strtotime('now'))
						{
							return true;
						}
						else
						{
							return false;
						}
					}
				}
			}
			else
			{
				return false;
			}
		}
		public static function page()
		{
			global $dbh, $emu, $config, $lang, $hotel, $version,$emuUse;
			if (defined('PHP_VERSION') && PHP_VERSION >= 5.6) 
			{
				true;
			} 
			else 
			{
				echo 'PHP version is lower then PHP 5.6 your PHP version is '.PHP_VERSION.'';
				exit;
			}
			if (self::checkBan(userIp(), User::userData('username')))
			{
				include Z . H . S .'/banned.php';
				exit();
			}
			else
			{
				if(isset($_GET['url']))
				{
					$page = filter($_GET['url']);
					$allowed = array(); 
					foreach (new DirectoryIterator(Z . H . S) as $file) { 
						$file = explode('.php', $file);
						$allowed[] = $file[0];
					} 
					if($page)
					{ 
						if (!$config['maintenance'] == true || isset($_SESSION['adminlogin'])){
							$fileExists = Z . H . S ."/{$page}.php";
							if(file_exists($fileExists))
							{
								if (in_array($page, $allowed)) {
									ob_start("self::callback");
									include(Z . H . S ."/{$page}.php");
									$contents = ob_get_contents();
									ob_end_flush();
								}
							}
							else 
							{
								include Z . H . S .'/404.php'; 
							}
						}
						else
						{
							if ($page == 'adminlogin')
							{
								include A . I . 'adminlogin.php'; 
							}
							else
							{
								include A . I . 'index.php'; 
							}
						}
					} 
					else 
					{
						include Z . H . S .'/pages/index.php';
					}
				} 
				else 
				{
					include A . H . S . '/pages/index.php';
					header('Location: '.$config['hotelUrl'].'/index');
				}
			}
			if(loggedIn()){ 
				switch($page)
				{
					case "index":
					case "register":
					header('Location: '.$config['hotelUrl'].'/me');
					break;
					default:
					//Nothing
					break;
				}
			}
			if(!loggedIn()){ 
				switch($page)
				{
					case "me":
					case "settingspassword":
					case "settingsemail":
					case "settingshotel":
				    case "settings_emoji":
					case "sollicitaties":
					case "stats":
					case "game":
					case "hotel":
					case "pin":
					case "password":
					case "community":
					case "news":
					case "shop":
					case "staff":
					case "staffs":
					case "teams":
					case "advertentie_tips":
					case "client-nitro":
					case "online":
					case "home/":
					case "help":
					case "myreports/":
					case "changename":
					header('Location: '.$config['hotelUrl'].'/index');
					break;
					default:
					//Nothing
					break;
				}
			}
		}
		public static function pageHK()
		{
			global $dbh, $config, $lang, $hotel, $version;
			if(isset($_GET['url']))
			{
				$pageHK = filter($_GET['url']);
				$allowed = array(); 
				foreach (new DirectoryIterator(J) as $file) { 
					$file = explode('.php', $file);
					$allowed[] = $file[0];
				} 
				if($pageHK)
				{ 
					$fileExists = J ."{$pageHK}.php";
					if(file_exists(filter($fileExists)))
					{
						$content = in_array($pageHK, $allowed) ? include(J ."/{$pageHK}.php") : '';
					} 
					else 
					{
						include J . "/404.php"; 
					}
				} 
				else 
				{
					include J . "/dash.php";
				}
			} 
			else 
			{
				include J . "dash.php";
				header('Location: '.$config['hotelUrl'].'/adminpan/dash');
			}
			switch($pageHK)
			{
				case $pageHK:
				admin::CheckRank(3);
				break;
				default:
				//Nothing
				break;
			}
		} 
		public static function error($errorName)
		{
			echo '<div class="error" style="display: block;">'.$errorName.'</div>';
		}
		public static function errornew($errorName)
		{
			echo '<div class="errornew" style="display: block; display: block; background-color: #a10f0f; border-radius: 5px; margin-bottom: 15px; text-align: center; width: 100%; color: white;">'.$errorName.'</div>';
		}
		public static function errorSucces($succesMessage)
		{
			echo '<div class="errorSucces" style="display: block; display: block; background-color: #09994e; border-radius: 5px; margin-bottom: 15px; text-align: center; width: 100%; color: white;">'.$succesMessage.'</div>';
		}
		public static function loadPlugins()
		{
			$pluginDir = A . B . K;
			foreach (glob($pluginDir."*.php") as $filename) {
				require_once $pluginDir."".basename($filename)."";
			}
		}
	}																				