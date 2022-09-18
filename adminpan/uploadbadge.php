<!DOCTYPE html>
<html lang="en">
<?php
include_once "includes/head.php";

admin::CheckRank(13);
?>

<body>

    <?php
    include_once "includes/navi.php";
    include_once "includes/header.php";

    ?>

    <?php

    $letras = substr(str_shuffle("QWERTYUIOPASDFGHJKLZXCVBNM"), 0, 3);
    $cont = $config['badgescont'];
    $codigo = 'BG' . $letras . $cont;

    if (isset($_POST['submit'])) {
        $filename = $_FILES["file"]["name"];
        $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
        $file_ext = substr($filename, strripos($filename, '.')); // get file name
        $filesize = $_FILES["file"]["size"];
        $allowed_file_types = array('.gif');

        if (in_array($file_ext, $allowed_file_types) && ($filesize < 200000)) {
            // Rename file
            $newfilename = $codigo . $file_ext;
            if (file_exists("../../swfs/c_images/album1584/" . $newfilename)) {
                // file already exists error
                echo "Alparecer ya existe una placa con el codigo generado";
            } else {
                move_uploaded_file($_FILES["file"]["tmp_name"], "../../swfs/c_images/album1584/" . $newfilename);
                echo "Tu codigo de placa es: " . $codigo;
                $postpublics = $dbh->prepare("
					INSERT INTO swf_badges(clave,name,description,autor)
					VALUES
					(
					:clave,
					:name,
					:description, 
					:autor)");
                $postpublics->bindParam(':clave', $codigo);
                $postpublics->bindParam(':name', $_POST['name']);
                $postpublics->bindParam(':description', $_POST['desc']);
                $postpublics->bindParam(':autor', User::userData('username'));
                $postpublics->execute();
                $myFile = "../../swfs/gamedata/texts.txt";
                $fh = fopen($myFile, 'a') or die("File not found.");
                $strings = "badge_name_" . $codigo . "=" . $_POST['name'] . "";
                $string = "badge_desc_" . $codigo . "=" . $_POST['desc'] . "";
                fwrite($fh, "\r" . nl2br($strings) . "\r\n" . nl2br($string));
                fclose($fh);
                $ContAu = $cont + 1;
                $UpdateCont = $dbh->prepare("UPDATE slopt_cms SET 
				badges=:badges");
                $UpdateCont->bindParam(':badges', $ContAu);
                $UpdateCont->execute();
            }
        } elseif (empty($file_basename)) {
            // file selection error
            echo "Por favor seleccione una placa para cargar.";
        } elseif ($filesize > 200000) {
            // file size error
            echo "La placa que estas intentando cargar es demasiado grande.";
        } else {
            // file type error
            echo "Solo estos tipos de archivos están permitidos para cargar: " . implode(', ', $allowed_file_types);
            unlink($_FILES["file"]["tmp_name"]);
        }
    }

    ?>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Subir Placas</h4>
                            <p class="card-description"> Herramienta para subir una placa al hotel</p>
                            <form enctype="multipart/form-data" class="forms-sample" form name="mygallery" action="" method="POST">
                                <div class="form-group">
                                    <label for="icon_prefix">Titulo de la placa</label>
                                    <input type="text" name="name" value="" class="form-control" id="exampleInputUsername1">

                                </div>
                                <div class="form-group">
                                    <label for="icon_prefix">Descripción de la placa</label>
                                    <input id="icon_prefix" type="text" name="desc" class="form-control" id="exampleInputUsername1">

                                </div>
                                <div class="form-group">
                                    <input id="file" name="file" id="my-file" type="file" required class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled placeholder="Seleciona una placa">

                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button">Selecionar</button>
                                        </span>
                                    </div>
                                </div>

                                <input type='hidden' id="link" value="">
                                <input type="hidden" id="username" value="Seguridad P&h Placas">
                                <inpiut type="hidden" id="avatar" value="https://cdn.discordapp.com/icons/770010766379581461/c8bb8c81b6cb95d68756c9e547556ff4.png?size=128">
                                    <input type="hidden" id="content" value=":warning: <?php echo User::userData('username'); ?>: ha subido una placa por HK  --- Hotel: <?php echo $config['hotelName']; ?> --- :warning: ">


                                    <button class="btn btn-sm btn-primary" id="btn" name="submit" type="submit" value="Subir">Subir placa
                                    </button>

                            </form>
                        </div>
                    </div>
                </div>            

            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Placas</h4>
                        <p class="card-description"> Lista de placas subidas por staffs</p>
                        <div class="table-responsive ">
                            <table class=" table-condensed table" id="tableprueba" style="background:#191c24">
                                <thead>


                                    <?php
                                    $getArticles = $dbh->prepare("SELECT * FROM swf_badges ORDER BY id DESC");
                                    $getArticles->execute();
                                    echo ' <tr>
										<th><b>ID</b></th>
										<th><b>Codigo</b></th>
										<th><b>Nombre</b></th>
										<th><b>Placa</b></th>
										<th><b>Subida por:</b></th>
										</tr>
										 </thead>
										 <tbody>
										';
                                    while ($news = $getArticles->fetch()) {
                                        echo '<tr  style="color:#6c7293; background:#191c24">
										<td>' . $news["id"] . '</td>
										<td>' . $news["clave"] . '</td>
										<td>' . $news["name"] . '</td>
										<td><img src="' . $config['badgeURL'] . '' . $news["clave"] . '.gif"></td>
										<td>' . $news["autor"] . '</td>
										</tr>
										';
                                    }
                                    ?>

                                    </tbody>
                            </table>
                        </div>
                    </div>
                    </section>
                </div>
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
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
        <script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#tableprueba').DataTable();
            });
        </script>


</body>


</html>