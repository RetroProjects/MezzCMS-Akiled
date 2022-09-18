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
                <h1 class="page-title">Editar Pagina </h1>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Editar</h4>
                            <p class="card-description">Editar: <?php echo admin::EditPage("caption"); ?> </p>

                            <form class="forms-sample" name="mygallery" action="" method="POST">

                                <?php
                                admin::EditPage("id");
                                admin::UpdatePage();
                                ?>
                                <input id="icon_prefix" type="hidden" value="<?php echo admin::EditPage("id"); ?>" name="naam" class="form-control">
								
                                <div class="form-group">
                                    <label for="exampleInputName1">ID da Pàgina</label>
                                    <input style="color: black;" type="number" value="<?php echo admin::EditPage("id"); ?>" name="id" class="form-control" id="exampleInputName1" placeholder="ID del pagina" Readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Está dentro de la página:</label>
                                    <input type="text" value="<?php echo admin::EditPage("parent_id"); ?>" name="parent_id" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Nombre del pagina?</label>
                                    <input type="text" value="<?php echo admin::EditPage("caption"); ?>" name="caption" class="form-control" autocomplete="off">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail3">Icon del pagina:</label>
                                    <input type="text" value="<?php echo admin::EditPage("icon_image"); ?>" name="icon_image" class="form-control">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail3">Rango mínimo para ver esta página:</label>
                                    <input type="text" value="<?php echo admin::EditPage("min_rank"); ?>" name="min_rank" class="form-control">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail3">Orden de la página:</label>
                                    <input type="text" value="<?php echo admin::EditPage("order_num"); ?>" name="order_num" class="form-control">
                                </div>
                                
                                <input type="hidden" id="content" value=":warning: Ha editado informacion de (<?php echo admin::EditPage("id"); ?>)
 

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
				  <img class="circle" style="width: 17px; height: 17px;" src="<?php echo $config["pathswf"]; ?>/c_images/catalogue/icon_<?php echo admin::EditPage("icon_image"); ?>.png">
                    <?php echo admin::EditPage("caption"); ?>
                    </p>
					
                    <div class="table-responsive " >
                      <table class="table table-hover" >
                      <tbody>
                      <tr>
                           <td>	<p > <b class="text-info">ID del página: </b><?php echo admin::EditPage("id"); ?></p> </td></tr>
                        <tr>  <td><p><b class="text-warning">Rango minimo:</b> <?php echo admin::EditPage("min_rank"); ?></p> </td>  </tr>
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