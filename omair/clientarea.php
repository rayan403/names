<!DOCTYPE html>
<html>
<head>
	<title>Welcom</title>
	<link rel="stylesheet" type="text/css" href="css/clientarea.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="head" align="center">
		<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$zname = $name;
?>
		<h1>Bonjour monsieur <?php echo $name; ?></h1>
	</div>
	<div class="consi">
		<h2>wa 3endak tnsana</h2>
	</div>
	<div class="pref_amis" align="left">
		<form method="post" action="perf_amis.php">
			<table align="center">
				<tr>
					<td><label for="nom" class="lab">Votre nom :</label></td>
					<td><input type="text" name="name" id="nom" value="<?php echo $zname; ?>"></td>
				</tr>
				<tr>
					<td><label for="n_1">Amis n°1 :</label></td>
					<td><input type="text" name="amis1" id="n_1" required placeholder="Amis n°1"></td>
				</tr>
				<tr>
					<td><label for="n_2">Amis n°2 :</label></td>
					<td><input type="text" name="amis2" id="n_2" required placeholder="Amis n°2"></td>
				</tr>
				<tr>
					<td><label for="n_3">Amis n°3 :</label></td>
					<td><input type="text" name="amis3" id="n_3" required placeholder="Amis n°3"></td>
				</tr>
				<tr>
					<td><label for="n_4">Amis n°4 :</label></td>
					<td><input type="text" name="amis4" id="n_4" required placeholder="Amis n°4"></td>
				</tr>
				<tr>
					<td><label for="n_5">Amis n°5 :</label></td>
					<td><input type="text" name="amis5" id="n_5" required placeholder="Amis n°5"></td>
				</tr>
				<tr>
					<td><label for="n_6">Amis n°6 :</label></td>
					<td><input type="text" name="amis6" id="n_6" required placeholder="Amis n°6"></td>
				</tr>
				<tr>
					<td><label for="n_7">Amis n°7 :</label></td>
					<td><input type="text" name="amis7" id="n_7" required placeholder="Amis n°7"></td>
				</tr>
				<tr>
					<td><label for="n_8">Amis n°8 :</label></td>
					<td><input type="text" name="amis8" id="n_8" required placeholder="Amis n°8"></td>
				</tr>
				<tr>
					<td></td>
					<td align="right"><input type="submit" name="submit" id="sub_btn"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>