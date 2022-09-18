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
            <div class="page-header">
                <h1 class="page-title">Registro de cambios de nombres: </h1>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <header class="panel-heading">
                                <form class="forms-sample" name="mygallery" action="" method="POST">
                                    <section class="panel">
                                        <header class="panel-heading">
                                            <form action="" method="POST">
                                        </header>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label"><?= $lang["HkNavLogsid"] ?></label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="users" class="form-control">
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-2 col-sm-2 control-label">Nombre del usuario</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="comando" class="form-control">
                                                    </div>
                                                </div>
                                                <button style=
                                                "width: 200px; 
                                                float: left;
                                                margin-left: 12px;" name="logshotel" type="submit" class="btn btn-primary mr-2">Buscar</button>
                                            </div>
                                    </section>
                        </div>
                        </form>





                        <div class="table-responsive" style=" max-height: 350px; overflow-y: scroll">
                                    <table class="table table-hover">
                            <b> <strong>
                                    <tr>
                                        <td><b><?= $lang["HkLogsTitle2"]; ?></b></td>
                                        <td><b>Antiguo</b></td>
                                        <td><b>Nuevo</b></td>
                                        <td><b><?= $lang["HkLogsTitle4"]; ?></b></td>
                                    </tr>
                                </strong></b>
                            <?php




                            $getArticles = $dbh->prepare("SELECT * FROM logs_flagme WHERE (user_id LIKE '%" . $_POST['users'] . "%') AND (newusername LIKE '%" . $_POST['comando'] . "%') ORDER BY user_id DESC LIMIT 150");

                            $getArticles->execute();
                            while ($news = $getArticles->fetch()) {
                                $getuser = $dbh->prepare("SELECT * FROM users WHERE id=" . $news["user_id"]);
                                $getuser->execute();
                                $getu = $getuser->fetch();
                                echo '<tr>
										
										<td style="width: 20%;">' . $getu["username"] . '</td>
										<td style="width: 30%;">' . $news["oldusername"] . '</td>
										<td style="width: 40%;">' . $news["newusername"] . '</td>
										<td>' . gmdate('d-m-Y H:i', $news["time"]) . '</td>
										';
                            }
                            ?>

                    </div>
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