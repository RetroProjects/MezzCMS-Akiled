<?php
$report_active = 'active';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/styles/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title><?= $config['hotelName'] ?>: Reportes</title>
</head>
<Style>
.asdsucces {
    background-color: #0fbf0f;
    color: #d6ffff;
}
</style>


<body class="container">
    <script src="/assets/scripts/page-load.js"></script>
    <div class="page-content">
        <?php
        if (!isset($_SESSION['id'])) {
            include('auth/login.php');
        } else {
            include('auth/logged.php');
        }
        ?>

        <?php include_once('includes/menu.php'); ?>

        <div class="page-content-collider" style="background-color: transparent;">
            <div class="page-content-max-width">
                <div class="page-content-collider-item">
                    <div class="page-content-collider-content">
                        <div class="page-content-collider-content-settings">
                            <link rel="stylesheet" href="/templates/brain/style/css/main2.css?v=22" type="text/css">
                            <div class="page-content-collider-content-settings-right-side">
                                <div class="page-content-collider-content-settings-right-side-item">
                                    <div class="page-content-collider-content-settings-right-side-item-column">
                                        <fieldset class="form__fieldset form__fieldset--box" style="margin: 0;border-radius: 0px 0px 3px 3px;padding: 10px;margin-bottom: 20px;">
                                            <form method="POST">
                                                <div class="flex flex-6 has-margin">

                                                    <h1 class="page-content-collider-content-settings-right-side-item-title" style=" font-size: 18px; padding: 7px;"><a style="color: #008bb5;"><?= User::userData('username') ?> </a> - <?= $lang["sopporttitulo"] ?></h1>
                                                    <div style=" font-size: 16px; padding: 7px;float:right;margin-right:8% ;">
                                                        <?php
                                                        if (isset($_POST["enviar"])) {
                                                            if (!empty($_POST['mitema'])) {
                                                                if (!empty($_POST['comentario'])) {
                                                                    if ($_POST['category'] == "1") {
                                                                        $category = $lang["Scategory1"];
                                                                    } else {
                                                                        if ($_POST['category'] == "2") {
                                                                            $category = $lang["Scategory2"];
                                                                        }
                                                                    }
                                                                    if ($_POST['category'] == "3") {
                                                                        $category = $lang["Scategory3"];
                                                                    } else {
                                                                        if ($_POST['category'] == "4") {
                                                                            $category = $lang["Scategory4"];
                                                                        }
                                                                    }
                                                                    if ($_POST['category'] == "5") {
                                                                        $category = $lang["Scategory5"];
                                                                    } else {
                                                                        if ($_POST['category'] == "6") {
                                                                            $category = $lang["Scategory6"];
                                                                        }
                                                                    }
                                                                    if ($_POST['category'] == "7") {
                                                                        $category = $lang["Scategory7"];
                                                                    } else {
                                                                        if (($_POST['category'] >= "1") and ($_POST['category'] <= "7")) {
                                                                        } else {
                                                                            $category = $lang["Scategory"];
                                                                        }
                                                                    }
                                                                    $addcanjear = $dbh->prepare("INSERT cms_report VALUES ('','" . $_POST['mitema'] . "','" . $category . "','" . $_POST['comentario'] . "','" . User::userData('username') . "')");
                                                                    $addcanjear->execute();
                                                                    echo '<div class="asdsucces">' . $lang["Supsuccs"] . '</div>';
                                                                } else {
                                                                    echo "<div class='asd'>" . $lang["SupError1"] . "</div>";
                                                                }
                                                            } else {
                                                                echo "<div class='asd'>" . $lang["SupError2"] . "</div>";
                                                            }
                                                        }

                                                        ?>


                                                        <a style="font-size:100%;;">*<b><?= $lang["sopportdec"] ?></b> <?= $lang["sopportdec2"] ?> </a>
                                                        <br><br>
                                                        <div id="supporterreur"></div>
                                                        <input type="text" id="sujetTitle" name="mitema" placeholder="<?= $lang["supmitema"] ?>" class="page-content-collider-content-settings-right-side-item-input" style="width:calc(100% - 25px);font-size: 20px; ">

                                                        <div id="indexformsepare"></div>
                                                        <select id="category" name="category" class="page-content-collider-content-settings-right-side-item-input" style="width:96%;font-size: 20px;color:#696969;">
                                                            <option value="1"><?= $lang["Scategory1"]; ?></option>
                                                            <option value="2"><?= $lang["Scategory2"]; ?></option>
                                                            <option value="3"><?= $lang["Scategory3"] ?></option>
                                                            <option value="4"><?= $lang["Scategory4"] ?></option>
                                                            <option value="5"><?= $lang["Scategory5"] ?></option>
                                                            <option value="6"><?= $lang["Scategory6"] ?></option>
                                                            <option value="7"><?= $lang["Scategory7"] ?></option>
                                                        </select>
                                                        <textarea name="comentario" id="editeur" style="width:calc(100% - 20px);left:0px;height:auto;min-height:90px;background:rgb(245,245,245);color:#696969;" placeholder="Escribe aqui los detalles del reporte" contenteditable="" type="text" class="page-content-collider-content-settings-right-side-item-input"></textarea>
                                                        <div id="btn"></div>
                                                        <button style="float: right;margin-right: 14px;margin-top: 40px;" name="enviar" type="submit" class="page-content-collider-content-settings-right-side-default-button fill save"><?= $lang["bottonSup"] ?></button>
                                            </form>

                                            </div>
                                            </div>
                                 
                        </div>
                    <div class="page-content-collider-content-fansites-right-side">
                        <img src="/assets/images/report/highscore_small_promo.gif" alt="Fansites" class="page-content-collider-content-fansites-right-side-image">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
                              
                         
                    </div>

    <?php include_once('includes/footer.php'); ?>
    </div>
    <script src="/assets/scripts/app.js"></script>
</body>

</html>