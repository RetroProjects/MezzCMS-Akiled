<?php
    $staff_active = 'active';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/styles/app.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title><?=$config['hotelName']?>: Equipo</title>
</head>
<body class="container">
	<script src="/assets/scripts/page-load.js"></script>
    <div class="page-content">
        <?php
            if (!isset($_SESSION['id']))
            {
                include('auth/login.php');
            } else {
                include('auth/logged.php');
            }
	    ?>
        <?php include_once("includes/menu.php"); ?>
        <div class="page-content-collider" style="background-color: transparent;">
            <div class="page-content-max-width" style="flex-direction: column;align-items: flex-start;">
                <div class="page-content-collider-item">
                    <div class="page-content-collider-content staffs">
                        <div class="page-content-collider-content-staffs-column" style="display: contents;">


                        <?php
                        $getRanks = $dbh->prepare("SELECT id,name,badge_code,title FROM permissions_groups WHERE id in (25, 20, 19, 16, 14, 13, 12, 11)  ORDER BY id DESC");
                        $getRanks->execute();
                        while ($Ranks = $getRanks->fetch())
                        {	
                            echo '

                            <div class="page-content-collider-content-staffs-box" style="margin-right: 10px; width auto;">
                                <h2 class="page-content-collider-content-staffs-box-title">'.$Ranks['name'].'</h2>
                            
                            ';
                            $getMembers = $dbh->prepare("SELECT id,username,motto,look,online FROM users WHERE rank = :ranid");
                            $getMembers->bindParam(':ranid', $Ranks['id']);
                            $getMembers->execute();
                            if ($getMembers->RowCount() > 0)
                            {
                                while ($member = $getMembers->fetch())
                                {
                                    $username = filter($member['username']);
                                    $motto = filter($member['motto']);
                                    $look = filter($member['look']);
                                    $online = filter($member['online']);
                                    if($online == 1){ $OnlineStatus = "<font color='green'>Online</font>"; } else { $OnlineStatus = "Offline"; }
                                    echo '
                                    <div class="page-content-collider-content-staffs-box-row">
                                    <img src='.$config['AvatarURL'].''.$look.'&action=std&direction=2&head_direction=3&img_format=undefined&gesture=sml&headonly=0&size=b class="page-content-collider-content-staffs-box-figure">
                                    <div class="page-content-collider-content-staffs-box-column">
                                        <a href="profile-url" class="page-content-collider-content-staffs-box-username">'.$username.'</a>
                                        <p class="page-content-collider-content-staffs-box-motto">'.$motto.'</p>
                                        <img src="/assets/images/staffs/ADM.png" alt="Habbo Staff" class="page-content-collider-content-staffs-box-badge">
                                    </div>
                                    <p class="page-content-collider-content-staffs-box-status online">'.$OnlineStatus.'</p>
                                </div>
                                
                                    ';
                                }
                            }
                            else
                            {
                                echo '<p style="margin-left: 10px;">Actualmente no hay miembros en este rango.</p>';
                            }
                            echo '</div>';
                        }
                        ?>
                        </div>
                        </div>
                </div>
            </div>
        </div>
        <?php include_once('includes/footer.php'); ?>
    </div>
	<script src="/assets/scripts/app.js"></script>
</body>
</html>