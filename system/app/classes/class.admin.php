<?php
/* 
		Functions list Class Admin.
		--------------- 
		
		ALERTS:
		error / succeed

		SELECTS AND VIEWS:
		searchUser / searchUserOfTheWeek / searchRank / EditUser / EditItem / EditMueble / EditFurniture / EditRolePlayItems / EditHappyHour / EditGroup / EditPage /EditUserOfTheWeek / Editeventos / EditUserdj / EditUserb / EditBadges / EditPublicRoom / EditSection / EditNews / EditUserRak / EditTareas / EditRoomOwner / EditInfosIndex / EditFanSites / EditComandos / EditPermissions / EditVacantes / ViewTicket / LookSollie / ViewReport / ViewReportNewQuestion / ViewReplyReport

		UPDATES:
		UpdateUser / UpdateItem / UpdateMueble / UpdateGroup / UpdateRolePlayItems / UpdatePage / UpdateFurniture / UpdateFansite / UpdateRad / UpdatePub / Mante / REG / UpdateFaqs / UpdateBadges / UpdatePublicRoom / UpdateSection / UpdateHappyHour / UpdateUserOfTheWeek / UpdateNews / UpdatePermissions / UpdateTareas / UpdateComandos / UpdateRoomOwner / UpdateInfosIndex / UpdateFanSites / LookSollie1 / ChangeStatusReport

		INSERTS:
		InsertLog / PostBadges / PostPublicRoom / AddCatalogSection / UploadBadge / UploadCatalogSection / PostWordFilter / Posteventos / PostNews / PostShopy / PostTareas / AddBans / PostCatalogPages / PostBadge / ReplyReport

		DELETS:
		DeleteWordFilter / DeleteCatalogPage / DeleteReport / DeleteFurni / DeleteNews / Deleteventos / DeleteTicket / DeleteChatlogs / DeletePrivativeChatlogs / DeleteRooms / DeleteInfosIndex / DeleteFanSites / DeleteGroup / DeleteBadge / DeletePublicRoom / DeleteCatalogSection / DeleteTareas / DeleteSollie / DeleteBans / DeleteShopy

		OTHERS:
		CheckRank / darkmode / RCON

	*/

class Admin
{

	/* Alerts */
	public static function error($errorName)
	{
		echo '<div class="error" style="display: block;">' . $errorName . '</div>';
	}

	public static function succeed($errorName)
	{
		global $config;
		echo '<div class="succeed" style="display: block;">' . $errorName . '</div>' . $config['RadioClient'];
	}

	/* Selects and Views */
	public static function searchUser()
	{
		global $dbh, $config;
		if (isset($_POST['zoek'])) {
			$searchUser = $dbh->prepare("SELECT * FROM users WHERE username = :user");
			$searchUser->bindParam(':user', $_POST['user']);
			$searchUser->execute();
			if ($searchUser->RowCount() == 1) {
				$action = 'Ha buscado al usuario: ' . $_POST['user'];
				Admin::InsertLog($action);
				echo '¡Usuario: ' . $_POST['user'] . ' encontrado! Click <a href ="' . $config['hotelUrl'] . '/adminpan/gebruiker/' . $_POST['user'] . '">aquí</a> para modificar su cuenta.<br />';
			} else {
				$action = 'Ha intentado buscar al usuario: ' . $_POST['user'];
				Admin::InsertLog($action);
				Admin::error("El usuario " . $_POST['user'] . " no se ha encontrado");
			}
		}
	}

	public static function searchUserOfTheWeek()
	{
		global $dbh, $config;
		if (isset($_POST['searching'])) {
			$searchUser = $dbh->prepare("SELECT * FROM users WHERE username = :user");
			$searchUser->bindParam(':user', $_POST['user']);
			$searchUser->execute();
			if ($searchUser->RowCount() == 1) {
				Admin::succeed('' . $_POST['user'] . ' Found! Klik <a href ="' . $config['hotelUrl'] . '/adminpan/giveuseroftheweek/' . $_POST['user'] . '">here</a> in order to give this user ' . $config['hotelName'] . ' of the week!');
			} else {
				Admin::error("El usuario " . $_POST['user'] . " no se ha encontrado");
			}
		}
		if (isset($_POST['delete'])) {
			$upateUser = $dbh->prepare("UPDATE uotw SET userid = '0' ,text = 'empty'");
			$upateUser->execute();
			Admin::succeed("You have removed UOTW");
		}
	}

	public static function searchRank()
	{
		global $dbh, $config;
		if (isset($_POST['zoek'])) {
			$searchUser = $dbh->prepare("SELECT * FROM users WHERE username = :user");
			$searchUser->bindParam(':user', $_POST['user']);
			$searchUser->execute();
			if ($searchUser->RowCount() == 1) {
				$action = 'Ha buscado al usuario: ' . $_POST['user'];
				Admin::InsertLog($action);
				echo '¡Usuario: ' . $_POST['user'] . ' encontrado! Click <a href ="' . $config['hotelUrl'] . '/adminpan/gebrank/' . $_POST['user'] . '">aquí</a> para modificar su cuenta.<br />';
			} else {
				$action = 'Ha intentado buscar al usuario: ' . $_POST['user'];
				Admin::InsertLog($action);
				Admin::error("El usuario " . $_POST['user'] . " no se ha encontrado");
			}
		}
	}

