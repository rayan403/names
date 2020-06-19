		<?php
		$name = $_POST['name'];
		$amis_1 = $_POST['amis1'];
		$amis_2 = $_POST['amis2'];
		$amis_3 = $_POST['amis3'];
		$amis_4 = $_POST['amis4'];
		$amis_5 = $_POST['amis5'];
		$amis_6 = $_POST['amis6'];
		$amis_7 = $_POST['amis7'];
		$amis_8 = $_POST['amis8'];
		$zname = $name;
		?>
<!DOCTYPE html>
<html>
<head>
	<title>les caractéristique de vos amis</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/perf_amis.css">
</head>
<body>
	<div class="head">
		<h1 align="center">Et bon notre vis. <?php echo $name; ?></h1>
	</div> 
	<div class="sec_1">
		<h2 align="center">D'accord vous venez de taper vos amis  <span class="sahm">====>></span></h2>
	</div>
	<div class="amis">
		<b><?php echo "$amis_1 /" , "$amis_2 /" , "$amis_3 /" , "$amis_4 /" , "$amis_5 /" , "$amis_6 /" , "$amis_7 /" , "$amis_8";?></b>
	</div>
	<div class="sec_2">
		<form method="post" action="youtubetime.php">
			<table>
				<tr>
					<th align="center" colspan="2">Question à repondre</th>
				</tr>
				<tr>
					<td><label for="nom" class="lab">Votre nom :</label></td>
					<td><input type="text" name="name1" class="nom" id="nom" value="<?php echo $zname; ?>"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis1">quel est l'age de "<?php echo $amis_1; ?>" :</label></td>
					<td><input type="number" name="amis1" id="amis1"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis2">quel est l'age de "<?php echo $amis_2; ?>" :</label></td>
					<td><input type="number" name="amis2" id="amis2"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis3">quel est l'age de "<?php echo $amis_3; ?>" :</label></td>
					<td><input type="number" name="amis3" id="amis3"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis4">quel est l'age de "<?php echo $amis_4; ?>" :</label></td>
					<td><input type="number" name="amis4" id="amis4"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis5">quel est l'age de "<?php echo $amis_5; ?>" :</label></td>
					<td><input type="number" name="amis5" id="amis5"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis6">quel est l'age de "<?php echo $amis_6; ?>" :</label></td>
					<td><input type="number" name="amis6" id="amis6"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis7">quel est l'age de "<?php echo $amis_7; ?>" :</label></td>
					<td><input type="number" name="amis7" id="amis7"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis8">quel est l'age de "<?php echo $amis_8; ?>" :</label></td>
					<td><input type="number" name="amis8" id="amis8"></td>
				</tr>
			</table>
			<!-- tables -->
			<table class="noned">
				<tr>
					<td><label for="n_1">Amis n°1 :</label></td>
					<td><input type="text" name="amis_1" id="n_1" required placeholder="Amis n°1" value="<?php echo $amis_1?>"></td>
				</tr>
				<tr>
					<td><label for="n_2">Amis n°2 :</label></td>
					<td><input type="text" name="amis_2" id="n_2" required placeholder="Amis n°2" value="<?php echo $amis_2?>"></td>
				</tr>
				<tr>
					<td><label for="n_3">Amis n°3 :</label></td>
					<td><input type="text" name="amis_3" id="n_3" required placeholder="Amis n°3" value="<?php echo $amis_3?>"></td>
				</tr>
				<tr>
					<td><label for="n_4">Amis n°4 :</label></td>
					<td><input type="text" name="amis_4" id="n_4" required placeholder="Amis n°4" value="<?php echo $amis_4?>"></td>
				</tr>
				<tr>
					<td><label for="n_5">Amis n°5 :</label></td>
					<td><input type="text" name="amis_5" id="n_5" required placeholder="Amis n°5" value="<?php echo $amis_5?>"></td>
				</tr>
				<tr>
					<td><label for="n_6">Amis n°6 :</label></td>
					<td><input type="text" name="amis_6" id="n_6" required placeholder="Amis n°6" value="<?php echo $amis_6?>"></td>
				</tr>
				<tr>
					<td><label for="n_7">Amis n°7 :</label></td>
					<td><input type="text" name="amis_7" id="n_7" required placeholder="Amis n°7" value="<?php echo $amis_7?>"></td>
				</tr>
				<tr>
					<td><label for="n_8">Amis n°8 :</label></td>
					<td><input type="text" name="amis_8" id="n_8" required placeholder="Amis n°8" value="<?php echo $amis_8?>"></td>
				</tr>
			</table>
			<input type="checkbox" name="accep" id="accep">
			<label for="accep"><span class="accep">Acceptez que il ya Rayan benali</span></label>
			<br/><br>
			<input type="submit" name="sub_btn" id="sub_btn" value="confirmez">
		</form>
	</div>
</body>
</html>

