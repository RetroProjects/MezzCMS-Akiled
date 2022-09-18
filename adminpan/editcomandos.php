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
                <h1 class="page-title">Editar Comandos </h1>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Editar</h4>
                            <p class="card-description">Editar: <?php echo admin::EditComandos("input"); ?> </p>

                            <form class="forms-sample" name="mygallery" action="" method="POST">

                                <?php
                                admin::EditComandos("id");
                                admin::UpdateComandos();
                                ?>
                                <input id="icon_prefix" type="hidden" value="<?php echo admin::EditComandos("id"); ?>" name="naam" class="form-control">
								
                                <div class="form-group">
                                    <label for="exampleInputName1">ID de Comando</label>
                                    <input style="color: black;" type="number" value="<?php echo admin::EditComandos("id"); ?>" name="id" class="form-control" id="exampleInputName1" placeholder="ID del pagina" Readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Nombre de Comando:</label>
                                    <input type="text" value="<?php echo admin::EditComandos("input"); ?>" name="input" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">MinRank de Rango:</label>
                                    <input type="text" value="<?php echo admin::EditComandos("minrank"); ?>" name="minrank" class="form-control" autocomplete="off">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail3">Descripción en Francés:</label>
                                    <input type="text" value="<?php echo admin::EditComandos("description_fr"); ?>" name="description_fr" class="form-control">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail3">Descripción en Inglés:</label>
                                    <input type="text" value="<?php echo admin::EditComandos("description_en"); ?>" name="description_en" class="form-control">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail3">Descripción en Portugués:</label>
                                    <input type="text" value="<?php echo admin::EditComandos("description_br"); ?>" name="description_br" class="form-control">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail3">Descripción en Español:</label>
                                    <input type="text" value="<?php echo admin::EditComandos("description_es"); ?>" name="description_es" class="form-control">
                                </div>
                                
                                <input type="hidden" id="content" value=":warning: Ha editado informacion de (<?php echo admin::EditComandos("id"); ?>)
 

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
					
                    <div class="table-responsive " >
                      <table class="table table-hover" >
					  Separe el nombre de los comandos con una coma, ejemplo: pickall,recoger
					  <br>
                      <tbody>
                      <tr>
                           <td>	<p > <b class="text-info">ID del Comando: </b><?php echo admin::EditComandos("id"); ?></p> </td></tr>
                        <tr>  <td><p><b class="text-warning">Nombre de Comando:</b> <?php echo admin::EditComandos("input"); ?></p> </td>  </tr>
						<tr>  <td><p><b class="text-primary">MinRank de Comando:</b> <?php echo admin::EditComandos("minrank"); ?></p> </td>  </tr>
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