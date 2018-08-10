<nav class="navbar navbar-light bg-light">
	<?= $welcome ?>
	<span style="position: absolute;left:100px;top:17px;background:#666;color:white;padding:10px 20px;border-radius:0px;">Cash : $<?= $_SESSION['cash']; ?>,00</span>
	<h5>Shopping Cart<img src="./img/cart.png" height="50" width="50"></h5>
	<h5 style="text-align: center;">Welcome, <?php  echo $_SESSION['username'];?>.</h5>
</nav>