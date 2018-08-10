<?php if ($_SESSION['ADM'] === "1"): ?>
	<li class="main nav-item dropdown">
	<a class="nav-link welcome" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<img class="img-person" src="./img/avatar.png" width="60" height="60">
	</a>
	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		<h5><?= $_SESSION['username']; ?></h5>
		<a class="config" href="#"> ⊙ Configuración</a>
		<a class="config" href="#"> ⊙ Privacidad</a>
		<a class="ultimo" href="#"> ⊙ Términos y condiciones</a>
		<form action="regalo.php" method="POST">
			<input style="width:100%;text-align:center;background:transparent;border:none;color:white;" type="number" name="id" value="" placeholder="Client">
			<input style="width:100%;text-align:center;background:transparent;border:none;color:white;" type="number" name="cash" value="" placeholder="Cash">
			<button style="width:100%;background-color: #4787a7;border: none;color: white; cursor:pointer;" data-toggle="modal">Send Cash</button>
		</form>
		<a class="logout" href=""><form action="logout.php" method="post" style="color: black;">Cerrar Sesión</form></a>
	</div>
</li>
<?php endif ?>

<?php if ($_SESSION['ADM'] === "0"): ?>
	<li class="main nav-item dropdown">
	<a class="nav-link welcome" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<img class="img-person" src="./img/avatar.png" width="60" height="60">
	</a>
	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		<h5><?= $_SESSION['username']; ?></h5>
		<a class="config" href="#"> ⊙ Configuración</a>
		<a class="config" href="#"> ⊙ Privacidad</a>
		<a class="ultimo" href="#"> ⊙ Términos y condiciones</a>
		<form action="regalo.php" method="POST">
			<button style="width:100%;background-color: #4787a7;border: none;color: white; cursor:pointer;" data-toggle="modal">Gift Card $200</button>
		</form>
		<a class="logout" href=""><form action="logout.php" method="post" style="color: black;">Cerrar Sesión</form></a>
	</div>
</li>
<?php endif ?>