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
                            <h4 class="card-title">Monitoreo de Comandos</h4>
                            <p class="card-description">Revisa los comandos mas recientes en el hotel </p>
                            <?php admin::DeleteNews(); ?>
                                <div class="table-responsive ">
                                    <table class="table table-hover table table-condensed" id="tableprueba">
                                    <thead>
                                <tr>
                                <th>ID</th>
                                <th style="width: 20%">Room ID</th>
                                <th>Miembro</th>
                                <th>Comando</th>
                                <th>Data</th>
                                </tr>
                            </thead>
								<tbody>
								<?php
									$getArticles = $dbh->prepare("SELECT * FROM cmdlogs ORDER BY id DESC");
									$getArticles->execute();
									while($news = $getArticles->fetch()){
										?>	
										
										<tr style="color:#6c7293; background:#191c24">
										<td style="width: 1%;"> <?php echo $news["id"]; ?></td>
										<td style="width: 1%;"><?php echo $news["roomid"]; ?></td>
										<td style="width: 2%;"><?php echo filter($news["user_name"]);?></td>
                                        <td style="width: 2%;"><?php echo filter($news["command"]);?></td>
										<td style="width: 1%;"><?php echo gmdate("d-m-Y, H:i ", $news["timestamp"]);?></td>
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
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
<script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
    $('#tableprueba').DataTable();
            } );
</script>
</body>


</html>