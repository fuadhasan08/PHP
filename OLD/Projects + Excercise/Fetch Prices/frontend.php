<?php require_once("config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" href="style.css">
	<title>Crypto Statistics</title>
</head>

<body>
	<h1><span class="blue">&lt;</span>Crypto<span class="blue">&gt;</span> <span class="yellow">Pricing</pan>
	</h1>
	<h2>Created with ❤️ by <a href="https://github.com/fuadhasan08" target="_blank">Fuad Hasan</a> ⚡By <a href="https://github.com/ratul152018" target="_blank">Md. Raisul Alam</a></h2>

	<table class="container">
		<thead>
			<tr>
				<th>
					<h1>Sl.</h1>
				</th>
				<th>
					<h1>Name</h1>
				</th>
				<th>
					<h1>Price</h1>
				</th>
				<th>
					<h1>Stock</h1>
				</th>
				<th>
					<h1>Stock Price</h1>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$count = 0;
			$total = 0;
			$key = array_keys($id_arr);
			$size = sizeof($key);
			for ($i = 0; $i < $size; $i++) {
				$count++
			?>
				<tr>
					<td class="first_td"><?php if ($count < 10) {
												echo 0 . $count . ".";
											} else {
												echo $count . ".";
											} ?></td>
					<td>
						<?php echo $data["data"][$id_arr[$key[$i]]]["name"]; ?>
					</td>
					<td><?php echo $pr = $data["data"][$id_arr[$key[$i]]]["quote"]["USD"]["price"]; ?></td>
					<td><?php echo $am = $stock[$key[$i]]; ?></td>
					<td><?php 
						$price_s = round((($pr * $am) * 92), 0);
						echo $price_s;
						$total += $price_s; ?></td>
				</tr>
			<?php } ?>
		</tbody>
		<h1>Total: <?php echo $total; ?><span class="bdt"> BDT</span></h1>
			<?php 
				if(($total - 3130) > 0) {
					?>
					<h1 style="color: green">Difference: <?php echo ($total - 3130); ?><span class="bdt"> BDT</span></h1>
			<?php
				} else {
					?>
					<h1 style="color: red">Difference: <?php echo ($total - 3130); ?><span class="bdt"> BDT</span></h1>
			<?php
				}
			?>
	</table>
	<script>
		// let n = document.getElementById("diff")
		// let x = n.innerText
		// let y = x.search("-")

		// if (y != -1) {
		// 	n.style.color = "red"
		// } else {
		// 	n.style.color = "green"
		// }







		// let tbody = document.querySelector("tbody");
		// let save_stock = document.querySelector(".save_stock");
		// let val_arr = JSON.parse("<?php //echo $encoded 
										?>");

		// tbody.addEventListener("click", (e) => {
		// 	if (e.target.classList.contains('stock_input')) {
		// 		let value = e.target.value;
		// 		let next = e.target.nextSibling;
		// 		next.style.display = "block"

		// 		next.addEventListener("click", (e) => {
		// 			e.preventDefault();
		// 			next.style.display = "none"

		// 		})
		// 	}
		// })
	</script>
</body>

</html>