<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sports de Compétition</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Test_Page.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
    
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Accueil</a></li>
                    <li><a href="#">Rendez-vous</a></li>
                    <!--<li class="deroulant"><a href="#">Rendez-vous &ensp;</a>
                        <ul class = "sous">
                            <li><a href = "#">Historique</a></li>
                            <li><a href = "#">Booking </a></li>
                        </ul>
                    </li>-->
                    <li><a href="#">Tout Parcourir</a></li>
                    <li><a href="#">Recherche</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Votre compte</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <p><a href="https://www.ece.fr/">Site ECE</a></p>
                <p><a href="#">https://www.omneseducation.com/</a></p>
                <p><a href="#">https://www.heip.fr/</a></p>
            </div>
            <div class="col-sm-8 text-left">
                <h1>Sports de compétition</h1>
                <p>Vous trouverez ci-dessous l'intégralité des sports de compétition proposés par <strong>Omnes Sports</strong>. </p>
                <div class="row">
                    
                    <div class="col-md-4">
                        <a href="Football.php">
                            <div class="box">
                                <img src="Icon_Football.png" style="width:100%">
                            </div>
                        </a>
                        
                        <br/>
                        <a href="Tennis.php">
                            <div class="box">
                                <img src="Icon_Tennis.png" style="width:100%">
                            </div>
                        </a>
                    </div>
                
                    <div class="col-md-4">
                        <a href="Rugby.php">
                            <div class="box">
                                <img src="Icon_Rugby.png" style="width:100%">
                            </div>
                        </a>
                        <br/>
                        <a href="Plongeon.php">
                            <div class="box">
                                <img src="Icon_Plongeon.png" style="width:100%">
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="Basketball.php">
                            <div class="box">
                                <img src="Icon_Basketball.png" style="width:100%">
                            </div>
                        </a>
                        <br/>
                        <a href="Natation.php">
                            <div class="box">
                                <img src="Icon_Natation.png" style="width:100%">
                            </div>
                        </a>
                        
                    </div>

                    
                </div>
                <hr>
               
            </div>
            
            <div class="col-sm-2 sidenav">
                <div class="well">
                    <p>ADS</p>
                </div>
                <div class="well">
                    <p>ADS</p>
                </div>
            </div>
            
        </div>
    </div>
    
    <footer class="container-fluid text-center">
        <p>Contact : Sport@Omnes.com</p>
    </footer>

</body>
</html>