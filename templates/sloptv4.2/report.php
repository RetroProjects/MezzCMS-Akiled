	<title><?= User::userData('username') ?> - <?php echo $lang["sopporttitulo"]; ?></title>
<?php 
	$menu="staff";
	include_once 'templantes/header.php';
?>
<body>

<style>
.asd {
    background: #222;
    padding: 10px;
    color: #FFFF00;
	font-size: 20px;
}
.asdsucces {
    background: #222;
    padding: 10px;
    color: #FFFF00;
	font-size: 20px;
}
</style>



<div style="margin-top: 100px;width: 500px;float:left;width: 100%;">

 <div style="float: right;margin-top: 0px;width: 100%;">
						<div style="font-size: 24px;background: rgba(13, 10, 10, 0.88);border-radius: 3px 3px 0px 0px;padding: 5px;padding-left: 30px;border-bottom: 2px solid #404040;"><?=User::userData('username')?> - <?= $lang["sopporttitulo"] ?></div>
						<fieldset class="form__fieldset form__fieldset--box" style="margin: 0;border-radius: 0px 0px 3px 3px;padding: 10px;margin-bottom: 20px;">
<form method="POST">

	<div class="flex flex-6 has-margin">
      <div style=" font-size: 16px; padding: 7px;float:right;margin-right:8% #C0C0C0;">
    
	   <?php
		if(isset($_POST["enviar"]))
		{
			if (!empty($_POST['mitema']))
			{
				if (!empty($_POST['comentario']))
				{
					if($_POST['category']=="1"){$category=$lang["Scategory1"];}else{
					if($_POST['category']=="2"){$category=$lang["Scategory2"];}}
					if($_POST['category']=="3"){$category=$lang["Scategory3"];}else{
					if($_POST['category']=="4"){$category=$lang["Scategory4"];}}
					if($_POST['category']=="5"){$category=$lang["Scategory5"];}else{
					if($_POST['category']=="6"){$category=$lang["Scategory6"];}}
					if($_POST['category']=="7"){$category=$lang["Scategory7"];}else{
					if(($_POST['category']>="1") and ($_POST['category']<="7")){}else{$category=$lang["Scategory"];}}
					$addcanjear = $dbh->prepare("INSERT cms_report VALUES ('','".$_POST['mitema']."','".$category."','".$_POST['comentario']."','".User::userData('username')."')");
					$addcanjear->execute();
					echo'<div class="asdsucces">'.$lang["Supsuccs"].'</div>';
				}
				else
				{
				echo"<div class='asd'>".$lang["SupError1"]."</div>";
				}
			}
			else
			{
				echo"<div class='asd'>".$lang["SupError2"]."</div>";
			}
		}
		
   ?>
         <a style="font-size:100%;color:white;">*<b><?= $lang["sopportdec"] ?></b> <?= $lang["sopportdec2"] ?> </a>
         <br><br>
         <div id="supporterreur"></div>
         <input type="text"  id="sujetTitle" name="mitema" placeholder="<?= $lang["supmitema"] ?>" class="btn btn" style="width:calc(100% - 25px);font-size: 20px; color:#696969">
         <div id="indexformsepare"></div>
         <a style="font-size:130%;color:white;"><?= $lang["categoriaSup"] ?></a>
         <div id="indexformsepare"></div>
         <select id="category" name="category" class="btn btn" style="width:96%;font-size: 20px;color:#696969;">
            <option value="1"><?= $lang["Scategory1"]; ?></option>
            <option value="2"><?= $lang["Scategory2"]; ?></option>
            <option value="3"><?= $lang["Scategory3"] ?></option>
            <option value="4"><?= $lang["Scategory4"] ?></option>
            <option value="5"><?= $lang["Scategory5"] ?></option>
			<option value="6"><?= $lang["Scategory6"] ?></option>
			<option value="7"><?= $lang["Scategory7"] ?></option>
         </select>
         <div id="btn btn"></div>
         <div style="position:relative;height:15px;"></div>
		<a style="font-size:130%;color:white;"><?= $lang["categoriaSup"] ?></a>
         <textarea name="comentario"  id="editeur" style="width:calc(100% - 20px);left:0px;height:auto;min-height:90px;background:rgb(245,245,245);color:#696969;" contenteditable="" type="text"  class="btn"></textarea>
         <div id="btn"></div>
         <button style="float: right;margin-right: 14px;margin-top: 40px;" name="enviar" type="submit" class="btn btn-success"><?= $lang["bottonSup"] ?></button>
		 </form>
     


</div>


</body>
</html>