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
            <h4 class="card-title">Reportes del hotel</h4>
            <p class="card-description"> <code>(Solo es posible atender llamadas que están Abiertas o En Proceso.)</code></p>

            <?php admin::DeleteReport(); ?>

            

            <div class="table-responsive " style=" max-height: 600px; overflow-y: scroll">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>State</th>
                    <th>Author</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>

                <?php
                  $getArticles = $dbh->prepare("SELECT * FROM cms_reports WHERE state = 'closed' ORDER BY id DESC");
                  $getArticles->execute();
                    while ($news = $getArticles->fetch()) {
                ?>

                <tbody>

                    <tr>
                      <td><?=filter($news["id"])?></td>
                      <td><?=filter($news["title"])?></td>
                      <td><?=filter($news["category"])?></td>
                      <td><?=filter($news["state"])?></td>
                      <td><?=filter($news["author"])?></td>

                      <?php if (User::userData('rank') > '10') { ?>

                      <?php
                        if ($news["state"] == "open" || $news["state"] == "treatment") {
                      ?>

                      <td>
                        <a type="button" class="btn btn-primary"  href="/adminpan/replyreport/<?=$news["id"]?>">Editar</a>
                      </td>

                      <?php } else { ?>

                        <td>
                          <a type="button" class="btn btn-secondary">Inaccesible</a>
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

    <?php
      include_once "includes/footer.php";
    ?>

</body>

</html>