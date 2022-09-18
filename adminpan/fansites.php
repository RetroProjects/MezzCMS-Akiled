<!DOCTYPE html>
<html lang="en">
<?php
include_once "includes/head.php";
$_SESSION['title'] = '';
$_SESSION['slogan'] = '';
$_SESSION['news'] = '';
admin::CheckRank(17);
?>

<body>

    <?php
    include_once "includes/navi.php";
    include_once "includes/header.php";

    ?>


    <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Editar información del índice</h4>
                            <p class="card-description">Gestión de la información</p>
                          <!--   <a href="/adminpan/addcatalogsection" class="btn active" role="button" aria-pressed="true" style="background-color:#4272d7;color:#FFFFFF;">Añadir sección</a>-->
						    <?php admin::DeleteFanSites(); ?>
                                <center>
                                <div class="table-responsive ">
                                    <table class="table  table-condensed" id="tableprueba" style="">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Descripción</th>
                                                <th>Link</th>
                                                <th>Dueño</th>
                                                <th>Editar</th>
                                                <th>Eliminar</th>
                                            </tr>

                                        </thead>

                                        <tbody>
                                            <?php
                                            $getinfos = $dbh->prepare("SELECT * FROM cms_fansites");
                                            $getinfos->execute();

                                            while ($infos = $getinfos->fetch()) {
                                            ?>

                                                <tr style="color:#6c7293; background:#191c24">
                                                    <td> <?php echo $infos["id"]; ?></td>

                                                    <td><?php echo $infos["name"]; ?></td>
                                                    <td><?php echo $infos["longtext"]; ?></td>
                                                    <td><a href="<?php echo $infos["link"]; ?>"><?php echo $infos["link"]; ?></a></td>
                                                    <td><?php echo $infos["owner"]; ?></td>
                                                    <td>
                                                        <center><a type="button" class="btn btn-info" href="<?php echo $config['hotelUrl']; ?>/adminpan/editfansites/<?php echo $infos["id"]; ?>">Editar</center></a>
                                                    </td>
                                                    <center><td style="color:#6c7293; background:#191c24"><a type="button" class="btn btn-danger" href=' <?php echo  $config['hotelUrl'];?>/adminpan/fansites/delete/<?php echo $infos["id"];?>'>Eliminar</a></td></center>
                                                </tr>
                                            <?php } ?>




                                        </tbody>
                                    </table>
                                </center>
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

        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
        <script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#tableprueba').DataTable();
            });
        </script>
</body>


</html>