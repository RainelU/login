<?php 
	include_once __DIR__ . '/app/conexion.config.php';

	$sql = "UPDATE `registro` SET `cash` = :cash WHERE `registro`.`id` = :id";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(':id', $_POST['id']);
	$stmt->bindValue(':cash', $_POST['cash']);
	$stmt->execute();
	
	print_r($_POST);

	header("Location: index.php");
?>