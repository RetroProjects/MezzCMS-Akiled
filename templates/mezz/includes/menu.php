<div class="page-content-nav">
    <div class="page-content-max-width" style="justify-content: flex-start;">
        <div class="page-content-nav-item 
            
            <?php echo $me_active ?> 
            <?php echo $index_active ?>
            <?php echo $profile_active ?>">

            <a href="/" class="page-content-nav-item-text"><?=$lang["Minicio"]?></a>

        </div>
        
        <div class="page-content-nav-item 

            <?php echo $photos_active ?> 
            <?php echo $rooms_active ?> 
            <?php echo $fansite_active ?>
            <?php echo $staffs_active ?>
            <?php echo $news_active ?>
            <?php echo $staff_active ?>">

                <a class="page-content-nav-item-text"><?=$lang["Mcomunidad"]?></a>
                <div class="page-content-nav-item-dropdown-content">
                    <a href="/articles/1" class="page-content-nav-item-sub-text"><?=$lang["Mnews"]?></a>
                    <a href="/community/photos" class="page-content-nav-item-sub-text"><?=$lang["Mfotos"]?></a>
                    <a href="/community/rooms" class="page-content-nav-item-sub-text"><?=$lang["Mhabita"]?></a>
                    <a href="/community/fansites" class="page-content-nav-item-sub-text"><?=$lang["Mfansites"]?></a>

                        <?php
                            if (!isset($_SESSION['id']))
                            {
                                echo '';
                            } else {
                        ?>
                            <a href="/community/staffs" class="page-content-nav-item-sub-text"><?=$lang["Mstaff"]?></a>
                        <?php } ?>
            </div>
        </div>

        <div class="page-content-nav-item <?php echo $ranking_active ?>">
            <a href="/highscores" class="page-content-nav-item-text"><?=$lang["Mranking"]?></a>
        </div>

            <?php
                if(!isset($_SESSION['id']))
                {
                    echo '';
                } else {
            ?>  
        <div class="page-content-nav-item <?php echo $shop_active ?>">
            <a href="/shop" class="page-content-nav-item-text"><?=$lang["Mtienda"]?></a>
        </div>
            <?php } ?>

        <div class="page-content-nav-item
            <?php echo $whatishabbo_active ?>
            <?php echo $howtoplay_active ?>
            <?php echo $hacerono_active ?>
            <?php echo $safety_active ?>
        ">
            <a class="page-content-nav-item-text"><?=$lang["Mwhatplay"]?></a>
            <div class="page-content-nav-item-dropdown-content">
                <a href="/safety/what-is-habbo" class="page-content-nav-item-sub-text"><?=$lang["Mwhathabbo"]?> <?= $config['hotelName'] ?></a>
                <a href="/safety/how-to-play" class="page-content-nav-item-sub-text">Cómo Jugar</a>
                <a href="/safety/habbo-way" class="page-content-nav-item-sub-text">Hacer o No</a>
                <a href="/safety/safety" class="page-content-nav-item-sub-text">La Seguridad</a>
                <a href="#" target="_blank" class="page-content-nav-item-sub-text">Help</a>
            </div>
        </div>

        <?php
            if (User::userData('rank') > '10')
            {
        ?>
            <div class="page-content-nav-item <?php echo $panel_active ?>">
                <a href="/adminpan/dash" class="page-content-nav-item-text"><?=$lang["Ghk"];?></a>
            </div>
        <?php } ?>

    </div>
</div>