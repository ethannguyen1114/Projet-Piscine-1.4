<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<link rel="stylesheet" href="connectionTemplate.css" type="text/css">

</head>
<body>
	<form action="traitementClient.php" method="post">
	
	<h2>Créer votre compte</h2><br><br>
		<!--registration fields-->
		<label> Prénom: </label>
		<br>
		<input type="text" id="nom" name="prenomRentre" placeholder="Entrer votre prenom.">
		<br><br>
		<label> Nom: </label>
		<br>
		<input type="text" name="nomRentre" placeholder="Entrer votre nom.">
		<br><br>
		<label> Nationalité: </label>
		<br>
		<input type="text" name="nationaliteRentre" placeholder="Entrer votre nationalite.">
		<br><br>
		<label> Adresse: </label>
		<br>
		<input type="text" name="adresseRentre" placeholder="Entrez votre adresse.">
		<br><br>
		<label> Ville: </label>
		<br>
		<input type="text" name="villeRentre" placeholder="Entrez votre ville de résidence.">
		<br><br>
		<label> Code postal: </label>
		<br>
		<input type="text" name="codepostalRentre" placeholder="Entrez votre code postal.">
		<br><br>
		<label> Téléphone: </label>
		<br>
		<input type="text" name="telephoneRentre" placeholder="Entrez votre numéro de téléphone.">
		<br><br>
		<label> Email : </label>
		<br>
		<input type="text" name="emailRentre" placeholder="Entrez votre courriel.">
		<br><br>		
		<label> Mot de passe: </label>
		<br>
		<input type="password" name="mdpRentre" placeholder="Veuillez definir votre mot de passe.">
		<br><br>
	
		<p>
		<input type="submit" value="Creer Compte"  id="submit">		
		</p>

		</form>
</body>
</html>