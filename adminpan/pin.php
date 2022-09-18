<!DOCTYPE html>
<html lang="en">
<?php
$content = "Pin"; 

include_once "../templates/sloptv4.2/pin/includes/header.php";
?>
<body>
<div class="container" style="margin-bottom:83px">
    <div class="row">
        <div class="col s12 m6 offset-m3" style="margin-top:20%;"> 
            <div class="card card-me">
                <div class="card-content">
                <?php staffPinHk(); ?>
                <?php
                $getUser = $dbh->prepare("SELECT * FROM users WHERE id = :id");
				$getUser->bindParam(':id', $_SESSION['id']);
				$getUser->execute();
                $stats = $getUser->fetch();
                        
                ?>
			<?php 
				admin::EditUser("username"); 
				admin::UpdateUser();
				?>
                <span class="card-title"><i class="icon-card fas fa-exclamation-triangle" style="color:#f57c00; background-color:#FFF;"></i> Ingrese el pin</span>
                <form method="POST">
                <center>
                <button class="btn btn-primary" type="submit"  name="loginPin" style="background-color:#4272D7;"><i class="far fa-paper-plane" style="font-size:23px;"></i></button>
                <input type="password" class="form-control" placeholder="Introduce el pin"  name='PINbox' style="width:70%;float:left;backgrou" maxlength="5"><br />
                </center>
                <br />
                <br />
                ¿No sabes tu PIN? ¡Póngase en contacto con un miembro superior del equipo!
                </p>
                </form>
                <center><img src="<?php echo $config['hotelUrl']; ?>/templates/sloptv4.2/pin/views/img/frankhabbo.gif"></center>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>