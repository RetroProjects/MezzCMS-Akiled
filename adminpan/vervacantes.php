<!DOCTYPE html>
<html lang="en">
<?php
include_once "includes/head.php";
$_SESSION['title'] = '';
$_SESSION['slogan'] = '';
$_SESSION['news'] = '';
admin::CheckRank(19);
?>

<body>

    <?php
    include_once "includes/navi.php";
    include_once "includes/header.php";

    ?>


    <div class="main-panel">
        <div class="content-wrapper">

            <div class="page-header">
                <h1 class="page-title">Vacantes -  <?php echo admin::EditVacantes("username"); ?></h1>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Visualizacion del: <?php echo admin::EditVacantes("username"); ?></h4>

                            

                                <?php
                                admin::EditVacantes("id");
                                ?>
                                <input id="icon_prefix" type="hidden" value="<?php echo admin::EditVacantes("id"); ?>" name="naam" class="form-control">
								
                                <div class="form-group">
                                    <label for="exampleInputName1">ID de Usuario</label>
                                    <input style="color: black;" type="number" value="<?php echo admin::EditVacantes("id"); ?>" name="id" class="form-control" id="exampleInputName1" placeholder="ID del pagina" Readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Nombre de usuario:</label>
                                    <input style="color: black;" type="text" value="<?php echo admin::EditVacantes("username"); ?>" class="form-control" Readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Nombre real:</label>
                                    <input style="color: black;" type="text" value="<?php echo admin::EditVacantes("realname"); ?>" class="form-control" Readonly>
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail3">Discord:</label>
                                    <input style="color: black;" type="text" value="<?php echo admin::EditVacantes("skype"); ?>" class="form-control" Readonly>
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail3">Años:</label>
                                    <input style="color: black;" type="text" value="<?php echo admin::EditVacantes("age"); ?>" class="form-control" Readonly>
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail3">Ocupación:</label>
                                    <input style="color: black;" type="text" value="<?php echo admin::EditVacantes("functie"); ?>" class="form-control" Readonly>
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail3">Tiempo disponible en línea:</label>
                                    <input style="color: black;" type="text" value="<?php echo admin::EditVacantes("onlinetime"); ?>" class="form-control" Readonly>
                                </div>
                                
                                <input type="hidden" id="content" value=":warning: Ha editado informacion de (<?php echo admin::EditVacantes("id"); ?>)
 

                                <@&775405547876253757>
                            -----------------------------------------------------------------------------------------------------

                                        ">


                                
                            </form>
                        </div>
                    </div>
                </div>





              
                <div class="col-lg-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
				  <img class="circle" style="width: 17px; height: 17px;" src="https://swfs.hebbit.net/c_images/album1584/<?php echo admin::EditVacantes("badge_code"); ?>.gif">
                    <?php echo admin::EditVacantes("name"); ?>
                    </p>
					
                    <div class="table-responsive " >
                      <table class="table table-hover" >
                      <tbody>
                      <div class="form-group">
                                    <label for="exampleInputName1">Experiencia:</label>
                                    <input style="color: black;" type="text" value="<?php echo admin::EditVacantes("experience"); ?>" class="form-control" id="exampleInputName1" Readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Disputa:</label>
                                    <input style="color: black;" type="text" value="<?php echo admin::EditVacantes("quarrel"); ?>" class="form-control" Readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Serio?:</label>
                                    <input style="color: black;" type="text" value="<?php echo admin::EditVacantes("serious"); ?>" class="form-control" Readonly>
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail3">¿Qué mejorarías en el servidor?</label>
                                    <input style="color: black;" type="text" value="<?php echo admin::EditVacantes("improve"); ?>" class="form-control" Readonly>
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail3">Microphone:</label>
                                    <input style="color: black;" type="text" value="<?php echo admin::EditVacantes("microphone"); ?>" class="form-control" Readonly>
                                </div>


                      
                      
                        
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