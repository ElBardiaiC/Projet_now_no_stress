<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../../NNS_Thais/asset/css/T_carteRessource.css">
    <img id="fondecran" class="fondecran" src="../assets/img/fond-ecran-sombre.png">
    <title>Carte Scan Corporel</title>
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
                    <img id="img-carte-ressource" src="../../NNS_Thais/asset/img/T_meditationhomme.png" alt="sommeil">
                </div>

                <div>
                    <h2>Méditation Scan Corporel </h2>
                </div>

                <div>
                    <p>
                        Durée : 40 minutes.
                    </p>
                    <p>
                        Matériel : Aucun matériel recquis.
                    </p>
                </div>
                <div>
                    <p id="para">
                        Dans cette méditation de 4O minutes, nous vous invitons à vous détendre. Le scan corporel consiste a, avec son attention, scan son corps et se focaliser sur les sensations qui y résident. Il permet également de vous encrer dans le présent en se focalisant sur votre respiration afin de laisser les inquiétudes du quotidien s'envoler. Installez-vous confortablement et  appuyez sur commencer. Bonne nuit.

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