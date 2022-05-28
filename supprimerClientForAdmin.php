<!DOCTYPE html>
<html>
	
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	

</html>

<?php

//ouverture d'une connexion bdd client
$objectPdo = new PDO('mysql:host=localhost;dbname=omnessport','root','');

//requete 
$pdoStat = $objectPdo->prepare('DELETE FROM client WHERE client_id=:num LIMIT 1');

//liaision du parametre nommé
$pdoStat->bindValue(':num', $_GET['client_id'], PDO::PARAM_INT);

//exécution de la requete
$executeIsOk = $pdoStat->execute();

if($executeIsOk)
{
	
	header('Location: listingClientForAdmin.php');
}
else
{
	$message = 'Echec de la suppression du compte client';
}
?>



