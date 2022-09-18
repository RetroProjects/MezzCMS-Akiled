<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}
	/* 
		Functions list Class Admin.
		--------------- 
		error();
		gelukt();
		CheckRank();
		staffpin();
		staffCheck();
		UpdateUser();
		UpdateUserOfTheWeek();
		UpdateNews();
		searchUser();
		searchUserOfTheWeek();
		EditUser();
		EditUserOfTheWeek();
		EditNews();
		LookSollie();
		DeleteNews();
		DeleteSollie();
		DeleteBans();
		PostNews();
	*/
	Class Admin
	{
		public static function error($errorName)
		{
			echo "<div class=\"alert alert-block alert-danger \"><strong>" . $errorName . "</div>";
		}
		public static function succeed($errorName)
		{
			echo "<div class=\"alert alert-block alert-success \"><strong>" . $errorName . "</div>";
		}
		public static function CheckRank($rank)
		{
			global $config;
			{
				if (User::userData('rank') <= $rank)
				{
					header('Location: '.$config['hotelUrl'].'/index');	
					exit();
				}
			}
		}
		
					public static function Checkpermlogs($permlogs)
		{
			global $config;
			{
				if (User::userData('permlogs') < $permlogs)
				{
					header('Location: '.$config['hotelUrl'].'/index');	
					exit();
				}
			}
		}
		
		public static function UpdateUser()
		{
			global $dbh, $lang;
			if (isset($_POST['update'])) 
			{
				$upateUser = $dbh->prepare("UPDATE users SET 
				motto=:motto,
				mail=:mail,
				credits=:credits,
				vip_points=:diamonds,
				activity_points=:cheetos,
				permlogs=:permlogs,
				hide_staff=:hide_staff
				WHERE username = :name");
				$upateUser->bindParam(':motto', $_POST['motto']); 
				$upateUser->bindParam(':name', $_POST['naam']); 
				$upateUser->bindParam(':mail', $_POST['mail']); 
				$upateUser->bindParam(':credits', $_POST['credits']); 
				$upateUser->bindParam(':diamonds', $_POST['diamonds']); 
				$upateUser->bindParam(':cheetos', $_POST['cheetos']);
				$upateUser->bindParam(':permlogs', $_POST['permlogs']);
				$upateUser->bindParam(':hide_staff', $_POST['hide_staff']);
				$upateUser->execute(); 
				Admin::succeed("".$lang["HkError2"] ."");
			}	
		}
		public static function UpdateUserOfTheWeek()
		{
			global $dbh;
			if (isset($_POST['update'])) 
			{
				$getUserData = $dbh->prepare("SELECT id,username FROM users WHERE username = :name");
				$getUserData->bindParam(':name', $_POST['naam']); 
				$getUserData->execute(); 
				$upateUser2 = $getUserData->fetch();
				if ($upateUser = $dbh->prepare("UPDATE uotw SET userid=:userdata,text=:txt"))
				{
					$upateUser->bindParam(':userdata', $upateUser2['id']); 
					$upateUser->bindParam(':txt', $_POST['uftwtext']); 
					$upateUser->execute();
					Admin::succeed("The user now has UOTW");
				}
				else 
				{
					Admin::error("Did not work!");
				}  
			}
		}
		public static function UpdateNews()
		{
			global $dbh;
			if (isset($_POST['update'])) 
			{
				$editNews = $dbh->prepare("UPDATE cms_news SET 
				id=:id,
				title=:title,
				shortstory=:shortstory,
				longstory=:longstory,
				image=:topstory
				WHERE id = :id");
				$editNews->bindParam(':title', $_POST['title']);
				$editNews->bindParam(':shortstory', $_POST['shortstory']);
				$editNews->bindParam(':topstory', $_POST['topstory']);
				$editNews->bindParam(':longstory', $_POST['longstory']);
				$editNews->bindParam(':id', $_POST['id']);
				$editNews->execute();
				Admin::succeed("News message edited!");
			}
		}
		
		public static function Updateventos()
		{
			global $dbh;
			if (isset($_POST['update'])) 
			{
				$editNews = $dbh->prepare("UPDATE cms_events SET 
				id=:id,
				title=:title,
				type=:type,
				user=:user,
				hora=:hora,
			    fecha=:fecha
				WHERE id = :id");
				$editNews->bindParam(':title', $_POST['title']);
				$editNews->bindParam(':type', $_POST['type']);
				$editNews->bindParam(':user', $_POST['user']);
				$editNews->bindParam(':hora', $_POST['hora']);
				$editNews->bindParam(':fecha', $_POST['fecha']);
				$editNews->bindParam(':id', $_POST['id']);
				$editNews->execute();
				Admin::succeed("Evento editado con exito!");
			}
		}
		
		public static function searchRank()
		{
			global $dbh,$config,$lang;
			if(isset($_POST['zoek'])) {	
				$searchUser = $dbh->prepare("SELECT * FROM users WHERE username = :user");
				$searchUser->bindParam(':user', $_POST['user']); 
				$searchUser->execute();
				if ($searchUser->RowCount() == 1)
				{
					Admin::succeed(''.$lang["HkError10"].' '.$_POST['user'].' '.$lang["HkError12"].', <a href ="'.$config['hotelUrl'].'/adminpan/gebrank/'.$_POST['user'].'">'.$lang["HkError13"].'</a> '.$lang["HkError14"].'');
				}
				else
				{
					Admin::error("".$lang["HkError10"]." ".$_POST['user']." ".$lang["HkError11"]."");
				}
			}
		}
		
			public static function searchlogs()
		{
			global $dbh,$config,$lang;
			if(isset($_POST['zoek'])) {	
				$searchUser = $dbh->prepare("SELECT * FROM users WHERE username = :user");
				$searchUser->bindParam(':user', $_POST['user']); 
				$searchUser->execute();
				if ($searchUser->RowCount() == 1)
				{
					Admin::succeed(''.$lang["HkError10"].' '.$_POST['user'].' '.$lang["HkError12"].', <a href ="'.$config['hotelUrl'].'/adminpan/logsconsol1/'.$_POST['user'].'">'.$lang["HkError13"].'</a> '.$lang["HkError14"].'');
				}
				else
				{
					Admin::error("".$lang["HkError10"]." ".$_POST['user']." ".$lang["HkError11"]."");
				}
			}
		}
	
		
		
		public static function searchUser()
		{
			global $dbh,$config,$lang;
			if(isset($_POST['zoek'])) {	
				$searchUser = $dbh->prepare("SELECT * FROM users WHERE username = :user");
				$searchUser->bindParam(':user', $_POST['user']); 
				$searchUser->execute();
			}
		}
		public static function searchUserOfTheWeek()
		{
			global $dbh,$config;
			if(isset($_POST['searching'])) {	
				$searchUser = $dbh->prepare("SELECT * FROM users WHERE username = :user");
				$searchUser->bindParam(':user', $_POST['user']); 
				$searchUser->execute();
				if ($searchUser->RowCount() == 1)
				{
					Admin::succeed(''.$_POST['user'].' Found! Klik <a href ="'.$config['hotelUrl'].'/adminpan/giveuseroftheweek/'.$_POST['user'].'">here</a> in order to give this user '.$config['hotelName'].' of the week!');
				}
				else
				{
					Admin::error("User ".$_POST['user']." not found!");
				}
			}
			if(isset($_POST['delete'])) {	
				$upateUser = $dbh->prepare("UPDATE uotw SET userid = '0' ,text = 'empty'");
				$upateUser->execute();
				Admin::succeed("You have removed UOTW");
			}
		}
		
		public static function EditUser($variable)
		{
			global $dbh, $lang;
				$getUser = $dbh->prepare("SELECT * FROM users WHERE username=:username LIMIT 1");
				$getUser->bindParam(':username', $_POST['user']);
				$getUser->execute();
				if ($getUser->RowCount() == 1) 
				{
					$user = $getUser->fetch();
					return filter($user[$variable]);
				} 
				else 
				{
					Admin::error("".$lang["HkError10"] ." ".$lang["HkError11"].""); exit;
				}
			
		}
		
		public static function EditUserRak($variable)
		{
			global $dbh, $lang;
			if (isset($_GET['user'])) {
				$getUser = $dbh->prepare("SELECT * FROM users WHERE username=:username LIMIT 1");
				$getUser->bindParam(':username', $_GET['user']);
				$getUser->execute();
				if ($getUser->RowCount() == 1) 
				{
					$user = $getUser->fetch();
					return filter($user[$variable]);
				} 
				else 
				{
					Admin::error("".$lang["HkError10"] ." ".$lang["HkError11"].""); exit;
				}
			}
		}
		
			public static function EditUserdj($variable)
		{
			global $dbh, $lang;
			if (isset($_GET['user'])) {
				$getUser = $dbh->prepare("SELECT * FROM users WHERE username=:username LIMIT 1");
				$getUser->bindParam(':username', $_GET['user']);
				$getUser->execute();
				if ($getUser->RowCount() == 1) 
				{
					$user = $getUser->fetch();
					return filter($user[$variable]);
				} 
				else 
				{
					Admin::error("".$lang["HkError10"] ." ".$lang["HkError11"].""); exit;
				}
			}
		}
		
		public static function EditUserprueba($variable)
		{
			global $dbh,$config;
			if (isset($_GET['user'])) {
				if ($config['hotelEmu'] == 'arcturus')
				{
					if ( in_array($variable, array('activity_points', 'vip_points')) )
					{
						switch($variable)
						{
							case "activity_points":
							$variable = '0';
							break;
							case "vip_points":
							$variable = '5';
							break;
							default:
							break;
						}
						$getUserCurrency = $dbh->prepare("SELECT * FROM users WHERE username=:username LIMIT 1");
						$getUserCurrency->bindParam(':username', $_GET['user']);
						$getUserCurrency->execute();
						$getUserCurrencyData = $getUserCurrency->fetch();
						$stmt = $dbh->prepare("SELECT ".$variable.",user_id,type,amount FROM users_currency WHERE user_id = :id AND type = :type");
						$stmt->bindParam(':id', $getUserCurrencyData['id']);
						$stmt->bindParam(':type', $variable);
						$stmt->execute();
						if ($stmt->RowCount() > 0)
						{
							$row = $stmt->fetch();
							return $row['amount'];
						}
						else
						{
							return '0';
						}
					}
					else
					{	
						$getUser = $dbh->prepare("SELECT * FROM users WHERE username=:username LIMIT 1");
						$getUser->bindParam(':username', $_GET['user']);
						$getUser->execute();
						if ($getUser->RowCount() == 1) 
						{
							$user = $getUser->fetch();
							return filter($user[$variable]);
						} 
						else 
						{
							Admin::error("user not found!"); exit;
						}
					}
				}
				else
				{
					$getUser = $dbh->prepare("SELECT * FROM users WHERE username=:username LIMIT 1");
					$getUser->bindParam(':username', $_GET['user']);
					$getUser->execute();
					if ($getUser->RowCount() == 1) 
					{
						$user = $getUser->fetch();
						return filter($user[$variable]);
					} 
					else 
					{
						Admin::error("user not found!"); exit;
					}
				}
			}
		}
		public static function EditUserOfTheWeek($variable)
		{
			global $dbh;
			if (isset($_GET['user'])) {
				$getUser = $dbh->prepare("SELECT * FROM users WHERE username=:username LIMIT 1");
				$getUser->bindParam(':username', $_GET['user']);
				$getUser->execute();
				if ($getUser->RowCount() == 1) 
				{
					$user = $getUser->fetch();
					return filter($user[$variable]);
				} 
				else 
				{
					Admin::error("user not found!"); exit;
				}
			}
		}
		public static function EditNews($variable)
		{
			global $dbh;
			if (isset($_GET['news'])) 
			{
				$getNews = $dbh->prepare("SELECT * FROM cms_news WHERE id=:newsid LIMIT 1");
				$getNews->bindParam(':newsid', $_GET['news']);
				$getNews->execute();
				if ($getNews->RowCount() == 1) 
				{
					$news = $getNews->fetch();
					return $news[$variable];
				} 
				else 
				{
					Admin::error("No news found!"); exit;
				}
			}
		}
		public static function Editeventos($variable)
		{
			global $dbh;
			if (isset($_GET['news'])) 
			{
				$getNews = $dbh->prepare("SELECT * FROM cms_events WHERE id=:newsid LIMIT 1");
				$getNews->bindParam(':newsid', $_GET['news']);
				$getNews->execute();
				if ($getNews->RowCount() == 1) 
				{
					$news = $getNews->fetch();
					return $news[$variable];
				} 
				else 
				{
					Admin::error("No news found!"); exit;
				}
			}
		}
		public static function LookSollie1($variable)
		{
			Global $dbh,$config;
			if (isset($_GET['look'])) 
			{
				$getSollie = $dbh->prepare("SELECT * FROM staffapplication WHERE id=:look LIMIT 1");
				$getSollie->bindParam(':look', $_GET['look']);
				$getSollie->execute();
				if ($getSollie->RowCount() == 1) 
				{
					$data = $getSollie->fetch();
					$datenow = date('d-m-Y', $data['date']);
					return filter($data[$variable]);
				} 
				else 
				{
					header('Location: '.$config['hotelUrl'].'/adminpan/sollie');
				}
			}
		}
		
		public static function LookSollie()
		{
			global $dbh, $lang, $hotel;
			if (isset($_POST['updaterank'])) 
			{
				if($_POST['rank'] > User::userData('rank'))
				{
					Admin::error("".$lang["HkError3"]."");
				}
				else
				{
				$upateUser = $dbh->prepare("UPDATE users SET 
				username=:name,
				tarea=:tarea,
				dj=:dj,
				isguia=:isguia,
				ismod=:ismod,
				ispub=:ispub,
				isinter=:isinter,
				isgm=:isgm,
				isemb=:isemb,
				rank=:rank
				WHERE username = :name");
				$upateUser->bindParam(':name', $_POST['naam']); 
				$upateUser->bindParam(':tarea', $_POST['tarea']);
				$upateUser->bindParam(':dj', $_POST['dj']);
				$upateUser->bindParam(':isguia', $_POST['isguia']);
				$upateUser->bindParam(':ismod', $_POST['ismod']);
				$upateUser->bindParam(':ispub', $_POST['ispub']);
				$upateUser->bindParam(':isinter', $_POST['isinter']);
				$upateUser->bindParam(':isgm', $_POST['isgm']);
				$upateUser->bindParam(':isemb', $_POST['isemb']);
				$upateUser->bindParam(':rank', $_POST['rank']); 
				$upateUser->execute(); 
				Admin::succeed("".$lang["HkError4"]."");
				}
			}	
		}
		
		public static function DeleteNews()
		{
			Global $dbh;
			if(isset($_GET['delete'])) 
			{ 
				$deleteNews = $dbh->prepare("DELETE FROM cms_news WHERE id=:newsid");
				$deleteNews->bindParam(':newsid', $_GET['delete']);
				$deleteNews->execute();
				Admin::succeed('The news message was deleted!');
			}
		}
		public static function DeleteSollie()
		{
			Global $config, $dbh;
			if(isset($_GET['delete'])) 
			{ 
				$deleteSollie = $dbh->prepare("DELETE FROM staffapplication WHERE id=:newsid");
				$deleteSollie->bindParam(':newsid', $_GET['delete']);
				$deleteSollie->execute();
				Admin::succeed('Application removed!');
				header('Location: '.$config['hotelUrl'].'/adminpan/sollie');
			}
		}
		public static function DeleteBans()
		{
			Global $dbh;
			if(isset($_GET['delete'])) 
			{ 
				$deleteBan = $dbh->prepare("DELETE FROM bans WHERE id=:newsid");
				$deleteBan->bindParam(':newsid', $_GET['delete']);
				$deleteBan->execute();
				Admin::succeed('Ban removed!');
			}
		}
			public static function DeletePublics()
		{
			global $dbh, $lang;
			if(isset($_GET['delete'])) 
			{ 
				$deletepublic = $dbh->prepare("DELETE FROM navigator_publics WHERE room_id=:newsroom_id");
				$deletepublic->bindParam(':newsroom_id', $_GET['delete']);
				$deletepublic->execute();
				Admin::succeed('Sala publica eliminada');
			}
		}
		
		public static function DeleteFurni()
		{
			global $dbh, $lang;
			if(isset($_GET['delete'])) 
			{ 
				$deleteBan = $dbh->prepare("DELETE FROM cms_furnis WHERE id=:newsid");
				$deleteBan->bindParam(':newsid', $_GET['delete']);
				$deleteBan->execute();
				Admin::succeed('Furni borrado correctamente');
			}
		}
				public static function Deleteventos()
		{
			Global $dbh;
			if(isset($_GET['delete'])) 
			{ 
				$deleteNews = $dbh->prepare("DELETE FROM cms_events WHERE id=:newsid");
				$deleteNews->bindParam(':newsid', $_GET['delete']);
				$deleteNews->execute();
				Admin::succeed('Evento borrado correctamente');
			}
		}
		public static function DeleteReport()
		{
			global $dbh, $lang;
			if(isset($_GET['delete'])) 
			{ 
				$deleteBan = $dbh->prepare("DELETE FROM cms_report WHERE id=:newsid");
				$deleteBan->bindParam(':newsid', $_GET['delete']);
				$deleteBan->execute();
				Admin::succeed(''.$lang["HkError20"].'');
			}
		}
		public static function DelectBadge()
		{
			global $dbh, $lang;
			if(isset($_GET['delete'])) 
			{ 
				$deleteBan = $dbh->prepare("DELETE FROM cms_badges WHERE id=:newsid");
				$deleteBan->bindParam(':newsid', $_GET['delete']);
				$deleteBan->execute();
				Admin::succeed(''.$lang["HkError21"].'');
			}
		}
		
		
		public static function DelectBadgeuserss()
		{
			global $dbh, $lang;
			if(isset($_GET['delete'])) 
			{ 
				$deletebadgeuserss= $dbh->prepare("DELETE FROM user_badges WHERE id=:newsid");
				$deletebadgeuserss->bindParam(':newsid', $_GET['delete']);
				$deletebadgeuserss->execute();
				Admin::succeed(''.$lang["HkError21"].'');
			}
		}
		
		
		
		
		public static function PostNews()
		{
			global $dbh;
			if (isset($_POST['postnews']))
			{
				$_SESSION['title'] = $_POST['title'];
				$_SESSION['news'] = $_POST['news'];
				if (!empty($_POST['title']))
				{
					if (!empty($_POST['news']))
					{
						$postNews = $dbh->prepare("
						INSERT INTO cms_news(title,image,shortstory,longstory,author,date,type,roomid,updated)
						VALUES
						(
						:title,
						:topstory, 
						:slogan,
						:news,
						:id,
						:time,
						'1',
						'1',
						'1'
						)");
						$postNews->bindParam(':title', $_POST['title']);
						$postNews->bindParam(':slogan', $_POST['slogan']);
						$postNews->bindParam(':topstory', $_POST['topstory']);
						$postNews->bindParam(':news', $_POST['news']);
						$postNews->bindParam(':id', $_SESSION['id']);
						$postNews->bindParam(':time', strtotime('now'));
						$postNews->execute();
						$_SESSION['title'] = '';
						$_SESSION['kort'] = '';
						$_SESSION['news'] ='';
						Admin::succeed("News item is posted!");
					}
					else
					{
						Admin::error("News item is empty!");
						return;
					}
				}
				else
				{
					Admin::error("There is no title!");
					return;
				}
			}
			else
			{
			}
		}
		
			public static function Posteventos()
		{
			global $dbh;
			if (isset($_POST['posteventos']))
			{
			
				$_SESSION['news'] = $_POST['title'];
				if (!empty($_POST['title']))
				{
					if (!empty($_POST['hora']))
					{
						$posteventos = $dbh->prepare("
						INSERT INTO cms_events(title,hora,fecha,user,type)
						VALUES
						(
						:title,
						:hora,
						:fecha,
						:id,
						'1'
						)");
						$posteventos->bindParam(':title', $_POST['title']);
						$posteventos->bindParam(':hora', $_POST['hora']);
						$posteventos->bindParam(':fecha', $_POST['fecha']);
						$posteventos->bindParam(':id', $_SESSION['id']);
						$posteventos->execute();
						Admin::succeed("News item is posted!");
					}
					else
					{
						Admin::error("News item is empty!");
						return;
					}
				}
				else
				{
					Admin::error("There is no title!");
					return;
				}
		
			}
		}
							
	
			public static function PostPublics()
		{
			global $dbh, $lang;
			if (isset($_POST['postpublics']))
			{
				
				$_SESSION['news'] = $_POST['room'];
				if (!empty($_POST['room']))
				{
					
						$postpublics = $dbh->prepare("
						INSERT INTO navigator_publics(room_id,image_url,order_num,enabled,langue)
						VALUES
						(
						:room_id,
						'/navigator-thumbnail/".$_POST['room'].".png',
						'',
						'1',
						'es'
						)");
						$postpublics->bindParam(':room_id', $_POST['room']);
						$postpublics->execute();
					
				}
				else
				{
					Admin::error("".$lang["HkError25"]."");
					return;
				}
			}
		}
	}