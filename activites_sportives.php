<!DOCTYPE html>
<html>
    <head>
        <title> Accueil OMNES Sport</title>
        <meta charset = "utf-8">
        <link rel="stylesheet"  href="Accueil.css">
    </head>
    
    <body>
        <nav>
            <ul>
                <li> <img src="Logo_Omnes_Education.png" style="width: 100%"/></li>
                <li><a href="Accueil.php"> Accueil</a></li>
                <li class="deroulant"><a href="#">Rendez-vous &ensp;</a>
                    <ul class = "sous">
                        <li><a href = "historique.php">Historique</a></li>
                        <li><a href = "booking.php">Booking </a></li>
                    </ul>
                </li>
                <li class="deroulant"><a href="#">Tout Parcourir &ensp;</a>
                    <ul class = "sous">
                        <li><a href = "activites_sportives.php">Activités sportives</a></li>
                        <li><a href = "sport_de_competition.php">Les sports de compétition</a></li>
                        <li><a href = "salles_de_sport.php">Salles de sport OMNES</a></li>
                    </ul>
                </li>
                <li class="deroulant"><a href="#">Votre compte &ensp;</a>
                    <ul class = "sous">
                        <li><a href = "connnectionClient.php">Client</a></li>
                        <li><a href = "connectionAdmin.php">Administrateur</a></li>
                        <li><a href = "connectionCoach.php">Coach</a></li>
                    </ul>
                </li>
                <li>
                        <div class="recherche"><input type="search" placeholder="Rechercher"/></div>
                    </li>
            </ul>
        </nav>
        
       <div class="conteneur">
             <div class="part">
            <div class="part1">
                <div class="flex">
                <img class="activ" src="icons8-weightlifting-filled-50.png" alt="">
                <p class="acti">Musculation</p>
                </div>
                <p class="act"><a href="musculation.php">Coach Adama Traoré.</a></br>
                    
                </p>
            </div>
            <div class="part1">
                <div class="flex">
                    <img class="activ" src="icons8-gymnastics-filled-50.png" alt="">
                <p class="acti">Fitness</p>
                </div>
                <p class="act"><a href="fitness.php">Coach Alice Dupoids.</a><br>
                     
                </p>
            </div>
            <div class="part1">
                <div class="flex">
                    <img class="activ" src="icons8-tricycle-filled-50.png" alt="">
                <p class="acti">Biking</p>
                </div>
                <p class="act"><a href="biking.php">Coach Luc Duvin.</a><br>
                          
            </p>
            </div>
        </div>

        <div class="part">
            <div class="part1">
                <div class="flex">
                     <img class="activ" src="icons8-heart-with-pulse-filled-50.png" alt="">
                <p class="acti">Cardio-Training</p>
                </div>
                <p class="act"><a href="cardio.php">Coach Kylian Melon.</a><br>
                    
                </p>
            </div>
            <div class="part1">
                <div class="flex">
                <img class="activ" src="icons8-party-filled-50.png" alt="">
                <p class="acti">Cours collectifs</p>
                </div>
                <p class="act"><a href="coursCollectif.php">Coach Badro Esco</a>.<br>
                    
                </p>
            </div>
            
        </div>

        </div>
        <footer class="container-fluid text-center"><center>
        <p>Contact : Sport@Omnes.com</p></center>
    </footer>
    </body>
</html>