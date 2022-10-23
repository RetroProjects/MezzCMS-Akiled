<?php
if (!defined('BRAIN_CMS')) {
	die('Sorry but you cannot access this file!');
}
/* 
		Functions list Class User.
		---------------
		checkUser();
		hashed();
		validName();
		userData();
		emailTaken();
		userTaken();
		refUser();
		login();
		register();
		userRefClaim();
		editPassword();
		editEmail();
		editHotelSettings();
		editUsername();
	*/
class User
{
	public static function checkUser($password, $passwordDb, $username)
	{
		global $dbh;
		if (substr($passwordDb, 0, 1) == "$") {
			if (password_verify($password, $passwordDb)) {
				return true;
			}
			return false;
		} else {
			if (sha1(md5(md5($password))) == $passwordDb) {
				$passwordBcrypt = self::hashed($password);
				$updatePassword = $dbh->prepare("UPDATE users SET password = :password WHERE username = :username");
				$updatePassword->bindParam(':username', $username);
				$updatePassword->bindParam(':password', $passwordBcrypt);
				$updatePassword->execute();
				return true;
			}
			return false;
		}
	}
	public static function hashed($password, $username = '')
	{
		return sha1(md5(md5($password)));
	}
	public static function validName($username)
	{
		if (strlen($username) <= 15 && strlen($username) >= 3 && ctype_alnum($username)) {
			return true;
		}
		return false;
	}
	public static function userData($key)
	{
		global $dbh, $config;
		if (loggedIn()) {
			if ($config['hotelEmu'] == 'arcturus') {
				if (in_array($key, array('activity_points', 'vip_points'))) {
					switch ($key) {
						case "activity_points":
							$key = '0';
							break;
						case "vip_points":
							$key = '5';
							break;
						default:
							break;
					}
					$stmt = $dbh->prepare("SELECT " . $key . ",user_id,type,amount FROM users_currency WHERE user_id = :id AND type = :type");
					$stmt->bindParam(':id', $_SESSION['id']);
					$stmt->bindParam(':type', $key);
					$stmt->execute();
					if ($stmt->RowCount() > 0) {
						$row = $stmt->fetch();
						return $row['amount'];
					} else {
						return '0';
					}
				} else {
					$stmt = $dbh->prepare("SELECT " . $key . " FROM users WHERE id = :id");
					$stmt->bindParam(':id', $_SESSION['id']);
					$stmt->execute();
					$row = $stmt->fetch();
					return filter($row[$key]);
				}
			} else {
				$stmt = $dbh->prepare("SELECT " . $key . " FROM users WHERE id = :id");
				$stmt->bindParam(':id', $_SESSION['id']);
				$stmt->execute();
				$row = $stmt->fetch();
				return filter($row[$key]);
			}
		}
	}
	public static function emailTaken($email)
	{
		global $dbh;
		$stmt = $dbh->prepare("SELECT mail FROM users WHERE mail = :email LIMIT 1");
		$stmt->bindParam(':email', $email);
		$stmt->execute();
		if ($stmt->RowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}
	//GENERAR FECHA (NORMAL)
	public static function GetLast($a)
	{
		if (!empty($a) || !$a == '') {
			if (is_numeric($a)) {
				$date       = $a;
				$date_now   = time();
				$difference = $date_now - $date;
				if ($difference <= '59') {
					$echo = 'Justo ahora';
				} elseif ($difference <= '3599' && $difference >= '60') {
					$minutos = date('i', $difference);
					if ($minutos[0] == 0) {
						$minutos = $minutos[1];
					}
					if ($minutos == 1) {
						$minutos_str = 'minuto';
					} else {
						$minutos_str = 'minutos';
					}
					$echo = 'Hace ' . $minutos . ' ' . $minutos_str; //Minutos
				} elseif ($difference <= '82799' && $difference >= '3600') {
					$horas = date('G', $difference);
					if ($horas == 1) {
						$horas_str = 'hora';
					} else {
						$horas_str = 'horas';
					}
					$echo = 'Hace ' . $horas . ' ' . $horas_str; //Minutos
				} elseif ($difference <= '518399' && $difference >= '82800') {
					$dias = date('j', $difference);
					if ($dias == 1) {
						$dias_str = 'd&iacute;a';
					} else {
						$dias_str = 'd&iacute;as';
					}
					$echo = 'Hace ' . $dias . ' ' . $dias_str; //Minutos
				} elseif ($difference <= '2678399' && $difference >= '518400') {
					$semana = floor(date('j', $difference) / 7) . '<!-- WTF -->';
					if ($semana == 1) {
						$semana_str = 'semana';
					} else {
						$semana_str = 'semanas';
					}
					$echo = 'Hace ' . floor($semana) . ' ' . $semana_str; //Minutos
				} else {
					$echo = 'Hace ' . date('n', $difference) . ' mes(es)';
				}
				return $echo;
			} else {
				return $a;
			}
		} else {
			return 'A&uacute;n no te has conectado';
		}
	}
	//END GENERAR FECHA (NORMAL)
	//ACORTADOR DE CIFRAS 
	public static function number_format_short($n, $precision = 1)
	{
		if ($n < 900) {
			// 0 - 900
			$n_format = number_format($n, $precision);
			$suffix   = '';
		} else if ($n < 900000) {
			// 0.9k-850k
			$n_format = number_format($n / 1000, $precision);
			$suffix   = 'K';
		} else if ($n < 900000000) {
			// 0.9m-850m
			$n_format = number_format($n / 1000000, $precision);
			$suffix   = 'M';
		} else if ($n < 900000000000) {
			// 0.9b-850b
			$n_format = number_format($n / 1000000000, $precision);
			$suffix   = 'B';
		} else {
			// 0.9t+
			$n_format = number_format($n / 1000000000000, $precision);
			$suffix   = 'T';
		}
		if ($precision > 0) {
			$dotzero  = '.' . str_repeat('0', $precision);
			$n_format = str_replace($dotzero, '', $n_format);
		}
		return $n_format . $suffix;
	} //END ACORTADOR DE CIFRAS 

	public static function userTaken($username)
	{
		global $dbh;
		$stmt = $dbh->prepare("SELECT username FROM users WHERE username = :username LIMIT 1");
		$stmt->bindParam(':username', $username);
		$stmt->execute();
		if ($stmt->RowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}




	public static function count($parameter)
	{
		global $dbh;
		if ($parameter == "usersregister") {
			$stmt = $dbh->prepare("SELECT COUNT(*) AS count FROM users");
			$stmt->execute();
		} elseif ($parameter == "usersons") {
			$stmt = $dbh->prepare("SELECT COUNT(*) AS count FROM users WHERE online >= '1'");
			$stmt->execute();
		} elseif ($parameter == "rooms") {
			$stmt = $dbh->prepare("SELECT COUNT(*) AS count FROM rooms");
			$stmt->execute();
		} elseif ($parameter == "usersbans") {
			$stmt = $dbh->prepare("SELECT COUNT(*) AS count FROM bans");
			$stmt->execute();
		} elseif ($parameter == "news") {
			$stmt = $dbh->prepare("SELECT COUNT(*) AS count FROM cms_news");
			$stmt->execute();
		} elseif ($parameter == "furnis") {
			$stmt = $dbh->prepare("SELECT COUNT(*) AS count FROM catalog_items");
			$stmt->execute();
		} elseif ($parameter == "userwithrank") {
			$stmt = $dbh->prepare("SELECT COUNT(*) AS count FROM users WHERE rank >= 3");
			$stmt->execute();
		} elseif ($parameter == "staffCount") {
			$stmt = $dbh->prepare("SELECT COUNT(*) AS count FROM users WHERE online = '1' AND rank >= '3'");
			$stmt->execute();
		} elseif ($parameter == "groups") {
			$stmt = $dbh->prepare("SELECT COUNT(*) AS count FROM groups");
			$stmt->execute();
		}
		$c = $stmt->fetch();
		return $c['count'];
	}

	public static function refUser($refUsername)
	{
		global $dbh, $lang;
		$getUsernameRef = $dbh->prepare("SELECT username,ip_reg FROM users WHERE username = :username LIMIT 1");
		$getUsernameRef->bindParam(':username', $refUsername);
		$getUsernameRef->execute();
		$getUsernameRefData = $getUsernameRef->fetch();
		if ($getUsernameRef->RowCount() > 0) {
			if ($getUsernameRefData['ip_reg'] == userIp()) {
				//html::error($lang["RsameIpRef"]);
				echo 'ref_error';
			} else {
				return true;
			}
		} else {
			html::error($lang["RnotExist"]);
			return false;
		}
	}

	public static function login()
	{
		global $dbh, $config, $lang, $emuUse;
		if (isset($_POST['login'])) {
			if (!empty($_POST['username'])) {
				if (!empty($_POST['password'])) {
					$stmt = $dbh->prepare("SELECT id, password, username, rank FROM users WHERE username = :username");
					$stmt->bindParam(':username', $_POST['username']);
					$stmt->execute();
					if ($stmt->RowCount() == 1) {
						$row = $stmt->fetch();
						if (self::checkUser($_POST['password'], $row['password'], $row['username'])) {
							if (!$config['maintenance'] == true) {
								$userUpdateIp = $dbh->prepare("UPDATE users SET " . $emuUse['ip_last'] . " = :userip WHERE id = :id");
								$userUpdateIp->bindParam(':id', $row['id']);
								$userUpdateIp->bindParam(':userip', userIp());
								$userUpdateIp->execute();
								//User Session Log//
								$insertUserSession = $dbh->prepare("
									INSERT INTO
									user_session_log
									(userid,ip,date,browser)
									VALUES
									(
									:userid, 
									:ip,
									:date,
									:browser
									)");
								$insertUserSession->bindParam(':userid', $row['id']);
								$insertUserSession->bindParam(':ip', userIp());
								$insertUserSession->bindParam(':date', strtotime('now'));
								$insertUserSession->bindParam(':browser', $_SERVER['HTTP_USER_AGENT']);
								$insertUserSession->execute();

								$_SESSION['id'] = $row['id'];
								header('Location: ' . $config['hotelUrl'] . '/me');
							} else {
								if ($row['rank'] >= $config['maintenancekMinimumRankLogin']) {
									$_SESSION['adminlogin'] = true;
									$_SESSION['id'] = $row['id'];
									header('Location: ' . $config['hotelUrl'] . '/me');
								}
								return html::error($lang["Mnologin"]);
							}
						}
						return html::error($lang["Lpasswordwrong"]);
					}
					return html::error($lang["Lnotexistuser"]);
				}
				return html::error($lang["Lnopassword"]);
			}
			return html::error($lang["Lnousername"]);
		}
	}

	public static function register()
	{
		$userRealIp = userIp();
		global $config, $lang, $dbh, $emuUse;
		if (isset($_POST['register'])) {
			if ($config['registerEnable'] == true) {
				if (!empty($_POST['username'])) {
					if (self::validName($_POST['username'])) {
						if (!empty($_POST['password'])) {
							if (!empty($_POST['password_repeat'])) {
								if (!empty($_POST['email'])) {
									if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
										if (!self::userTaken($_POST['username'])) {
											if (!self::emailTaken($_POST['email'])) {
												if (strlen($_POST['password']) >= 6) {
													if ($_POST['password'] == $_POST['password_repeat']) {
														if ($_POST['codebueno'] == $_POST['code']) {

															$stmt = $dbh->prepare("SELECT " . $emuUse['ip_last'] . " FROM users WHERE " . $emuUse['ip_last'] . " = :userip");
															$stmt->bindParam(':userip',  userIp());
															$stmt->execute();
															if ($stmt->RowCount() < 100) {
																if (!$config['recaptchaSiteKeyEnable'] == true) {
																	$_POST['g-recaptcha-response'] = true;
																}
																if ($_POST['g-recaptcha-response']) {

																	if ($_POST['genero'] == "hombre") {
																		$avatar = 'ch-3668-110-100.fa-3276-72.cc-3867-73-73.ha-3478-110.lg-30061-82-92.sh-290-92.hd-180-1.hr-3163-1404';
																		$gender = 'M';
																	} else {
																		if ($_POST['genero'] == "mujer") {
																			$avatar = 'ch-635-105.hd-600-1.sh-305-62.lg-3006-1193-62.he-1610-62.ea-1401-110.hr-515-61';
																			$gender = 'F';
																		} else {
																			$avatar = 'ch-3668-110-100.fa-3276-72.cc-3867-73-73.ha-3478-110.lg-30061-82-92.sh-290-92.hd-180-1.hr-3163-1404';
																			$gender = 'M';
																		}
																	}

																	$motto = $config['startMotto'];
																	$password = self::hashed($_POST['password']);
																	if ($config['hotelEmu'] == 'arcturus') {
																		$addNewUser = $dbh->prepare("
																			INSERT INTO
																			users
																			(username, password, rank, auth_ticket, motto, account_created, last_online, mail, look, gender, ip_current, ip_register, credits, home_room)
																			VALUES
																			(
																			:username, 
																			:password, 
																			'1',
																			:sso,
																			:motto, 
																			:time, 
																			:last_online,
																			:email, 
																			:avatar,
																			:gender,
																			:userip, 
																			:userip, 
																			:credits,
																			:homeroom
																			)");
																		$addNewUser->bindParam(':username', $_POST['username']);
																		$addNewUser->bindParam(':password', $password);
																		$addNewUser->bindParam(':motto', $motto);
																		$addNewUser->bindParam(':sso', game::sso('register'));
																		$addNewUser->bindParam(':email', $_POST['email']);
																		$addNewUser->bindParam(':avatar', $avatar);
																		$addNewUser->bindParam(':gender', $gender);
																		$addNewUser->bindParam(':credits', $config['credits']);
																		$addNewUser->bindParam(':homeroom', $config['homeRoom']);
																		$addNewUser->bindParam(':userip', userIp());
																		$addNewUser->bindParam(':time', strtotime('now'));
																		$addNewUser->bindParam(':last_online', strtotime('now'));
																		$addNewUser->execute();
																		if (!$addNewUser) {
																			echo "\nPDO::errorInfo():\n";
																			print_r($addNewUser->errorInfo());
																		}
																	} else {
																		$addNewUser = $dbh->prepare("
																			INSERT INTO
																			users
																			(username, password, rank, auth_ticket, motto, account_created, last_online, mail, look, gender, ip_last, ip_reg, credits, activity_points, vip_points, home_room)
																			VALUES
																			(
																			:username, 
																			:password, 
																			'1',
																			:sso,
																			:motto, 
																			:time, 
																			:last_online,
																			:email, 
																			:avatar,
																			:gender,
																			:userip, 
																			:userip, 
																			:credits,
																			:duckets,
																			:diamonds,
																			:homeroom
																			)");
																		$addNewUser->bindParam(':username', $_POST['username']);
																		$addNewUser->bindParam(':password', $password);
																		$addNewUser->bindParam(':motto', $motto);
																		$addNewUser->bindParam(':sso', game::sso('register'));
																		$addNewUser->bindParam(':email', $_POST['email']);
																		$addNewUser->bindParam(':avatar', $avatar);
																		$addNewUser->bindParam(':gender', $gender);
																		$addNewUser->bindParam(':credits', $config['credits']);
																		$addNewUser->bindParam(':duckets', $config['duckets']);
																		$addNewUser->bindParam(':diamonds', $config['diamonds']);
																		$addNewUser->bindParam(':homeroom', $config['homeRoom']);
																		$addNewUser->bindParam(':userip', userIp());
																		$addNewUser->bindParam(':time', strtotime('now'));
																		$addNewUser->bindParam(':last_online', strtotime('now'));
																		$addNewUser->execute();
																	}
																	$lastId = $dbh->lastInsertId();

																	//badge register//
																	if ($_POST['placa'] == "CR210") {
																		$badge = 'CR210';
																	} else {
																		if ($_POST['placa'] == "ES72B") {
																			$badge = 'ES72B';
																		} else {
																			if ($_POST['placa'] == "PT107") {
																				$badge = 'PT107';
																			} else {
																				if ($_POST['placa'] == "PT142") {
																					$badge = 'PT142';
																				} else {
																					if ($_POST['placa'] == "PT530") {
																						$badge = 'PT530';
																					} else {
																						$badge = 'FAN';
																					}
																				}
																			}
																		}
																	}
																	$addBadgeuser = $dbh->prepare("
																			INSERT INTO
																			user_badges
																			(user_id, badge_id, badge_slot)
																			VALUES
																			(
																			:user_id, 
																			:badge_id,
																			1
																			)");
																	$addBadgeuser->bindParam(':user_id', $lastId);
																	$addBadgeuser->bindParam(':badge_id', $badge);
																	$addBadgeuser->execute();
																	//User referrer//
																	if (!empty($_POST['referrer'])) {
																		$getUserRef = $dbh->prepare("SELECT id,username FROM users WHERE username = :username LIMIT 1");
																		$getUserRef->bindParam(':username', $_POST['referrer']);
																		$getUserRef->execute();
																		$getInfoRefUser = $getUserRef->fetch();
																		$addRef = $dbh->prepare("
																			INSERT INTO
																			referrer
																			(userid, refid,diamonds)
																			VALUES
																			(
																			:lastid, 
																			:refid,
																			:diamonds
																			)");
																		$addRef->bindParam(':lastid', $lastId);
																		$addRef->bindParam(':refid', $getInfoRefUser['id']);
																		$addRef->bindParam(':diamonds', $config['diamondsRef']);
																		$addRef->execute();
																		$stmt = $dbh->prepare("SELECT*FROM referrerbank WHERE userid = :id LIMIT 1");
																		$stmt->bindParam(':id', $getInfoRefUser['id']);
																		$stmt->execute();
																		if ($stmt->RowCount() == 0) {
																			$addDiamondsRow = $dbh->prepare("
																				INSERT INTO
																				referrerbank
																				(userid,diamonds)
																				VALUES
																				(
																				:lastid, 
																				:diamonds
																				)");
																			$addDiamondsRow->bindParam(':lastid', $getInfoRefUser['id']);
																			$addDiamondsRow->bindParam(':diamonds', $config['diamondsRef']);
																			$addDiamondsRow->execute();
																		} else {
																			$addDiamonds = $dbh->prepare("
																				UPDATE referrerbank SET 
																				diamonds=diamonds + :diamonds 
																				WHERE 
																				userid=:lastid
																				");
																			$addDiamonds->bindParam(':lastid', $getInfoRefUser['id']);
																			$addDiamonds->bindParam(':diamonds', $config['diamondsRef']);
																			$addDiamonds->execute();
																		}
																		$_SESSION['id'] = $lastId;
																		$insertUserSession = $dbh->prepare("
																			INSERT INTO
																			user_session_log
																			(userid,ip,date,browser)
																			VALUES
																			(
																			:userid, 
																			:ip,
																			:date,
																			:browser
																			)");
																		$insertUserSession->bindParam(':userid', $_SESSION['id']);
																		$insertUserSession->bindParam(':ip', userIp());
																		$insertUserSession->bindParam(':date', strtotime('now'));
																		$insertUserSession->bindParam(':browser', $_SERVER['HTTP_USER_AGENT']);
																		$insertUserSession->execute();
																		header('Location: /me');
																		return;
																	}
																	//User referrer//
																	else {
																		$_SESSION['id'] = $lastId;
																		$insertUserSession = $dbh->prepare("
																			INSERT INTO
																			user_session_log
																			(userid,ip,date,browser)
																			VALUES
																			(
																			:userid, 
																			:ip,
																			:date,
																			:browser
																			)");
																		$insertUserSession->bindParam(':userid', $_SESSION['id']);
																		$insertUserSession->bindParam(':ip', userIp());
																		$insertUserSession->bindParam(':date', strtotime('now'));
																		$insertUserSession->bindParam(':browser', $_SERVER['HTTP_USER_AGENT']);
																		$insertUserSession->execute();
																		header('Location: /me');
																		return;
																	}
																}
															} else {
																echo html::error('Error tienes muchas cuentas con esta misma IP');
																return;
															}
														} else {
															echo html::error('Error Codigo incorrecto');
															return;
														}
													} else {
														echo html::error($lang["Rpasswordswrong"]);
														return;
													}
												} else {
													echo html::error($lang["Rpasswordshort"]);
													return;
												}
											} else {
												echo html::error($lang["Remailexists"]);
												return;
											}
										} else {
											echo html::error($lang["Rusernameused"]);
											return;
										}
									} else {
										echo  html::error($lang["Remailnotallowed"]);
										return;
									}
								} else {
									echo html::error($lang["Remailempty"]);
									return;
								}
							} else {
								echo html::error($lang["Rpasswordsempty"]);
								return;
							}
						} else {
							echo html::error($lang["Rpasswordsempty"]);
							return;
						}
					} else {
						echo html::error($lang["Rusernameshort"]);
						return;
					}
				} else {
					echo html::error($lang["Rusrnameempty"]);
					return;
				}
			} else {
				echo html::error($lang["RregisterDisable"]);
				return;
			}
		}
	}

	public static function userRefClaim()
	{
		global $dbh, $lang;
		if (isset($_POST['claimdiamonds'])) {
			if (User::userData('online') == 0) {
				$bankCount = $dbh->prepare("SELECT userid,diamonds FROM referrerbank WHERE userid = :userid");
				$bankCount->bindParam(':userid', $_SESSION['id']);
				$bankCount->execute();
				$bankCountData = $bankCount->fetch();
				if ($bankCountData['diamonds'] == 0) {
					return html::error($lang["MrefNoDia"]);
				} else {
					$addDiamondsRef = $dbh->prepare("
						UPDATE users SET 
						vip_points=vip_points + :diamonds 
						WHERE 
						id=:id
						");
					$addDiamondsRef->bindParam(':id', $_SESSION['id']);
					$addDiamondsRef->bindParam(':diamonds', $bankCountData['diamonds']);
					$addDiamondsRef->execute();
					$DiamondsCountRemove = $dbh->prepare("
						UPDATE referrerbank SET 
						diamonds = 0 
						WHERE 
						userid=:userid
						");
					$DiamondsCountRemove->bindParam(':userid', $_SESSION['id']);
					$DiamondsCountRemove->execute();
					return html::errorSucces($lang["MrefOnline"]);
				}
			} else {
				return html::error('Je mag niet online zijn om je diamanten te claimen!');
			}
		}
	}
	public static function editPassword()
	{
		global $dbh, $lang;
		if (isset($_POST['password'])) {
			if (isset($_POST['oldpassword']) && !empty($_POST['oldpassword'])) {
				if (isset($_POST['newpassword']) && !empty($_POST['newpassword'])) {
					$stmt = $dbh->prepare("SELECT id, password, username FROM users WHERE id = :id");
					$stmt->bindParam(':id', $_SESSION['id']);
					$stmt->execute();
					$getInfo = $stmt->fetch();
					if (self::checkUser(filter($_POST['oldpassword']), $getInfo['password'], filter($getInfo['username']))) {
						if (strlen($_POST['newpassword']) >= 6) {
							$newPassword = self::hashed($_POST['newpassword']);
							$stmt = $dbh->prepare("
								UPDATE 
								users 
								SET password = 
								:newpassword 
								WHERE id = 
								:id
								");
							$stmt->bindParam(':newpassword', $newPassword);
							$stmt->bindParam(':id', $_SESSION['id']);
							$stmt->execute();
							return html::errorSucces($lang["Ppasswordchanges"]);
						} else {
							return html::error($lang["Ppasswordshort"]);
						}
					} else {
						return html::error($lang["Poldpasswordwrong"]);
					}
				} else {
					return html::error('Je nieuwe wachtwoord is leeg!');
				}
			} else {
				return html::error('Oude wachtwoord is leeg!');
			}
		}
	}
	public static function editEmail()
	{
		global $lang, $dbh;
		if (isset($_POST['account'])) {
			if (isset($_POST['email']) && !empty($_POST['email'])) {
				if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
					if (!self::emailTaken($_POST['email'])) {
						$stmt = $dbh->prepare("SELECT id, username FROM users WHERE id = :id");
						$stmt->bindParam(':id', $_SESSION['id']);
						$stmt->execute();
						$getInfo = $stmt->fetch();
						$stmt = $dbh->prepare("
									UPDATE 
									users 
									SET mail = 
									:newmail
									WHERE id = 
									:id
									");
						$stmt->bindParam(':newmail', $_POST['email']);
						$stmt->bindParam(':id', $_SESSION['id']);
						$stmt->execute();
						return html::errorSucces($lang["Eemailchanges"]);
					} else {
						return html::error($lang["Eemailexists"]);
					}
				} else {
					return html::error($lang["Eemailnotallowed"]);
				}
			} else {
				return html::error($lang["Enoemail"]);
			}
		}
	}
	public static function editHotelSettings()
	{
		global $lang, $dbh;
		if (isset($_POST['hinstellingenv'])) {
			$stmt = $dbh->prepare("
				UPDATE 
				users 
				SET ignore_invites = 
				:hinstellingenv
				WHERE id = 
				:id
				");
			$stmt->bindParam(':hinstellingenv', $_POST['hinstellingenv']);
			$stmt->bindParam(':id', $_SESSION['id']);
			$stmt->execute();
		}
		if (isset($_POST['hinstellingenl'])) {
			$stmt = $dbh->prepare("
				UPDATE 
				users 
				SET allow_mimic = 
				:hinstellingenl
				WHERE id = 
				:id
				");
			$stmt->bindParam(':hinstellingenl', $_POST['hinstellingenl']);
			$stmt->bindParam(':id', $_SESSION['id']);
			$stmt->execute();
		}
		if (isset($_POST['hinstellingeno'])) {
			$stmt = $dbh->prepare("
				UPDATE 
				users 
				SET hide_online = 
				:hinstellingeno
				WHERE id = 
				:id
				");
			$stmt->bindParam(':hinstellingeno', $_POST['hinstellingeno']);
			$stmt->bindParam(':id', $_SESSION['id']);
			$stmt->execute();
		}
		if (isset($_POST['hotelsettings'])) {
			return html::errorSucces($lang["Hchanges"]);
		}
	}

	public static function editAkiledSettings()
	{
		global $lang, $dbh;
		if (isset($_POST['block_newfriends'])) {
			$stmt = $dbh->prepare("
				UPDATE 
				users 
				SET block_newfriends = 
				:block_newfriends
				WHERE id = 
				:id
				");
			$stmt->bindParam(':block_newfriends', $_POST['block_newfriends']);
			$stmt->bindParam(':id', $_SESSION['id']);
			$stmt->execute();
		}
		if (isset($_POST['accept_trading'])) {
			$stmt = $dbh->prepare("
				UPDATE 
				users 
				SET accept_trading = 
				:accept_trading
				WHERE id = 
				:id
				");
			$stmt->bindParam(':accept_trading', $_POST['accept_trading']);
			$stmt->bindParam(':id', $_SESSION['id']);
			$stmt->execute();
		}
		if (isset($_POST['hide_online'])) {
			$stmt = $dbh->prepare("
				UPDATE 
				users 
				SET hide_online = 
				:hide_online
				WHERE id = 
				:id
				");
			$stmt->bindParam(':hide_online', $_POST['hide_online']);
			$stmt->bindParam(':id', $_SESSION['id']);
			$stmt->execute();
		}
		if (isset($_POST['akiledsettings'])) {
			return html::errorSucces($lang["Hchanges"]);
		}
	}

	public static function EditEmoji()
	{
		global $dbh, $lang;
		if (isset($_POST['emojiuser'])) {
			if (strlen(User::userData('prefixnamecolor')) > 6) {
				$color = substr(User::userData('prefixnamecolor'), 0, 6);
				$emojipr = $color . ';' . $_POST['emojiuser'];
			} else {
				$emojipr = ';' . $_POST['emojiuser'];
			}
			$stmt = $dbh->prepare("
								UPDATE 
								users 
								SET prefixnamecolor = 
								:codeemo
								WHERE id = 
								:id
								");
			$stmt->bindParam(':codeemo', $emojipr);
			$stmt->bindParam(':id', User::userData('id'));
			$stmt->execute();
			return Html::errorSucces("Emoji cambiado correctamente a " . $_POST['emojiuser'] . " ¡Reinicia el cliente para ver los cambios!");
		}
	}

	public static function editUsername()
	{
		global $lang, $dbh;
		if (isset($_POST['editusername'])) {
			if (!User::userData('fbenable') == 1) {
				if (!self::userTaken($_POST['username'])) {
					if (self::validName($_POST['username'])) {
						$stmt = $dbh->prepare("UPDATE users SET username = :username, fbenable = '1' WHERE id = :id");
						$stmt->bindParam(':username', $_POST['username']);
						$stmt->bindParam(':id', $_SESSION['id']);
						$stmt->execute();
						header('Location: ' . $config['hotelUrl'] . '/me');
					} else {
						return html::error($lang["Cusernameshort"]);
					}
				} else {
					return html::error($lang["Cusernameused"]);
				}
			} else {
				return html::error($lang["Cchangeno"]);
			}
		}
	}
	public static function editColorname()
	{
		global $lang, $dbh;
		if (isset($_POST['editColorname'])) {
			$stmt = $dbh->prepare("UPDATE users SET prefixnamecolor = :prefixnamecolor WHERE id = :id");
			$stmt->bindParam(':prefixnamecolor', $_POST['namecolor']);
			$stmt->bindParam(':id', $_SESSION['id']);
			$stmt->execute();
			header('Location: ' . $config['hotelUrl'] . '/me');
		}
	}

	public static function CreateReport()
	{
		global $lang, $dbh;
		if (isset($_POST['report'])) {
			if (!empty(filter($_POST['title']))) {
				if (!empty(filter($_POST['problem']))) {
					$stmt2 = $dbh->prepare(
						"INSERT INTO cms_reports 
							(author, title, category, problem, state, time) 
							VALUES 
							(:author, :title, :category, :problem, 'Abierto', :time)"
					);

					$stmt2->bindParam(':author', User::userData('username'));
					$stmt2->bindParam(':title', $_POST['title']);
					$stmt2->bindParam(':category', $_POST['category']);
					$stmt2->bindParam(':problem', $_POST['problem']);
					$stmt2->bindParam(':time', strtotime('now'));
					$stmt2->execute();
					return Html::errorSucces("Su mensaje ha sido enviado con éxito! Su estado será respondido y actualizado en breve.");
				} else {
					return Html::errornew("Necesitas ingresar el problema");
				}
			} else {
				return Html::errornew("Necesitas ingresar un título");
			}
		}
	}

	public static function ReportNewQuestion()
	{
		global $lang, $dbh;
		if (isset($_POST['newquestion'])) {
			if (!empty($_POST['question'])) {
				$postNews = $dbh->prepare("
						INSERT INTO cms_reports_newquestion(report_id,question,user,time)
						VALUES
						(
						:report_id, 
						:question, 
						:user, 
						:time
						)");
				$postNews->bindParam(':report_id', $_POST['report_id']);
				$postNews->bindParam(':question', $_POST['question']);
				$postNews->bindParam(':user', User::userData('username'));
				$postNews->bindParam(':time', strtotime('now'));
				$postNews->execute();
				header('Location: /myreports/' . $_GET['id'] . '');
			} else {
				Html::errornew("No tiene mensagem");
				return;
			}
		} else {
		}
	}
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


		if (isset($_POST['updatepermissions'])) {
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
