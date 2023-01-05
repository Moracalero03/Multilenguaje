<?php

    session_start();

if (!isset($_SESSION['lang']))
	$_SESSION['lang'] = "es";
else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang']))
{
	if ($_GET['lang'] == "es")
		$_SESSION['lang'] = "es";
	else if ($_GET['lang']  == "en")
        $_SESSION['lang'] = "en";
        else if ($_GET['lang']  == "it")
		$_SESSION['lang'] = "it";
}

$json = file_get_contents("../publico/js/" . $_SESSION['lang'] . ".json");

$lang = json_decode($json, true); 
?>