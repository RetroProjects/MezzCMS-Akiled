<!DOCTYPE html>
<html lang="en">
<?php
include_once "includes/head.php";
$_SESSION['title'] = '';
$_SESSION['slogan'] = '';
$_SESSION['news'] = '';
admin::CheckRank(13);
?>

<body>

    <?php
    include_once "includes/navi.php";
    include_once "includes/header.php";

    ?>


    <div class="main-panel">
        <div class="content-wrapper">

            <a style="text-decoration: none;" href="javascript:history.back()">Regresar</a><br><br>
            <div class="page-header">
                <h1 class="page-title">Editar RolePlay Items </h1>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Editar</h4>
                            <p class="card-description">Editar: <?php echo admin::EditRolePlayItems("name"); ?> </p>

                            <form class="forms-sample" name="mygallery" action="" method="POST">

                                <?php
                                admin::EditRolePlayItems("id");
                                admin::UpdateRolePlayItems();
                                ?>
                                <input id="icon_prefix" type="hidden" value="<?php echo admin::EditRolePlayItems("id"); ?>" name="naam" class="form-control">
								
								<div class="form-group">
                                    <label for="exampleInputEmail3">Nombre del Item</label>
                                    <input style="color: white;" type="text" value="<?php echo admin::EditRolePlayItems("name"); ?>" name="name" class="form-control">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputPassword4">Precio</label>
                                    <input style="color: white;" type="number" value="<?php echo admin::EditRolePlayItems("price"); ?>" name="price" class="form-control" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Tipo</label>

                                    <select style="color: white;" name="type" class="form-control">
                                        <option name="type" value="munition" <?php echo admin::EditRolePlayItems("type")=='munition'?'selected':'';?>>munition</option>
                                        <option name="type" value="health" <?php echo admin::EditRolePlayItems("type")=='health'?'selected':'';?>>health</option>
                                        <option name="type" value="energy" <?php echo admin::EditRolePlayItems("type")=='energy'?'selected':'';?>>energy</option>
                                        <option name="type" value="weapon_cac" <?php echo admin::EditRolePlayItems("type")=='weapon_cac'?'selected':'';?>>weapon_cac</option>
                                        <option name="type" value="weapon_far" <?php echo admin::EditRolePlayItems("type")=='weapon_far'?'selected':'';?>>weapon_far</option>
                                        <option name="type" value="none" <?php echo admin::EditRolePlayItems("type")=='none'?'selected':'';?>>none</option>
                                        <option name="type" value="money" <?php echo admin::EditRolePlayItems("type")=='money'?'selected':'';?>>money</option>
                                        <option name="type" value="healthenergy" <?php echo admin::EditRolePlayItems("type")=='healthenergy'?'selected':'';?>>healthenergy</option>
                                        <option name="type" value="healthtired" <?php echo admin::EditRolePlayItems("type")=='healthtired'?'selected':'';?>>healthtired</option>
                                        <option name="type" value="showtime" <?php echo admin::EditRolePlayItems("type")=='showtime'?'selected':'';?>>showtime</option>
                                        <option name="type" value="enable" <?php echo admin::EditRolePlayItems("type")=='enable'?'selected':'';?>>enable</option>
                                        <option name="type" value="hit" <?php echo admin::EditRolePlayItems("type")=='hit'?'selected':'';?>>hit</option>
                                        <option name="type" value="openguide" <?php echo admin::EditRolePlayItems("type")=='openguide'?'selected':'';?>>openguide</option>
                                        <option name="type" value="energytired" <?php echo admin::EditRolePlayItems("type")=='energytired'?'selected':'';?>>energytired</option>

                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword4">Valor</label>
                                    <input style="color: white;" type="number" value="<?php echo admin::EditRolePlayItems("value"); ?>" name="value" class="form-control" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">¿Amontonar?</label>

                                    <select style="color: white;" name="allowstack" class="form-control">
                                        <option name="allowstack" value="0" <?php echo admin::EditRolePlayItems("allowstack")=='0'?'selected':'';?>>No</option>
                                        <option name="allowstack" value="1" <?php echo admin::EditRolePlayItems("allowstack")=='1'?'selected':'';?>>Sí</option>

                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Categoría</label>

                                    <select style="color: white;" name="category" class="form-control">
                                        <option name="category" value="EQUIP" <?php echo admin::EditRolePlayItems("category")=='EQUIP'?'selected':'';?>>EQUIP</option>
                                        <option name="category" value="UTIL" <?php echo admin::EditRolePlayItems("category")=='UTIL'?'selected':'';?>>UTIL</option>
                                        <option name="category" value="RESSOURCE" <?php echo admin::EditRolePlayItems("category")=='RESSOURCE'?'selected':'';?>>RESSOURCE</option>
                                        <option name="category" value="QUETE" <?php echo admin::EditRolePlayItems("category")=='QUETE'?'selected':'';?>>QUETE</option>

                                    </select>

                                </div>


                                <button id="btn" name="update" type="submit" class="btn btn-primary mr-2">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
              
                <div class="col-lg-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Nombre del RolePlayItem: <i><?php echo admin::EditRolePlayItems("name"); ?></i> </h4>
                    </p>
					<img src="<?php echo $config["hotelUrl"]; ?>/items/<?php echo admin::EditRolePlayItems("name"); ?>.png" />
                    <div class="table-responsive " >
                      <table class="table table-hover" >
                      <tbody>
                      <tr>
                           <td>	<p > <b class="text-info">ID del RolePlayItem: </b><?php echo admin::EditRolePlayItems("id"); ?></p> </td></tr>
						   <tr>  <td><p><b class="text-warning">Precio:</b> <?php echo admin::EditRolePlayItems("price"); ?></p> </td>  </tr>
						   <tr>  <td><p><b class="text-danger">Tipo:</b> <?php echo admin::EditRolePlayItems("type"); ?></p> </td>  </tr>
                        <tr>  <td><p><b class="text-success">Categoría:</b> <?php echo admin::EditRolePlayItems("category"); ?></p> </td>  </tr>
						<br />
                        
                        </tbody>
                      </table>

                      <center><font color=red>Descripción:</font><br>
                      <?php echo admin::EditRolePlayItems("desc"); ?><br><br>
                      ¡La descripción solo se puede cambiar directamente en la base de datos!</center>
                        
                    </div>
                  </div>
                </div>
                </div>
              
             






            </div>
        </div>


        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php
        include_once "includes/footer.php";
        ?>
        <!-- container-scroller -->

        <!-- End custom js for this page -->
</body>


</html>