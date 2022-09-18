<?php
	
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}
	function sendRconMessage($key, $data = []) {
    // Connect to the Rcon port.
    $socket = @socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    if ($socket !== false) {
        //Attempt to send the data to the server.
        if ( @socket_connect($socket, "51.161.1010.0", "3001")) {
            $message = json_encode([
                'key' => $key,
                'data' => $data
            ]);

            @socket_send($socket, $message, strlen($message), MSG_DONTROUTE);
            @socket_close($socket);
        }
    }
}

?>