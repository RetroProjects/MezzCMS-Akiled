<html lang="es">

<head>

    <title><?= $lang["NoFlashTitulo"] ?></title>
    <link rel="stylesheet" href="/templates/<?= $config['skin']; ?>/assets/css/client.css?<?=$hotel['cache']; ?>" type="text/css">

 
</head>

<body>
<div id="flash-container" style="visibility: visible;">
        	<div id="content" style="display: block;"> 
				<div class="logo" style="margin-top: 12.5%;"></div>
				<a href="//www.adobe.com/go/getflashplayer">
					<div class="flashImage"><img src="/templates/<?= $config['skin']; ?>/assets/images/frank.gif"></div>
					<h2><?= $lang["NoFlashmsj1"] ?></h2>
				</a>
				<a href="/client">
					<h2 style=" background: #124880; color: #fff; "><?= $lang["NoFlashmsj2"] ?></h2>
				</a>
				<br>
				<center>
				<table width="500px">
				<td>
				<a href="#">
						<img src="/templates/<?= $config['skin']; ?>/assets/images/windows.png" width="100px" style=" cursor: pointer; ">
				</a>
				</td>
				<td style="padding: 10px;font-size: 25px;">
				<a href="#" style=" cursor: pointer; "><?=$lang["NoFlashwindows"];?></a>
				</td>
				<td width="50px"></td>
				<td><a href="#"> <img src="/templates/<?= $config['skin']; ?>/assets/images/mac.png" width="100px" style=" cursor: pointer; "></a></td>
				<td style="padding: 10px;font-size: 25px;" style=" cursor: pointer; "><a href="#" style=" cursor: pointer; "><?=$lang["NoFlashmac"];?></a></td>
				</table>
				</center>
			</div>
        </div>
</body>

</html>