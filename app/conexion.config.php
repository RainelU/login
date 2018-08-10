<?php
	
	try{
		$conn = new PDO("mysql:host=localhost; dbname=loginandregister", "root", "");
		$sql = "SELECT * FROM registro";
		$res = $conn->prepare($sql);
		$res->execute();
	}catch(PDOException $e){
		echo $e;
	}
?>