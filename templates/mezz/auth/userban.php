<?php 
  if (loggedIn()) {
    $user = User::userData('username');
  }
  else {
    $user = null;
  }

  $banQuery = $dbh->prepare("SELECT * FROM bans WHERE (bantype = 'user' && value = :user) OR (bantype = 'ip' && value = '".userIp()."')");
  $banQuery->bindParam(':user', $user); 
  $banQuery->execute(); 

  while($banInfo = $banQuery->fetch()) {
?>

<div class="page-content-collider-content not-found">
	<span class="page-content-collider-content-not-found-image-banned"></span>
	<h3 class="page-content-collider-content-not-found-title"><?= $lang["Bblockked"] ?></h3>
	<p class="page-content-collider-content-not-found-text"><?=$lang["Bvisitor"]?></p>
  <br>
  <p class="page-content-collider-content-not-found-text"><b><?=$lang["Brazon"]?></b> <?= $banInfo['reason']; ?></p>
  <p class="page-content-collider-content-not-found-text"><b><?=$lang["Bexpire"]?></b> <?php echo gmdate("d-m-Y H:i", $banInfo['expire']); ?></p>
</div>

<?php 			
  if ($banInfo['expire'] <= strtotime('now')) {
    echo'<center>Su prohibición ha expirado</center>';
  }
  else {
    echo'<center>Su prohibición no ha expirado</center>';
  }
?>


<?php
}
?>

<?php
  session_destroy();
  $_SESSION = array();
?>