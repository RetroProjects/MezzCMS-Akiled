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
                <h1 class="page-title">Editar Sala "<?php echo admin::EditRoomOwner("caption"); ?>"</h1>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Editar</h4>
                            <p class="card-description">Editar: <?php echo admin::EditRoomOwner("caption"); ?> </p>

                            <form class="forms-sample" name="mygallery" action="" method="POST">

                                <?php
                                admin::EditRoomOwner("id");
                                admin::UpdateRoomOwner();
                                ?>
                                <input id="icon_prefix" type="hidden" value="<?php echo admin::EditRoomOwner("id"); ?>" name="naam" class="form-control">
								
                                <div class="form-group">
                                    <label for="exampleInputName1">ID de Sala</label>
                                    <input style="color: black;" type="number" value="<?php echo admin::EditRoomOwner("id"); ?>" name="id" class="form-control" id="exampleInputName1" placeholder="ID del pagina" Readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Nombre de Sala:</label>
                                    <input type="text" value="<?php echo admin::EditRoomOwner("caption"); ?>" name="caption" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Propietario de Sala:</label>
                                    <input type="text" value="<?php echo admin::EditRoomOwner("owner"); ?>" name="owner" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Descripción:</label>
                                    <input type="text" value="<?php echo admin::EditRoomOwner("description"); ?>" name="description" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Status:</label>
                                    <select name="state" class="form-control">
                                            <option name="state" value="open" <?php echo admin::EditRoomOwner("state")=='open'?'selected':'';?>>Open</option>
                                            <option name="state" value="locked" <?php echo admin::EditRoomOwner("state")=='locked'?'selected':'';?>>Locked</option>
                                            <option name="state" value="hide" <?php echo admin::EditRoomOwner("state")=='hide'?'selected':'';?>>Hide</option>
                                    </select>
                                </div>
                                
                                <input type="hidden" id="content" value=":warning: Ha editado informacion de (<?php echo admin::EditRoomOwner("id"); ?>)
 

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
                            <tbody>
                                <tr>
                                <td>
                                    <p><b class="text-info">ID de Sala: </b><?php echo admin::EditRoomOwner("id"); ?></p> 
                                </td>
                                </tr>
                                <tr>  
                                    <td>
                                        <p><b class="text-warning">Nombre de Sala: </b> <?php echo admin::EditRoomOwner("caption"); ?></p>
                                    </td>  
                                </tr>
                                <tr>  
                                    <td>
                                        <p><b class="text-primary">Propietario de Sala: </b> <?php echo admin::EditRoomOwner("owner"); ?></p>
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