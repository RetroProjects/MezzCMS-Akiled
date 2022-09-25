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
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Bans</h4>
                            <p class="card-description"> Añadir o eliminar bans </p>
                            <form class="forms-sample" form name="mygallery" action="" method="POST">
                                <?php admin::AddBans(); ?>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Nombre de usuario</label>
                                    <input id="icon_prefix" type="text" name="username" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Tiempo de baneo</label>
                                    <select name="timer" class="form-control">
                                        <option value="" disabled selected>Tiempo de baneo</option>
                                        <option value="3600">1 hora</option>
                                        <option value="7200">2 horas</option>
                                        <option value="10800">3 horas</option>
                                        <option value="14400">4 horas</option>
                                        <option value="43200">12 horas</option>
                                        <option value="86400">1 días</option>
                                        <option value="259200">3 días</option>
                                        <option value="604800">1 semana</option>
                                        <option value="1209600">2 semanas</option>
                                        <option value="2592000">1 mes</option>
                                        <option value="7776000">3 meses</option>
                                        <option value="1314000">1 año</option>
                                        <option value="2628000">2 años</option>
                                        <option value="360000000">10 años</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Tipo de baneo, ¿Ip o por nombre de usuario?</label>
                                    <select name="type" class="form-control">
                                        <option value="" disabled selected>Tipo:</option>
                                        <option value="0">Banear por nombre</option>
                                        <option value="1">Banear por Ip</option>
                                        <option value="2">Banear por nombre y por IP</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Razón</label>
                                    <textarea id="textarea1" class="form-control" name="reason" data-length="250"></textarea>
                                </div>



                                <input type='hidden' id="link" value="">
                                <input type="hidden" id="username" value="Seguridad P&H: BANS">
                                <input type="hidden" id="avatar" value="https://cdn.discordapp.com/icons/770010766379581461/c8bb8c81b6cb95d68756c9e547556ff4.png?size=128">
                                <input type="hidden" id="content" value="
		
		<a:emoji_2:771042373571575858> <?php echo User::userData('username'); ?>: ha colocado un baneo a un usuario desde el HK! <a:emoji_2:771042373571575858>
		
<@&775405547876253757>
-----------------------------------------------------------------------------------------------------

">


                                <button class="btn btn-primary mr-2" id="btn" type="submit" name="postban" name="action">Banear usuario
                                </button>

                        </div>
                        </form>
                    </div>
                </div>


                <div class="col-sm-3 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h5>Baneos</h5>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0"><?php echo Game::bansCount(); ?></h2>
                                    </div>
                                    <h6 class="text-muted font-weight-normal">Cantidad de usuarios baneados</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <i class="icon-lg mdi mdi mdi-account-off text-danger ml-auto"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h5>Usuarios Conectados</h5>
                            <div class="row">
                                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                    <div class="d-flex d-sm-block d-md-flex align-items-center">
                                        <h2 class="mb-0"><?php echo User::count('usersons'); ?></h2>
                                        <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                                    </div>
                                    <h6 class="text-muted font-weight-normal"> Total de usuarios conectados</h6>
                                </div>
                                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                    <i class="icon-lg mdi mdi mdi-account text-success ml-auto"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Lista de baneos</h4>
                            <p class="card-description"> Lista de todos usuarios baneados<code>(No Real Time)</code>
                            </p>
                            <form class="forms-control" name="mygallery" action="" method="POST">
                                <div class="table-responsive " style=" max-height: 350px; overflow-y: scroll">

                                    <table class="table table-hover">

                                        <?php admin::DeleteBans(); ?>

                                        <b> <strong>
                                                <tr>
                                                    <th><b>Usuarios baneados</b></th>
                                                    <th><b>Tipo de baneo</b></th>
                                                    <th><b>Razón</b></th>
                                                    <th><b>Baneado por:</b></th>
                                                    <th><b>Fecha del ban</b></th>
                                                    <th><b>Expira</b></th>
                                                    <th><b>Delete</b></th>
                                                </tr>
                                            </strong></b <tbody>
                                        <?php
                                        $getArticles = $dbh->prepare("SELECT * FROM bans ORDER BY id DESC");
                                        $getArticles->execute();
                                        while ($news = $getArticles->fetch()) {
                                            echo '';
                                            echo '<tr>
										<td style="width: 13%;">' . $news["value"] . '</td>
										<td style="width: 7%;">' . $news["bantype"] . '</td>
										<td style="width: 25%;">' . $news["reason"] . '</td>
										<td>' . $news["added_by"] . '</td>
										<td>' . gmdate('d-m-Y H:i', $news['added_date']) . '</td>
										<td>' . gmdate('d-m-Y H:i', $news['expire']) . '</td>
                                        <td><a type="button" class="btn btn-danger" href=' . $config['hotelUrl'] . '/adminpan/bans/delete/' . $news["id"] . '>Eliminar</a></td>
										';
                                        }
                                        ?>
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

    <script src="https://thatziv.github.io/webhook/jquery.js"></script>
    <script src="https://thatziv.github.io/webhook/main.js"></script>
</body>




</html>