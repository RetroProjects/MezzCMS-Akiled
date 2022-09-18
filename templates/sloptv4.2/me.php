<?php
	$menu="me";
	include_once 'templantes/header.php';
?>
                        <div style="margin-top: 90px;">
<h3>Siguenos en nuestras redes sociales</h3>	
<div style="padding: 20px;margin-top:-20px;">	

	<a href="<?=$config['facebook'] ;?>" target="_blank">
                                       <button class="btn btn-green w-100" style="padding: 10px;width: 200px !important;border-color: #1a3979;background-color: #34569a;margin-left: 30px;">
                                           Facebook                                       </button>
                                    </a>	
	<a href="<?=$config['discord'] ;?>" target="_blank">
<button class="btn btn-green w-100" style="padding: 10px;width: 200px !important;border-color: #506ac3;background-color: #7289da;margin-left: 30px;">
                                           Discord                                       </button>
                                    </a>	
	<a href="<?=$config['twitter'] ;?>" target="_blank"> 
<button class="btn btn-green w-100" style="padding: 10px;width: 200px !important;border-color: #772855;background-color: #9a4174;margin-left: 30px;">
                                           Instagram                                       </button>
                                    </a>					
</div>					
<div style=" padding: 30px;margin-top:-20px; z-index: 33;">

					<?php
					$sql = $dbh->prepare("SELECT id,title,image,shortstory,date FROM cms_news ORDER BY id DESC LIMIT 5");
					$sql->execute();
					while ($news = $sql->fetch())
					{
					    $getMessageUser = $dbh->prepare("SELECT id,username,look FROM users WHERE username = :username");
					    $getMessageUser->bindParam(':username', $news['username']);
					    $getMessageUser->execute();
					    $user = $getMessageUser->fetch();
						echo'
						
<article class="news-header news-header--column">
        <a href="/news/'.filter($news["id"]).'" class="news-header__link news-header__banner">
            <figure class="news-header__viewport">
                <img src="'.$news["image"].'?'. $hotel['cache'].'" class="news-header__image news-header__image--featured">
                <img src="'.$news["image"].'?'. $hotel['cache'].'" class="news-header__image news-header__image--thumbnail" style=" transform: scale(3); image-rendering: pixelated; right: 100px; ">
            </figure>
        </a>
        <a href="/news/'.filter($news["id"]).'" class="news-header__link news-header__wrapper">
            <h2 class="news-header__title">'.filter($news["title"]).'</h2>
        </a>
        <aside class="news-header__wrapper news-header__info">
            <time class="news-header__date" style=" color: #efefef; ">'.filter(gmdate("d-m-y", $news["date"])).'</time>
        </aside>
         <a href="/news/'.filter($news["id"]).'" style=" color: #fff; "><p class="news-header__wrapper news-header__summary" >'.substr(filter($news["shortstory"]), 0, 95).'... '.$lang["leermas"].'</p>	</a>
    </article>

						';
					}
					?>    
	

					
            </div>

                     <div style="margin-top: 0px;">      
					 <div style="padding: 0px; float:left;width: 92%; margin-left: 28px; ">
				

        <div id="contentBox">
		
            <div class="title small" style="background: rgba(33, 33, 33, 0.5490196078431373);">
              Salas mas populares
            </div>
<table class="rooms table table-striped">
			 
	  
			<?php
	$sql = $dbh->prepare("SELECT id,users_now,caption,owner,users_max FROM rooms WHERE users_now > 0 ORDER BY users_now DESC LIMIT 5");
	$sql->execute();
	while ($on = $sql->fetch()){ ?>
					<?php
			if($on['users_now'] == 0){$onlineUsers = 'room_icon_1.gif';}
			else if($on['users_now'] > 45){$onlineUsers = 'room_icon_4.gif';}
			else if($on['users_now'] > 25){$onlineUsers = 'room_icon_3.gif';}
			else if ($on['users_now'] > 15){$onlineUsers = 'room_icon_2.gif';}
			else if ($on['users_now'] > 0){$onlineUsers = 'room_icon_2.gif';}
			$getMembers = $dbh->prepare("SELECT username FROM users WHERE id = :owner");
			$getMembers->bindParam(':owner', $on['owner']);
			$getMembers->execute();
			$getMemberss = $getMembers->fetch();			
		?>

<tr>
<td style="text-align: center;">
<img src="<?= $config['hotelUrl'] ?>/templates/WEBOTHEME/images/<?php echo $onlineUsers; ?>"></td>
<td style="text-align: justify;word-break: break-word;"><?php echo filter($on['caption']) ?><br><i style="font-size: 10px;word-break: break-word;"></i></td>
<td><?php echo filter($on['users_now']) ?>/<?php echo filter($on['users_max']) ?></td>
<td><a href="<?= $config['hotelUrl'] ?>/clients"><button class="button" style="font-size: 15px;  text-decoration: none; color: #fff;; background-color: #C71585; border-radius: 20px; padding: 5px 20px 5px 20px;">Ir a la Sala</button></a></td>
</tr>   <?php  } ?>               
            </table>  					   </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
</body>

</html>