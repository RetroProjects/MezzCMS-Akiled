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
                            <h4 class="card-title">Venta de Placas</h4>
                            <p class="card-description">Agrega nuevas placas para ser vendidas en la home <code>(No Real Time)</code>
                            </p>
                            <form class="forms-sample" name="mygallery" action="" method="POST">
                            <?php admin::PostBadges(); ?>
                            <div class="form-group">
                                <label for="exampleInputName1">Código</label>
                                <input id="icon_prefix" type="text" value="<?php echo $_SESSION['code']; ?>" name="code" class="form-control">
                            </div>
                            <button class="btn btn-primary mr-2" type="submit" name="postbadge" name="action">Subir placa a la tienda</button>
                        </div>
                    </div>
              
                </form>
        
                </div>




            <?php
            if (User::userData('rank') > '6') {
            ?>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Lista de placas en venta:</h4>
                            <p class="card-description"> Todas las placas disponibles para la compra <code>(No Real Time)</code>
                            </p>
                            <div class="table-responsive " style=" max-height: 350px; overflow-y: scroll">
                                <table class="table table-hover">
                                    <?php admin::DeleteBadge(); ?>
                                        <tbody>
                                            <?php
                                            $getBadges = $dbh->prepare("SELECT * FROM cms_badges ORDER BY id DESC");
                                            $getBadges->execute();
                                            while ($badge = $getBadges->fetch()) {
                                                echo '<tr>
									<td>' . $badge["id"] . '</td>
									<td>' . $badge["badge_id"] . '</td>
										<td><img style="transform: scale(1);image-rendering: pixelated;" draggable="false" oncontextmenu="return false" src="' . $config['badgeURL'] . '' . $badge["badge_id"] . '.gif"></td>
									<td><a type="button" class="btn btn-danger" href=' . $config['hotelUrl'] . '/adminpan/badge/delete/' . $badge["id"] . '></center>Eliminar</a></td>
									</tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>

                <?php } ?>
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