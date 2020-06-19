<!DOCTYPE html>
<html>
<head>
	<title>my youtube</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/youtubetime.css">
</head>
<body>
<?php
//names
$amis_1 = $_POST['amis_1'];
$amis_2 = $_POST['amis_2'];
$amis_3 = $_POST['amis_3'];
$amis_4 = $_POST['amis_4'];
$amis_5 = $_POST['amis_5'];
$amis_6 = $_POST['amis_6'];
$amis_7 = $_POST['amis_7'];
$amis_8 = $_POST['amis_8'];
//numbers
$name1 = $_POST['name1'];
$amis1 = $_POST['amis1'];
$amis2 = $_POST['amis2'];
$amis3 = $_POST['amis3'];
$amis4 = $_POST['amis4'];
$amis5 = $_POST['amis5'];
$amis6 = $_POST['amis6'];
$amis7 = $_POST['amis7'];
$amis8 = $_POST['amis8'];
$accep = $_POST['accep'];
if ($accep) {
	echo '
	<figure>
	    <figcaption>
	    	<h2>If you wan to create like this site .<br><br>Or you have idea for site ,follow me in youtube</h2>
	    </figcaption>
	    <figcaption>
	    	<br/><h4 class="h4">This chanel for développing informatique: <br><br>
			Les langue : HTML , CSS , PHP OOP/Mysql , JavaScript , Python , Ruby et Noodes ... <br><br>
			Les réseaux : Proxy , local , connexion masqué et IP ... <br><br>
			Les sérveurs : local , externe , LAN , WWW , programmed ...
			</h4>
		</figcaption>
		<a href="https://www.youtube.com/channel/UC4TULqry-mm4y2bTTNFznyg/featured?view_as=subscriber" target="_blank" title="logo" ><button class="btn">Subscribe</button></a>
		<a href="https://www.youtube.com/channel/UC4TULqry-mm4y2bTTNFznyg/featured?view_as=subscriber" target="_blank" title="logo" ><img src="chanel_logo.jpg"  class="img" /></a>
	</figure>
	';
}
else{
	echo " <br><br>ERROR cette page ne fonction pas seul si vous remplire correctement";
}
?>
	<form method="post" action="end.php">
			<table>
				<tr>
					<th align="center" colspan="2">Question à repondre</th>
				</tr>
				<tr>
					<td><input type="text" name="name" class="name" value="<?php echo $name1;?>"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis1">quel est l age de "<?php echo $amis1; ?>" :</label></td>
					<td><input type="number" name="amis1" id="amis1" value="<?php echo $amis1; ?>"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis2">quel est l age de "<?php echo $amis2; ?>" :</label></td>
					<td><input type="number" name="amis2" id="amis2" value="<?php echo $amis2; ?>"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis3">quel est l age de "<?php echo $amis3; ?>" :</label></td>
					<td><input type="number" name="amis3" id="amis3" value="<?php echo $amis3; ?>"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis4">quel est l age de "<?php echo $amis4; ?>" :</label></td>
					<td><input type="number" name="amis4" id="amis4" value="<?php echo $amis4; ?>"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis5">quel est l age de "<?php echo $amis5; ?>" :</label></td>
					<td><input type="number" name="amis5" id="amis5" value="<?php echo $amis5; ?>"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis6">quel est l age de "<?php echo $amis6; ?>" :</label></td>
					<td><input type="number" name="amis6" id="amis6" value="<?php echo $amis6; ?>"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis7">quel est l age de "<?php echo $amis7; ?>" :</label></td>
					<td><input type="number" name="amis7" id="amis7" value="<?php echo $amis7; ?>"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis8">quel est l age de "<?php echo $amis8; ?>" :</label></td>
					<td><input type="number" name="amis8" id="amis8" value="<?php echo $amis8; ?>"></td>
				</tr>
			</table>
			<!-- tables --> 
			<table>
				<tr align="justifie">
					<td><label for="amis1">quel est l'age de "<?php echo $amis_1; ?>" :</label></td>
					<td><input type="text" name="amis_1" id="amis1" value="<?php echo $amis_1; ?>"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis2">quel est l'age de "<?php echo $amis_2; ?>" :</label></td>
					<td><input type="text" name="amis_2" id="amis2" value="<?php echo $amis_2; ?>"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis3">quel est l'age de "<?php echo $amis_3; ?>" :</label></td>
					<td><input type="text" name="amis_3" id="amis3" value="<?php echo $amis_3; ?>"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis4">quel est l'age de "<?php echo $amis_4; ?>" :</label></td>
					<td><input type="text" name="amis_4" id="amis4" value="<?php echo $amis_4; ?>"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis5">quel est l'age de "<?php echo $amis_5; ?>" :</label></td>
					<td><input type="text" name="amis_5" id="amis5" value="<?php echo $amis_5; ?>"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis6">quel est l'age de "<?php echo $amis_6; ?>" :</label></td>
					<td><input type="text" name="amis_6" id="amis6" value="<?php echo $amis_6; ?>"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis7">quel est l'age de "<?php echo $amis_7; ?>" :</label></td>
					<td><input type="text" name="amis_7" id="amis7" value="<?php echo $amis_7; ?>"></td>
				</tr>
				<tr align="justifie">
					<td><label for="amis8">quel est l'age de "<?php echo $amis_8; ?>" :</label></td>
					<td><input type="text" name="amis_8" id="amis8" value="<?php echo $amis_8; ?>"></td>
				</tr>
			</table>
			<!-- tables -->
			<input type="submit" name="sub" value="next" class="sub_btn">
		</form>
</body>
</html>