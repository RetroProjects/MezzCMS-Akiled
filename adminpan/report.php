<!DOCTYPE html>
<html lang="en">
<?php
  include_once "includes/head.php";
  $_SESSION['title'] = '';
  $_SESSION['slogan'] = '';
  $_SESSION['news'] = '';
  admin::CheckRank(13);
?>

<body>

  <?php
    include_once "includes/navi.php";
    include_once "includes/header.php";
  ?>

  <div class="main-panel">
    <div class="content-wrapper">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Reportes Abiertos y en Tratamiento</h4>
            <p class="card-description"> <code>(Responda las llamadas a continuación si no tiene staff respondiendo.)</code></p>

            <?php admin::DeleteReport(); ?>

            

            <div class="table-responsive " style=" max-height: 600px; overflow-y: scroll">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Categoría</th>
                    <th>Estado</th>
                    <th>Autor</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>

                <?php
                  $getArticles = $dbh->prepare("SELECT * FROM cms_reports WHERE state = 'Abierto' OR state = 'Tratamiento' ORDER BY id DESC");
                  $getArticles->execute();
                    while ($news = $getArticles->fetch()) {
                ?>

                <tbody>

                    <tr>
                      <td><?=filter($news["id"])?></td>
                      <td><?=filter($news["title"])?></td>
                      <td><?=filter($news["category"])?></td>
                      <?php if($news["state"] == 'Abierto') { ?>
                      <td style="color: green;"><?=filter($news["state"])?></td>
                      <?php } else { ?>
                      <td style="color: orange;"><?=filter($news["state"])?></td>
                      <?php } ?>
                      <td><?=filter($news["author"])?></td>

                      <?php if (User::userData('rank') > '10') { ?>

                      <?php
                        if ($news["state"] == "Abierto" || $news["state"] == "Tratamiento" || $news["state"] == "" ) {
                      ?>

                      <td>
                        <a type="button" class="btn btn-primary"  href="/adminpan/replyreport/<?=$news["id"]?>">Editar</a>
                      </td>

                      <?php } else { ?>

                        <td>
                          <a type="button" class="btn btn-info" href="/adminpan/viewreportclosed/<?=$news["id"]?>">Para ver</a>
                        </td>

                      <?php } ?>

                      <td>
                        <a type="button" class="btn btn-danger"  href="/adminpan/report/delete/<?=$news["id"]?>">Eliminar</a>
                      </td>
                  </tr>

                  <?php } } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="content-wrapper">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Reportes Cerrados</h4>
            <p class="card-description"> <code>(Reportes que ya han sido cerradas)</code></p>

            <?php admin::DeleteReport(); ?>

            

            <div class="table-responsive " style=" max-height: 600px; overflow-y: scroll">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Categoría</th>
                    <th>Estado</th>
                    <th>Autor</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>

                <?php
                  $getArticles = $dbh->prepare("SELECT * FROM cms_reports WHERE state = 'Cerrado' ORDER BY id DESC");
                  $getArticles->execute();
                    while ($news = $getArticles->fetch()) {
                ?>

                <tbody>

                    <tr>
                      <td><?=filter($news["id"])?></td>
                      <td><?=filter($news["title"])?></td>
                      <td><?=filter($news["category"])?></td>
                      <td style="color: #e71c1c;"><?=filter($news["state"])?></td>
                      <td><?=filter($news["author"])?></td>

                      <?php if (User::userData('rank') > '10') { ?>

                      <?php
                        if ($news["state"] == "Abierto" || $news["state"] == "Tratamiento" || $news["state"] == "" ) {
                      ?>

                      <td>
                        <a type="button" class="btn btn-primary"  href="/adminpan/replyreport/<?=$news["id"]?>">Editar</a>
                      </td>

                      <?php } else { ?>

                        <td>
                          <a type="button" class="btn btn-info" href="/adminpan/viewreportclosed/<?=$news["id"]?>">Para ver</a>
                        </td>

                      <?php } ?>

                      <td>
                        <a type="button" class="btn btn-danger"  href="/adminpan/report/delete/<?=$news["id"]?>">Eliminar</a>
                      </td>
                  </tr>

                  <?php } } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    <?php
      include_once "includes/footer.php";
    ?>

</body>

</html>