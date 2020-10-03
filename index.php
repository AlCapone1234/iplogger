<?php
	$ip = $_SERVER['REMOTE_ADDR']; 
	$webbrowser = $_SERVER['HTTP_USER_AGENT'];

	$file = "youriplogdoccument";
	$text = file_get_contents($file);
	$text .= $ip . " " . $webbrowser . "\n";
	file_put_contents($file, $text);
?>
