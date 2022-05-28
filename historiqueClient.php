<?php
//ouverture d'une connexion bdd client
$objectPdo = new PDO('mysql:host=localhost;dbname=omnessport','root','');

//requete 
$pdoStat = $objectPdo->prepare('SELECT * FROM reservation');

//execution de la requete
$executeIsOk = $pdoStat->execute();

//récupération des résultats
$reservations = $pdoStat->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
        
	<title>Historique Client</title>
    <link rel="stylesheet"  href="connectionTemplate.css">
    <img src="Logo_Omnes_Education.png" width="100"/>
</head>

<body>
	<h1>Liste des précédentes réservations</h1><br><br>
	<ul>
		<?php foreach ($reservations as $reservation): ?>
			<li>
				<?=$reservation['date']?> <?=$reservation['heure']?> - <?=$reservation['service']?> - <?=$reservation['localisation']?><br><br>
			</li>
		<?php endforeach;?>
	</ul>
</body>
</html>