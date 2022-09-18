<div class="page-content-collider-content-profile-card-wrapper-aligner-content">
    <h2 class="page-content-collider-content-profile-card-wrapper-aligner-content-title">Placas</h2>

    <?php
        $userId = userHome('id');
        $stmt = $dbh->prepare("SELECT * FROM user_badges WHERE user_id = :userid LIMIT 14");
        $stmt->bindParam(':userid', $userId);
        $stmt->execute();
            if (!$stmt->RowCount() == 0) {
                while($badge = $stmt->fetch()) {
    ?>
        <img src=<?=$config['badgeURL']?><?=filter($badge["badge_id"])?>.gif class='page-content-collider-content-profile-card-wrapper-aligner-content-badge' data-toggle='tooltip' data-original-title='<?=filter($badge["badge_id"])?>' style='padding: 5px 5px;
        margin: 0 20px 20px 0;'>
    <?php
        }
        }
        else
        {
            echo userHome('username').' no hay placas en el momento!';
        }
    ?>
</div>