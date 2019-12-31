<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if( $_POST['element_1'] ) {
		$url = htmlspecialchars($_POST['element_1'],ENT_QUOTES);
		$args = "-o '/var/www/ytmp3/downloads/%(title)s-%(id)s.%(ext)s' -x --audio-format mp3 ".$url;
		$command = "/usr/local/bin/youtube-dl ".$args;
		exec($command);
	}
	header("Location: ./downloads");
	die();
}
include("form.html");
?>
