<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/import.css">
</head>
<body>

	<main>
		<?php if (isset($error)): ?>
			<?= $error ?>
		<?php endif ?>
	</main>
	<script src="./bootstrap/js/jquery-3.3.1.min.js"></script>
	<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="./bootstrap/js/popper.min.js"></script>
	<script src="./js/validar.js"></script>
</body>
</html>