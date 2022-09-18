 

 <link rel="stylesheet" href="/templates/<?= $config['skin']; ?>/assets/css/client.css?<?=$hotel['cache']; ?>" type="text/css">
	<?php if(User::userData('alertclient')==1)
	{
		$getuser = $dbh->prepare("SELECT * FROM slopt_cms");
		$getuser->execute();
		$getu = $getuser->fetch();
		?>
	<div class="ca1" style="background: rgba(22, 26, 34, 0.9); display: block;"><div class="ca2">
<div class="ca3">
<div style="background:url('/templates/<?= $config['skin']; ?>/assets/images/template.png?2');" class="ca4"></div>
<div class="ca5"><?=$lang["ClientAlerta1"];?></div>
<div class="ca6">
<?=$getu["alerta"];?></div>
<div onclick="closeCalendar()" class="ca19"></div>
</div>

</div></div>
<?php
			$sloptha = $dbh->prepare("UPDATE users SET alertclient=0 WHERE id=".User::userData('id'));
			$sloptha->execute();
	}
	?>