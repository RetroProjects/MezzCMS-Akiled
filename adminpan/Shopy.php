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
            <div class="page-header">

            </div>
            <div class="row">
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style=" color: #b93737; margin-bottom: 1.125rem; text-transform: capitalize;">Tienda de cofres</h4>
                            <form class="forms-sample" form name="mygallery" action="" method="POST">
                                <?php admin::PostShopy(); ?>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Titulo</label>
                                    <p class="card-description"> Crea le titulo identificativo del pack, no agregues espacios, ejemplo: cofre1</p>
                                    <input type="text" class="form-control" id="exampleInputUsername1" id="icon_prefix" value="<?php echo $_SESSION['title']; ?>" name="title">
                                </div>

                                <div class="form-group">
                                    <label for="text">Image link</label>
                                    <input type="text" class="form-control" id="exampleInputNumber1" value="" name="image">
                                </div>
                                <div class="form-group">
                                    <label for="text">Esmeraldas</label>
                                    <input type="number" class="form-control" id="exampleInputNumber1" value="<?php echo $_SESSION['esmeralda']; ?>" name="esmeraldas">
                                </div>

                                <div class="form-group">
                                    <label for="text">Planetas</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" value="<?php echo $_SESSION['planeta']; ?>" name="planetas">
                                </div>
                                <div class="form-group">
                                    <label for="text">Precio</label>
                                    <p class="card-description"> Agrega el precio en sin $, solo numeros ejemplo 3.58</p>
                                    <input type="number" class="form-control" id="exampleInputEmail1" value="" name="price" step="any">
                                </div>
                                <center>

                                    <button class="btn btn-primary mr-2" id="btn" type="submit" name="postshopy" name="action">Publicar el paquete

                                    </button>
                                </center>
                        </div>
                    </div>
                </div>
                </form>

                <?php
                if (User::userData('rank') > '6') {
                ?>
                    <div class="col-md-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Cofres habilitados:</h3>
                                <p class="card-description">Todas los paquetes </p>
                                <?php admin::DeleteShopy(); ?>
                                <div class="table-responsive ">
                                    <table class="table table-hover">
                                        <tbody>
                                            <?php
                                            $getArticles = $dbh->prepare("SELECT * FROM mezz_shop ORDER BY id DESC");
                                            $getArticles->execute();
                                            while ($news = $getArticles->fetch()) {
                                                echo '<tr>
											<td>' . $news["id"] . '</td>
											<td>' . $news["title"] . '</td>
											<td>' . $news["esmeraldas"] . '</td>
                                            <td>' . $news["planeta"] . '</td>
                                            <td>' . $news["price"] . '</td>
                                            <td>' . $news["image"] . '</td>
											<td>' . date('d-m-Y', $news['date']) . '</td>
											<td><a type="button" class="btn btn-danger" href=' . $config['hotelUrl'] . '/adminpan/Shopy/delete/' . $news["id"] . '><i style="padding-top: 4px; color:red;" class="fa fa-trash"></i></center>Eliminar</a></td>
											</tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>


                <?php } ?>













            </div>
        </div>


        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php
        include_once "includes/footer.php";
        ?>
        <!-- container-scroller -->

</body>


</html>