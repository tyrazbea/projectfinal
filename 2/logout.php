<?php 
	
	session_start();

	if(session_destroy())
	{
		header("Location: http://127.0.0.1/stm2/index.html");
	}

?>