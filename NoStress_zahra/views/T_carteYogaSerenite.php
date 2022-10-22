<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../../NNS_Thais/asset/css/T_carteRessource.css">
    <img id="fondecran" class="fondecran" src="../assets/img/fond-ecran-sombre.png">
    <title>Carte Yoga Sérénité</title>
</head>
<body>
    <div id="container">
        <header>
            <section>
                 <div>
                    <a href="../../NNS_Thais/T_index.php"><img id="logo" src="../../NNS_Thais/asset/img/T_logo.png" alt="logo now no stress"></a>
                </div>
                <div>
                    <button class="burger"onclick="show()"><img src="../../NNS_Thais/asset/img/menu-burger.png" alt="menu burger" id="menuBurger"></button>
                </div>
            </section>
            <section>
                <div class="navBar">
                    <h3>Menu</h3><br>
                       <ul>
                            <li><a href="aPropos1.php">A propos de Now no Stress</a></li>
                            <li><a href="aPropos2.php">Découvrir (Essai rapide)</a></li>
                            <li><a href="#">Contactez-Nous</a></li>
                            <li><a href="../../NNS_Thais/views/T_createaccount.php">Créez un compte</a></li>
                        </ul>     
                </div>
            </section>
        </header>

        <div id="content">
            
            <section id="carte">

                <div id="img-carte">
                    <img id="img-carte-ressource" src="../../NNS_Thais/asset/img/T_yoga.png" alt="yoga">
                </div>

                <div>
                    <h2>Séance de Yoga pour la Sérénité </h2>
                </div>

                <div>
                    <p>
                        Durée : 30 minutes.
                    </p>
                    <p>
                        Matériel : Deux gros livre ou si vous en avez deux briques de yoga.
                    </p>
                </div>
                <div>
                    <p id="para">
                        Dans cette séance de yoga nous vous invitons a defaire les tensions musculaires et mentales que vous ressentez. Appuyez sur commencer, bonne détente et bonne nuit.

                    </p>
                </div>

                <div class="bouton">
                    <button class="classic-btn" id="yogaCourt-btn">Commencer</button>
                </div>

            </section>
           
            <section id="liens">
               
                <div id="retour"> 
                    
                    <a href="../../NOWS_Chaimae/views/C_ConnexionCmbDeTmps.php"><img class="icone-retour" src="../../NoStress_zahra/assets/img/fleche-retour.png" alt="icone-precedent"></a> 
                </div>
                <div id="creer-compte">
                    <p>Pas de compte?</p>
                    <p><a href="../../NNS_Thais/views/T_createaccount.php">Créer un compte ici</a></p>
                </div>
                    
            </section>
                
        </div>    
            
        

    </div>
        //! Je te laisse aussi faire le lien vers js? //
    <script src="../asset/script/T_versYogaCourt.js"></script>
</body>
</html>