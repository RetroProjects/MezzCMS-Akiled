<!DOCTYPE html>
<html lang="en">
<?php
include_once "includes/head.php";
$_SESSION['title'] = '';
$_SESSION['slogan'] = '';
$_SESSION['news'] = '';
admin::CheckRank(13);
?>

<body>

    <?php
    include_once "includes/navi.php";
    include_once "includes/header.php";

    ?>


    <div class="main-panel">
        <div class="content-wrapper">

           
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Gestionar Rango</h4>
                            <p class="card-description">Gestionar rango de <?php echo admin::EditUser("username"); ?> </p>

                            <form class="forms-sample" name="mygallery" action="" method="POST">

                            <?php admin::EditUserRak("username"); 
								admin::LookSollie1();
							?>
                                <input id="icon_prefix" type="hidden" value="<?php echo admin::EditUser("username"); ?>" name="naam" class="form-control">
                                

                                <div class="form-group">
                                    <label for="exampleInputPassword4"><?= $lang["HkRankRank"]?></label>
                                    <select name="rank"  class="form-control">
					
                    <?php 
                                                        $GetRanks = $dbh->prepare("SELECT * FROM permissions_groups ORDER BY id ASC ");
                                                        $GetRanks->execute();
                                                            
                                                            while($rank = $GetRanks->fetch())
                                                            {
                                                                if(admin::EditUserRak("rank")==$rank["id"])
                                                                {
                                                                echo'
                    
                    
                    <option value="'.$rank["id"].'" selected>'.$rank["name"].'</option>
                    
                                                                
                                ';
                                                                }
                                                                else
                                                                {
                                                                echo'
                    
                    
                    <option value="'.$rank["id"].'">'.$rank["name"].'</option>
                    
                                                                
                                ';
                                                                }
                                                            }
                                                        ?>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Colaboradores</label>
                                    <select name="dj" class="form-control">
							<?php
									
									
									
									$Getdj = $dbh->prepare("SELECT * FROM dj ORDER BY id DESC ");
									$Getdj->execute();
										
										while($dj = $Getdj->fetch())
										{
											if(admin::EditUserdj("dj")==$dj["id"])
											{
											echo'


<option value="'.$dj["id"].'" selected>'.$dj["rank"].'</option>

											
			';
											}
											else
											{
											echo'

				
<option value="'.$dj["id"].'">'.$dj["rank"].'</option>

											
			';
											}
										}
									?>
					</select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Tareas</label>
                                    <select name="tarea" class="form-control">
									<?php			
									$GetRanks = $dbh->prepare("SELECT * FROM tareas");
									$GetRanks->execute();
										
										while($rank = $GetRanks->fetch())
										{
											if(admin::EditUserRak("tarea")==$rank["tarea"])
											{
											echo'
<option value="'.$rank["tarea"].'" selected>'.$rank["tarea"].'</option>

											
			';
											}
											else
											{
											echo'


<option value="'.$rank["tarea"].'">'.$rank["tarea"].'</option>

											
			';
											}
										}
									?>
									
									
	</select>	
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Guia</label>
                                    <select name="isguia" class="form-control">
							<option value="" disabled selected>Guia</option>
							<?php
									
									
									
									$Getdj = $dbh->prepare("SELECT * FROM cms_chats_hotel ORDER BY id ASC ");
									$Getdj->execute();
										
										while($dj = $Getdj->fetch())
										{
											if(admin::EditUserdj("isguia")==$dj["id"])
											{
											echo'


<option value="'.$dj["id"].'" selected>'.$dj["selecion"].'</option>

											
			';
											}
											else
											{
											echo'

				
<option value="'.$dj["id"].'">'.$dj["selecion"].'</option>

											
			';
											}
										}
									?>
					</select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword4">Moderador</label>
                                    <select name="ismod" class="form-control">
						<option value="" disabled selected>MOD</option>
							<?php
									
									
									
									$Getdj = $dbh->prepare("SELECT * FROM cms_chats_hotel ORDER BY id ASC ");
									$Getdj->execute();
										
										while($dj = $Getdj->fetch())
										{
											if(admin::EditUserdj("ismod")==$dj["id"])
											{
											echo'


<option value="'.$dj["id"].'" selected>'.$dj["selecion"].'</option>

											
			';
											}
											else
											{
											echo'

				
<option value="'.$dj["id"].'">'.$dj["selecion"].'</option>

											
			';
											}
										}
									?>
					</select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Publicista</label>
                                    <select name="ispub" class="form-control">
					<option value="" disabled selected>PUB</option>
						<?php
									
									
									
									$Getdj = $dbh->prepare("SELECT * FROM cms_chats_hotel ORDER BY id ASC ");
									$Getdj->execute();
										
										while($dj = $Getdj->fetch())
										{
											if(admin::EditUserdj("ispub")==$dj["id"])
											{
											echo'


<option value="'.$dj["id"].'" selected>'.$dj["selecion"].'</option>

											
			';
											}
											else
											{
											echo'

				
<option value="'.$dj["id"].'">'.$dj["selecion"].'</option>

											
			';
											}
										}
									?>
					</select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Chat Inters</label>
                                    <select name="isinter" class="form-control">
						<option value="" disabled selected>CHAT INTER</option>
						
									<?php
									
									
									
									$Getdj = $dbh->prepare("SELECT * FROM cms_chats_hotel ORDER BY id ASC ");
									$Getdj->execute();
										
										while($dj = $Getdj->fetch())
										{
											if(admin::EditUserdj("isinter")==$dj["id"])
											{
											echo'


<option value="'.$dj["id"].'" selected>'.$dj["selecion"].'</option>

											
			';
											}
											else
											{
											echo'

				
<option value="'.$dj["id"].'">'.$dj["selecion"].'</option>

											
			';
											}
										}
									?>
					</select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Chat GM</label>
                                    <select name="isgm" class="form-control">
						<option value="" disabled selected>Chat GM</option>
						<?php
									
									
									
									$Getdj = $dbh->prepare("SELECT * FROM cms_chats_hotel ORDER BY id ASC ");
									$Getdj->execute();
										
										while($dj = $Getdj->fetch())
										{
											if(admin::EditUserdj("isgm")==$dj["id"])
											{
											echo'


<option value="'.$dj["id"].'" selected>'.$dj["selecion"].'</option>

											
			';
											}
											else
											{
											echo'

				
<option value="'.$dj["id"].'">'.$dj["selecion"].'</option>

											
			';
											}
										}
									?>
					</select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Insignia de embajador</label>
                                    <select name="isemb" class="form-control">
						<option  value="" disabled selected>Insignia de embajador</option>
						<?php
									
									
									
									$Getdj = $dbh->prepare("SELECT * FROM cms_chats_hotel ORDER BY id ASC ");
									$Getdj->execute();
										
										while($dj = $Getdj->fetch())
										{
											if(admin::EditUserdj("isemb")==$dj["id"])
											{
											echo'


<option value="'.$dj["id"].'" selected>'.$dj["selecion"].'</option>

											
			';
											}
											else
											{
											echo'

				
<option value="'.$dj["id"].'">'.$dj["selecion"].'</option>

											
			';
											}
										}
									?>
					</select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Seleccionar pais</label>
                                    <select name="pais" class="form-control">
									<?php			
									$GetRanks = $dbh->prepare("SELECT * FROM cms_paises");
									$GetRanks->execute();
										
										while($rank = $GetRanks->fetch())
										{
											if(admin::EditUserRak("pais")==$rank["pais"])
											{
											echo'
<option value="'.$rank["code"].'" selected>'.$rank["name"].'</option>

											
			';
											}
											else
											{
											echo'


<option value="'.$rank["code"].'">'.$rank["name"].'</option>

											
			';
											}
										}
									?>
									
									
	</select>	
                                </div>


                                <input type='hidden' id="link" value="https://discord.com/api/webhooks/797863689163767818/ZdPIM6Bzw9ILKv3mZWSes8ss6JvhIsooc2fy0d6Lje9vVKpcLBGO8plxGD0YSB54kUQi">
                                <input type="hidden" id="username" value="Seguridad P&H: Editor Usuarios">
                                <input type="hidden" id="avatar" value="https://cdn.discordapp.com/icons/770010766379581461/c8bb8c81b6cb95d68756c9e547556ff4.png?size=128">
                                <input type="hidden" id="content" value=":warning: <?php echo User::userData('username'); ?>: ha editado informacion de (<?php echo admin::EditUser("username"); ?>)
 
                                Mision: <?php echo admin::EditUser("motto"); ?> --- :bookmark_tabs:
                                Creditos: <?php echo admin::EditUser("credits"); ?> --- :coin: 
                                Esmeraldas: <?php echo admin::EditUser("activity_points"); ?> --- :gem: 
                                Planetas: <?php echo admin::EditUser("vip_points"); ?> ---  :earth_americas: 
                                por HK  --- Hotel: <?php echo $config['hotelName']; ?> --- :warning:
                                Usuarios online:  <?php echo Game::usersOnline(); ?>  ----  <a:emoji_2:771042373571575858>

                                <@&775405547876253757>
                            -----------------------------------------------------------------------------------------------------

                                        ">


                                <button id="btn" name="updaterank" type="submit" class="btn btn-primary mr-2">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>





              
                <div class="col-lg-5 grid-margin stretch-card" style=" max-height: 700px;">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Perfil de <?php echo admin::EditUser("username"); ?> </h4>
                    <p class="card-description">Pequeña informacion sobre <?php echo admin::EditUser("username"); ?> </p>
                    </p>
                    <center>
				
					<img  src="<?php echo $config['lookUrl']; ?><?php echo admin::EditUser("look"); ?>&direction=3&head_direction=3&size=l&gesture=sml">
                    </center>
                    <div class="table-responsive " >
                      <table class="table table-hover" >
                      <tbody>
                      <tr>
                           <td>	<p > <b class="text-info">Misión: </b>"<?php echo admin::EditUser("motto"); ?>"</p> </td></tr>
                        <tr> <td><p><b class="text-success">Ultima conexion:</b> <?php echo fecha_dat(admin::EditUser('last_online')); ?></p> </td>  </tr>
                        <tr><td><p><b class="text-danger">Creditos:</b> <?php echo admin::EditUser("credits"); ?></p> </td>  </tr>
                        <tr>  <td><p><b class="text-warning">Esmeraldas:</b> <?php echo admin::EditUser("activity_points"); ?></p> </td>  </tr>
                        <tr><td><p><b class="text-warning">Planetas: </b> <?php echo admin::EditUser("vip_points"); ?> </p> </td>  </tr>
                        <tr><td><p><b class="text-primary">Nivel de rango:</b> <?php echo admin::EditUser("rank"); ?> </p> </td>  </tr>
                   
					


                      
                      
                        
                        </tbody>
                      </table>
                        
                        
                    </div>
                  </div>
                </div>
                </div>
              
             






            </div>
        </div>


        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php
        include_once "includes/footer.php";
        ?>
        <!-- container-scroller -->

        <!-- End custom js for this page -->
</body>


</html>