<!DOCTYPE html>
<html lang="en">
<?php
include_once "includes/head.php";

admin::CheckRank(13);
?>

<body>

    <?php
    include_once "includes/navi.php";
    include_once "includes/header.php";

    ?>


    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Crear Paginas</h4>
                            <p class="card-description">Crear nuevas páginas para la tienda del servidor
                            </p>
                            <form class="forms-sample" name="mygallery" action="" method="POST">
                            <?php admin::PostCatalogPages(); ?>
                            <div class="form-group">
                                <label for="exampleInputName1">ID de la Pagina</label>
                                <input id="icon_prefix" type="text" name="id" class="form-control">
                            </div>
							<div class="form-group">
                                <label for="exampleInputName1">Pagina que estara adentro</label>
                                <input id="icon_prefix" type="text" name="parent_id" class="form-control">
                            </div>
							<div class="form-group">
                                <label for="exampleInputName1">Nombre de la página</label>
                                <input id="icon_prefix" type="text" name="caption" class="form-control">
                            </div>
							<div class="form-group">
                                <label for="exampleInputName1">Icono de página</label>
                                <input id="icon_prefix" type="text" name="icon_image" class="form-control">
                            </div>
							<div class="form-group">
                                <label for="exampleInputName1">Pagina Habilitado = 1 / Pagina Deshabilitado = 0</label>
                                <input id="icon_prefix" type="text" name="enabled" class="form-control">
                            </div>
							<div class="form-group">
                                <label for="exampleInputName1">Rango Mínimo</label>
                                <input id="icon_prefix" type="text" name="min_rank" class="form-control">
                            </div>
							<div class="form-group">
                                <label for="exampleInputName1">Orden de la página</label>
                                <input id="icon_prefix" type="text" name="order_num" class="form-control">
                            </div>
							<div class="form-group">
                                <label for="exampleInputName1">Page Layout (default_3x3)</label>
                                <input id="icon_prefix" type="text" name="page_layout" class="form-control">
                            </div>
							<div class="form-group">
                                <label for="exampleInputName1">Page Link</label>
                                <input id="icon_prefix" type="text" name="page_link" class="form-control">
                            </div>
							<div class="form-group">
                                <label for="exampleInputName1">Page Strings 1</label>
                                <input id="icon_prefix" type="text" name="page_strings_1" class="form-control">
                            </div>
							<div class="form-group">
                                <label for="exampleInputName1">Page Strings 2</label>
                                <input id="icon_prefix" type="text" name="page_strings_2" class="form-control">
                            </div>
                            <button class="btn btn-primary mr-2" type="submit" name="postcatalog" name="action">Crear Pagina</button>
                        </div>
                    </div>
              
                </form>
        
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