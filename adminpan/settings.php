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
                <h1 class="page-title">Configuracion general del hotel </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Ajustes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Configuracion</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-md-4 grid-margin stretch-card" style=" max-height: 500px;">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Configuracion de inicio</h4>
                            <p class="card-description">Monedas, mision y sala de bienvenida </p>
                            <?php
                            if (isset($_POST['registro'])) {
                                $upateUser = $dbh->prepare("UPDATE slopt_cms SET 
				motto=:motto,
				credits=:credits,
				diamonds=:diamonds,
				home_room=:home_room");
                                $upateUser->bindParam(':motto', $_POST['motto']);
                                $upateUser->bindParam(':credits', $_POST['credits']);
                                $upateUser->bindParam(':diamonds', $_POST['diamonds']);
                                $upateUser->bindParam(':home_room', $_POST['home_room']);
                                $upateUser->execute();
                                header('Location:/adminpan/settings');
                            }
                            ?>
                            <form class="forms-sample" name="mygallery" action="" method="POST">

                                <div class="form-group">
                                    <label for="exampleInputName1"><?= $lang["HkSettings2"]; ?></label>
                                    <input type="text" value="<?= $config['credits']; ?>" name="credits" class="form-control" autocomplete="off" onkeypress='return event.charCode >= 48 && event.charCode <= 57' id="exampleInputName1" placeholder="<?= $lang["HkSettings2"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3"><?= $lang["HkSettings3"]; ?></label>
                                    <input type="text" value="<?= $config['diamonds']; ?>" name="diamonds" class="form-control" autocomplete="off" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4"><?= $lang["HkSettings4"]; ?></label>
                                    <input type="text" value="<?= $hotel["homeRoom"]; ?>" name="home_room" class="form-control" autocomplete="off" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword4"><?= $lang["HkSettings5"]; ?></label>
                                    <input type="text" value="<?= $config['startMotto']; ?>" name="motto" class="form-control" autocomplete="off">
                                </div>
                                <button name="registro" type="submit" class="btn btn-primary mr-2">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>

                <?php
                if (isset($_POST['radio'])) {
                    $upateUser = $dbh->prepare("UPDATE slopt_cms SET 
				radio=:radio");
                    $upateUser->bindParam(':radio', $_POST['radiolink']);
                    $upateUser->execute();
                    header('Location:/adminpan/settings');
                }
                ?>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Link de la Radio</h4>
                            <form class="forms-sample" name="mygallery" action="" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputPassword4"><?= $lang["HkSettings7"]; ?></label>
                                    <input type="text" value="<?= $hotel['RadioClient']; ?>" name="radiolink" class="form-control" autocomplete="off">
                                </div>
                                <button name="radio" type="submit" class="btn btn-primary mr-2">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($_POST['mantenimiento'])) {
                    $upateUser = $dbh->prepare("UPDATE slopt_cms SET 
				maintenance=:maintenance,
				rank_maintenance=:rank_maintenance");
                    $upateUser->bindParam(':maintenance', $_POST['maintenance']);
                    $upateUser->bindParam(':rank_maintenance', $_POST['rank_maintenance']);
                    $upateUser->execute();
                    header('Location:/adminpan/settings');
                }
                ?>

                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><?= $lang["HkSettings8"]; ?> </h4>
                            <form class="forms-sample" name="mygallery" action="" method="POST">
                                <div class="form-group">
                                    
                                    <label for="exampleSelectGender">Mantenimiento</label>
                                    <select name="maintenance" class="form-control">
                                        <option value="false" <?php if ($config['maintenance'] == "false") {
                                                                    echo "selected";
                                                                } ?>><?= $lang["HkSettings9"]; ?></option>
                                        <option value="true" <?php if ($config['maintenance'] == "true") {
                                                                    echo "selected";
                                                                } ?>><?= $lang["HkSettings10"]; ?></option>
                                    </select>

                                </div>


                                <div class="form-group">
                                    <label for="exampleInputPassword4"><?= $lang["HkSettings11"]; ?></label>
										<input type="text" value="<?= $config['maintenancekMinimumRankLogin']; ?>" name="rank_maintenance" class="form-control" autocomplete="off" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
									</div>

                                <button  name="mantenimiento" type="submit" class="btn btn-primary mr-2">Guardar</button>
                            
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