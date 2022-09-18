<?php
	$menu="community";
	include_once 'templantes/header.php';
?>
          

<body>

			               <div style="margin-top: 100px;">    	  
					 <div style="padding: 10px; float:left;width: 100%; margin-left:10px; ">
					 
					 

	 <div id="contentBox">
	    <div style="font-size: 24px;background: rgba(39, 39, 39, 0.92);border-radius: 3px 3px 0px 0px;padding: 5px;padding-left: 30px;border-bottom: 2px solid #404040;">Eventos Programados
						
</div>
                <div class="body" style="padding-bottom: 0px; ">
				
    					<?php
							if (empty($_GET['id']))
			{
				
						$getEvents = $dbh->prepare("SELECT * FROM cms_events ORDER BY id DESC LIMIT 5") ;
						$getEvents->execute();
						if ($getEvents->RowCount() > 0){
							while ($data = $getEvents->fetch())
								{
									 $getto = $dbh->prepare("SELECT id,username FROM users WHERE id = :id");
									$getto->bindParam(':id', $data['user']);									
									$getto->execute();
									$geto = $getto->fetch();

						echo'		
								<div class="form__fieldset form__fieldset--box" style="background: url(https://i.pinimg.com/originals/aa/02/d4/aa02d477025b498c0e6a462c5c156f29.gif); "><div style="background: url('.$config['hotelUrl'].'/templates/WEBOTHEME/visual/img/Controller.png) 0% 50% no-repeat;padding-left: 50px;"><div style="float: right;">Fecha: <b style="color:red;">'.filter($data["fecha"]).' </b><b></b> a las <b style="color:red;">'.filter($data["hora"]).'</b></div><b style="color:#48D1CC;">'.filter($data["title"]).'</b><br><span style="font-size: 12px;">Realizado por: </b><b style="font-size: 13px;">  '.filter($geto["username"]).'</b></span></div></div></div>
							
';

							 } }else{
								echo '<div class="alert alert-primary" role="alert" style="
    background: #cc0033;
    color: #fff;
">
No tenemos eventos programados, consulte mas tarde.
</div><br>';
						
							
				}
			}
		?>
	
	
	
</body>

</html>