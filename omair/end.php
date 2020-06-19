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
$name = $_POST['name'];
$amis1 = $_POST['amis1'];
$amis2 = $_POST['amis2'];
$amis3 = $_POST['amis3'];
$amis4 = $_POST['amis4'];
$amis5 = $_POST['amis5'];
$amis6 = $_POST['amis6'];
$amis7 = $_POST['amis7'];
$amis8 = $_POST['amis8'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>La fin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/end.css">
</head>
<body>
	<h1 class="lfn" align="center">C'est la fin</h1>
	<h3>Voilà tous les information</h3>
	<ul>
		<li class="prob">Votre nom est : <span class="per"><?php echo $name; ?></li>
		<li>Votre Amis n°1 : <span class="per"><?php echo $amis_1; ?> avec l'age de <?php echo $amis1; ?></span></li>
		<li>Votre Amis n°2 : <span class="per"><?php echo $amis_2; ?> avec l'age de <?php echo $amis2; ?></span></li>
		<li>Votre Amis n°3 : <span class="per"><?php echo $amis_3; ?> avec l'age de <?php echo $amis3; ?></span></li>
		<li>Votre Amis n°4 : <span class="per"><?php echo $amis_4; ?> avec l'age de <?php echo $amis4; ?></span></li>
		<li>Votre Amis n°5 : <span class="per"><?php echo $amis_5; ?> avec l'age de <?php echo $amis5; ?></span></li>
		<li>Votre Amis n°6 : <span class="per"><?php echo $amis_6; ?> avec l'age de <?php echo $amis6; ?></span></li>
		<li>Votre Amis n°7 : <span class="per"><?php echo $amis_7; ?> avec l'age de <?php echo $amis7; ?></span></li>
		<li>Votre Amis n°8 : <span class="per"><?php echo $amis_8; ?> avec l'age de <?php echo $amis8; ?></span></li>
	</ul>
	<div class="musics">
		<table>
			<tr>
				<td><audio src="suicide_squad.mp3" controls="" autoplay=""></audio></td>
			</tr>
			<h1 align="center">Auto music gift from Rayan benali</h1>
		</table>
	</div>
</body>
</html>