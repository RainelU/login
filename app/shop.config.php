<?php
	include_once __DIR__ . '/conexion.config.php';
	$sql = "SELECT * FROM producto ORDER BY id_producto ASC";
	$res = $conn->prepare($sql);
	$res->execute();
	$producto = $res->fetchAll();

	if (count($producto) > 0) {
		foreach ($producto as $row) {
			?>
				
			<div class="col-md-3 container form-control" style="width:100%;text-align:center;margin-top: 50px;background-color:transparent;border:none;">
				<form style="background: blue;" method="post" action="login.php">
					<div style="padding:40px;background-color:#f2f2f2;border-radius: 5px;">
						<img src="./img/<?= $row['image']; ?>" width="200" height="200">
						<h4 style="margin-top: 15px;" class="text-info"><?= $row['name']; ?></h4>
						<h4 class="text-danger">$ <?= $row['price']; ?></h4>
						<input type="text" name="quantity" class="form-control" value="1">
						<input type="hidden" name="hidden_name" value="<?= $row['name']; ?>">
						<input type="hidden" name="hidden_price" value="<?= $row['price']; ?>">
						<button style="margin-top: 15px;" type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart" align="center">Add to Cart</button>
					</div>
				</form>
			</div>
			<?php
		}
	}
?>