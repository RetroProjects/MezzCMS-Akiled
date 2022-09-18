<div class="page-content-collider-content-profile-card-wrapper-aligner-content">
    <h2 class="page-content-collider-content-profile-card-wrapper-aligner-content-title">Amigos</h2>

    <?php
        $userId = userHome('id');
        $sql = $dbh->prepare("SELECT * FROM messenger_friendships WHERE user_one_id=:userid OR user_two_id=:userid");
        $sql->bindParam(':userid', $userId);
        $sql->execute();
        if (!$sql->RowCount() == 0)
        {
            while($news = $sql->fetch())
            {
                $id = (userHome('id') == $news['user_two_id'] ? $news['user_one_id'] : $news['user_two_id']);
                $getUser = $dbh->prepare("SELECT * FROM users WHERE id = :id");
                $getUser->bindParam(':id', $id);
                $getUser->execute();
                $getUserData = $getUser->fetch();

                
    ?>
                <div class="page-content-collider-content-profile-card-wrapper-aligner-content-friend">

                <img src="https://habbo.city/habbo-imaging/avatarimage?figure=<?=filter($getUserData['look'])?>&action=std&direction=3&head_direction=3&img_format=undefined&gesture=sml&headonly=0&size=b" alt="<?=filter($getUserData['username'])?>" class="page-content-collider-content-profile-card-wrapper-aligner-content-friend-figure">
                <p class="page-content-collider-content-profile-card-wrapper-aligner-content-friend-username"><?=filter($getUserData['username'])?></p>
            </div>


<?php
            }
        }
        else
        {
            echo userHome('username').' no tiene amigos en este momento.';
        }
    ?>
</div>