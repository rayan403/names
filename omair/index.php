<?php 
$password = ['password'];
$password2 = ['password2'];

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcom back hero</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="inscrip" align="center">
		<form action="clientarea.php" method="post">
			<h1>Enrez les information</h1>
			<table>
				<tr>
					<td><label for="name">Entrez votre nom : </label></td>
					<td><input type="text" name="name" id="name" autofocus placeholder="nom" required=""></td>
				</tr>
				<tr>
					<td><label for="email">Entrez votre email : </label></td>
					<td><input type="email" name="email" id="email" placeholder="exemple:exemple@gmail.com" required=""></td>
				</tr>
				<tr>
					<td><label for="password">Entrez votre password : </label></td>
					<td><input type="password" minlength="8" name="password" id="password" placeholder="password" required=""></td>
				</tr>
				<tr>
					<td><label for="password2">Confirmez password : </label></td>
					<td><input type="password" minlength="8" name="password2" id="password2" placeholder="confirmez mot de pass" required=""></td>
				</tr>
				<tr>
					<td></td>
					<td align="right"><input type="submit" name="submit" value="confirmez" id="sub_btn"></td>
				</tr>
			</table>
		</form>
	</div>
	<div class="foot">
		<h2 align="center">By Rayan benali Amjoud</h2>
	</div>
</body>
</html>