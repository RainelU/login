<?php

	$title = "Sign In | Sign Up";

	include_once __DIR__ . '/app/conexion.config.php';

	ob_start();
	include_once __DIR__ . '/templates/parallax.html.php';
	$parallax = ob_get_clean();
	
	ob_start();
	include_once __DIR__ . '/templates/modals.html.php';
	$modal_login = ob_get_clean();

	include_once __DIR__ . '/templates/layout.html.php';
?>