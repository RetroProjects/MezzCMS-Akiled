<?php
if(User::userData('slopt_pin') == 1)
{
	header('Location: /me');
}
if(User::userData('rank') < $hotel['StaffCheckHkClientMinRank'])
{
	header('Location: /me');
}
if($hotel['StaffCheckHkClient'] == false)
{
	header('Location: /me');
}
?>
<html style="zoom: 1; overflow: auto;">
   <head>
    <title><?= $config['hotelName'] ?> - <?= $lang["newpintitle"]; ?></title>
      <link rel="stylesheet" href="/templates/<?= $config['skin'] ?>/assets/css/pin.css?23" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="/templates/<?= $config['skin'] ?>/assets/css/index.css?<?= $hotel['cache'];?>">

   </head>
   <body style="color: #333 !important;">
   <?php
   
		if (isset($_POST['formpin']))
		{
			if (!empty($_POST['pin']))
			{
				if(is_numeric($_POST['pin'])) 
				{
					if (strlen($_POST['pin']) >= 4)
					{
						if (strlen($_POST['pin']) <= 4)
						{
							$sloptpin = $dbh->prepare("UPDATE users SET slopt_pin=1, pin=".$_POST['pin']." WHERE id=".User::userData('id'));
							$sloptpin->execute();
							header('Location: me');
						}
						else
						{
							echo'<div class="error">'.$lang["newpinerror1"].'</div>';//Error el pin tiene más de 4 dijitos
						}
					}
					else
					{
						echo'<div class="error">'.$lang["newpinerror2"].'</div>';//Error el pin tiene menos de 4 dijitos
					}
				}
				else
				{
					echo'<div class="error">'.$lang["newpinerror3"].'</div>';//Error el pin no puede contener letras o signos (solo numeros)
				}
			}
			else
			{
						echo'<div class="error">'.$lang["newpinerror4"].'</div>';//Error de pin vacio
			}
		}
   ?>
      <div id="appcontent">
         <div id="appcontent">
            <div id="nin1">
               <div id="nin2"></div>
               <div id="nin4" >
                  <div id="nin5">
				  <div class="logo"></div>
                  </div>
               </div>
               <div id="nin12" style=" width: 70%; ">
                  <div id="nin13">
                     <div id="nin14"></div>
                     <div id="nin15">
                        <?=$lang["newpintitle"];?>
                     </div>
                  </div>
                  <div id="indexerrorlog"></div>
                  <form id="FormConnexion" action="" method="post">
				  <div style="margin-top: 10px;font-size: 20px;padding: 10px;color: #333;"><?=$lang["newpinmsj"];?></div>
                     <div id="nin19">
                        <input type="password" name="pin" class="newindexinput" placeholder="<?=$lang["newpininput"];?>" id="password" maxlength="4" style=" width: 90%; ">
                        <div id="nin20"></div>
                     </div>
                     <div id="nin21">
                        <button type="submit" name="formpin" id="nin24">
                           <div id="nin25"></div>
                           <?=$lang["newpintitle"];?>
                        </button>
                     </div>
                  </form>
               </div>
            </div>
         </div>

      </div>
   </body>
</html>