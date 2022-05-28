<?php
//ouverture d'une connexion bdd client
$objectPdo = new PDO('mysql:host=localhost;dbname=omnessport','root','');

//requete 
$pdoStat = $objectPdo->prepare('SELECT * FROM client');

//execution de la requete
$executeIsOk = $pdoStat->execute();

//récupération des résultats
$clients = $pdoStat->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
        
	<title>Listing modification/suppression pour Admin</title>
    <link rel="stylesheet"  href="connectionTemplate.css">
    <img src="Logo_Omnes_Education.png" width="100"/>
</head>
<body>
	<h1>Liste des clients</h1><br><br>
	<ul>
		<?php foreach ($clients as $client): ?>
			<li>
				<?=$client['client_nom']?> <?=$client['client_prenom']?> - <?=$client['client_pays']?> - <?=$client['client_adresse1']?> <?=$client['client_ville']?> <?=$client['client_codep']?> - <?=$client['client_telephone']?> - <?=$client['client_courriel']?>		<a href="supprimerClientForAdmin.php?client_id=<?= $client['client_id']?>">Supprimer</a>   <a href="modifierClientForAdminForm.php?client_id=<?= $client['client_id']?>">Modifier</a> <br><br>
			</li>
			
		<?php endforeach;?>
	</ul>
</body>
</html>