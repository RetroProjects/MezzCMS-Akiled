<?php
	$menu="community";
	include_once 'templantes/header.php';
?>
                        <div style="margin-top: 100px;">
<div style="margin-top:60px; z-index: 33;">
           <h1 class="photos__header__title"><?=$lang["title2photo"];?></h1>
		   <p translate="PHOTOS_DESCRIPTION"><?=$lang["titlephoto"];?></p>
									<?php 
								$belcr_get2 = $dbh->prepare("SELECT * from user_photos ORDER BY time DESC LIMIT 12");
									$belcr_get2->execute();
									while ($belcr_row2 = $belcr_get2->fetch())
									{
										$belcr_get = $dbh->prepare("SELECT * from users WHERE id = :id");
										$belcr_get->bindParam(':id', $belcr_row2['user_id']);
										$belcr_get->execute();
										$belcr_row = $belcr_get->fetch();
										?>
										
																   
							   <div style="float:left;width: 240px;margin: 10px;box-shadow: 0 1px 2px rgba(0,0,0,.3);border: 3px solid rgba(37, 37, 37, 0.68);">
                                    <div class="card-img-top" style="background: url('<?=$config['roomphotos'];?><?=$belcr_row2['photo'];?>.png') bottom no-repeat;height: 250px;">
                                            <div class="badge badge-circle bg-white p-4" style="width: 60px;height: 60px;margin: 10px;background: rgba(34, 34, 34, 0.61)!important;border-radius: 60px;"><img src="<?= $config['lookUrl'];?><?=$belcr_row['look']?>&amp;headonly=1" style="margin-left: -20px;margin-top: -28px;"></div>
                                    </div>
                                    <div class="card-body bg-secondary" style="height: 20px;line-height: 0px;font-size: 16px;"><?= filter($belcr_row['username']) ?>
                                    </div>
                            </div>	
										<?php
										}
									?>   
					
            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>