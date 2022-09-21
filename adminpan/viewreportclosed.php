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

        <?php if (admin::ViewReport("state") == "Cerrado") { ?>

            <div class="row" style="justify-content: center;">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <?php
                                admin::ViewReport("id");
                                admin::ViewReplyReport("report_id");
                                admin::ViewReportNewQuestion("id");

                                $timestamp = date('d-m-Y', admin::ViewReport("time"));
                            ?>

                            <input id="icon_prefix" type="hidden" value="<?php echo admin::ViewReport("id"); ?>" name="naam" class="form-control">

                            <div class="form-group">
                                <label for="exampleInputName1" style="font-size: 20px;"><b>ID do Report:</b> <?php echo admin::ViewReport("id"); ?></label>
                            </div>

                            <hr style="border: solid 1px; color: white;">

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

                            <?php
                                $idpage = $_GET['id'];
                                $getArticles = $dbh->prepare("SELECT * FROM cms_reports_newquestion WHERE report_id = $idpage");
                                $getArticles->execute();
                                    while ($news = $getArticles->fetch()) {
                            ?>

                            <div class="form-group">
                                <label for="exampleInputPassword4"><b>Segunda pergunta:</b></label><br>
                                <label for="exampleInputPassword4"><?php echo $news["question"]; ?></label>
                            </div>

                            <?php } ?>

                            <hr style="border: solid 1px; color: white;">

                            <div class="form-group">
                                <label for="exampleInputPassword4"><b>Solução:</b></label><br>
                                <label for="exampleInputPassword4"><?php echo admin::ViewReplyReport("reply"); ?></label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail3"><b>Staff do Report:</b> <?php echo admin::ViewReport("staff"); ?></label>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail3"><b>Data do Report:</b> <?php echo $timestamp; ?></label>
                            </div>

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