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
                            <h4 class="card-title">Editar Salas</h4>
                            <p class="card-description">Gestión de salas</p>
                          <!--   <a href="/adminpan/addcatalogsection" class="btn active" role="button" aria-pressed="true" style="background-color:#4272d7;color:#FFFFFF;">Añadir sección</a>-->
						  
                            <?php if (User::userData('rank') > '18') { ?>
                                <center>
                                <div class="table-responsive ">
                                    <table class="table  table-condensed" id="tableprueba" style="">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Sala</th>
                                                <th>Propietario</th>
                                                <th>Editar</th>
                                                <th>Eliminar</th>
                                            </tr>

                                        </thead>

                                        <tbody>
                                            <?php
                                            $getpages = $dbh->prepare("SELECT * FROM rooms");
                                            $getpages->execute();

                                            while ($pages = $getpages->fetch()) {
                                            ?>

                                                <tr style="color:#6c7293; background:#191c24">
                                                    <td> <?php echo $pages["id"]; ?></td>

                                                    <td><?php echo $pages["caption"]; ?></td>
                                                    <td>(<?php echo $pages["owner"]; ?>)</td>
                                                    <td>
                                                        <center><a type="button" class="btn btn-info" href="<?php echo $config['hotelUrl']; ?>/adminpan/editsalas/<?php echo $pages["id"]; ?>">Editar</center></a>
                                                    </td>
                                                    <center><td style="color:#6c7293; background:#191c24"><a type="button" class="btn btn-danger" href=' <?php echo  $config['hotelUrl'];?>/adminpan/salas/delete/<?php echo $news["id"];?>'>Eliminar</a></td></center>
                                                </tr>
                                            <?php } ?>




                                        </tbody>
                                    </table>
                                </center>
                        </div>
                    </div>
                <?php } ?>
                </div>
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tus salas</h4>
                            <p class="card-description">Gestor de salas propias</p>
                            <form class="forms-sample" form name="mygallery" action="" method="POST">
                            <?php admin::DeleteRooms(); ?>
                            <div class="table-responsive ">
                            <table class=" table-condensed table" id="tableprueba1" style="background:#191c24">
							   <thead>
								
									<strong>
									<tr><th style="width: 5%;">ID</th>
									<th>Nombre de la sala</th>
									<th>Sala ID</th>
									<th>Estado de la sala</th>
									<th>Modelo</th>
                                    <th>Editar</th>
									<th>Eliminar</th>
									</tr>
																		   </thead>
																		   <tbody>
									<?php
									$iduser = User::userData('username');
										$getArticles = $dbh->prepare("SELECT * FROM rooms WHERE owner = '$iduser' ORDER BY id DESC ");
										$getArticles->execute();
										while($news2 = $getArticles->fetch()){
												?>
												
												<tr style="">
											<td style="color:#6c7293; background:#191c24"> <?php echo $news2["id"]; ?></td>
											<td style="color:#6c7293; background:#191c24"> <?php echo filter($news2["caption"]); ?></td>
											<td style="color:#6c7293; background:#191c24"><?php echo $news2["id"]; ?></td>
											<td style="width: 25%; background:#191c24"><?php echo $news2["state"]; ?></td>
											<td style="color:#6c7293; background:#191c24"><?php echo $news2["model_name"]; ?></td>
                                            <td style="color:#6c7293; background:#191c24"><a type="button" class="btn btn-info" href=' <?php echo  $config['hotelUrl'];?>/adminpan/editsalas/<?php echo $news2["id"];?>'>Editar</a></td>
											<td style="color:#6c7293; background:#191c24"><a type="button" class="btn btn-danger" href=' <?php echo  $config['hotelUrl'];?>/adminpan/salas/delete/<?php echo $news2["id"];?>'>Eliminar</a></td>
											</tr>
										<?php } ?>

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

        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
        <script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#tableprueba').DataTable();
            });
        </script>
</body>


</html>