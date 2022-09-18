<?php 

$getPhotos = $dbh->prepare("SELECT * FROM rooms JOIN users ON rooms.owner = users.username ORDER BY rooms.id DESC LIMIT 5");
$getPhotos->execute();

if ($getPhotos->RowCount() > 0)
{
    while ($photosRow = $getPhotos->fetch())
    {
    ?>

    <div class="page-content-collider-content-rooms-room">
        <span class="page-content-collider-content-rooms-room-image" style="background-image: url('/assets/images/collider/default-room-image.png');"></span>
        <div class="page-content-collider-content-rooms-room-column">
            <h2 class="page-content-collider-content-rooms-room-title"><?= filter($photosRow['caption']) ?></h2>
            <p class="page-content-collider-content-rooms-room-description"><?= filter($photosRow['description']) ?></p>
            <a href="/profile/<?= filter($photosRow['username']) ?>" class="page-content-collider-content-rooms-room-owner">
                <span class="page-content-collider-content-rooms-room-owner-head-figure" style="background-image: url('<?php echo $config['AvatarURL']; ?><?= filter($photosRow['look']) ?>&action=std&direction=2&head_direction=2&img_format=undefined&gesture=sml&headonly=1&size=b');"></span>
                <p class="page-content-collider-content-rooms-room-owner-username"><?= filter($photosRow['username']) ?></p>
            </a>
        </div>
    </div>
        
<?php
}
}
else
{
    echo'Actualmente no hay habitaciones.';
}
?>