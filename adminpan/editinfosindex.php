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
                <h1 class="page-title">Editar Sala "<?php echo admin::EditInfosIndex("caption"); ?>"</h1>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Editar</h4>
                            <p class="card-description">Editar: <?php echo admin::EditInfosIndex("caption"); ?> </p>

                            <form class="forms-sample" name="mygallery" action="" method="POST">

                                <?php
                                admin::EditInfosIndex("id");
                                admin::UpdateInfosIndex();
                                ?>
                                <input id="icon_prefix" type="hidden" value="<?php echo admin::EditInfosIndex("id"); ?>" name="naam" class="form-control">
								
                                <div class="form-group">
                                    <label for="exampleInputName1">ID de InfoIndex</label>
                                    <input style="color: black;" type="number" value="<?php echo admin::EditInfosIndex("id"); ?>" name="id" class="form-control" id="exampleInputName1" placeholder="ID del pagina" Readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Nombre de InfoIndex:</label>
                                    <input type="text" value="<?php echo admin::EditInfosIndex("title"); ?>" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Descripción de InfoIndex:</label>
                                    <input type="text" value="<?php echo admin::EditInfosIndex("information"); ?>" name="information" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Imagem:</label>
                                    <input type="text" value="<?php echo admin::EditInfosIndex("image"); ?>" name="image" class="form-control" autocomplete="off">
                                </div>
                                
                                <input type="hidden" id="content" value=":warning: Ha editado informacion de (<?php echo admin::EditInfosIndex("id"); ?>)
 

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
                        <img style="width: 100%;" src="<?php echo admin::EditInfosIndex("image"); ?>">
                            <tbody>
                                <tr>
                                <td>
                                    <p><b class="text-info">ID de InfoIndex: </b><?php echo admin::EditInfosIndex("id"); ?></p> 
                                </td>
                                </tr>
                                <tr>  
                                    <td>
                                        <p><b class="text-warning">Nombre de InfoIndex: </b> <?php echo admin::EditInfosIndex("title"); ?></p>
                                    </td>  
                                </tr>
                                <tr>  
                                    <td style="white-space: inherit; line-height: 1.6;">
                                        <p><b class="text-primary">Descripción de InfoIndex: </b> <?php echo admin::EditInfosIndex("information"); ?></p>
                                    </td>  
                                </tr>
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