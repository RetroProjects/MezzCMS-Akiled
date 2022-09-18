<div class="page-content-user-space">
            <div class="page-content-max-width space-between">
                <div class="page-content-user-space-left-side">
                <div class="page-content-user-space-left-side-item">
                        <span class="page-content-user-space-left-side-item-icon credits"></span>
                        <div class="page-content-user-space-left-side-item-column">
                            <p class="page-content-user-space-left-side-item-text bold"><?= User::userData('credits') ?></p>
                            <p class="page-content-user-space-left-side-item-text"><?=$lang["RkCredits"]?></p>
                        </div>
                    </div>
                    <div class="page-content-user-space-left-side-item">
                        <span class="page-content-user-space-left-side-item-icon planeta"></span>
                        <div class="page-content-user-space-left-side-item-column">
                            <p class="page-content-user-space-left-side-item-text bold"><?= User::userData('vip_points') ?></p>
                            <p class="page-content-user-space-left-side-item-text"><?=$lang["RkPlanets"]?></p>
                        </div>
                    </div>
                    <div class="page-content-user-space-left-side-item">
                        <span class="page-content-user-space-left-side-item-icon esmeralda"></span>
                        <div class="page-content-user-space-left-side-item-column">
                            <p class="page-content-user-space-left-side-item-text bold"><?= User::userData('activity_points') ?></p>
                            <p class="page-content-user-space-left-side-item-text"><?=$lang["RkEmerald"]?></p>
                        </div>
                    </div>
                </div>
                <div class="page-content-user-space-right-side">
                    <div class="page-content-user-space-right-side-item">
                        <div onclick="dropdown()" class="page-content-user-space-right-side-item-nav">
                            <span class="page-content-user-space-right-side-item-nav-figure pixelated" style="background-image: url('<?php echo $config['AvatarURL']; ?><?= User::userData('look') ?>&action=std&direction=2&head_direction=2&img_format=undefined&gesture=sml&headonly=1&size=b')"></span>
                            <span class="page-content-user-space-right-side-item-nav-username"><?= User::userData('username') ?></span>
                            <button class="page-content-user-space-right-side-item-nav-hidden-button"></button>
                        </div>
                        <div id="user-space-dropdown" class="page-content-user-space-right-side-item-dropdown-content">
                            <a class="page-content-user-space-right-side-item-sub-text" href="/profile/<?= User::userData('username') ?>"><?=$lang["Mprofile"]?></a>
                            <a class="page-content-user-space-right-side-item-sub-text" href="/settings_privacy"><?=$lang["Msettings"]?></a>
                            <a class="page-content-user-space-right-side-item-sub-text" href="/logout"><?=$lang["Mlogout"]?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header class="page-content-header pixelated">
            <div class="page-content-max-width">
                <div class="page-content-header-column space-between" style="flex-direction: row;">
                    <span class="page-content-header-figure" style="background-image: url('<?php echo $config['AvatarURL']; ?><?= User::userData('look') ?>&direction=2&head_direction=3&gesture=sml&action=wav&size=l')"></span>
                    <div class="page-content-header-buttons">
                        <a href="/clients" class="page-content-header-default-button"><?=$lang["Cflashserver"]?></a>
                        <a href="/client-nitro" class="page-content-header-default-button"><?=$lang["Cbetanitro"]?></a>
                        <a onclick="document.getElementById('download').style.display='block';" class="page-content-header-default-button"><?=$lang["LangDownload"]?></a>
                    </div>
                </div>
            </div> 
        </header>
		<div id="download" class="page-content-modal">
            <div class="page-content-modal-center">
                <div class="page-content-modal-center-form">
                    <div class="page-content-modal-center-form-head">
                        <h2 class="page-content-modal-center-form-head-title"><?=$lang["DesTitle"]?> <?=$config['hotelName']?></h2>
                        <p class="page-content-modal-center-form-head-description"><?=$lang["DesTitle2"]?></p>
                        <i onclick="document.getElementById('download').style.display='none';" class="page-content-modal-center-form-head-close">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="page-content-modal-center-form-head-close-icon"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                        </i>
                    </div>
                    <div class="page-content-modal-center-form-content">
						<div class="page-content-modal-center-form-content-box">
							<p class="page-content-modal-center-form-content-box-text"><?=$lang["LaunchDesc"]?> <?= User::userData('username') ?>.</p>
							<div class="page-content-modal-center-form-content-box-row">
								<img src="<?php echo $config['AvatarURL']; ?><?= User::userData('look') ?>&action=std&direction=2&head_direction=3&img_format=undefined&gesture=sml&headonly=0&size=b" alt="<?= User::userData('username') ?> Avatar" class="page-content-modal-center-form-content-box-figure">
								<div class="page-content-modal-center-form-content-box-column">
									<p class="page-content-modal-center-form-content-box-username"><?= User::userData('username') ?></p>
									<p class="page-content-modal-center-form-content-box-motto"><?= User::userData('motto') ?></p>
								</div>
							</div>
						</div>
                        <p class="page-content-modal-center-form-content-text"><?=$lang["DescApp"]?> <?=$config['hotelName']?>?</p>
                        <a href="<?=$config['urlAppWindows']?>" class="page-content-modal-center-form-content-button-download" target="_blank"><?=$lang["AppWindows"]?></a>
                        <a href="<?=$config['urlAppMac']?>" class="page-content-modal-center-form-content-button-download" target="_blank"><?=$lang["AppMac"]?></a>
                        <a href="#" target="_blank" class="page-content-modal-center-form-content-button-help">Help</a>
                    </div>
                </div>
            </div>
        </div>