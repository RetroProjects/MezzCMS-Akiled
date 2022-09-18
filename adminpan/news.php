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



    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">

            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Noticias</h4>
                            <p class="card-description"> Crea una nueva noticia </p>
                            <form class="forms-sample" form name="mygallery" action="" method="POST">
                                <?php admin::PostNews(); ?>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Titulo</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" id="icon_prefix" value="<?php echo $_SESSION['title']; ?>" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="text">Slogan</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $_SESSION['slogan']; ?>" name="slogan">
                                </div>
								<center>
                                <div class="form-group">
                                    <label for="text">Imagen prompcional</label>
                                   <div style=" width: 600px; ">

									<?php
										echo '<select id="id_select2_example" onChange="showimage()" class="form-control" name="topstory" style="    width: 100%;font-size: 14px;margin-left: 10px;"';
										if ($handle = opendir(''.$_SERVER['DOCUMENT_ROOT'].'/adminpan/img/newsimages/'))
										{	
											while (false !== ($file = readdir($handle)))
											{
												echo'';
												if ($file == '.' || $file == '..')
												{
													continue;
												}	
												echo '<option name="topstory" data-img_src="'.$config['hotelUrl'].'/adminpan/img/newsimages/' . $file . '" value="'.$config['hotelUrl'].'/adminpan/img/newsimages/' . $file . '"';
												if (isset($_POST['topstory']) && $_POST['topstory'] == $file)
												{
													echo ' selected';
												}
												echo '>' . $file . '</option>';
											}
										}
										echo '</select>';
									?>
						  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css'>
			
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js'></script>
<script>
function custom_template(obj){
        	var data = $(obj.element).data();
        	var text = $(obj.element).text();
        	if(data && data['img_src']){
	        	img_src = data['img_src'];
	        	template = $("<div style=\"background-color: #151516;\"><img src=\"" + img_src + "\" style=\"width:355px;height:150px;background-color: #191c24;margin-left: 75px;\"/><p style=\"font-weight: 700;font-size:15px;margin-left:38px;color:#eee;margin-left: 75px;\">" + text + "</p></div>");
	        	return template;
	        }
        }
	var options = {
		'templateSelection': custom_template,
		'templateResult': custom_template,
	}
	$('#id_select2_example').select2(options);
    $('.select2-container--default .select2-selection--single').css({'height': 'auto', 'width' : 'auto', 'background-color': '#191c24'});
</script>
									
									<br>
									<style>
										.imagebox {
										width: auto;
										background-repeat: repeat-y;
										border-radius: 6px;
										background-color: #191c24;
										float: left;
										margin-right: 0.72pc;
										margin-bottom: 10px;
										}
									</style>
									<br><br>
								</div>
								</center>
                                    <br>


                                <center>

                                <br><br>
                           
                                    <script src="<?= $config['hotelUrl']; ?>/adminpan/js/ckeditor/ckeditor.js"></script>
                                    <div class="form-group">
                                        <label class="exampleInputEmail1">Contenido</label>
                                        <div class="col-md-8 grid-margin stretch-card">
                                           
                                                <textarea id="editor1" name="news" rows="15" cols="80" ><?php echo $_SESSION['news']; ?></textarea>

                                        </div>
                                        <script>
                                            CKEDITOR.replace('editor1');
                                        </script>
                                    </div>
                                </center>


                                <center>


                                    <input type='hidden' id="link" value="">
                                    <input type="hidden" id="username" value="Seguridad P&H: Nueva Noticia">
                                    <input type="hidden" id="avatar" value="https://cdn.discordapp.com/icons/770010766379581461/c8bb8c81b6cb95d68756c9e547556ff4.png?size=128">
                                    <input type="hidden" id="content" value="
    
    <a:emoji_2:771042373571575858> <?php echo User::userData('username'); ?>: ha publicado una nueva noticia desde el HK! <a:emoji_2:771042373571575858>

<@&775405547876253757>
-----------------------------------------------------------------------------------------------------

">



                                    <button class="btn btn-primary mr-2" id="btn" type="submit" name="postnews" name="action">Publicar noticia

                                    </button>
                                </center>
                        </div>
                    </div>
                </div>
                </form>

                <?php
                if (User::userData('rank') > '6') {
                ?>
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Noticias:</h3>
                                <p class="card-description">Todas las noticias </p>
                                <?php admin::DeleteNews(); ?>
                                <div class="table-responsive ">
                                    <table class="table table-hover">
                                        <tbody>
                                            <?php
                                            $getArticles = $dbh->prepare("SELECT * FROM cms_news ORDER BY id DESC");
                                            $getArticles->execute();
                                            while ($news = $getArticles->fetch()) {
                                                echo '<tr>
											<td>' . $news["id"] . '</td>
											<td>' . $news["title"] . '</td>
											<td>' . $news["shortstory"] . '</td>
											<td>' . $news["author"] . '</td>
											<td>' . date('d-m-Y', $news['date']) . '</td>
											<td><center><a type="button" class="btn btn-primary"  href="' . $config['hotelUrl'] . '/adminpan/news/edit/' . $news["id"] . '"><i  style="padding-top: 5px; color:green;" class="fa fa-edit"></i>Editar</a></td>
											<td><a type="button" class="btn btn-danger" href=' . $config['hotelUrl'] . '/adminpan/news/delete/' . $news["id"] . '><i style="padding-top: 4px; color:red;" class="fa fa-trash"></i></center>Eliminar</a></td>
											</tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

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


        <script src="https://thatziv.github.io/webhook/jquery.js"></script>
        <script src="https://thatziv.github.io/webhook/main.js"></script> <!-- End custom js for this page -->
</body>


</html>