<!DOCTYPE html>
<html lang="en">
<?php
include_once "includes/head.php";
$_SESSION['title'] = '';
$_SESSION['slogan'] = '';
$_SESSION['news'] = '';
admin::CheckRank(10);
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
                            <h4 class="card-title">Monitoreo de mensajes privados</h4>
                            <p class="card-description">Analisis de Mensajes privados</p>
                            <form class="forms-sample" form name="mygallery" action="" method="POST">
                            <?php admin::DeleteRooms(); ?>
                            <div class="table-responsive ">
                            <table class=" table-condensed table" id="tableprueba" style="background:#191c24">
   <thead>

                                <tr>
                                <th>ID</th>
								<th>Usuario A</th>
                                <th style="width: 20%">Usuario B</th>
                                <th>Mensaje</th>
                                <th>Fecha</th>
                                </tr>
                            </thead>
								<tbody>
								<?php
									$getArticles = $dbh->prepare("SELECT * FROM chatlogs_console ORDER BY id DESC LIMIT 500");
									$getArticles->execute();
									while($news = $getArticles->fetch()){
									$getuser = $dbh->prepare("SELECT * FROM users WHERE id=".$news["from_id"]);
									$getuser->execute();
									$getu = $getuser->fetch();
									$getusers = $dbh->prepare("SELECT * FROM users WHERE id=".$news["to_id"]);
									$getusers->execute();
									$gets = $getusers->fetch();
										?>	
										
										<tr style="background:#191c24">
										<td style="width: 13%;"><?php echo $news["id"]; ?></td>
										<td style="width: 7%;"><?php echo $getu["username"]; ?></td>
										<td style="width: 7%;"><?php echo $gets["username"]; ?></td>
										<td style="width: 25%;"><?php echo filter($news["message"]);?></td>
										<td><?php echo gmdate("d-m-Y, H:i ", $news["timestamp"]);?></td>
										</tr>
									<?php } ?>
							</tbody>
						</table>
						</form>
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
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
<script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
    $('#tableprueba').DataTable();
            } );
</script>
 <script>
    $(document).ready(function() {
    $('#tableprueba1').DataTable();
            } );
</script>
</body>


</html>