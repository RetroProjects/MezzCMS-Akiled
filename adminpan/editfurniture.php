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



     
        <div class="col-lg-8 grid-margin stretch-card" style="max-width: 1000px;">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Muebles</h4>
                    <p class="card-description"> Elija un mueble a continuación para editar<br><br>
					<b>Si no aparece ningún mueble en la página, es porque la página no tiene ningún mueble dentro.</b>
                    </p>
                    <div class="table-responsive " style=" max-height: 350px; overflow-y: scroll">
                        <table class="table table-hover">

                            <tbody>

                                <?php
								if (isset($_GET['id'])) {
                                $sqlGetUsersByRankDev = $dbh->prepare("SELECT * FROM catalog_items JOIN furniture ON catalog_items.item_id = furniture.id WHERE page_id = :pageid");
								$sqlGetUsersByRankDev->bindParam(':pageid', $_GET['id']);
                                $sqlGetUsersByRankDev->execute();
                                while ($getUsersDev = $sqlGetUsersByRankDev->fetch()) {
								$string = filter($getUsersDev['item_name']);
								$stringCorrigida = str_replace('*', '_', $string);
								
                                ?>
                                    <tr>
                                        <td>ID: <?php echo $getUsersDev['id']; ?></td>
                                        <td> <img class="circle" style="width: auto; height: auto;" src="<?= $config['pathswf'];?>/dcr/hof_furni/icons/<?= $stringCorrigida; ?>_icon.png"></td>
                                        <td> <span class="title"><?php echo $getUsersDev['catalog_name']; ?> </span></td>
                                        <td>
                                            <p><?php echo $getUsersDev['type']; ?>
                                            </p>
                                        <td>
                                        <td><a type="button" class="btn btn-primary" href="<?= $config['hotelUrl']; ?>/adminpan/editfurnitures/<?php echo $getUsersDev['id']; ?>">Editar</a>
                                        <td>

                                        <?php } ?>
										<?php } ?>
                                    </tr>




                            </tbody>
                        </table>
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