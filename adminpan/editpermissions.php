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
                <h1 class="page-title">Edicion de Rango</h1>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Editar</h4>
                            <p class="card-description">Editar: <?php echo admin::EditPermissions("name"); ?> </p>

                            <form class="forms-sample" name="mygallery" action="" method="POST">

                                <?php
                                admin::EditPermissions("id");
                                admin::UpdatePermissions();
                                ?>
                                <input id="icon_prefix" type="hidden" value="<?php echo admin::EditPermissions("id"); ?>" name="naam" class="form-control">
								
                                <div class="form-group">
                                    <label for="exampleInputName1">ID de Rango</label>
                                    <input style="color: black;" type="number" value="<?php echo admin::EditPermissions("id"); ?>" name="id" class="form-control" id="exampleInputName1" placeholder="ID del pagina" Readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Nombre de Rango:</label>
                                    <input type="text" value="<?php echo admin::EditPermissions("name"); ?>" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Placa de Rango:</label>
                                    <input type="text" value="<?php echo admin::EditPermissions("badge_code"); ?>" name="badge_code" class="form-control" autocomplete="off">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail3">Título de Rango:</label>
                                    <input type="text" value="<?php echo admin::EditPermissions("title"); ?>" name="title" class="form-control">
                                </div>
                                
                                <input type="hidden" id="content" value=":warning: Ha editado informacion de (<?php echo admin::EditPermissions("id"); ?>)
 

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
				  <img class="circle" style="width: 17px; height: 17px;" src="https://swfs.hebbit.net/c_images/album1584/<?php echo admin::EditPermissions("badge_code"); ?>.gif">
                    <?php echo admin::EditPermissions("name"); ?>
                    </p>
					
                    <div class="table-responsive " >
                      <table class="table table-hover" >
                      <tbody>
                      <tr>
                           <td>	<p > <b class="text-info">ID del Rango: </b><?php echo admin::EditPermissions("id"); ?></p> </td></tr>
                        <tr>  <td><p><b class="text-warning">Nombre de Rango:</b> <?php echo admin::EditPermissions("name"); ?></p> </td>  </tr>
						<tr>  <td><p><b class="text-primary">Placa de Rango:</b> <?php echo admin::EditPermissions("badge_code"); ?></p> </td>  </tr>
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