	public static function EditUser($variable)
	{
		global $dbh, $config;
		if (isset($_GET['user'])) {
			if ($config['hotelEmu'] == 'arcturus') {
				if (in_array($variable, array('activity_points', 'vip_points'))) {
					switch ($variable) {
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
					$stmt = $dbh->prepare("SELECT " . $variable . ",user_id,type,amount FROM users_currency WHERE user_id = :id AND type = :type");
					$stmt->bindParam(':id', $getUserCurrencyData['id']);
					$stmt->bindParam(':type', $variable);
					$stmt->execute();
					if ($stmt->RowCount() > 0) {
						$row = $stmt->fetch();
						return $row['amount'];
					} else {
						return '0';
					}
				} else {
					$getUser = $dbh->prepare("SELECT * FROM users WHERE username=:username LIMIT 1");
					$getUser->bindParam(':username', $_GET['user']);
					$getUser->execute();
					if ($getUser->RowCount() == 1) {
						$user = $getUser->fetch();
						return filter($user[$variable]);
					} else {
						Admin::error("¡Usuario no encontrado!");
						exit;
					}
				}
			} else {
				$getUser = $dbh->prepare("SELECT * FROM users WHERE username=:username LIMIT 1");
				$getUser->bindParam(':username', $_GET['user']);
				$getUser->execute();
				if ($getUser->RowCount() == 1) {
					$user = $getUser->fetch();
					return filter($user[$variable]);
				} else {
					Admin::error("¡Usuario no encontrado!");
					exit;
				}
			}
		}
	}

	public static function EditItem($variable)
	{
		global $dbh, $config;
		if (isset($_GET['id'])) {

			$getUser = $dbh->prepare("SELECT * FROM catalog_items WHERE item_id=:id LIMIT 1");
			$getUser->bindParam(':id', $_GET['id']);
			$getUser->execute();
			if ($getUser->RowCount() == 1) {
				$item = $getUser->fetch();
				return filter($item[$variable]);
			} else {
				Admin::error("¡Item no encontrado!");
				exit;
			}
		}
	}

	public static function EditMueble($variable)
	{
		global $dbh, $config;
		if (isset($_GET['id'])) {

			$getUser = $dbh->prepare("SELECT * FROM catalog_items WHERE item_id=:id LIMIT 1");
			$getUser->bindParam(':id', $_GET['id']);
			$getUser->execute();
			if ($getUser->RowCount() == 1) {
				$item = $getUser->fetch();
				return filter($item[$variable]);
			} else {
				Admin::error("¡Item no encontrado!");
				exit;
			}
		}
	}

	public static function EditFurniture($variable)
	{
		global $dbh, $config;
		if (isset($_GET['id'])) {

			$getUser = $dbh->prepare("SELECT * FROM furniture WHERE id=:id LIMIT 1");
			$getUser->bindParam(':id', $_GET['id']);
			$getUser->execute();
			if ($getUser->RowCount() == 1) {
				$item = $getUser->fetch();
				return filter($item[$variable]);
			} else {
				Admin::error("¡Furniture no encontrado!");
				exit;
			}
		}
	}

	public static function EditRolePlayItems($variable)
	{
		global $dbh, $config;
		if (isset($_GET['id'])) {

			$getUser = $dbh->prepare("SELECT * FROM roleplay_items WHERE id=:id LIMIT 1");
			$getUser->bindParam(':id', $_GET['id']);
			$getUser->execute();
			if ($getUser->RowCount() == 1) {
				$item = $getUser->fetch();
				return filter($item[$variable]);
			} else {
				Admin::error("RolePlay Items no encontrado!");
				exit;
			}
		}
	}

	public static function EditHappyHour($variable)
	{
		global $dbh, $config;

		$getUser = $dbh->prepare("SELECT * FROM game_happyhour");
		$getUser->execute();
		if ($getUser->RowCount() == 1) {
			$item = $getUser->fetch();
			return filter($item[$variable]);
		} else {
			Admin::error("¡Pagina no encontrado!");
			exit;
		}
	}

	public static function EditGroup($variable)
	{
		global $dbh, $config;
		if (isset($_GET['id'])) {

			$getUser = $dbh->prepare("SELECT * FROM groups WHERE id=:id LIMIT 1");
			$getUser->bindParam(':id', $_GET['id']);
			$getUser->execute();
			if ($getUser->RowCount() == 1) {
				$item = $getUser->fetch();
				return filter($item[$variable]);
			} else {
				Admin::error("Group no encontrado!");
				exit;
			}
		}
	}

	public static function EditPage($variable)
	{
		global $dbh, $config;
		if (isset($_GET['id'])) {

			$getUser = $dbh->prepare("SELECT * FROM catalog_pages WHERE id=:id LIMIT 1");
			$getUser->bindParam(':id', $_GET['id']);
			$getUser->execute();
			if ($getUser->RowCount() == 1) {
				$item = $getUser->fetch();
				return filter($item[$variable]);
			} else {
				Admin::error("¡Pagina no encontrado!");
				exit;
			}
		}
	}

	public static function EditUserOfTheWeek($variable)
	{
		global $dbh, $config;
		if (isset($_GET['user'])) {
			$getUser = $dbh->prepare("SELECT * FROM users WHERE username=:username LIMIT 1");
			$getUser->bindParam(':username', $_GET['user']);
			$getUser->execute();
			if ($getUser->RowCount() == 1) {
				$user = $getUser->fetch();
				return filter($user[$variable]);
			} else {
				Admin::error("¡Usuario no encontrado!");
				exit;
			}
		}
	}

	public static function Editeventos($variable)
	{
		global $dbh, $config;
		if (isset($_GET['news'])) {
			$getNews = $dbh->prepare("SELECT * FROM cms_events WHERE id=:newsid LIMIT 1");
			$getNews->bindParam(':newsid', $_GET['news']);
			$getNews->execute();
			if ($getNews->RowCount() == 1) {
				$news = $getNews->fetch();
				return $news[$variable];
			} else {
				Admin::error("No news found!");
				exit;
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
			if ($getUser->RowCount() == 1) {
				$user = $getUser->fetch();
				return filter($user[$variable]);
			} else {

				Admin::error("" . $lang["HkError10"] . " " . $lang["HkError11"] . "");
				exit;
			}
		}
	}

	public static function EditUserb($variable)
	{
		global $dbh, $lang;
		$getUser = $dbh->prepare("SELECT * FROM users WHERE username=:username LIMIT 1");
		$getUser->bindParam(':username', $_POST['user']);
		$getUser->execute();
		if ($getUser->RowCount() == 1) {
			$user = $getUser->fetch();
			return filter($user[$variable]);
		} else {
			Admin::error("" . $lang["HkError10"] . " " . $lang["HkError11"] . "");
			exit;
		}
	}

	public static function EditBadges($variable)
	{
		global $dbh, $config;
		if (isset($_GET['badges'])) {
			$getNews = $dbh->prepare("SELECT * FROM cms_badges WHERE id=:badge_id LIMIT 1");
			$getNews->bindParam(':badge_id', $_GET['badges']);
			$getNews->execute();
			if ($getNews->RowCount() == 1) {
				$news = $getNews->fetch();
				return $news[$variable];
			} else {
				Admin::error("No se a encontrado la placa");
				exit;
			}
		}
	}

	public static function EditPublicRoom($variable)
	{
		global $dbh, $config;
		if (isset($_GET['room'])) {
			$getNews = $dbh->prepare("SELECT * FROM navigator_publics WHERE id=:roomid LIMIT 1");
			$getNews->bindParam(':roomid', $_GET['room']);
			$getNews->execute();
			if ($getNews->RowCount() == 1) {
				$news = $getNews->fetch();
				return $news[$variable];
			} else {
				Admin::error("No se a encontrado la sala");
				exit;
			}
		}
	}

	public static function EditSection($variable)
	{
		global $dbh, $config;
		if (isset($_GET['section'])) {
			$getNews = $dbh->prepare("SELECT * FROM catalog_pages WHERE id=:section LIMIT 1");
			$getNews->bindParam(':section', $_GET['section']);
			$getNews->execute();
			if ($getNews->RowCount() == 1) {
				$news = $getNews->fetch();
				return $news[$variable];
			} else {
				Admin::error("No se a encontrado la sección");
				exit;
			}
		}
	}

	public static function EditNews($variable)
	{
		global $dbh, $config;
		if (isset($_GET['news'])) {
			$getNews = $dbh->prepare("SELECT * FROM cms_news WHERE id=:newsid LIMIT 1");
			$getNews->bindParam(':newsid', $_GET['news']);
			$getNews->execute();
			if ($getNews->RowCount() == 1) {
				$news = $getNews->fetch();
				return $news[$variable];
			} else {
				Admin::error("No se ha encontrado la noticia");
				exit;
			}
		}
	}

	public static function EditUserRak($variable)
	{
		global $dbh, $lang;
		if (isset($_GET['user'])) {
			$getUser = $dbh->prepare("SELECT * FROM users WHERE username=:username LIMIT 1");
			$getUser->bindParam(':username', $_GET['user']);
			$getUser->execute();
			if ($getUser->RowCount() == 1) {
				$user = $getUser->fetch();
				return filter($user[$variable]);
			} else {
				Admin::error("" . $lang["HkError10"] . " " . $lang["HkError11"] . "");
				exit;
			}
		}
	}

	public static function EditTareas($variable)
	{
		global $dbh, $config;
		if (isset($_GET['id'])) {

			$getUser = $dbh->prepare("SELECT * FROM tareas WHERE id=:id LIMIT 1");
			$getUser->bindParam(':id', $_GET['id']);
			$getUser->execute();
			if ($getUser->RowCount() == 1) {
				$item = $getUser->fetch();
				return filter($item[$variable]);
			} else {
				Admin::error("¡Pagina no encontrado!");
				exit;
			}
		}
	}

	public static function EditRoomOwner($variable)
	{
		global $dbh, $config;
		if (isset($_GET['id'])) {

			$getUser = $dbh->prepare("SELECT * FROM rooms WHERE id=:id LIMIT 1");
			$getUser->bindParam(':id', $_GET['id']);
			$getUser->execute();
			if ($getUser->RowCount() == 1) {
				$item = $getUser->fetch();
				return filter($item[$variable]);
			} else {
				Admin::error("¡Sala no encontrado!");
				exit;
			}
		}
	}

	public static function EditInfosIndex($variable)
	{
		global $dbh, $config;
		if (isset($_GET['id'])) {

			$getUser = $dbh->prepare("SELECT * FROM cms_infosindex WHERE id=:id LIMIT 1");
			$getUser->bindParam(':id', $_GET['id']);
			$getUser->execute();
			if ($getUser->RowCount() == 1) {
				$item = $getUser->fetch();
				return filter($item[$variable]);
			} else {
				Admin::error("¡Información no encontrado!");
				exit;
			}
		}
	}

	public static function EditFanSites($variable)
	{
		global $dbh, $config;
		if (isset($_GET['id'])) {

			$getUser = $dbh->prepare("SELECT * FROM cms_fansites WHERE id=:id LIMIT 1");
			$getUser->bindParam(':id', $_GET['id']);
			$getUser->execute();
			if ($getUser->RowCount() == 1) {
				$item = $getUser->fetch();
				return filter($item[$variable]);
			} else {
				Admin::error("¡Información no encontrado!");
				exit;
			}
		}
	}

	public static function EditComandos($variable)
	{
		global $dbh, $config;
		if (isset($_GET['id'])) {

			$getUser = $dbh->prepare("SELECT * FROM system_commands WHERE id=:id LIMIT 1");
			$getUser->bindParam(':id', $_GET['id']);
			$getUser->execute();
			if ($getUser->RowCount() == 1) {
				$item = $getUser->fetch();
				return filter($item[$variable]);
			} else {
				Admin::error("¡Comando no encontrado!");
				exit;
			}
		}
	}

	public static function EditPermissions($variable)
	{
		global $dbh, $config;
		if (isset($_GET['id'])) {

			$getUser = $dbh->prepare("SELECT * FROM permissions_groups WHERE id=:id LIMIT 1");
			$getUser->bindParam(':id', $_GET['id']);
			$getUser->execute();
			if ($getUser->RowCount() == 1) {
				$item = $getUser->fetch();
				return filter($item[$variable]);
			} else {
				Admin::error("¡Pagina no encontrado!");
				exit;
			}
		}
	}

	public static function EditVacantes($variable)
	{
		global $dbh, $config;
		if (isset($_GET['id'])) {

			$getUser = $dbh->prepare("SELECT * FROM staffapplication WHERE id=:id LIMIT 1");
			$getUser->bindParam(':id', $_GET['id']);
			$getUser->execute();
			if ($getUser->RowCount() == 1) {
				$item = $getUser->fetch();
				return filter($item[$variable]);
			} else {
				Admin::error("¡Pagina no encontrado!");
				exit;
			}
		}
	}

	public static function ViewTicket($variable)
	{
		global $dbh, $config;
		if (isset($_GET['ticket'])) {
			$getNews = $dbh->prepare("SELECT * FROM cms_ticket WHERE id=:ticketid LIMIT 1");
			$getNews->bindParam(':ticketid', $_GET['ticket']);
			$getNews->execute();
			if ($getNews->RowCount() == 1) {
				$news = $getNews->fetch();
				return $news[$variable];
			} else {
				Admin::error("No se ha encontrado el ticket");
				exit;
			}
		}
	}

	public static function LookSollie($variable)
	{
		global $dbh, $config;
		if (isset($_GET['look'])) {
			$getSollie = $dbh->prepare("SELECT * FROM staffapplication WHERE id=:look LIMIT 1");
			$getSollie->bindParam(':look', $_GET['look']);
			$getSollie->execute();
			if ($getSollie->RowCount() == 1) {
				$data = $getSollie->fetch();
				$datenow = date('d-m-Y', $data['date']);
				return filter($data[$variable]);
			} else {
				header('Location: ' . $config['hotelUrl'] . '/adminpan/sollie');
			}
		}
	}

	public static function ViewReport($variable)
	{
		global $dbh, $config;
		if (isset($_GET['id'])) {

			$getUser = $dbh->prepare("SELECT * FROM cms_reports WHERE id=:id LIMIT 1");
			$getUser->bindParam(':id', $_GET['id']);
			$getUser->execute();
			if ($getUser->RowCount() == 1) {
				$item = $getUser->fetch();
				return filter($item[$variable]);
			} else {
				Admin::error("¡Información no encontrado!");
				exit;
			}
		}
	}

	public static function ViewReportNewQuestion($variable)
	{
		global $dbh, $config;
		if (isset($_GET['id'])) {

			$getUser = $dbh->prepare("SELECT * FROM cms_reports_newquestion WHERE id=:id LIMIT 1");
			$getUser->bindParam(':id', $_GET['id']);
			$getUser->execute();
			if ($getUser->RowCount() == 1) {
				$item = $getUser->fetch();
				return filter($item[$variable]);
			} else {
				Admin::error("¡Información no encontrado!");
				exit;
			}
		}
	}

	public static function ViewReplyReport($variable)
	{
		global $dbh, $config;
		if (isset($_GET['id'])) {

			$getUser = $dbh->prepare("SELECT * FROM cms_reportsreply WHERE report_id=:id LIMIT 1");
			$getUser->bindParam(':id', $_GET['id']);
			$getUser->execute();
			if ($getUser->RowCount() == 1) {
				$item = $getUser->fetch();
				return filter($item[$variable]);
			} else {
				Admin::error("¡Información no encontrado!");
				exit;
			}
		}
	}
	/* Selects and Views */

	/* Updates */
	public static function UpdateUser()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {

			$upateUser = $dbh->prepare("UPDATE users SET 
					motto=:motto,
					username=:name,
					mail=:mail,
					credits=:credits,
					vip_points=:vip_points,
					activity_points=:activity_points,
					permlogs=:permlogs,
					hide_staff=:hide_staff,
					hk_dark=:hk_dark
					WHERE username = :name");
			$upateUser->bindParam(':motto', $_POST['motto']);
			$upateUser->bindParam(':name', $_POST['naam']);
			$upateUser->bindParam(':mail', $_POST['mail']);
			$upateUser->bindParam(':credits', $_POST['credits']);
			$upateUser->bindParam(':vip_points', $_POST['vip_points']);
			$upateUser->bindParam(':activity_points', $_POST['activity_points']);
			$upateUser->bindParam(':permlogs', $_POST['permlogs']);
			$upateUser->bindParam(':hide_staff', $_POST['hide_staff']);
			$upateUser->bindParam(':hk_dark', $_POST['hk_dark']);
			$upateUser->execute();
			$action = 'Ha editado los datos del usuario: ' . $_POST['naam'];
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
			Admin::succeed("¡El usuario se a guardado!");
		}
	}

	public static function UpdateItem()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {

			$upateUser = $dbh->prepare("UPDATE catalog_items SET 
					page_id=:page_id,
					catalog_name=:catalog_name,
					cost_diamonds=:cost_diamonds
					WHERE id = :id");
			$upateUser->bindParam(':page_id', $_POST['page_id']);
			$upateUser->bindParam(':id', $_POST['naam']);
			$upateUser->bindParam(':catalog_name', $_POST['catalog_name']);
			$upateUser->bindParam(':cost_diamonds', $_POST['cost_diamonds']);
			$upateUser->execute();
			$action = 'Ha editado los datos del usuario: ' . $_POST['naam'];
			Admin::InsertLog($action);
			Admin::succeed("¡El usuario se a guardado!");
		}
	}

	public static function UpdateMueble()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {

			$upateUser = $dbh->prepare("UPDATE catalog_items SET 
					page_id=:page_id,
					catalog_name=:catalog_name,
					cost_credits=:cost_credits,
					cost_pixels=:cost_pixels,
					cost_diamonds=:cost_diamonds,
					amount=:amount,
					limited_stack=:limited_stack
					WHERE id = :id");
			$upateUser->bindParam(':page_id', $_POST['page_id']);
			$upateUser->bindParam(':id', $_POST['naam']);
			$upateUser->bindParam(':catalog_name', $_POST['catalog_name']);
			$upateUser->bindParam(':cost_credits', $_POST['cost_credits']);
			$upateUser->bindParam(':cost_pixels', $_POST['cost_pixels']);
			$upateUser->bindParam(':cost_diamonds', $_POST['cost_diamonds']);
			$upateUser->bindParam(':amount', $_POST['amount']);
			$upateUser->bindParam(':limited_stack', $_POST['limited_stack']);
			$upateUser->execute();
			$action = 'Ha editado los datos del mueble: ' . $_POST['naam'];
			Admin::InsertLog($action);
			Admin::succeed("¡El mueble se a guardado!");
		}
	}

	public static function UpdateGroup()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {

			$upateUser = $dbh->prepare("UPDATE groups SET 
					name=:name,
					owner_id=:owner_id,
					room_id=:room_id,
					state=:state
					WHERE id = :id");
			$upateUser->bindParam(':name', $_POST['name']);
			$upateUser->bindParam(':id', $_POST['naam']);
			$upateUser->bindParam(':owner_id', $_POST['owner_id']);
			$upateUser->bindParam(':room_id', $_POST['room_id']);
			$upateUser->bindParam(':state', $_POST['state']);
			$upateUser->execute();
			$action = 'Ha editado los datos del grupo: ' . $_POST['naam'];
			Admin::InsertLog($action);
			Admin::succeed("¡El grupo se a guardado!");
		}
	}

	public static function UpdateRolePlayItems()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {

			$upateUser = $dbh->prepare("UPDATE roleplay_items SET 
					name=:name,
					price=:price,
					type=:type,
					value=:value,
					allowstack=:allowstack,
					category=:category
					WHERE id = :id");
			$upateUser->bindParam(':name', $_POST['name']);
			$upateUser->bindParam(':id', $_POST['naam']);
			$upateUser->bindParam(':price', $_POST['price']);
			$upateUser->bindParam(':type', $_POST['type']);
			$upateUser->bindParam(':allowstack', $_POST['allowstack']);
			$upateUser->bindParam(':value', $_POST['value']);
			$upateUser->bindParam(':category', $_POST['category']);
			$upateUser->execute();
			$action = 'Ha editado los datos del roleplay item: ' . $_POST['naam'];
			Admin::InsertLog($action);
			Admin::succeed("¡El roleplay item se a guardado!");
		}
	}

	public static function UpdatePage()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {

			$upateUser = $dbh->prepare("UPDATE catalog_pages SET 
					parent_id=:parent_id,
					caption=:caption,
					icon_image=:icon_image,
					min_rank=:min_rank,
					order_num=:order_num
					WHERE id = :id");
			$upateUser->bindParam(':parent_id', $_POST['parent_id']);
			$upateUser->bindParam(':id', $_POST['naam']);
			$upateUser->bindParam(':caption', $_POST['caption']);
			$upateUser->bindParam(':icon_image', $_POST['icon_image']);
			$upateUser->bindParam(':min_rank', $_POST['min_rank']);
			$upateUser->bindParam(':order_num', $_POST['order_num']);
			$upateUser->execute();
			$action = 'Ha editado los datos del pagina: ' . $_POST['naam'];
			Admin::InsertLog($action);
			Admin::succeed("¡El pagina se a guardado!");
		}
	}

	public static function UpdateFurniture()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {

			$upateUser = $dbh->prepare("UPDATE furniture SET 
					item_name=:item_name,
					type=:type,
					width=:width,
					length=:length,
					stack_height=:stack_height,
					can_stack=:can_stack,
					can_sit=:can_sit,
					is_walkable=:is_walkable,
					allow_recycle=:allow_recycle,
					allow_trade=:allow_trade,
					allow_marketplace_sell=:allow_marketplace_sell,
					allow_gift=:allow_gift,
					allow_inventory_stack=:allow_inventory_stack,
					interaction_type=:interaction_type,
					interaction_modes_count=:interaction_modes_count,
					vending_ids=:vending_ids,
					height_adjustable=:height_adjustable,
					effect_id=:effect_id,
					is_rare=:is_rare
					WHERE id = :id");
			$upateUser->bindParam(':item_name', $_POST['item_name']);
			$upateUser->bindParam(':id', $_POST['naam']);
			$upateUser->bindParam(':type', $_POST['type']);
			$upateUser->bindParam(':width', $_POST['width']);
			$upateUser->bindParam(':length', $_POST['length']);
			$upateUser->bindParam(':can_stack', $_POST['can_stack']);
			$upateUser->bindParam(':stack_height', $_POST['stack_height']);
			$upateUser->bindParam(':can_sit', $_POST['can_sit']);
			$upateUser->bindParam(':is_walkable', $_POST['is_walkable']);
			$upateUser->bindParam(':allow_recycle', $_POST['allow_recycle']);
			$upateUser->bindParam(':allow_trade', $_POST['allow_trade']);
			$upateUser->bindParam(':allow_marketplace_sell', $_POST['allow_marketplace_sell']);
			$upateUser->bindParam(':allow_gift', $_POST['allow_gift']);
			$upateUser->bindParam(':allow_inventory_stack', $_POST['allow_inventory_stack']);
			$upateUser->bindParam(':interaction_type', $_POST['interaction_type']);
			$upateUser->bindParam(':interaction_modes_count', $_POST['interaction_modes_count']);
			$upateUser->bindParam(':vending_ids', $_POST['vending_ids']);
			$upateUser->bindParam(':height_adjustable', $_POST['height_adjustable']);
			$upateUser->bindParam(':effect_id', $_POST['effect_id']);
			$upateUser->bindParam(':is_rare', $_POST['is_rare']);
			$upateUser->execute();
			$action = 'Ha editado los datos del furniture: ' . $_POST['naam'];
			Admin::InsertLog($action);
			Admin::succeed("¡El furniture se a guardado!");
		}
	}

	public static function UpdateFansite()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {
			$editFan = $dbh->prepare("UPDATE cms_settings SET 
				fansites=:fansite
				WHERE id = :id");
			$editFan->bindParam(':fansite', $_POST['fan']);
			$editFan->bindParam(':id', $_POST['fanid']);
			$editFan->execute();
			$action = 'Ha actualizado la información de fansites';
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
			Admin::succeed("¡Actualizado con exito!");
		}
	}

	public static function UpdateRad()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {
			$editFan = $dbh->prepare("UPDATE cms_settings SET 
				radio=:radio,
				radio_code=:code
				WHERE id = :id");
			$editFan->bindParam(':radio', $_POST['radio']);
			$editFan->bindParam(':code', $_POST['radio_code']);
			$editFan->bindParam(':id', $_POST['id']);
			$editFan->execute();
			$action = 'Ha actualizado la radio.';
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
			Admin::succeed("¡Actualizado con exito!");
		}
	}

	public static function UpdatePub()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {
			$editFan = $dbh->prepare("UPDATE cms_settings SET 
				publicity=:publicity,
				publicity_code=:code
				WHERE id = :id");
			$editFan->bindParam(':publicity', $_POST['publicity']);
			$editFan->bindParam(':code', $_POST['publicity_code']);
			$editFan->bindParam(':id', $_POST['id']);
			$editFan->execute();
			$action = 'Ha actualizado la sección publicidad.';
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
			Admin::succeed("¡Actualizado con exito!");
		}
	}

	public static function Mante()
	{
		global $dbh, $config;
		if (isset($_POST['updatem'])) {
			$editFan = $dbh->prepare("UPDATE cms_settings SET 
				maintenance=:maintenance
				WHERE id = :id");
			$editFan->bindParam(':maintenance', $_POST['maintenance']);
			$editFan->bindParam(':id', $_POST['id']);
			$editFan->execute();
			$action = 'A activado/desactivado el mantenimiento.';
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
			Admin::succeed("¡Actualizado con exito!");
		}
	}

	public static function REG()
	{
		global $dbh, $config;
		if (isset($_POST['updater'])) {
			$editFan = $dbh->prepare("UPDATE cms_settings SET 
				register=:register
				WHERE id = :id");
			$editFan->bindParam(':register', $_POST['register']);
			$editFan->bindParam(':id', $_POST['id']);
			$editFan->execute();
			$action = 'A deshabilitado/activado el registro.';
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
			Admin::succeed("¡Actualizado con exito!");
		}
	}

	public static function UpdateFaqs()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {
			$editFan = $dbh->prepare("UPDATE cms_settings SET 
				faqs=:faqs
				WHERE id = :id");
			$editFan->bindParam(':faqs', $_POST['fan']);
			$editFan->bindParam(':id', $_POST['fanid']);
			$editFan->execute();
			$action = 'Ha actualizado la información de Regla y preguntas frecuentes';
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
			Admin::succeed("¡Actualizado con exito!");
		}
	}

	public static function UpdateBadges()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {
			$editNews = $dbh->prepare("UPDATE cms_badges SET 
				id=:id,
				code=:badge_id
				WHERE id = :id");
			$editNews->bindParam(':badge_id', $_POST['code']);
			$editNews->bindParam(':id', $_POST['id']);
			$editNews->execute();
			$action = 'Ha editado la placa de la tienda con ID: ' . $_POST['id'];
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
			Admin::succeed("Placa editada");
		}
	}

	public static function UpdatePublicRoom()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {
			$obtain_idroom = $dbh->prepare("SELECT * FROM rooms WHERE id = :room_id ");
			$obtain_idroom->bindParam(':room_id', $_POST['idroom']);
			$obtain_idroom->execute();
			if ($obtain_idroom->rowCount() < 1) {
				Admin::error("No se ha encontrado la sala con esa id");
			} else {

				$editNews = $dbh->prepare("UPDATE navigator_publics SET 
				id=:id,
				room_id=:idroom,
				url_imagen=:urlimagen,
				order_num=:ordernum,
				enable=:enable,
				langue=:langue
				WHERE id = :id");
				$editNews->bindParam(':idroom', $_POST['idroom']);
				$editNews->bindParam(':urlimagen', $_POST['urlimagen']);
				$editNews->bindParam(':ordernum', $_POST['ordernum']);
				$editNews->bindParam(':enable', $_POST['enable']);
				$editNews->bindParam(':langue', $_POST['langue']);
				$editNews->bindParam(':id', $_POST['id']);
				$editNews->execute();
				$action = 'Ha editado la sala pública con ID: ' . $_POST['idroom'];
				Admin::InsertLog($action);
				echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
				Admin::succeed("Sala editada");
			}
		}
	}

	public static function UpdateSection()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {
			if (!empty($_POST['name'])) {
				if (!empty($_POST['icon'])) {
					if (!empty($_POST['visible'])) {
						$obtain_idroom2 = $dbh->prepare("SELECT * FROM catalog_pages WHERE id = :parent_id ");
						$obtain_idroom2->bindParam(':parent_id', $_POST['parent_id']);
						$obtain_idroom2->execute();
						if ($obtain_idroom2->rowCount() == 0) {
							Admin::error("No existe esa id de la sección del catálogo");
						} else {

							$editSection = $dbh->prepare("UPDATE catalog_pages SET 
				id=:id,
				parent_id=:parent_id,
				caption=:caption,
				icon_image=:icon,
				visible=:visible,
				min_rank=:min_rank,
				page_link=:page_link,
				page_layout=:page_layout,
				page_strings_2=:page_strings_2
				WHERE id = :id");
							$editSection->bindParam(':id', $_POST['id']);
							$editSection->bindParam(':parent_id', $_POST['parent_id']);
							$editSection->bindParam(':caption', $_POST['name']);
							$editSection->bindParam(':icon', $_POST['icon']);
							$editSection->bindParam(':visible', $_POST['visible']);
							$editSection->bindParam(':min_rank', $_POST['minrank']);
							$editSection->bindParam(':page_link', $_POST['catalog_link']);
							$editSection->bindParam(':page_layout', $_POST['catalog_layout']);
							$editSection->bindParam(':page_strings_2', $_POST['catalog_description']);
							$editSection->execute();
							$action = 'Ha editado la sección del catálogo: ' . $_POST['name'];
							Admin::InsertLog($action);
							echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
							Admin::succeed("Sección editada");
						}
					}
				}
			}
		}
	}

	public static function UpdateHappyHour()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {

			$upateUser = $dbh->prepare("UPDATE game_happyhour SET 
					credits=:credits,
					duckets=:duckets,
					diamantes=:diamantes,
					dolares=:dolares,
					moneda1=:moneda1,
					moneda2=:moneda2,
					moneda3=:moneda3,
					moneda4=:moneda4");
			$upateUser->bindParam(':credits', $_POST['credits']);
			$upateUser->bindParam(':duckets', $_POST['duckets']);
			$upateUser->bindParam(':diamantes', $_POST['diamantes']);
			$upateUser->bindParam(':dolares', $_POST['dolares']);
			$upateUser->bindParam(':moneda1', $_POST['moneda1']);
			$upateUser->bindParam(':moneda2', $_POST['moneda2']);
			$upateUser->bindParam(':moneda3', $_POST['moneda3']);
			$upateUser->bindParam(':moneda4', $_POST['moneda4']);
			$upateUser->execute();
			$action = 'Ha editado los datos del HappyHour';
			Admin::InsertLog($action);
			Admin::succeed("¡El HappyHour se a guardado!");
		}
	}

	public static function UpdateUserOfTheWeek()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {
			$getUserData = $dbh->prepare("SELECT id,username FROM users WHERE username = :name");
			$getUserData->bindParam(':name', $_POST['naam']);
			$getUserData->execute();
			$upateUser2 = $getUserData->fetch();
			if ($upateUser = $dbh->prepare("UPDATE uotw SET userid=:userdata,text=:txt")) {
				$upateUser->bindParam(':userdata', $upateUser2['id']);
				$upateUser->bindParam(':txt', $_POST['uftwtext']);
				$upateUser->execute();
				Admin::succeed("The user now has UOTW");
			} else {
				Admin::error("No funciona");
			}
		}
	}

	public static function UpdateNews()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {
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
			$action = 'Ha actualizado la noticia: ' . $_POST['title'];
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
			Admin::succeed("¡Se ha actualizado la noticia!");
		}
	}

	public static function UpdatePermissions()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {

			$upateUser = $dbh->prepare("UPDATE permissions_groups SET 
					name=:name,
					badge_code=:badge_code,
					title=:title
					WHERE id = :id");
			$upateUser->bindParam(':name', $_POST['name']);
			$upateUser->bindParam(':id', $_POST['naam']);
			$upateUser->bindParam(':badge_code', $_POST['badge_code']);
			$upateUser->bindParam(':title', $_POST['title']);
			$upateUser->execute();
			$action = 'Ha editado los datos del permission: ' . $_POST['naam'];
			Admin::InsertLog($action);
			Admin::succeed("¡El permission se a guardado!");
		}
	}

	public static function UpdateTareas()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {

			$upateUser = $dbh->prepare("UPDATE tareas SET 
					tarea=:tarea
					WHERE id = :id");
			$upateUser->bindParam(':tarea', $_POST['tarea']);
			$upateUser->bindParam(':id', $_POST['naam']);
			$upateUser->execute();
			$action = 'Ha editado los datos del tarea: ' . $_POST['naam'];
			Admin::InsertLog($action);
			Admin::succeed("¡El tarea se a guardado!");
		}
	}

	public static function UpdateComandos()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {

			$upateUser = $dbh->prepare("UPDATE system_commands SET 
					input=:input,
					minrank=:minrank,
					description_fr=:description_fr,
					description_en=:description_en,
					description_br=:description_br,
					description_es=:description_es
					WHERE id = :id");
			$upateUser->bindParam(':input', $_POST['input']);
			$upateUser->bindParam(':id', $_POST['naam']);
			$upateUser->bindParam(':minrank', $_POST['minrank']);
			$upateUser->bindParam(':description_fr', $_POST['description_fr']);
			$upateUser->bindParam(':description_en', $_POST['description_en']);
			$upateUser->bindParam(':description_br', $_POST['description_br']);
			$upateUser->bindParam(':description_es', $_POST['description_es']);
			$upateUser->execute();
			$action = 'Ha editado los datos del comando: ' . $_POST['naam'];
			Admin::InsertLog($action);
			Admin::succeed("¡El comando se a guardado!");
		}
	}

	public static function UpdateRoomOwner()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {

			$upateUser = $dbh->prepare("UPDATE rooms SET 
					caption=:caption,
					owner=:owner,
					description=:description,
					state=:state
					WHERE id = :id");
			$upateUser->bindParam(':caption', $_POST['caption']);
			$upateUser->bindParam(':owner', $_POST['owner']);
			$upateUser->bindParam(':description', $_POST['description']);
			$upateUser->bindParam(':state', $_POST['state']);
			$upateUser->bindParam(':id', $_POST['naam']);
			$upateUser->execute();
			$action = 'Ha editado los datos del sala: ' . $_POST['naam'];
			Admin::InsertLog($action);
			Admin::succeed("¡El sala se a guardado!");
		}
	}

	public static function UpdateInfosIndex()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {

			$upateUser = $dbh->prepare("UPDATE cms_infosindex SET 
					title=:title,
					information=:information,
					image=:image
					WHERE id = :id");
			$upateUser->bindParam(':title', $_POST['title']);
			$upateUser->bindParam(':information', $_POST['information']);
			$upateUser->bindParam(':image', $_POST['image']);
			$upateUser->bindParam(':id', $_POST['naam']);
			$upateUser->execute();
			$action = 'Ha editado los datos del InfoIndex: ' . $_POST['naam'];
			Admin::InsertLog($action);
			Admin::succeed("¡El información se a guardado!");
		}
	}

	public static function UpdateFanSites()
	{
		global $dbh, $config;
		if (isset($_POST['update'])) {

			$upateUser = $dbh->prepare("UPDATE cms_fansites SET 
					name=:name,
					description=:description,
					link=:link,
					ceo=:ceo
					WHERE id = :id");
			$upateUser->bindParam(':name', $_POST['name']);
			$upateUser->bindParam(':description', $_POST['description']);
			$upateUser->bindParam(':link', $_POST['link']);
			$upateUser->bindParam(':ceo', $_POST['ceo']);
			$upateUser->bindParam(':id', $_POST['naam']);
			$upateUser->execute();
			$action = 'Ha editado los datos del InfoIndex: ' . $_POST['naam'];
			Admin::InsertLog($action);
			Admin::succeed("¡El información se a guardado!");
		}
	}

	public static function LookSollie1()
	{
		global $dbh, $lang, $hotel;
		if (isset($_POST['updaterank'])) {
			if ($_POST['rank'] > User::userData('rank')) {
				Admin::error("" . $lang["HkError3"] . "");
			} else {
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
				rank=:rank,
				pais=:pais
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
				$upateUser->bindParam(':pais', $_POST['pais']);
				$upateUser->execute();
				$action = 'Ha editado el rango de usuario:' . $_POST['news'];
				Admin::InsertLog($action);
				Admin::succeed("" . $lang["HkError4"] . "");
			}
		}
	}

	public static function ChangeStatusReport()
	{
		global $dbh, $config;
		if (isset($_POST['statusreport'])) {
			$editNews = $dbh->prepare("UPDATE cms_reports SET 
				state=:state,
				staff=:staff
				WHERE id = :id");
			$editNews->bindParam(':state', $_POST['state']);
			$editNews->bindParam(':staff', $_POST['staff']);
			$editNews->bindParam(':id', $_GET['id']);
			$editNews->execute();
		}
	}
	/* Updates */

	/* Inserts */
	public static function InsertLog($message)
	{
		global $dbh, $config;
		$stmt2 = $dbh->prepare("INSERT INTO hk_logs (user_id,username,actions,rank,fech) VALUES (:id,:username,:actions,:rank,:fech)");
		$stmt2->bindParam(':id', User::userData('id'));
		$stmt2->bindParam(':username', User::userData('username'));
		$stmt2->bindParam(':actions', $message);
		$stmt2->bindParam(':rank', User::userData('rank'));
		$stmt2->bindParam(':fech', time());
		$stmt2->execute();
	}

	public static function PostBadges()
	{
		global $dbh, $config;
		if (isset($_POST['postbadge'])) {
			if (!empty($_POST['code'])) {
				$postBadges = $dbh->prepare("INSERT INTO cms_badges (badge_id) VALUES (:badge_id)");
				$postBadges->bindParam(':badge_id', $_POST['code']);
				$postBadges->execute();
				if ($postBadges) {
					$action = 'Ha subido una placa a la tienda';
					Admin::InsertLog($action);
					Admin::succeed("¡Se ha subido la placa a la tienda!");
					echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
				} else {
					$action = 'ERROR: Ha intentado subir una placa a la tienda';
					Admin::InsertLog($action);
					Admin::succeed("Error, no se a podido subir");
				}
			} else {
				$action = 'ERROR: Ha intentado subir una placa a la tienda';
				Admin::InsertLog($action);
				Admin::error("Error, no se a podido subir");
				return;
			}
		} else {
		}
	}

	public static function PostPublicRoom()
	{
		global $dbh, $config;
		if (isset($_POST['postroom'])) {
			if (!empty($_POST['room'])) {

				$obtain_idroom = $dbh->prepare("SELECT * FROM rooms WHERE id = :roomid ");
				$obtain_idroom->bindParam(':roomid', $_POST['room']);
				$obtain_idroom->execute();

				if ($obtain_idroom->rowCount() < 1) {
					Admin::error("No se ha encontrado la sala con esa id");
				} else {

					$obtain_idroom2 = $dbh->prepare("SELECT * FROM navigator_publics WHERE room_id = :roomid ");
					$obtain_idroom2->bindParam(':roomid', $_POST['room']);
					$obtain_idroom2->execute();

					if ($obtain_idroom2->rowCount() >= 1) {
						Admin::error("Ya esa sala con esa ID, es una sala pública");
					} else {

						$postpublics = $dbh->prepare("INSERT INTO navigator_publics (room_id, image_url, order_num, enabled, langue) VALUES (:room_id, '/navigator-thumbnail/" . $_POST['room'] . ".png', '', '1', 'es')");
						$postpublics->bindParam(':room_id', $_POST['room']);
						$postpublics->execute();

						if ($postpublics) {
							$caption = "Ha añadido una sala pública";
							Admin::InsertLog($caption);
							Admin::succeed("¡Sala publicada con exito!");
							echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
						} else {

							$caption = "Ha intentado añadir una sala pública";
							Admin::InsertLog($caption);
							Admin::succeed("Error");
						}
					}
				}
			} else {
				$caption = "Ha intentado añadir una sala pública";
				Admin::InsertLog($caption);
				Admin::error("Campos vacíos");
				return;
			}
		} else {
		}
	}

	public static function AddCatalogSection()
	{
		global $dbh, $config;
		if (isset($_POST['addsectioncatalogue'])) {
			if (!empty($_POST['name'])) {
				if (!empty($_POST['icon'])) {
					if (!empty($_POST['visible'])) {
						$obtain_idroom2 = $dbh->prepare("SELECT * FROM catalog_pages WHERE id = :parent_id ");
						$obtain_idroom2->bindParam(':parent_id', $_POST['parent_id']);
						$obtain_idroom2->execute();
						if ($obtain_idroom2->rowCount() == 0) {
							Admin::error("No existe esa id de la sección del catálogo");
						} else {
							$postsection = $dbh->prepare("INSERT INTO catalog_pages (id,parent_id,caption,icon_image,enable,min_rank,order_num,page_layout,page_link,page_strings_1,page_strings_2) VALUES 
								(:id,:parent_id,:caption,:icon_image,:enable,:min_rank,:order_num,:page_layout,:page_link,:page_strings_1,:page_strings_2)");
							$postsection->bindParam(':id', $_POST['id']);
							$postsection->bindParam(':parent_id', $_POST['parent_id']);
							$postsection->bindParam(':caption', $_POST['name']);
							$postsection->bindParam(':icon_image', $_POST['icon']);
							$postsection->bindParam(':enable', $_POST['visible']);
							$postsection->bindParam(':min_rank', $_POST['minrank']);
							$postsection->bindParam(':order_num', $_POST['ordernum']);
							$postsection->bindParam(':page_layout', $_POST['catalog_layout']);
							$postsection->bindParam(':page_link', $_POST['catalog_link']);
							$postsection->bindParam(':page_strings_1', $_POST['catalog_description1']);
							$postsection->bindParam(':page_strings_2', $_POST['catalog_description']);
							$postsection->execute();
							if ($postsection) {
								$action = 'Ha añadido una página al catálogo : ' . $_POST['name'];
								Admin::InsertLog($action);
								Admin::succeed("¡Sección publicada con exito!");
							} else {
								$action = 'Ha intentado añadir una página al catálogo';
								Admin::InsertLog($action);
								Admin::succeed("Error");
							}
						}
					}
				}
			}
		}
	}

	public static function UploadBadge()
	{
		global $dbh, $hotel, $config;
		if (isset($_POST['uploadbadge'])) {
			if (!empty($_POST['code'])) {
				if (!empty($_FILES['imagen'])) {
					$format = "image/gif";
					if ($_FILES['imagen']['type'] == $format) {
						if ($_FILES['imagen']['name'] == $_POST['code'] . ".gif") {
							$rute = "../swfs/c_images/placas/" . $_FILES['imagen']['name'];
							move_uploaded_file($_FILES['imagen']['tmp_name'], $rute);
							$archivo = "../swfs/c_images/texts.txt";
							if (file_exists($archivo)) {
								$file = fopen("../swfs/c_images/texts.txt");
								fwrite($file, "\n");
								fwrite($file, "badge_name_" . $_POST['code'] . "=" . $_POST['title']);
								fwrite($file, "\n");
								fwrite($file, "badge_desc_" . $_POST['code'] . "=" . $_POST['description']);
								fclose($file);
								$uploadBadge = $dbh->prepare("INSERT INTO badge_definitions(code) VALUES (:code)");
								$uploadBadge->bindParam(":code", $_POST['code']);
								$uploadBadge->execute();
								$action = 'Ha subido una placa al hotel con el siguiente código: ' . $_POST['code'];
								Admin::InsertLog($action);
								echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
								Admin::succeed("¡Placa subida con exito!");
							} else {
								$action = 'Ha intentado subir una placa al hotel con el siguiente código: ' . $_POST['code'] . ' pero no fue posible por que no subio el archivo.';
								Admin::InsertLog($action);
								Admin::error("No se encuentra archivo");
							}
						} else {
							$action = 'Ha intentado subir una placa al hotel con el siguiente código: ' . $_POST['code'] . ' pero no fue posible por que el código de la placa no coincidia con el de la imagen';
							Admin::InsertLog($action);
							Admin::error("<strong>¡Recuerda!</strong> El código debe coincidir con el nombre de la imagen");
						}
					} else {
						$action = 'CUIDADO: Ha intentado subir una placa al hotel con el siguiente código: ' . $_POST['code'] . ' pero no fue posible por que el formato no era GIF';
						Admin::InsertLog($action);
						Admin::error("Formato no permitido, por favor subir en gif");
					}
				} else {
					$action = 'Ha intentado subir una placa al hotel con el siguiente código: ' . $_POST['code'] . ' pero no fue posible por que no a subido un archivo';
					Admin::InsertLog($action);
					Admin::error("No se a subido un archivo");
					return;
				}
			} else {
				$action = 'Ha intentado subir una placa al hotel, pero no fue posible por que no a puesto código';
				Admin::InsertLog($action);
				Admin::error("No tiene código");
				return;
			}
		} else {
		}
	}

	public static function UploadCatalogSection()
	{
		global $dbh, $hotel;
		if (isset($_POST['addsectioncatalogue'])) {
			if (!empty($_POST['code'])) {
				if (!empty($_FILES['imagen'])) {
					$format = "image/gif";
					if ($_FILES['imagen']['type'] == $format) {
						if ($_FILES['imagen']['name'] == $_POST['code'] . ".gif") {
							$rute = '../swf/c_images/album1584/' . $_FILES['imagen']['name'];
							move_uploaded_file($_FILES['imagen']['tmp_name'], $rute);
							$archivo = '../swf/gamedata/external_flash_texts.txt';
							if (file_exists($archivo)) {
								$file = fopen("../swf/gamedata/external_flash_texts.txt", "a");
								fwrite($file, "\n");
								fwrite($file, "badge_name_" . $_POST['code'] . "=" . $_POST['title']);
								fwrite($file, "\n");
								fwrite($file, "badge_desc_" . $_POST['code'] . "=" . $_POST['description']);
								fclose($file);
								$uploadBadge = $dbh->prepare("INSERT INTO badge_definitions(code) VALUES (:code)");
								$uploadBadge->bindParam(":code", $_POST['code']);
								$uploadBadge->execute();

								Admin::succeed("¡Placa subida con exito!");
							} else {
								Admin::error("No se encuentra archivo");
							}
						} else {
							Admin::error("<strong>¡Recuerda!</strong> El código debe coincidir con el nombre de la imagen");
						}
					} else {
						Admin::error("Formato no permitido, por favor subir en gif");
					}
				} else {
					Admin::error("No se a subido un archivo");
					return;
				}
			} else {
				Admin::error("No tiene código");
				return;
			}
		} else {
		}
	}

	public static function PostWordFilter()
	{
		global $dbh, $config;
		if (isset($_POST['upword'])) {
			if (!empty($_POST['word'])) {
				if (!empty($_POST['wreemplacent'])) {
					$postFilter = $dbh->prepare('INSERT into wordfilter(word,replacement) VALUES (:word,:remplacement)');
					$postFilter->bindParam(':word', $_POST['word']);
					$postFilter->bindParam(':remplacement', $_POST['wreemplacent']);
					$postFilter->execute();
					$action = 'Ha importado una palabra al filtro';
					Admin::InsertLog($action);
					echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
					Admin::succeed("¡Se ha importado la palabra con exito!");
				}
			}
		}
	}

	public static function Posteventos()
	{
		global $dbh, $config;
		if (isset($_POST['posteventos'])) {

			$_SESSION['news'] = $_POST['title'];
			if (!empty($_POST['title'])) {
				if (!empty($_POST['hora'])) {
					$posteventos = $dbh->prepare("
							INSERT INTO cms_events(title,hora,fecha,user,type,image)
							VALUES
							(
							:title,
							:hora,
							:fecha,
							:id,
							'1',
							:topstory
							)");
					$posteventos->bindParam(':title', $_POST['title']);
					$posteventos->bindParam(':hora', $_POST['hora']);
					$posteventos->bindParam(':fecha', $_POST['fecha']);
					$posteventos->bindParam(':id', $_SESSION['id']);
					$posteventos->bindParam(':topstory', $_POST['topstory']);
					$posteventos->execute();
					$action = 'Ha publicado un nuevo evento.';
					Admin::InsertLog($action);
					Admin::succeed("News item is posted!");
				} else {
					Admin::error("News item is empty!");

					return;
				}
			} else {
				Admin::error("There is no title!");
				return;
			}
		}
	}

	public static function PostNews()
	{
		global $dbh, $config;
		if (isset($_POST['postnews'])) {
			$_SESSION['title'] = $_POST['title'];
			$_SESSION['news'] = $_POST['news'];
			if (!empty($_POST['title'])) {
				if (!empty($_POST['news'])) {
					$postNews = $dbh->prepare("
							INSERT INTO cms_news(title,image,shortstory,longstory,author,date)
							VALUES
							(
							:title,
							:topstory, 
							:slogan,
							:news,
							:name,
							:time
							)");
					$postNews->bindParam(':title', $_POST['title']);
					$postNews->bindParam(':slogan', $_POST['slogan']);
					$postNews->bindParam(':topstory', $_POST['topstory']);
					$postNews->bindParam(':news', $_POST['news']);
					$postNews->bindParam(':name', User::userData('username'));
					$postNews->bindParam(':time', time());
					$postNews->execute();
					$_SESSION['title'] = '';
					$_SESSION['kort'] = '';
					$_SESSION['news'] = '';
					$action = 'Ha creado una nueva noticia';
					Admin::InsertLog($action);
					echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
					Admin::succeed("¡Noticia añadida con exito!");
				} else {
					Admin::error("No tiene imagen");
					return;
				}
			} else {
				Admin::error("No tiene título");
				return;
			}
		} else {
		}
	}

	public static function Postshopy()
	{
		global $dbh, $config;
		if (isset($_POST['postshopy'])) {
			$_SESSION['title'] = $_POST['title'];
			$_SESSION['news'] = $_POST['news'];
			if (!empty($_POST['title'])) {
				$postNews = $dbh->prepare("
							INSERT INTO mezz_shop(title,image,esmeraldas,planetas,price,date)
							VALUES
							(
							:title,
							:image,
							:esmeraldas, 
							:planetas,
							:price,
							:time
							)");
				$postNews->bindParam(':title', $_POST['title']);
				$postNews->bindParam(':image', $_POST['image']);
				$postNews->bindParam(':esmeraldas', $_POST['esmeraldas']);
				$postNews->bindParam(':planetas', $_POST['planetas']);
				$postNews->bindParam(':price', $_POST['price']);
				$postNews->bindParam(':time', time());
				$postNews->execute();
				$_SESSION['title'] = '';
				$_SESSION['kort'] = '';
				$_SESSION['news'] = '';
				$action = 'Ha creado una nueva noticia';
				Admin::InsertLog($action);
				Admin::succeed("¡Noticia añadida con exito!");
			} else {
				Admin::error("no tiene  ningun titulo ");
				return;
			}
		}
	}

	public static function PostTareas()
	{
		global $dbh, $config;
		if (isset($_POST['posttareas'])) {
			if (!empty($_POST['tarea'])) {

				$postBadges = $dbh->prepare("INSERT INTO tareas (id, tarea) VALUES (:id, :tarea)");
				$postBadges->bindParam(':id', $_POST['id']);
				$postBadges->bindParam(':tarea', $_POST['tarea']);
				$postBadges->execute();

				if ($postBadges) {
					$action = 'Ha subido una tarea';
					Admin::InsertLog($action);
					Admin::succeed("¡Se ha subido la tarea!");
					echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/tareas">';
				} else {
					$action = 'ERROR: Ha intentado subir una tarea';
					Admin::InsertLog($action);
					Admin::succeed("Error, no se a podido subir");
				}
			} else {
				$action = 'ERROR: Ha intentado subir una tarea';
				Admin::InsertLog($action);
				Admin::error("Error, no se a podido subir");
				return;
			}
		} else {
		}
	}

	public static function AddBans()
	{
		global $dbh, $config;
		if (isset($_POST['postban'])) {
			$_SESSION['title'] = $_POST['title'];
			$_SESSION['news'] = $_POST['news'];
			if (!empty($_POST['username'])) {
				if (!empty($_POST['reason'])) {

					$username = filter($_POST['username']);
					$check = $dbh->prepare("SELECT * FROM users WHERE username = '$username' LIMIT 1");
					$check->execute();
					$row = $check->fetch();
					$usernameip = $row['ip_last'];
					if ($row['rank'] < User::userData('rank')) {
						if (filter($_POST['type']) == '0') {
							$postBan = $dbh->prepare("
											INSERT INTO bans(bantype,value,reason,expire,added_by,added_date,appeal_state)
											VALUES
												(
													:bantype,
													:value, 
													:reason,
													:expire,
													:added_by,
													:added_date,
													'1'
												)");
							$type = "user";
							$timer = time() + filter($_POST['timer']);
							$postBan->bindParam(':bantype', $type);
							$postBan->bindParam(':value', $username);
							$postBan->bindParam(':reason', filter($_POST['reason']));
							$postBan->bindParam(':expire', $timer);
							$postBan->bindParam(':added_by', User::userData('username'));
							$postBan->bindParam(':added_date', time());
							$postBan->execute();
							$action = 'Ha baneado a un usuario por nombre, a: ' . $username;
							Admin::InsertLog($action);
							echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
							Admin::succeed("¡Ban añadido con exito!");
						}
						if (filter($_POST['type']) == '1') {
							$postBan = $dbh->prepare("
													INSERT INTO bans(bantype,value,reason,expire,added_by,added_date,appeal_state)
													VALUES
														(
															:bantype,
															:value, 
															:reason,
															:expire,
															:added_by,
															:added_date,
															'1'
														)");
							$type = "ip";
							$timer = time() + filter($_POST['timer']);
							$postBan->bindParam(':bantype', $type);
							$postBan->bindParam(':value', $usernameip);
							$postBan->bindParam(':reason', filter($_POST['reason']));
							$postBan->bindParam(':expire', $timer);
							$postBan->bindParam(':added_by', User::userData('username'));
							$postBan->bindParam(':added_date', time());
							$postBan->execute();
							$action = 'Ha baneado a un usuario por IP, a: ' . $username;
							Admin::InsertLog($action);
							echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
							Admin::succeed("¡Ban añadido con exito!");
						}
						if (filter($_POST['type']) == '2') {
							$postBan = $dbh->prepare("
														INSERT INTO bans(bantype,value,reason,expire,added_by,added_date,appeal_state)
														VALUES
															(
																:bantype,
																:value, 
																:reason,
																:expire,
																:added_by,
																:added_date,
																'1'
															)");
							$type = "machine";
							$timer = time() + filter($_POST['timer']);
							$postBan->bindParam(':bantype', $type);
							$postBan->bindParam(':value', $usernameip);
							$postBan->bindParam(':reason', filter($_POST['reason']));
							$postBan->bindParam(':expire', $timer);
							$postBan->bindParam(':added_by', User::userData('username'));
							$postBan->bindParam(':added_date', time());
							$postBan->execute();
							$action = 'Ha baneado a un usuario por IP, a: ' . $username;
							Admin::InsertLog($action);
							echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
							Admin::succeed("¡Ban añadido con exito!");
						}
					} else {
						Admin::error("No puedes banear a un usuario con mayor cargo que tú");
					}
				} else {
					Admin::error("No has introducido la razón");
					return;
				}
			} else {
				Admin::error("No has introducido el usuario");
				return;
			}
		} else {
		}
	}

	public static function PostCatalogPages()
	{
		global $dbh, $config;
		if (isset($_POST['postcatalog'])) {
			if (!empty($_POST['id'])) {
				$postBadges = $dbh->prepare("INSERT INTO catalog_pages (id, parent_id, caption, icon_image, enabled, min_rank, order_num, page_layout, page_link, page_strings_1, page_strings_2) VALUES (:id, :parent_id, :caption, :icon_image, :enabled, :min_rank, :order_num, :page_layout, :page_link, :page_strings_1, :page_strings_2)");
				$postBadges->bindParam(':id', $_POST['id']);
				$postBadges->bindParam(':parent_id', $_POST['parent_id']);
				$postBadges->bindParam(':caption', $_POST['caption']);
				$postBadges->bindParam(':icon_image', $_POST['icon_image']);
				$postBadges->bindParam(':enabled', $_POST['enabled']);
				$postBadges->bindParam(':min_rank', $_POST['min_rank']);
				$postBadges->bindParam(':order_num', $_POST['order_num']);
				$postBadges->bindParam(':page_layout', $_POST['page_layout']);
				$postBadges->bindParam(':page_link', $_POST['page_link']);
				$postBadges->bindParam(':page_strings_1', $_POST['page_strings_1']);
				$postBadges->bindParam(':page_strings_2', $_POST['page_strings_2']);
				$postBadges->execute();
				if ($postBadges) {
					$action = 'Ha subido una pagina';
					Admin::InsertLog($action);
					Admin::succeed("¡Se ha subido la pagina");
					echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/pagescatalog">';
				} else {
					$action = 'ERROR: Ha intentado subir una pagina';
					Admin::InsertLog($action);
					Admin::succeed("Error, no se a podido subir");
				}
			} else {
				$action = 'ERROR: Ha intentado subir una pagina';
				Admin::InsertLog($action);
				Admin::error("Error, no se a podido subir");
				return;
			}
		} else {
		}
	}

	public static function PostBadge()
	{
		global $dbh, $config;
		if (isset($_POST['postbadge'])) {
			$_SESSION['title'] = $_POST['title'];
			$_SESSION['news'] = $_POST['news'];
			if (!empty($_POST['title'])) {
				if (!empty($_POST['news'])) {
					$postNews = $dbh->prepare("
						INSERT INTO cms_news(title,image,shortstory,longstory,author,date)
						VALUES
						(
						:title,
						:topstory, 
						:slogan,
						:news,
						:name,
						:time
						)");
					$postNews->bindParam(':title', $_POST['title']);
					$postNews->bindParam(':slogan', $_POST['slogan']);
					$postNews->bindParam(':topstory', $_POST['topstory']);
					$postNews->bindParam(':news', $_POST['news']);
					$postNews->bindParam(':name', User::userData('username'));
					$postNews->bindParam(':time', time());
					$postNews->execute();
					$_SESSION['title'] = '';
					$_SESSION['kort'] = '';
					$_SESSION['news'] = '';
					$action = 'Ha publicado una nueva placa.';
					Admin::InsertLog($action);
					Admin::succeed("¡Placa publicada con exito!");
				} else {
					Admin::error("No tiene imagen");
					return;
				}
			} else {
				Admin::error("No tiene título");
				return;
			}
		} else {
		}
	}

	public static function ReplyReport()
	{
		global $dbh, $config;
		if (isset($_POST['postreply'])) {
			if (!empty($_POST['reply'])) {
				$postNews = $dbh->prepare("
						INSERT INTO cms_reportsreply(report_id,reply,staff,time)
						VALUES
						(
						:report_id,
						:reply, 
						:staff,
						:time
						)");
				$postNews->bindParam(':report_id', $_POST['report_id']);
				$postNews->bindParam(':reply', $_POST['reply']);
				$postNews->bindParam(':staff', User::userData('username'));
				$postNews->bindParam(':time', strtotime('now'));
				$postNews->execute();
			} else {
				Html::errornew("Tienes que escribir una respuesta");
				return;
			}
		} else {
		}
	}
	/* Inserts */

	/* Deletes */
	public static function DeleteWordFilter()
	{
		global $dbh, $config;
		if (isset($_GET['delete'])) {
			$deleteNews = $dbh->prepare("DELETE FROM wordfilter WHERE id=:wordfilter");
			$deleteNews->bindParam(':wordfilter', $_GET['delete']);
			$deleteNews->execute();
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
			Admin::succeed('La palabra ha sido eliminada a sido eliminado');
		}
	}

	public static function DeleteCatalogPage()
	{
		global $dbh, $config;
		if (isset($_GET['delete'])) {
			$deleteNews = $dbh->prepare("DELETE FROM catalog_pages WHERE id=:sectionid");
			$deleteNews->bindParam('sectionid', $_GET['delete']);
			$deleteNews->execute();
			$action = 'Ha eliminado una pagina de la tienda';
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/pagescatalog">';
			Admin::succeed('Se ha eliminado la pagina');
		}
	}

	public static function DeleteReport()
	{
		global $dbh, $lang;
		if (isset($_GET['delete'])) {
			$deleteBan = $dbh->prepare("DELETE FROM cms_reports WHERE id=:newsid");
			$deleteBan->bindParam(':newsid', $_GET['delete']);
			$deleteBan->execute();
			$action = 'Ha eliminado un ticket.';
			Admin::InsertLog($action);
			Admin::succeed('' . $lang["HkError20"] . '');
		}
	}


	public static function DeleteFurni()
	{
		global $dbh, $lang;
		if (isset($_GET['delete'])) {
			$deleteBan = $dbh->prepare("DELETE FROM cms_furnis WHERE id=:newsid");
			$deleteBan->bindParam(':newsid', $_GET['delete']);
			$deleteBan->execute();
			Admin::succeed('Furni borrado correctamente');
		}
	}

	public static function DeleteNews()
	{
		global $dbh, $config;
		if (isset($_GET['delete'])) {
			$deleteNews = $dbh->prepare("DELETE FROM cms_news WHERE id=:newsid");
			$deleteNews->bindParam(':newsid', $_GET['delete']);
			$deleteNews->execute();
			$action = 'Ha eliminado una noticia';
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
			Admin::succeed('El artículo a sido eliminado');
		}
	}

	public static function Deleteventos()
	{
		global $dbh, $config;
		if (isset($_GET['delete'])) {
			$deleteNews = $dbh->prepare("DELETE FROM cms_events WHERE id=:newsid");
			$deleteNews->bindParam(':newsid', $_GET['delete']);
			$deleteNews->execute();
			$action = 'Ha eliminado un evento.';
			Admin::InsertLog($action);
			Admin::succeed('Evento borrado correctamente');
		}
	}

	public static function DeleteTicket()
	{
		global $dbh, $config;
		if (isset($_GET['delete'])) {
			$deleteNews = $dbh->prepare("DELETE FROM cms_ticket WHERE id=:ticketid");
			$deleteNews->bindParam(':ticketid', $_GET['delete']);
			$deleteNews->execute();
			$action = 'Ha eliminado un ticket';
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
			Admin::succeed('El ticket a sido eliminado');
		}
	}

	public static function DeleteChatlogs()
	{
		global $dbh, $config;
		if (isset($_POST['deleterecords'])) {
			$deleteNews = $dbh->prepare("DELETE FROM chatlogs");
			$deleteNews->execute();
			$action = 'Ha vaciado el registro de chatlogs';
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
			Admin::succeed('Se ha vaciado el registro');
		}
	}

	public static function DeletePrivativeChatlogs()
	{
		global $dbh, $config;
		if (isset($_POST['deleterecords'])) {
			$deleteNews = $dbh->prepare("DELETE FROM chatlogs_console");
			$deleteNews->execute();
			$action = 'Ha vaciado el registro de chatlogs privados';
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
			Admin::succeed('Se ha vaciado el registro');
		}
	}

	public static function DeleteRooms()
	{
		global $dbh, $config;
		if (isset($_GET['delete'])) {
			$deleteNews = $dbh->prepare("DELETE FROM rooms WHERE id=:roomsid");
			$deleteNews->bindParam(':roomsid', $_GET['delete']);
			$deleteNews->execute();
			$action = 'Ha eliminado una sala';
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
			Admin::succeed('La sala a sido eliminado');
		}
	}

	public static function DeleteInfosIndex()
	{
		global $dbh, $config;
		if (isset($_GET['delete'])) {
			$deleteNews = $dbh->prepare("DELETE FROM cms_infosindex WHERE id=:roomsid");
			$deleteNews->bindParam(':roomsid', $_GET['delete']);
			$deleteNews->execute();
			$action = 'Ha eliminado una sala';
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/infosindex">';
			Admin::succeed('La sala a sido eliminado');
		}
	}

	public static function DeleteFanSites()
	{
		global $dbh, $config;
		if (isset($_GET['delete'])) {
			$deleteNews = $dbh->prepare("DELETE FROM cms_fansites WHERE id=:roomsid");
			$deleteNews->bindParam(':roomsid', $_GET['delete']);
			$deleteNews->execute();
			$action = 'Ha eliminado una sala';
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/fansites">';
			Admin::succeed('La sala a sido eliminado');
		}
	}

	public static function DeleteGroup()
	{
		global $dbh, $config;
		if (isset($_GET['delete'])) {
			$deleteBan = $dbh->prepare("DELETE FROM groups WHERE id=:newsid");
			$deleteBan->bindParam(':newsid', $_GET['delete']);
			$deleteBan->execute();
			$action = 'Ha eliminado un ban';
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/groups">';
			Admin::succeed('Se a eliminado el ban');
		}
	}

	public static function DeleteBadge()
	{
		global $dbh, $config;
		if (isset($_GET['delete'])) {
			$deleteNews = $dbh->prepare("DELETE FROM cms_badges WHERE id=:badgeid");
			$deleteNews->bindParam(':badgeid', $_GET['delete']);
			$deleteNews->execute();
			$action = 'Ha eliminado una placa de la tienda';
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
			Admin::succeed('Se ha eliminado la placa');
		}
	}

	public static function DeletePublicRoom()
	{
		global $dbh, $config;
		if (isset($_GET['delete'])) {
			$deletepublic = $dbh->prepare("DELETE FROM navigator_publics WHERE room_id=:newsroom_id");
			$deletepublic->bindParam(':newsroom_id', $_GET['delete']);
			$deletepublic->execute();
			$action = 'Ha eliminado una sala pública';
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
			Admin::succeed('Se ha eliminado la sala pública');
		}
	}

	public static function DeleteCatalogSection()
	{
		global $dbh, $config;
		if (isset($_GET['delete'])) {
			$deleteNews = $dbh->prepare("DELETE FROM catalog_pages WHERE id=:sectionid");
			$deleteNews->bindParam('sectionid', $_GET['delete']);
			$deleteNews->execute();
			$action = 'Ha eliminado una sección del catálogo';
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
			Admin::succeed('Se ha eliminado la sección');
		}
	}

	public static function DeleteTareas()
	{
		global $dbh, $config;
		if (isset($_GET['delete'])) {
			$deleteNews = $dbh->prepare("DELETE FROM tareas WHERE id=:id");
			$deleteNews->bindParam('id', $_GET['delete']);
			$deleteNews->execute();
			$action = 'Ha eliminado una tarea';
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/tareas">';
			Admin::succeed('Se ha eliminado la tarea');
		}
	}

	public static function DeleteSollie()
	{
		global $config, $dbh;
		if (isset($_GET['delete'])) {
			$deleteSollie = $dbh->prepare("DELETE FROM staffapplication WHERE id=:newsid");
			$deleteSollie->bindParam(':newsid', $_GET['delete']);
			$deleteSollie->execute();
			Admin::succeed('Application removed!');
			header('Location: ' . $config['hotelUrl'] . '/adminpan/sollie');
		}
	}

	public static function DeleteBans()
	{
		global $dbh, $config;
		if (isset($_GET['delete'])) {
			$deleteBan = $dbh->prepare("DELETE FROM bans WHERE id=:newsid");
			$deleteBan->bindParam(':newsid', $_GET['delete']);
			$deleteBan->execute();
			$action = 'Ha eliminado un ban';
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/dash">';
			Admin::succeed('Se a eliminado el ban');
		}
	}

	public static function DeleteShopy()
	{
		global $dbh, $config;
		if (isset($_GET['delete'])) {
			$deleteBan = $dbh->prepare("DELETE FROM mezz_shop WHERE id=:newsid");
			$deleteBan->bindParam(':newsid', $_GET['delete']);
			$deleteBan->execute();
			$action = 'Ha eliminado un paquete cofre';
			Admin::InsertLog($action);
			echo '<meta http-equiv="refresh" content="2;URL=' . $config['hotelUrl'] . '/adminpan/Shopy">';
			Admin::succeed('Se a eliminado el paquete');
		}
	}
	/* Deletes */

	/* Others */
	public static function CheckRank($rank)
	{
		global $config; {
			if (User::userData('rank') <= $rank) {
				header('Location: ' . $config['hotelUrl'] . '/index');
				exit();
			}
		}
	}

	public static function darkmode($color1, $color2)
	{
		if (User::userData('hk_dark') == 1) {
			echo 'background-color:' . $color1 . ';color:#fff;';
		} else {
			echo 'background-color:' . $color2 . ';color:#555;';
		}
	}
	/* Others */
	/* RCON */
	public static function RCON()
	{
		global $config;

		function RconEmuLDR($command, $data, $ipvp2s, $mus)
		{
			$rconData = $command . chr(1) . implode(':', $data);
			$rcon = @socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
			@socket_connect($rcon, $ipvp2s, $mus);
			@socket_send($rcon, $rconData, strlen($rconData), MSG_DONTROUTE);
			@socket_close($rcon);
		}


		if (isset($_POST['updatecata'])) {

			RconEmuLDR('updatecata', '1', $config['RCONIP'], $config['RCONPORT']);
			$action = 'Ha actualizado el catalogo';
			Admin::InsertLog($action);
			Admin::succeed("¡Catálogo actualizado con exito!");
		} elseif (isset($_POST['updateitems'])) {
			RconEmuLDR('updateitems', '1', $config['RCONIP'], $config['RCONPORT']);
			$action = 'Ha actualizado los items';
			Admin::InsertLog($action);
			Admin::succeed("¡Items actualizado con exito!");
		} elseif (isset($_POST['updatecomandos'])) {
			RconEmuLDR('updatecomandos', '1', $config['RCONIP'], $config['RCONPORT']);
			$action = 'Ha actualizado los comandos';
			Admin::InsertLog($action);
			Admin::succeed("¡Comandos actualizado con exito!");
		} elseif (isset($_POST['updateexternaltext'])) {
			RconEmuLDR('updateexternaltext', '1', $config['RCONIP'], $config['RCONPORT']);
			$action = 'Ha actualizado el external_text';
			Admin::InsertLog($action);
			Admin::succeed("¡External_text actualizado con exito!");
		} elseif (isset($_POST['updatenavigator'])) {
			RconEmuLDR('updatenavigator', '1', $config['RCONIP'], $config['RCONPORT']);
			$action = 'Ha actualizado el navegador de salas';
			Admin::InsertLog($action);
			Admin::succeed("¡Navegador de salas actualizado con exito!");
		} elseif (isset($_POST['updatepermissions'])) {
			RconEmuLDR('give', [
				'userId' => 1,
				'currency' => 'diamantes',
				'amount' => 100,
			], $config['RCONIP'], $config['RCONPORT']);
			$action = 'Ha actualizado los permisos del hotel ';
			Admin::InsertLog($action);
			Admin::succeed("Permisos actualizados con exito!");
		}
	}
}
