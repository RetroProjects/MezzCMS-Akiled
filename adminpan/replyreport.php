<!DOCTYPE html>
<html lang="en">

    <?php
        include_once "includes/head.php";
        admin::CheckRank(19);
    ?>

<body>

    <?php
        include_once "includes/navi.php";
        include_once "includes/header.php";
    ?>


    <div class="main-panel">
        <div class="content-wrapper">

        <?php if (admin::ViewReport("state") == "Abierto" || admin::ViewReport("state") == "Tratamiento" || admin::ViewReport("state") == "") { ?>

            <div class="page-header">
                <h1 class="page-title">Ver Report: <?php echo admin::ViewReport("title"); ?></h1>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <?php
                                admin::ViewReport("id");
                                admin::ViewReportNewQuestion("id");
                            ?>

                            <input id="icon_prefix" type="hidden" value="<?php echo admin::ViewReport("id"); ?>" name="naam" class="form-control">

                            <div class="form-group">
                                <label for="exampleInputName1"><b>ID do Report:</b> <?php echo admin::ViewReport("id"); ?></label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail3"><b>Nome do Report:</b> <?php echo admin::ViewReport("title"); ?></label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword4"><b>Categoria de Report:</b></label>
                                <label for="exampleInputPassword4"><?php echo admin::ViewReport("category"); ?></label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword4"><b>Problema:</b></label><br>
                                <label for="exampleInputPassword4"><?php echo admin::ViewReport("problem"); ?></label>
                            </div>
                            
                            <hr style="color: white; border: solid 1px;">

                            <?php
                                $idpage = $_GET['id'];
                                $getArticles = $dbh->prepare("SELECT * FROM cms_reports_newquestion WHERE report_id = $idpage");
                                $getArticles->execute();
                                    while ($news = $getArticles->fetch()) {
                            ?>

                                <div class="form-group">
                                    <label for="exampleInputPassword4"><b>Nueva pregunta:</b></label><br>
                                    <label for="exampleInputPassword4"><?php echo $news['question']; ?></label>
                                </div>

                            <?php } ?>

                        </div>
                    </div>
                </div>


                <div class="col-lg-5 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <form class="forms-sample" name="mygallery" action="" method="POST">

                                <?php admin::ReplyReport("id"); ?>

                                <p><b style="color: #c70707;">Importante:</b> Si el problema está resuelto cámbialo a cerrado, si aún tienes algo pendiente déjalo en tratamiento.</p>

                                <div class="form-group">
                                    <label for="exampleInputPassword4"><b>Resposta ao Usuário:</b></label><br>
                                    <textarea name="reply" for="exampleInputPassword4" style="width: 335px; height: 100px;  background-color: #2a3038; color: white;"></textarea>
                                </div>

                                <input type="hidden" id="content" name="report_id" value="<?php echo admin::ViewReport("id") ?>">
                                <input type="hidden" id="content" name="staff" value="<?php echo User::userData("username") ?>">

                                <button id="btn" name="postreply" type="submit" class="btn btn-primary mr-2">Guardar</button>
                            </form>

                            <br>

                            <form class="forms-sample" name="mygallery" action="" method="POST">
                                <?php admin::ChangeStatusReport("id"); ?>
                                <div class="form-group">
                                    <label for="exampleInputPassword4"><b>Status:</b></label>
                                    <select name="state" class="form-control" style="color: white;">
                                        <option name="state" value="Abierto" <?php echo admin::ViewReport("state")=='Abierto'?'selected':'';?>>Abierto</option>
                                        <option name="state" value="Cerrado" <?php echo admin::ViewReport("state")=='Cerrado'?'selected':'';?>>Cerrado</option>
                                        <option name="state" value="Tratamiento" <?php echo admin::ViewReport("state")=='Tratamiento'?'selected':'';?>>Tratamiento</option>
                                    </select>
                                </div>

                                <input type="hidden" id="content" name="staff" value="<?php echo User::userData("username") ?>">

                                <button id="btn" name="statusreport" type="submit" class="btn btn-primary mr-2">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>

                <?php } else { ?>

                    <div class="page-header">
                        <div class="form-group">
                            <label for="exampleInputName1">¡Este ticket ya ha sido cerrado o no existe!</label>
                        </div>
                    </div>

                <?php } ?>

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