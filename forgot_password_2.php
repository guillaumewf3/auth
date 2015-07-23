<?php 
	include("config.php");
	include("db.php");
	include("functions.php");

	//si le form est soumis...
	if (!empty($_POST)){

		$error = "";

	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Créez votre nouveau mot de passe</title>
</head>
<body>
	
	<h1>Choisissez votre nouveau mot de passe</h1>

	<p>Veuillez entrer 2 fois votre nouveau mot de passe ci-dessous</p>
	<form method="POST">
		<div>
			<label for="password">Votre mot de passe</label>
			<input type="password" name="password" id="password" />
		</div>
		<div>
			<label for="password_confirm">Encore une fois !</label>
			<input type="password" name="password_confirm" id="password_confirm" />
		</div>
		<input type="submit" value="Sauvegarder" />
	</form>

</body>
</html>