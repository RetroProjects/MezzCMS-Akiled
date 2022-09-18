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

            <div class="page-header">
                <h1 class="page-title">Editar Usuarios </h1>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Editar</h4>
                            <p class="card-description">Editar: <?php echo admin::EditUser("username"); ?> </p>

                            <form class="forms-sample" name="mygallery" action="" method="POST">

                                <?php
                                admin::EditUser("username");
                                admin::UpdateUser();
                                ?>
                                <input id="icon_prefix" type="hidden" value="<?php echo admin::EditUser("username"); ?>" name="naam" class="form-control">
                                <div class="form-group">
                                    <label for="exampleInputName1">Correo electronico</label>
                                    <input type="email" value="<?php echo admin::EditUser("mail"); ?>" name="mail" class="form-control" autocomplete="off" onkeypress='return event.charCode >= 48 && event.charCode <= 57' id="exampleInputName1" placeholder="Correo electronico">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Misión</label>
                                    <input type="text" value="<?php echo admin::EditUser("motto"); ?>" name="motto" class="form-control" autocomplete="off" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Créditos</label>
                                    <input type="number" value="<?php echo admin::EditUser("credits"); ?>" name="credits" class="form-control" autocomplete="off" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Esmeraldas</label>
                                    <input type="number" value="<?php echo admin::EditUser("activity_points"); ?>" name="activity_points" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Planetas</label>
                                    <input type="number" value="<?php echo admin::EditUser("vip_points"); ?>" name="vip_points" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Staff Oculto</label>
                                    <select name="hide_staff" class="form-control">
                                        <option value="" disabled selected>Staff Oculto</option>
                                        <option value="1">Sí</option>
                                        <option value="0">No</option>
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


                                <button id="btn" name="update" type="submit" class="btn btn-primary mr-2">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>





              
                <div class="col-lg-5 grid-margin stretch-card">
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
                        <tr><td><p><b class="text-warning">Planetas:</b> <?php echo admin::EditUser("vip_points"); ?> </p> </td>  </tr>
						<br />


                      
                      
                        
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