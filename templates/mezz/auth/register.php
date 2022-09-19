<form action="" method="post">
<fieldset>
  <legend><?php echo $lang['Rregister']; ?></legend>
  
                <div class="page-content-collider-content-registration-item">
                    <label class="page-content-collider-content-registration-item-title"><?=$lang["Iusername"];?></label>
                    <p class="page-content-collider-content-registration-item-text"><?=$lang["Rdescnombre"];?></p>
                    <input type="text" name="username" id="username" onkeyup="checkUsernameOrEmail(this.value, 'username')" placeholder="<?php echo $lang['Rname']; ?>" class="page-content-collider-content-registration-item-input">
                </div>

                <div class="page-content-collider-content-registration-item">
                    <label class="page-content-collider-content-registration-item-title"><?=$lang["Remail"];?></label>
                    <p class="page-content-collider-content-registration-item-text"><?=$lang["Rdescemail"];?></p>
                    <input type="text" class="page-content-collider-content-registration-item-input" name="email" id="email" onkeyup="checkUsernameOrEmail(this.value, 'email')"  placeholder="<?php echo $lang['Remail']; ?>@gmail.com">
                </div>

                <div class="page-content-collider-content-registration-item">
                    <label class="page-content-collider-content-registration-item-title"><?=$lang["Ipassword"];?></label>
                    <p class="page-content-collider-content-registration-item-text"><?=$lang["Rdescpassword"];?></p>
                    <input type="password" class="page-content-collider-content-registration-item-input" name="password" id="password"  onkeyup="checkPasswords(this.value, 'password')" placeholder="<?php echo $lang['Ipassword']; ?>...">
                    <input type="password" class="page-content-collider-content-registration-item-input"name="password_repeat" id="password_repeat"  onkeyup="checkPasswords(this.value, 'password_repeat')"  placeholder="<?php echo $lang['Rrepeatpassword']; ?>...">
                </div>

                <div class="page-content-collider-content-registration-item">
                    <label class="page-content-collider-content-registration-item-title"><?=$lang["Rcodigo"];?>: <?=$security;?></label>
                    <p class="page-content-collider-content-registration-item-text"><?=$lang["Rdescemail"];?></p>
                    <input type="text" class="page-content-collider-content-registration-item-input" name="code">
                    <input type="text" class="page-content-collider-content-registration-item-input" name="codebueno" value="<?=$security;?>" style="visibility: hidden;width: 0;height: 0;">
                </div>

                <div class="page-content-collider-content-registration-item">
                    <div class="page-content-collider-content-registration-item-column">
                        <input type="checkbox" class="page-content-collider-content-registration-item-checkbox" required>
                        <p class="page-content-collider-content-registration-item-text"><?=$lang["Rtermos1"];?></p>
                    </div>
                    <div class="page-content-collider-content-registration-item-column">
                        <input type="checkbox" class="page-content-collider-content-registration-item-checkbox" required>
                        <p class="page-content-collider-content-registration-item-text"><?=$lang["Rtermos2"];?></p>
                    </div>
                </div>
                <button type="submit" name="register" id="registerSubmit" class="page-content-collider-content-registration-button"><?=$lang["Rbutton"];?></button>
</fieldset>
</form>