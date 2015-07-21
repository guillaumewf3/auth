<?php 
	session_start();
	include("functions.php");
	pr($_SESSION);

	//vérification que l'utilisateur est bien connecté

	//si l'utilisateur n'est pas connecté, on le redirige vers login.php
	if (empty($_SESSION['user'])){
		header("Location: login.php");
		die();
	}

	//sinon... on ne fait rien et la page ci-dessous s'affichera

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profil !</title>
</head>
<body>

	<a href="logout.php" title="Me déconnecter de mon compte">Déconnexion</a>

	<h1>Profil de <?php echo $_SESSION['user']['username']; ?></h1>
	<p>Cette page ne devrait être accessible que pour les utilisateurs connectés.</p>
</body>
</html>