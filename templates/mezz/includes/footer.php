<footer class="page-content-footer">
    <div class="page-content-footer-top-side">
        <div class="page-content-max-width space-between" style="align-items: flex-start;">
            <div class="page-content-footer-column">
                <img class="page-content-footer-logo" src="https://habbofont.net/font/habbo_big/habbo.gif">
                <p class="page-content-footer-text"><?= $lang["footer1"] ?></p>
            </div>
            <div class="page-content-footer-column">
                <h3 class="page-content-footer-title"><?= $lang["Fapoyo"] ?></h3>
                <a href="" class="page-content-footer-url"><?= $lang["Fayuda"] ?></a>
                <a href="" class="page-content-footer-url"><?= $lang["Fpassword"] ?></a>
                <a href="<?= $config['discord'] ?>" class="page-content-footer-url"><?= $lang["Fdiscord"] ?></a>
            </div>
            <div class="page-content-footer-column">
                <h3 class="page-content-footer-title"><?= $lang["Fseguridad"] ?></h3>
                <a href="/playing-habbo/safety.php" class="page-content-footer-url"><?= $lang["Fsafety"] ?></a>
                <a href="" class="page-content-footer-url"><?= $lang["Ftermos"] ?></a>
                <a href="" class="page-content-footer-url"><?= $lang["Fprivacy"] ?></a>
                <a href="" class="page-content-footer-url"><?= $lang["Fcookies"] ?></a>
            </div>
            <div class="page-content-footer-column">
                <h3 class="page-content-footer-title">Desktop App</h3>
                <p class="page-content-footer-text"><?= $lang["Fapp"] ?></p>
                <a onclick="document.getElementById('download').style.display='block';"  class="page-content-footer-download-button">Download <?= $lang["Fdownapp"] ?></a>
            </div>
            <div id="download" class="page-content-modal">
                <div class="page-content-modal-center">
                    <div class="page-content-modal-center-form">
                        <div class="page-content-modal-center-form-head">
                            <h2 class="page-content-modal-center-form-head-title"><?= $lang["DesTitle"] ?> <?= $config['hotelName'] ?></h2>
                            <p class="page-content-modal-center-form-head-description"><?= $lang["DesTitle2"] ?></p>
                            <i onclick="document.getElementById('download').style.display='none';" class="page-content-modal-center-form-head-close">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="page-content-modal-center-form-head-close-icon">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </i>
                        </div>
                        <div class="page-content-modal-center-form-content">
                            <div class="page-content-modal-center-form-content-box">
                                <p class="page-content-modal-center-form-content-box-text"><?= $lang["LaunchDesc"] ?> <?= User::userData('username') ?>.</p>
                                <div class="page-content-modal-center-form-content-box-row">
                                    <img src="<?php echo $config['AvatarURL']; ?><?= User::userData('look') ?>&action=std&direction=2&head_direction=3&img_format=undefined&gesture=sml&headonly=0&size=b" alt="<?= User::userData('username') ?> Avatar" class="page-content-modal-center-form-content-box-figure">
                                    <div class="page-content-modal-center-form-content-box-column">
                                        <p class="page-content-modal-center-form-content-box-username"><?= User::userData('username') ?></p>
                                        <p class="page-content-modal-center-form-content-box-motto"><?= User::userData('motto') ?></p>
                                    </div>
                                </div>
                            </div>
                            <p class="page-content-modal-center-form-content-text"><?= $lang["DescApp"] ?> <?= $config['hotelName'] ?>?</p>
                            <a href="<?= $config['urlAppWindows'] ?>" class="page-content-modal-center-form-content-button-download" target="_blank"><?= $lang["AppWindows"] ?></a>
                            <a href="<?= $config['urlAppMac'] ?>" class="page-content-modal-center-form-content-button-download" target="_blank"><?= $lang["AppMac"] ?></a>
                            <a href="#" target="_blank" class="page-content-modal-center-form-content-button-help">Help</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content-footer-bottom-side">
        <div class="page-content-max-width space-between" style="align-items: flex-start;">
            <span class="page-content-footer-title copyright">&copy; <script>
                    var date = new Date();
                    var year = date.getFullYear();
                    document.write(year);
                </script> <?= $config['hotelName'] ?> Hotel.</span>
            <p class="page-content-footer-text copyright"><?= $lang["Rrights"] ?><a href="<?= $config['hotelUrl'] ?>" target="_blank" class="page-content-footer-url hugoyin"></a>.</p>
        </div>
    </div>
</footer>