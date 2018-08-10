<?php

	try{
		include_once __DIR__ . '/app/conexion.config.php';

		$sql = 'SELECT * FROM `registro` WHERE email = :email';

		$res = $conn->prepare($sql);
		$res->bindValue(":email", $_POST['email-login']);

		$res->execute();

		$usuario = $res->fetchAll();
		$password = $_POST['pass-login'];

		if (empty($_POST['email-login']) || empty($_POST['pass-login'])) {
			header("Location: index.php");
		}else if (count($usuario) > 0 && password_verify($_POST['pass-login'], $usuario[0]['pass'])) {
			session_start();

			$_SESSION['username'] = $usuario[0]['username'];
			$_SESSION['firstname'] = $usuario[0]['firstname'];
			$_SESSION['email'] = $usuario[0]['email'];
			$_SESSION['cash'] = $usuario[0]['cash'];
			$_SESSION['ADM'] = $usuario[0]['ADM'];

			$title = "Sign In";
			ob_start();
			include_once __DIR__ . '/templates/welcome.html.php';
			$welcome = ob_get_clean();
			ob_start();
			include_once __DIR__ . '/templates/navbar.html.php';
			$nav = ob_get_clean();
			ob_start();
			include_once __DIR__ . '/templates/header-login.html.php';
			$shop = ob_get_clean();
			ob_start();
			include_once __DIR__ . '/app/shop.config.php';
			$shopphp = ob_get_clean();
			include_once __DIR__ . '/templates/login.html.php';

		}else{
			header("Location: index.php");
		}

	}catch(PDOException $e){
		echo $e;
	}