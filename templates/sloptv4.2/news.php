<?php
	$menu="me";
	include_once 'templantes/header.php';
?>
<style>
.errorSucces { background: #4c4c4c; padding: 10px; margin-bottom: 10px;}
.error{z-index: 9;position: inherit;margin-top: 0;margin-left: 0;}}
</style>
                        <div style="margin-top: 100px;">
<div style="margin-top:60px; z-index: 33;">

	
		
		<?php
		
			if (empty($_GET['id']))
			{
				header("Location:/");
			}
			else
			{
				if (!is_numeric($_GET['id']))
				{
				header("Location:/");
				}
				$news = $dbh->prepare("SELECT * FROM cms_news WHERE id = :newsid");
				$news->bindParam(':newsid', $_GET['id']);
				$news->execute();
				if ($news->RowCount() == 1)
				{
					while ($news2 = $news->fetch())
					{
					    $getMessageUser = $dbh->prepare("SELECT id,username,look FROM users WHERE id = :id");
						$getMessageUser->bindParam(':id', $news2['author']);
						$getMessageUser->execute();
						$user = $getMessageUser->fetch();
						echo'					 
						
            <div class="card shadow" style=" max-width: 100%; "> 
        <div class="card-header bg-bris">
           '.filter($news2["title"]).'
            <div class="float-right"><div class="avatar rounded-0 bg-transparent" style="background-image:url('.$config['lookUrl'].''. filter($user['look']) .'&amp;size=b&amp;direction=3&amp;head_direction=2);width: 63px;height: 59px;position: absolute;margin-left: -70px;margin-top: -30px;"></div>'.$lang["newspubli"].' '. filter($user['username']) .' '.$lang["newspubli2"].' '.filter(gmdate("d-m-y", $news2["date"])).'</div>
        </div>
        <div class="card-body">
'.html_entity_decode($news2['longstory']).'

        </div>
    </div>
	
	

	
				';
					}
				}
				else
				{
					header("Location:/");
				}
			}
		?>
	
		
            </div>
        </div>
    </div>
</body>

</html>