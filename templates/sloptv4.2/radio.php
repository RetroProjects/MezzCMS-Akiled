
<head>
	<meta charset='UTF-8'>
	<title>P&H Radio: Client Player</title>
     <link rel="icon" href="https://P&Hradio.it/interagisci/template/favicon.ico" type="image/png">
<meta property="og:title" content="P&H Radio: Player" />
<meta property="og:description" content="P&H Radio - La radio per i giovani, fatta da giovani!" />
<meta property="og:author" content="P&H Radio" />
    <link rel="stylesheet" type="text/css" href="<?= $config['hotelUrl'] ?>/templates/<?= $config['skin'] ?>/radio/font-awesome/css/all.css">   
    <script src="https://code.jquery.com/jquery-3.4.0.js"></script>
    <script language="javascript" type="text/javascript" src="<?= $config['hotelUrl'] ?>/templates/<?= $config['skin'] ?>/radio/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= $config['hotelUrl'] ?>/templates/<?= $config['skin'] ?>/radio/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $config['hotelUrl'] ?>/templates/<?= $config['skin'] ?>/radio/css/animate.css">
    <script language="javascript" type="text/javascript" href="<?= $config['hotelUrl'] ?>/templates/<?= $config['skin'] ?>/radio/font-awesome/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:regular,bold|Ubuntu+Condensed:regular" rel="stylesheet">
    <script language="javascript" type="text/javascript" href="https://proxima.shoutca.st/system/streaminfo.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/4.2.10/iframeResizer.contentWindow.min.js"></script>

</head>
<body style="background:none transparent;">

<style>
body {
    font-family: Ubuntu, trebuchet ms, lucida grande, lucida sans unicode, lucida sans, Tahoma, sans-serif!important
}

.player {
    position: relative;
    overflow: hidden;
    background-color: #201e19;
    width: 400px;
    height: 70px;
    box-shadow: 0 0 0 2px #686661, 0 1px 0 3px #000, 0 0 0 3px #000;
    opacity: .8;
    border-radius: 2px;
    margin: 10px;
    padding: 5px
}

.testaDJ {
    width: 60px;
    height: 60px;
    background-color: #ddd;
    border: 2px solid #4c83d3;
    border-radius: 100px;
    overflow: hidden;
    margin-bottom: 5px
}
.infoProgramma {
    background-size: cover;
    width: 60px;
    height: 60px;
    background-color: #ddd;
    border: 2px solid #E91E63;
    border-radius: 4px;
    overflow: hidden;
    margin-bottom: 5px;
}
.imgLook {
    left: 3px;
    top: 0
}

.boxTasto {
    background-color: #535454;
    width: 29px;
    height: 30px;
    cursor: pointer;
    border-radius: 41px;
    overflow: hidden;
    color: #fff;
    display: inline-block
}

.play {
    background: #00c500;
    border: 2px #006700 solid
}

.stop {
    background: #c50000;
    border: 2px #670000 solid
}
.play:hover {
    background: #10d810!important;
}
.stop:hover {
    background: #d81010!important;
}
.boxTasto:hover {
    background: #717171;
}
.icona {
    margin-left: 8px;
    margin-top: 6px
}

.divisoreCN {
    border-left: 2px solid #4c4a46;
    height: 70px;
    float: left;
    margin-top: -5px;
    margin-left: 0;
    margin-right: 7px
}

.bottoneradio {
    margin-bottom: 3px;
    width: 53px;
    height: 50px;
    border-radius: 5px;
    margin-top: 5px;
    margin-left: 4px;
    padding: 5px
}

.slider {
    -webkit-appearance: none;
    width: 225%;
    height: 8px;
    border-radius: 5px;
    background: #2b2b2b;
    outline: none;
    transition: opacity .2s;
    border: 1px #393939 solid
}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: #fff;
    cursor: pointer;
    border: 6px #686661 solid
}

.slider::-moz-range-thumb {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background: #4caf50;
    cursor: pointer
}

.inforadio {
    color: #e2e2e2;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden
}

.DJ {
    font-size: 20px;
    font-weight: 700
}

.dice {
    font-size: 14px
}

.room {
    font-size: 14px
}

.boxslider {
    margin-top: 8px
}
.bottChiudi {
  background: red;
  border: 2px #600000 solid;
    color: white;
    position: absolute;
    right: 4px;
    padding: 0px 5px 11px 5px;
    line-height: 19px;
    border-radius: 5px;
    width: 22px;
    height: 22px;
    cursor: pointer;
    z-index: 9999;
}
.bottChiudi:before {
    font-family: "Font Awesome 5 Pro";
    content: "X";
    display: inline-block;
    padding-right: 3px;
    vertical-align: middle;
    font-weight:900;
    margin-left: -1px;
    margin-top: -2px;
}
.bottApri {
  background: #0776bd; 
    border: 2px #3891ca solid;
    position: absolute;
    right: 4px;
    padding: 0px 5px 11px 5px;
    line-height: 19px;
    border-radius: 5px;
    width: 22px;
    height: 22px;
    cursor: pointer;
    z-index: 9999;
    margin-top: 3px;
   
}
.bottApri:before {
   font-family: "Font Awesome 5 Pro";
   content: "►";
   display: inline-block;
   padding-right: 0px;
   vertical-align: middle;
   margin-left: 0px;
    font-size: 10px;
    margin-top: -1px;
}
.infoPP {
  color: white;
  margin-top: 5px;
}
::selection {
  background: transparent;
}
.attivo {
    width: 97px !important;
    height: 40px !important;
}
.boxVar {
    width: 75%;
    display: none!important;
}
.nascondiInfoP {
    display: none;
}
.colonnaInterazione {
    width: 100%;
}
.wrapInterazione {
    position: absolute;
    display: none;
    background-color: #201e19;
    width: auto;
    height: auto;
    box-shadow: 0 0 0 2px #686661, 0 1px 0 3px #000, 0 0 0 3px #000;
    border-radius: 2px 2px 0px 0px;
    margin-top: 21px;
    margin-left: 121px;
    padding: 5px;
    z-index: 9999;
}
.attivoWrap {
    display: block;
}

