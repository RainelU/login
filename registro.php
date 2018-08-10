<?php
	
	$title = "ERROR ERROR";

	try{
		include_once __DIR__ . '/app/conexion.config.php';

		$sql = "INSERT INTO registro (`id`, `firstname`, `username`, `email`, `pass`, `cash`, `ADM`, `fecha_registro`) VALUES (NULL, :firstname, :name, :email, :pass, 0, 0, CURRENT_TIMESTAMP)";

		$res = $conn->prepare($sql);
		$res->bindValue(":firstname", $_POST['firstname-reg']);
		$res->bindValue(":name", $_POST['name-reg']);
		$res->bindValue(":email", $_POST['email-reg']);
		$res->bindValue(":pass", password_hash($_POST['pass-reg'], PASSWORD_DEFAULT));

		if($res->execute()){
			header("Location: index.php");
		}else{
			ob_start();
			include_once __DIR__ . '/templates/error.html.php';
			$error = ob_get_clean();
		}

		include_once __DIR__ . '/templates/layout-error.html.php';

	}catch(PDOException $e){
		$title = "Ha ocurrido un error";
		echo "Hola, hay error.";
		echo $e;
	}