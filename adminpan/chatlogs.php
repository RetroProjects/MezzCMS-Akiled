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
                            <h4 class="card-title">Monitoreo de Salas</h4>
                            <p class="card-description">Revisa las conversaciones mas recientes en el hotel </p>
                            <?php admin::DeleteNews(); ?>
                                <div class="table-responsive ">
                                    <table class="table table-hover table table-condensed" id="tableprueba">
                                    <thead>
                                <tr>
                                <th>ID</th>
								<th>userid</th>
                                <th style="width: 20%">room_id</th>
                                <th>Mensaje</th>
                                <th>Fecha</th>
                                </tr>
                            </thead>
								<tbody>
								<?php
									$getArticles = $dbh->prepare("SELECT * FROM chatlogs ORDER BY id DESC LIMIT 500");
									$getArticles->execute();
									while($news = $getArticles->fetch()){
									$getuser = $dbh->prepare("SELECT * FROM users WHERE id=".$news["user_id"]);
									$getuser->execute();
									$getu = $getuser->fetch();
										?>	
										
										<tr style="color:#6c7293; background:#191c24">
										<td> <?php echo $news["id"]; ?></td>
										<td style="width: 13%;"><?php echo $news["id"]; ?></td>
										<td style="width: 7%;"><?php echo $getu["username"]; ?></td>
										<td style="width: 25%;"><?php echo filter($news["message"]);?></td>
										<td><?php echo gmdate("d-m-Y, H:i ", $news["timestamp"]);?></td>
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