.displayerror {
  font-size: 36px;
  color: #9a9a9a;
  text-align: center;
}
</style>


<div class="player">

<div class="minimize bottChiudi o-c chiudiCAZZO"></div>

	<div class="col-md-3 col-xs-3 boxInterazione" style="margin:0;padding:0;">
    <a href="javascript:play()"><div class="boxTasto play"><i class="fa fa-play icona"></i></div></a>
    <a href="javascript:stop()"><div class="boxTasto stop"><i class="fa fa-pause icona" style="margin-left:7px;"></i></div></a>
    <div onclick="apriRadio()" class="boxTasto richiediP apriRadio"><img src="<?= $config['hotelUrl'] ?>/templates/<?= $config['skin'] ?>/radio/img/bustina.png" style="width: 23px;margin-top: 6px;margin-left: 4px;"></div>
   		<div class="boxslider">
 <input id="vol-control" type="range" min="0" max="100" step="1" oninput="SetVolume(this.value)" onchange="SetVolume(this.value)" class="slider" value="Volume">
		</div>
    </div>   
    
    <div class="col-md-9 col-xs-9 boxOnda" style="padding:0;">
    <div id="boxOnda">

    <div class="col-md-4 col-xs-4 imgLook" style="margin:0;padding:0;">
    <div class="divisoreCN"></div>
    	<div class="testaDJ">  <center> <img src="<?=$config['lookUrl'];?><?= User::userData('look') ?>&direction=2&head_direction=2&size=3" style="margin-left: -5px;margin-top: -20px;">
      </center>
	  </div>
    </div> 
    <div class="col-md-8 col-xs-8 imgLook" style="margin:0;padding:0;left:-20px;top:-5px;width: 190px;">                                  
                                     <div class='inforadio DJ' style="text-overflow: clip;"><i class='fa fa-music' style='color:#f44336;'></i><marquee scrollamount="4" style="margin-bottom: -6px;margin-left: 3px;">P&H Radio</marquee></div>           
      <div class="inforadio dice"><i class="fa fa-comment" style="color:#2196f3;font-size: 18px;"></i><marquee scrollamount="4" style="margin-bottom: -6px;margin-left: 3px;"><?= User::userData('username') ?> Bienvenido a <?= $config['hotelName'] ?>, escucha la mejor musica</marquee></div>
      <div class="inforadio room"><i class="fa fa-home" style="color:#ff9800;font-size: 16px;"></i> P&H Radio</div>
    </div>
    </div>

     </div>
    
<div id="wrapRadioInterazione" class="wrapInterazione" style="display:none;">
	<div style="margin-bottom:3px;">
						<a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Messaggi"><img height="31" width="31" class="tip" title="" src="<?= $config['hotelUrl'] ?>/templates/<?= $config['skin'] ?>/radio/img/message.png"></a>
						<a href="#" target="_blank" class="tip" title="Palinsesto"><img height="31" width="31" class="tip" title="" src="<?= $config['hotelUrl'] ?>/templates/<?= $config['skin'] ?>/radio/img/timetable.png"></a>
                        <a href="#" target="_blank" class="tip" title="Indovinelli"><img height="31" width="31" class="tip" title="" src="<?= $config['hotelUrl'] ?>/templates/<?= $config['skin'] ?>/radio/img/indovinelli.png"></a>
						<a href="#" target="_blank" class="tip" title="News radio"><img height="31" width="31" class="tip" title="" src="<?= $config['hotelUrl'] ?>/templates/<?= $config['skin'] ?>/radio/img/radioN.png"></a>
                        <a href="#" target="_blank" class="tip" title="Supporto al Giocatore"><img height="31" width="31" class="tip" title="" src="<?= $config['hotelUrl'] ?>/templates/<?= $config['skin'] ?>/radio/img/supp.png"></a>
					</div>
</div>


<audio id="radio" src="<?=$hotel['RadioClient'];?>" type="audio/mp3" autoplay="true"></audio>

<script>
jQuery(".chiudiCAZZO").click(function(){
	jQuery(".player").toggleClass("attivo");
    jQuery(".boxOnda").toggleClass("boxVar");
    jQuery(".richiediP").toggleClass("nascondiInfoP");
    jQuery(".boxslider").toggleClass("nascondiInfoP");
    jQuery(".boxInterazione").toggleClass("colonnaInterazione");
    jQuery(".wrapInterazione").toggleClass("boxVar");
    jQuery(".o-c").toggleClass("bottApri");
});
</script>

<script>
function play(){
    document.getElementById('radio').src = "<?=$hotel['RadioClient'];?>";
    document.getElementById('radio').play();
   }
   function stop(){
    document.getElementById('radio').src = "";
    document.getElementById('radio').pause();
   } 
window.SetVolume = function(val)
{
    var player = document.getElementById('radio');
    console.log('Before: ' + player.volume);
    player.volume = val / 100;
    console.log('After: ' + player.volume);
}
function apriRadio() {
  var x = document.getElementById("wrapRadioInterazione");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
</body>
</html>