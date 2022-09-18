<div class="page-content-collider-content-profile-card-wrapper-aligner-content">
    <h2 class="page-content-collider-content-profile-card-wrapper-aligner-content-title">Groups</h2>
    <?php
        $userId = userHome('id');
        $stmt = $dbh->prepare("SELECT * FROM groups WHERE owner_id = :userid LIMIT 14");
        $stmt->bindParam(':userid', $userId);
        $stmt->execute();
        if (!$stmt->RowCount() == 0)
        {
            while($groups = $stmt->fetch())
            {
                
    ?>
                <img src=
                    http://mezz.localhost/habbo-imaging/badge.php?badge=<?=filter($groups["badge"])?>.png 
                    class='page-content-collider-content-profile-card-wrapper-aligner-content-badge' 
                    data-toggle='tooltip' 
                    data-original-title='<?=filter($groups["name"])?>' 
                    style='padding: 5px 5px; margin: 0 20px 20px 0;'>
    <?php
            }
        }
        else
        {
            echo userHome('username').' no hay grupos por el momento!';
        }
    ?>
</div>