<?php require_once("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h1><span class="blue">&lt;</span>Crypto<span class="blue">&gt;</span> <span class="yellow">Pricing</pan></h1>
<h2>Created with love by <a href="https://github.com/fuadhasan08" target="_blank">Fuad Hasan</a></h2>

<table class="container">
	<thead>
		<tr>
			<th><h1>Sl.</h1></th>
			<th><h1>Name</h1></th>
			<th><h1>Price</h1></th>
			<th><h1>Stock</h1></th>
			<th><h1>Stock Price</h1></th>
		</tr>
	</thead>
	<tbody>
        <?php 
        $count = 0;
            $key = array_keys($id_arr);
            $size = sizeof($key);
            for ($i=0; $i < $size; $i++) { $count++
            ?>
		<tr>
            <td class="first_td"><?php if($count < 10) {echo 0 . $count . ".";}else {echo $count . ".";} ?></td>
			<td>
                <?php echo $data["data"][$id_arr[$key[$i]]]["name"]; ?>
            </td>
			<td><?php echo $pr = $data["data"][$id_arr[$key[$i]]]["quote"]["USD"]["price"] ; ?></td>
			<td><?php echo $am = $stock[$key[$i]]; ?></td>
			<td><?php echo round((($pr * $am) * 92), 0) . " BDT"; ?></td>
		</tr>
        <?php } ?>
	</tbody>
</table>
</body>
</html>
