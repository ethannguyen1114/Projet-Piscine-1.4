<!DOCTYPE html>
<html>
    <head>
        <title>Administrateur</title>
        <meta charset = "utf-8">
        <link rel="stylesheet"  href="connectionTemplate.css">
        <img src="Logo_Omnes_Education.png" width="100"/>
    </head>
    
    <body>
        <nav>
            <ul>
                <li class="deroulant">Rendez-vous &ensp;
                    <ul class = "sous">
                        <li><a href = "historique.php">Cours Historique</a></li>
                        <li><a href = "booking.php">Cours Booking </a></li>
                    </ul>
                </li>
                <li class="deroulant">Tout Parcourir &ensp;
                    <ul class = "sous">
                        <li><a href = "activites_sportives.php">Activités sportives</a></li>
                        <li><a href = "sport_de_competition.php">Les sports de compétition </a></li>
                        <li><a href = "salles_de_sport.php">Salles de sport OMNES</a></li>
                    </ul>
                </li>
                <li class="deroulant">Votre espace &ensp;
                    <ul class = "sous">
                        <li><a href = "connectionClient.php">Client</a></li>
                        <li><a href = "connectionAdmin.php">Administrateur </a></li>
                        <li><a href = "connectionCoach.php">Coach </a></li>
                    </ul>
                </li>
                <li><a href="recherche.php"> Recherche</a></li>
                <li><a href="Accueil.php"> Accueil</a></li>
            </ul>
        </nav>
     <div id="container">
            <!-- zone de connexion -->
            
            <form action="clientVerif.php" method="POST"> <center>
                <h2>Connexion à votre compte administrateur</h2> </center><br>
                <label><b>ID admin</b></label>
                <input type="text" placeholder="Identification de votre compte admin" name="emailAdmin" required><br>
                <label><b>Mot de passe du client</b></label>
                <input type="password" placeholder="Votre mot de passe" name="mdpAdmin" required>
                <input type="submit" id='submit' value='LOGIN' >
            </form>
        </div>
    </body>
</html>