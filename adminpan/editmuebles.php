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
                <h1 class="page-title">Editar Mueble </h1>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Editar</h4>
                            <p class="card-description">Editar: <?php echo admin::EditMueble("catalog_name"); ?> </p>

                            <form class="forms-sample" name="mygallery" action="" method="POST">

                                <?php
                                admin::EditMueble("id");
                                admin::UpdateMueble();
                                ?>
                                <input id="icon_prefix" type="hidden" value="<?php echo admin::EditMueble("id"); ?>" name="naam" class="form-control">
								
								<div class="form-group">
                                    <label for="exampleInputEmail3">Nome do Item</label>
                                    <input style="color: black;" type="text" value="<?php echo admin::EditMueble("catalog_name"); ?>" name="catalog_name" class="form-control" Readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">ID da Pàgina</label>
                                    <input type="number" value="<?php echo admin::EditMueble("page_id"); ?>" name="page_id" class="form-control" id="exampleInputName1" placeholder="ID del pagina">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputPassword4">Creditos</label>
                                    <input type="number" value="<?php echo admin::EditMueble("cost_credits"); ?>" name="cost_credits" class="form-control" autocomplete="off">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputPassword4">Duckets</label>
                                    <input type="number" value="<?php echo admin::EditMueble("cost_pixels"); ?>" name="cost_pixels" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Esmeraldas</label>
                                    <input type="number" value="<?php echo admin::EditMueble("cost_diamonds"); ?>" name="cost_diamonds" class="form-control" autocomplete="off">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputPassword4">La cantidad</label>
                                    <input type="number" value="<?php echo admin::EditMueble("amount"); ?>" name="amount" class="form-control" autocomplete="off">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputPassword4">Número de lotes (si es raro limitado)</label>
                                    <input type="number" value="<?php echo admin::EditMueble("limited_stack"); ?>" name="limited_stack" class="form-control" autocomplete="off">
                                </div>
                                
                                <input type="hidden" id="content" value=":warning: Ha editado informacion de (<?php echo admin::EditMueble("catalog_name"); ?>)
 
                                ID de página: <?php echo admin::EditMueble("page_id"); ?> --- :bookmark_tabs:
                                Esmeraldas: <?php echo admin::EditMueble("cost_diamonds"); ?> --- :gem:

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
                    <h4 class="card-title">Nombre del Mueble: <?php echo admin::EditMueble("catalog_name"); ?> </h4>
                    </p>
					
                    <div class="table-responsive " >
                      <table class="table table-hover" >
                      <tbody>
                      <tr>
                           <td>	<p > <b class="text-info">ID de página: </b><?php echo admin::EditMueble("page_id"); ?></p> </td></tr>
						   <tr>  <td><p><b class="text-warning">Creditos:</b> <?php echo admin::EditMueble("cost_credits"); ?></p> </td>  </tr>
						   <tr>  <td><p><b class="text-danger">Duckets:</b> <?php echo admin::EditMueble("cost_pixels"); ?></p> </td>  </tr>
                        <tr>  <td><p><b class="text-success">Esmeraldas:</b> <?php echo admin::EditMueble("cost_diamonds"); ?></p> </td>  </tr>
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