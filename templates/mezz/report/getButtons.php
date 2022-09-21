<?php if($news2["state"] == 'Abierto') { ?>

  <button class="page-content-collider-content-settings-right-side-default-button fill save" style="background-color: #00813e; border-radius: 3px;padding: 10px 10px; color: #fff; font-size: 14px; font-weight: 500; margin-bottom: -30px; margin-left: 570px; width: 100px; cursor: auto;"><?php echo filter($news2["state"]); ?></button>

<?php } ?>

<?php if($news2["state"] == 'Cerrado') { ?>

  <button class="page-content-collider-content-settings-right-side-default-button fill save" style="background-color: #a3a3a3; border-radius: 3px;padding: 10px 10px; color: #fff; font-size: 14px; font-weight: 500; margin-bottom: -30px; margin-left: 570px; width: 100px; cursor: auto;"><?php echo filter($news2["state"]); ?></button>

<?php } ?>

<?php if($news2["state"] == 'Tratamiento') { ?>

  <button class="page-content-collider-content-settings-right-side-default-button fill save" style="background-color: #dd751c; border-radius: 3px;padding: 10px 10px; color: #fff; font-size: 14px; font-weight: 500; margin-bottom: -30px; margin-left: 570px; width: 100px; cursor: auto;"><?php echo filter($news2["state"]); ?></button>

<?php } ?>