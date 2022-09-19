<div class="page-content-collider-content-profile-card-wrapper-aligner-content">
    <h2 class="page-content-collider-content-profile-card-wrapper-aligner-content-title">Habitaciones</h2>

    <?php
    $userId = userHome('username');
    $stmt = $dbh->prepare("SELECT * FROM rooms WHERE owner = :username LIMIT 4");
    $stmt->bindParam(':username', $userId);
    $stmt->execute();
    if (!$stmt->RowCount() == 0) {
        while ($badge = $stmt->fetch()) {
    ?>

            <div class='page-content-collider-content-profile-card-wrapper-aligner-content-room'>

                <img src='/assets/images/profile/default-room.png' alt='<?= filter($badge["name"]) ?>' class='page-content-collider-content-profile-card-wrapper-aligner-content-room-image'>

                <p class='page-content-collider-content-profile-card-wrapper-aligner-content-room-name'><?= mb_strimwidth($badge["caption"], 0, 20, '...') ?></p>
            </div>

    <?php
        }
    } else {
        echo userHome('username') . ' no tiene habitaciones en este momento.';
    }
    ?>



</div>