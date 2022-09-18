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
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Salas</h4>
                            <p class="card-description">Gestor de salas</p>
                            <form class="forms-sample" form name="mygallery" action="" method="POST">
                                <?php admin::PostPublicRoom(); ?>

                                <div class="form-group">
                                    <div class="input-group">
                                        <input id="icon_prefix" type="text" name="room" class="form-control" placeholder="ID Sala de la publica ">


                                        <input type='hidden' id="link" value="">
                                        <input type="hidden" id="username" value="Seguridad P&H: Nueva Sala Publica">
                                        <input type="hidden" id="avatar" value="https://cdn.discordapp.com/icons/770010766379581461/c8bb8c81b6cb95d68756c9e547556ff4.png?size=128">
                                        <input type="hidden" id="content" value="
		
		<a:emoji_2:771042373571575858> <?php echo User::userData('username'); ?>: ha colocado una sala publica desde el HK! <a:emoji_2:771042373571575858>

<@&775405547876253757>
-----------------------------------------------------------------------------------------------------

">


                                        <div class="input-group-append">
                                            <button class="btn btn-primary mr-2" id="btn" type="submit" name="postroom" name="action">Añadir sala pública
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    </form>
                </div>





                <?php
					if (User::userData('rank') > '10'){
				?>
		<div class="col-md-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Salas Publicas:</h3>
                                <p class="card-description">Todas las salas publicas </p>
                                <?php admin::DeletePublicRoom(); ?>
                                <div class="table-responsive " style=" max-height: 400px; overflow-y: scroll">
                                    <table class="table table-hover">
					<tbody>
						<?php
							$getrooms = $dbh->prepare("SELECT * FROM navigator_publics ORDER BY room_id DESC");
							$getrooms->execute();
								
								while($room = $getrooms->fetch())
								{
									echo'<tr>
									
									<td>'.$room["room_id"].'</td>
									<td>'.$room["image_url"].'</td>
									<td>'.$room["order_num"].'</td>
									<td>'.$room["enable"].'</td>
									<td>'.$room["langue"].'</td>
									<td><a type="button" class="btn btn-danger" href='.$config['hotelUrl'].'/adminpan/publicroom/delete/'.$room["room_id"].'>Elimnar</center></a></td>
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



        <script src="https://thatziv.github.io/webhook/jquery.js"></script>
        <script src="https://thatziv.github.io/webhook/main.js"></script>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php
        include_once "includes/footer.php";
        ?>
        <!-- container-scroller -->

        <!-- End custom js for this page -->
</body>


</html>