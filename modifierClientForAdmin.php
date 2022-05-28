<?php
//ouverture d'une connexion bdd client
$objectPdo = new PDO('mysql:host=localhost;dbname=omnessport','root','');

//requete 
$pdoStat = $objectPdo->prepare('UPDATE client SET client_nom=:nomNew, client_prenom=:prenomNew, client_adresse1=:adresseNew, client_ville=:villeNew, client_codep=:codepostalNew, 
client_pays=:nationaliteNew, client_mdp=:mdpNew, client_telephone=:telephoneNew, client_courriel=:emailNew WHERE client_id =:sameNum LIMIT 1');

//liaison du parametre nommé
$pdoStat->bindValue(':sameNum', $_POST['sameNum'], PDO::PARAM_STR);
$pdoStat->bindValue(':nomNew', $_POST['nomNew'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenomNew', $_POST['prenomNew'], PDO::PARAM_STR);
$pdoStat->bindValue(':adresseNew', $_POST['adresseNew'], PDO::PARAM_STR);
$pdoStat->bindValue(':villeNew', $_POST['villeNew'], PDO::PARAM_STR);
$pdoStat->bindValue(':codepostalNew', $_POST['codepostalNew'], PDO::PARAM_STR);
$pdoStat->bindValue(':nationaliteNew', $_POST['nationaliteNew'], PDO::PARAM_STR);
$pdoStat->bindValue(':mdpNew', $_POST['mdpNew'], PDO::PARAM_STR);
$pdoStat->bindValue(':telephoneNew', $_POST['telephoneNew'], PDO::PARAM_STR);
$pdoStat->bindValue(':emailNew', $_POST['emailNew'], PDO::PARAM_STR);

//exécution de la requete
$executeIsOk = $pdoStat->execute();

if($executeIsOk)
{
	$message = 'Le client a été modifié.';
	header('Location: listingClientForAdmin.php');
}
else
{
	$message = 'Echec de la modification client.';
}
?>
