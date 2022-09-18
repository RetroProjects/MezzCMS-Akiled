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
                <h1 class="page-title">Editar HappyHour </h1>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Editar información aquí</h4>

                            <form class="forms-sample" name="mygallery" action="" method="POST">

                                <?php
                                admin::EditHappyHour("id");
                                admin::UpdateHappyHour();
                                ?>
								
                                <div class="form-group">
                                    <label for="exampleInputName1">Credits</label>
                                    <input style="color: white;" type="number" value="<?php echo admin::EditHappyHour("credits"); ?>" name="credits" class="form-control" id="exampleInputName1" placeholder="ID del pagina">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Duckets</label>
                                    <input style="color: white;" type="text" value="<?php echo admin::EditHappyHour("duckets"); ?>" name="duckets" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4">Diamantes</label>
                                    <input style="color: white;" style="color: white;" type="text" value="<?php echo admin::EditHappyHour("diamantes"); ?>" name="diamantes" class="form-control" autocomplete="off">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail3">Dolares</label>
                                    <input style="color: white;" type="text" value="<?php echo admin::EditHappyHour("dolares"); ?>" name="dolares" class="form-control">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail3">Moneda 1:</label>
                                    <input style="color: white;" type="text" value="<?php echo admin::EditHappyHour("moneda1"); ?>" name="moneda1" class="form-control">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail3">Moneda 2:</label>
                                    <input style="color: white;" type="text" value="<?php echo admin::EditHappyHour("moneda2"); ?>" name="moneda2" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Moneda 2:</label>
                                    <input style="color: white;" type="text" value="<?php echo admin::EditHappyHour("moneda3"); ?>" name="moneda3" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Moneda 2:</label>
                                    <input style="color: white;" type="text" value="<?php echo admin::EditHappyHour("moneda4"); ?>" name="moneda4" class="form-control">
                                </div>


                                <button id="btn" name="update" type="submit" class="btn btn-primary mr-2">Guardar</button>
                            </form>
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