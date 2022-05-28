<?php
//ouverture d'une connexion bdd client
$objectPdo = new PDO('mysql:host=localhost;dbname=omnessport','root','');

//préparation d'une requete d'insertion
$pdoStat = $objectPdo->prepare('INSERT INTO client VALUES (NULL, :nom, :prenom, :adresse, :ville, :codepostal, :pays, :mdp, :telephone, :courriel)');

//on lie chaque marqueur à une valeur
$pdoStat->bindValue(':nom', $_POST['nomRentre'],PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['prenomRentre'],PDO::PARAM_STR);
$pdoStat->bindValue(':adresse', $_POST['adresseRentre'],PDO::PARAM_STR);
$pdoStat->bindValue(':ville', $_POST['villeRentre'],PDO::PARAM_STR);
$pdoStat->bindValue(':codepostal', $_POST['codepostalRentre'],PDO::PARAM_STR);
$pdoStat->bindValue(':pays', $_POST['nationaliteRentre'],PDO::PARAM_STR);
$pdoStat->bindValue(':mdp', $_POST['mdpRentre'],PDO::PARAM_STR);
$pdoStat->bindValue(':telephone', $_POST['telephoneRentre'],PDO::PARAM_STR);
$pdoStat->bindValue(':courriel', $_POST['emailRentre'],PDO::PARAM_STR);

//execution de la requete preparee
$insertIsOk = $pdoStat->execute();

if($insertIsOk){
	$message = 'Bienvenue ';
	header('Location: connectionClient.php');
}
else{
	$message = 'Echec de l\insertion';
}
?>
