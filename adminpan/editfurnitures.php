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

            <div class="page-header">
                <h1 class="page-title">Editar Mueble (En la tabla Furniture)</h1>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Editar</h4>
                            <p class="card-description">Editar: <?php echo admin::EditFurniture("item_name"); ?> </p>

                            <form class="forms-sample" name="mygallery" action="" method="POST">

                                <?php
                                admin::EditFurniture("id");
                                admin::UpdateFurniture();
                                
                                ?>
                                <input id="icon_prefix" type="hidden" value="<?php echo admin::EditFurniture("id"); ?>" name="naam" class="form-control">
								
								<div class="form-group">
                                    <label for="exampleInputEmail3">Nome do Item</label>
                                    <input style="color: black;" type="text" value="<?php echo admin::EditFurniture("item_name"); ?>" name="item_name" class="form-control" Readonly>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Tipo (s = muebles de piso / i = muebles de pared / b = placas)</label>
                                    <input type="text" value="<?php echo admin::EditFurniture("type"); ?>" name="type" class="form-control" id="exampleInputName1" placeholder="Tipo de mueble">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Ancho</label>
                                    <input type="number" value="<?php echo admin::EditFurniture("width"); ?>" name="width" class="form-control" id="exampleInputName1" placeholder="Ancho del mueble">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Longitud</label>
                                    <input type="number" value="<?php echo admin::EditFurniture("length"); ?>" name="length" class="form-control" id="exampleInputName1" placeholder="Longitud del mueble">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Altura de apilamiento</label>
                                    <input type="text" value="<?php echo admin::EditFurniture("stack_height"); ?>" name="stack_height" class="form-control" id="exampleInputName1" placeholder="Longitud del mueble">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Tipo de interacción</label>
                                    <input type="text" value="<?php echo admin::EditFurniture("interaction_type"); ?>" name="interaction_type" class="form-control" id="exampleInputName1" placeholder="Longitud del mueble">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Número de clics en el furni</label>
                                    <input type="number" value="<?php echo admin::EditFurniture("interaction_modes_count"); ?>" name="interaction_modes_count" class="form-control" id="exampleInputName1" placeholder="Longitud del mueble">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Identificaciones de venta</label>
                                    <input type="number" value="<?php echo admin::EditFurniture("vending_ids"); ?>" name="vending_ids" class="form-control" id="exampleInputName1" placeholder="Longitud del mueble">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Altura ajustable</label>
                                    <input type="text" value="<?php echo admin::EditFurniture("height_adjustable"); ?>" name="height_adjustable" class="form-control" id="exampleInputName1" placeholder="Longitud del mueble">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">ID de efecto</label>
                                    <input type="number" value="<?php echo admin::EditFurniture("effect_id"); ?>" name="effect_id" class="form-control" id="exampleInputName1" placeholder="Longitud del mueble">
                                </div>
                                
                        </div>
                    </div>
                </div>
              
                <div class="col-lg-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
					
                    <div class="table-responsive " >
                    <div class="form-group">
                                    <label for="exampleInputName1">¿Se puede apilar?</label>

                                    <select name="can_stack" class="form-control">
                                        <option name="can_stack" value="0" <?php echo admin::EditFurniture("can_stack")=='0'?'selected':'';?>>No</option>
                                        <option name="can_stack" value="1" <?php echo admin::EditFurniture("can_stack")=='1'?'selected':'';?>>Sí</option>

                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">¿Se puede sentarse?</label>

                                    <select name="can_sit" class="form-control">
                                        <option name="can_sit" value="0" <?php echo admin::EditFurniture("can_sit")=='0'?'selected':'';?>>No</option>
                                        <option name="can_sit" value="1" <?php echo admin::EditFurniture("can_sit")=='1'?'selected':'';?>>Sí</option>

                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">¿Caminar sobre lo mueble?</label>

                                    <select name="is_walkable" class="form-control">
                                        <option name="is_walkable" value="0" <?php echo admin::EditFurniture("is_walkable")=='0'?'selected':'';?>>No</option>
                                        <option name="is_walkable" value="1" <?php echo admin::EditFurniture("is_walkable")=='1'?'selected':'';?>>Sí</option>

                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">¿Se puede reciclar este furni?</label>

                                    <select name="allow_recycle" class="form-control">
                                        <option name="allow_recycle" value="0" <?php echo admin::EditFurniture("allow_recycle")=='0'?'selected':'';?>>No</option>
                                        <option name="allow_recycle" value="1" <?php echo admin::EditFurniture("allow_recycle")=='1'?'selected':'';?>>Sí</option>

                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">¿Se puede intercambiar este furni?</label>

                                    <select name="allow_trade" class="form-control">
                                        <option name="allow_trade" value="0" <?php echo admin::EditFurniture("allow_trade")=='0'?'selected':'';?>>No</option>
                                        <option name="allow_trade" value="1" <?php echo admin::EditFurniture("allow_trade")=='1'?'selected':'';?>>Sí</option>

                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">¿Este mueble se puede vender en la feria libre?</label>

                                    <select name="allow_marketplace_sell" class="form-control">
                                        <option name="allow_marketplace_sell" value="0" <?php echo admin::EditFurniture("allow_marketplace_sell")=='0'?'selected':'';?>>No</option>
                                        <option name="allow_marketplace_sell" value="1" <?php echo admin::EditFurniture("allow_marketplace_sell")=='1'?'selected':'';?>>Sí</option>

                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">¿Se puede enviar este furni como regalo?</label>

                                    <select name="allow_gift" class="form-control">
                                        <option name="allow_gift" value="0" <?php echo admin::EditFurniture("allow_gift")=='0'?'selected':'';?>>No</option>
                                        <option name="allow_gift" value="1" <?php echo admin::EditFurniture("allow_gift")=='1'?'selected':'';?>>Sí</option>

                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">¿Apilar este furni en el inventario?</label>

                                    <select name="allow_inventory_stack" class="form-control">
                                        <option name="allow_inventory_stack" value="0" <?php echo admin::EditFurniture("allow_inventory_stack")=='0'?'selected':'';?>>No</option>
                                        <option name="allow_inventory_stack" value="1" <?php echo admin::EditFurniture("allow_inventory_stack")=='1'?'selected':'';?>>Sí</option>

                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">¿Es raro este furni?</label>

                                    <select name="is_rare" class="form-control">
                                        <option name="is_rare" value="0" <?php echo admin::EditFurniture("is_rare")=='0'?'selected':'';?>>No</option>
                                        <option name="is_rare" value="1" <?php echo admin::EditFurniture("is_rare")=='1'?'selected':'';?>>Sí</option>

                                    </select>

                                </div>

                                <button id="btn" name="update" type="submit" class="btn btn-primary mr-2">Guardar</button>
                            </form>
                        
                        
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