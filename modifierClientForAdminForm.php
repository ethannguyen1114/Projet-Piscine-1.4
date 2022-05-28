<?php
//ouverture d'une connexion bdd client
$objectPdo = new PDO('mysql:host=localhost;dbname=omnessport','root','');

//requete 
$pdoStat = $objectPdo->prepare('SELECT * FROM client WHERE client_id=:num');

//liaision du parametre nommé
$pdoStat->bindValue(':num', $_GET['client_id'], PDO::PARAM_INT);

//exécution de la requete
$executeIsOk = $pdoStat->execute();

//on recupere le contact
$client = $pdoStat->fetch();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Modification form</title>
	<link rel="stylesheet"  href="connectionTemplate.css">
    <img src="Logo_Omnes_Education.png" width="100"/>
</head>
<body>
		<h1>Modifier compte</h1>
		<form action="modifierClientForAdmin.php" method="post">
		
				<input type="hidden" name="sameNum" value="<?= $client['client_id'] ?>">
				<!--registration fields-->
				<label> Prénom: </label>
					<br>
					<input type="text" name="prenomNew"  value="<?= $client['client_prenom']; ?>">
					<br><br>
				<label> Nom: </label>
					<br>
					<input type="text" name="nomNew" value="<?= $client['client_nom']; ?>">
					<br><br>
				<label> Nationalité: </label>
					<br>
					<input type="text" name="nationaliteNew" value="<?= $client['client_pays']; ?>">
					<br><br>
				<label> Adresse: </label>
					<br>
					<input type="text" name="adresseNew" value="<?= $client['client_adresse1']; ?>">
					<br><br>
				<label> Ville: </label>
					<br>
					<input type="text" name="villeNew" value="<?= $client['client_ville']; ?>">
					<br><br>
				<label> Code postal: </label>
					<br>
					<input type="text" name="codepostalNew" value="<?= $client['client_codep']; ?>">
					<br><br>
				<label> Téléphone: </label>
					<br>
					<input type="text" name="telephoneNew" value="<?= $client['client_telephone']; ?>">
					<br><br>
				<label> Email : </label>
					<br>
					<input type="text" name="emailNew" value="<?= $client['client_courriel']; ?>">
					<br><br>		
				<label> Mot de passe: </label>
					<br>
					<input type="password" name="mdpNew" value="<?= $client['client_mdp']; ?>">
					<br><br>
				<p>
					<input type="submit" value="Modifier compte" id="submit">	
				</p>
		</form>
</body>
</html>