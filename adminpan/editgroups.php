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

        <a style="text-decoration: none;" href="javascript:history.back()">Volver</a><br><br>
            <div class="page-header">
                <h1 class="page-title">Editar Grupo</h1>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Editar</h4>
                            <p class="card-description">Editar: <?php echo admin::EditGroup("name"); ?> </p>

                            <form class="forms-sample" name="mygallery" action="" method="POST">

                                <?php
                                admin::EditGroup("id");
                                admin::UpdateGroup();
                                
                                ?>
                                <input id="icon_prefix" type="hidden" value="<?php echo admin::EditGroup("id"); ?>" name="naam" class="form-control">
								
								<div class="form-group">
                                    <label for="exampleInputEmail3">Nome do Grupo</label>
                                    <input style="color: white;" type="text" value="<?php echo admin::EditGroup("name"); ?>" name="name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">ID do Dono</label>
                                    <input style="color: white;" type="number" value="<?php echo admin::EditGroup("owner_id"); ?>" name="owner_id" class="form-control" id="exampleInputName1" placeholder="ID do Dono">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">ID do Quarto</label>
                                    <input style="color: white;" type="number" value="<?php echo admin::EditGroup("room_id"); ?>" name="room_id" class="form-control" id="exampleInputName1" placeholder="ID do Quarto">
                                </div>
                                
                        </div>
                    </div>
                </div>
              
                <div class="col-lg-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
					
                    <div class="table-responsive " >
                    <div class="form-group">
                                    <label for="exampleInputName1">Estado</label>

                                    <select style="color: white;" name="state" class="form-control">
                                        <option name="state" value="0" <?php echo admin::EditGroup("state")=='0'?'selected':'';?>>Abierto</option>
                                        <option name="state" value="1" <?php echo admin::EditGroup("state")=='1'?'selected':'';?>>Privado</option>
                                        <option name="state" value="2" <?php echo admin::EditGroup("state")=='2'?'selected':'';?>>Cerrado</option>
                                    </select>

                                </div>

                                <button id="btn" name="update" type="submit" class="btn btn-primary mr-2">Guardar</button>
                            </form>
                        <br><br>
                        <font color=darkgreen>Descrição:</font>
                        <br>
                        <font size=2><?php echo admin::EditGroup("desc"); ?></font>
                        <br><br>
                        <font size=3>¡La descripción del grupo debe cambiarse en el juego!</font>
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