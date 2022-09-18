<?php User::Login(); ?>
<header class="page-content-header pixelated">
            <div class="page-content-max-width">
                <div class="page-content-header-column">
                    <p class="page-content-header-text"><?=$lang["Idesclogin"]?></p>
                    <div class="page-content-header-buttons">
                        <a onclick="document.getElementById('login').style.display='block'" class="page-content-header-login-button"><?=$lang["Ilogin"]?></a>
                        <span class="page-content-header-or">O</span>
                        <a href="/registration" class="page-content-header-register-button"><?=$lang["Iregster"]?></a>
                    </div>
                </div>
            </div> 
        </header>
        <div id="login" class="page-content-modal">
            <div class="page-content-modal-center">
                <div class="page-content-modal-center-form">
                    <div class="page-content-modal-center-form-head">
                        <h2 class="page-content-modal-center-form-head-title"><?=$lang["Ihola"]?></h2>
                        <p class="page-content-modal-center-form-head-description"><?=$lang["Ihola2"]?></p>
                        <i onclick="document.getElementById('login').style.display='none';document.getElementsByTagName('body').style.overflow='auto'" class="page-content-modal-center-form-head-close">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="page-content-modal-center-form-head-close-icon"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                        </i>
                    </div>
                    <form method="POST">
                    <div class="page-content-modal-center-form-content">
                        <input type="text" id="username" name="username" placeholder="<?php echo $lang['Iusername']; ?>" class="page-content-modal-center-form-content-input">
                        <input type="password" id="password" name="password" placeholder="<?php echo $lang['Ipassword']; ?>" class="page-content-modal-center-form-content-input">
                        <button type="submit" name="login" class="page-content-modal-center-form-content-button-login"><?=$lang["Ilogar"]?></button>
                    </form>
                        <a href="/registration" class="page-content-modal-center-form-content-button-register"><?=$lang["Inoaccount"]?></a>
                    </div>
                </div>
            </div>
        </div>