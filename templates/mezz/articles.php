<?php
$news_active = 'active';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/styles/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title><?= $config['hotelName'] ?>: <?= $lang["Nnews"] ?></title>
</head>

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
            <div class="page-content-max-width" style="flex-direction: column;align-items: flex-start;">
                <div class="page-content-collider-item">
                    <div class="page-content-collider-content news">
                        <div class="page-content-collider-content-news-left-side">
                            <h2 class="page-content-collider-content-news-left-side-title"><?= $lang["Nnews"] ?></h2>
                            <div class="page-content-collider-content-news-left-side-item">

                                <?php include_once("get/getMonths.php"); ?>

                            </div>
                        </div>

                        <div class="page-content-collider-content-news-right-side">
                            <div class="page-content-collider-content-news-right-side-content">

                                <?php
                                if (empty($_GET['id'])) {
                                ?>

                                    <h2 class="page-content-collider-content-news-right-side-content-title"><?= $lang["Nnotfoundheader"] ?> »</h2>
                                    <p><?= $lang["Nnotfoundtxt"] ?></p>

                                    <?php
                                } else {
                                    if (!is_numeric($_GET['id'])) {
                                        exit('Nothing!');
                                    }

                                    $news = $dbh->prepare("SELECT id,title,shortstory, longstory FROM cms_news WHERE id = :newsid");
                                    $news->bindParam(':newsid', $_GET['id']);
                                    $news->execute();
                                    $user = $dbh->prepare("SELECT * FROM users JOIN cms_news ON users.username = cms_news.author");
                                    $user->execute();

                                    $user2 = $user->fetch();
                                    if ($news->RowCount() == 1) {
                                        while ($news2 = $news->fetch()) {
                                    ?>
                                            <h2 class="page-content-collider-content-news-right-side-content-title"> <?php echo filter($news2["title"]); ?>
                                            </h2>

                                            <p><b><?php echo html_entity_decode($news2['shortstory']); ?></b></p>
                                            <p><?php echo html_entity_decode($news2['longstory']); ?></p>

                                            <div class="page-content-collider-content-news-right-side-content-article-author">
                                                <span class="page-content-collider-content-news-right-side-content-article-author-figure" style="background-image: url(<?php echo $config['AvatarURL'] ?><?php echo filter($user2["look"]) ?>&action=std&direction=2&head_direction=3&img_format=undefined&gesture=sml&headonly=0&size=b);">
                                                </span>

                                                <a href="/profile/<?php echo filter($user2["username"]); ?>" class="page-content-collider-content-news-right-side-content-article-author-username">
                                                    <?php echo filter($user2["username"]); ?>
                                                </a>
                                                <p style="margin-left: 440px; margin-top: 30px; font-weight: bold;">
                                                    <?php echo date('d/m/Y', $user2["date"]) ?>
                                                </p>
                                            </div>

                                        <?php
                                        }
                                    } else {
                                        ?>

                                        <h2 class="page-content-collider-content-news-right-side-content-title"><?= $lang["Nnotfoundheader"] ?> »</h2>

                                        <p><?= $lang["Nnotfoundtxt"] ?></p>

                                <?php
                                    }
                                }
                                ?>
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