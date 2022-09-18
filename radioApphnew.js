var radioApp=function($mp3Url){var audioIsStart=false;var mp3Url=$mp3Url;this.check=false;audioStart=function(){$("#radioAudio").html('');$("#radioAudio").html('<audio id="audio" src="'+mp3Url+'" ></audio>');$('#audio').trigger("play");$('.playerIcon').removeClass('play');$('.playerIcon').addClass('pause');audioIsStart=true;}
reloadInfo=function(withInterval){if(!withInterval&&this.check){return;}
this.check=true;$.get('/api/radio/getStats?lok=1',function(data){$('.listeners').attr("data-txt",data.listeners_now);$('.currentSong span').attr("data-txt",data.current_song);$('.currentDj span').attr("data-txt",data.current_dj);adjustPositionOfListeners();setTimeout(function(){check=false},4000);});}
setReloadInterval=function(){reloadInfo(true);setTimeout(setReloadInterval,30000);}
audioPause=function(){var audio=document.getElementById('audio');var isPlaying=audio.currentTime>0&&!audio.paused&&!audio.ended&&audio.readyState>2;if(audioIsStart)
{var audio=document.getElementById('audio');audio.currentTime=0;$("#audio").trigger("pause");$("#audio").addClass('pause');$('.playerIcon').removeClass('pause');$('.playerIcon').addClass('play');audioIsStart=false;}
else
{audioStart();setVolume(getVolume(),false);}}
getVolume=function(){return 50;}
setHandlers=function(){$("#radio").draggable({handle:".btn-move",containment:"#client-ui",scroll:false});$("#volume > #barra").slider({min:0,max:100,value:100,range:"min",animate:true,slide:function(event,ui){setVolume(ui.value,true);}});$(document).on('click','.btn-refresh',function(){reloadInfo(false);});$(document).on('click','.playerIcon',function(){audioPause();});$(document).on('click','.btn-close',function(){reducePlayer();});$(window).resize(resize);$(window).scroll(resize);$(document).ready(resize);}
setVolume=function(volume,modify){var currentVolume=(volume)/100;$("#volumeHidden").html(volume);$('#audio').prop("volume",currentVolume);if(modify)
localStorage.setItem('volume',volume);else
$("#volume > #barra").slider("value",volume);}
resize=function(){var $height=$(document).height();var $width=$(document).width();$('#client-ui').css("height",$height);$('#client-ui').css("width",$width);}
reducePlayer=function(){var isOpen=$('#radioBig').css('display')!='none';var divs=isOpen?['Big','Small']:['Small','Big'];$('#radio'+divs[0]).slideToggle('slow',function(){$('#radio'+divs[1]).slideToggle();});}
adjustPositionOfListeners=function(){var $listeners=$('.listeners').data('txt')+"";var $actualSize=$('.listeners').css('padding-left');if($listeners.length==1)
$actualSize=41;else if($listeners.length==2)
$actualSize=39;else if($listeners.length==3)
$actualSize=36;else if($listeners.length==4)
$actualSize=parseFloat(33.5);$('.listeners').css('padding-left',$actualSize);}
this.start=function(){setHandlers();audioStart();setVolume(getVolume(),false);setReloadInterval();}}