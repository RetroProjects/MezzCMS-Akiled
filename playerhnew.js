	var pvpplayer_open = true;
	var play = true;
	player2.load();
	
//PLAYER	
$(function() {
	$( ".playerhabpvp-area" ).draggable({ axis: "x", containment: "body", scroll: false });
});
function cerrarplayerpvp(){
		 if (pvpplayer_open)
        {
            $(".playerhabpvp-area").css("top", "0px");
            $(".playerhabpvp-toggler i").removeClass("fa-chevron-up").addClass("fa-chevron-down");
            pvpplayer_open = false;
        }
        else
        {
            $(".playerhabpvp-area").css("top", "0");
            //$(".playerhabpvp-toggler").tooltipster("content", "Esconder");
            $(".playerhabpvp-toggler i").removeClass("fa-chevron-down").addClass("fa-chevron-up");
            pvpplayer_open = true;
        }
	}
	
	
	function playpause(){
	 if (play)
        {
            //$(".playpause").tooltipster("content", "Ouvir");
            $(".playpause i").removeClass("fa-pause").addClass("fa-play");
            play = false;
            player.pause();
        }
        else
        {
            //$(".playpause").tooltipster("content", "Pausar");
            $(".playpause i").removeClass("fa-play").addClass("fa-pause");
            play = true;
            player.play();
        }	
		
	}

	function resetclient(){
	document.cookie = 'client_preference=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
	location.href = "/clients";
	}

function UpdateAudio(){
    var update = document.getElementById('player2');
	
	player2.src='https://stream.zenolive.com/1hvvcuhdztzuv.aac';
	
	player2.load();
}

