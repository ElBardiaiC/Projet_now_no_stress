<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/T_reset.css">
    <link rel="stylesheet" href="../asset/css/T_container.css">
    <link rel="stylesheet" href="../asset/css/T_carteRessource.css">
    <img id="fondecran" class="fondecran" src="../asset/img/T_fond-maquette3.png">
    <title>Carte Yoga Court</title>
</head>
<body>
    <div id="container">
        <header>
            <section>
                 <div>
                    <a href="../T_index.php"><img id="logo" src="../asset/img/T_logo.png" alt="logo now no stress"></a>
                </div>
                <div>
                    <button class="burger"onclick="show()"><img src="../asset/img/menu-burger.png" alt="menu burger" id="menuBurger"></button>
                </div>
            </section>
            <section>
                <div class="navBar">
                    <h3>Menu</h3><br>
                       <ul>
                            <li><a href="aPropos1.php">A propos de Now no Stress</a></li>
                            <li><a href="aPropos2.php">Découvrir (Essai rapide)</a></li>
                            <li><a href="contactezNous.php">Contactez-nous</a></li>
                            <li><a href="T_createaccount.php">Créez un compte</a></li>
                        </ul>     
                </div>
            </section>
        </header>

        <div id="content">
            
            <section id="carte">

                <div id="img-carte">
                    <img id="img-carte-ressource" src="../asset/img/T_yoga-homme.png" alt="dame qui fait du yoga">
                </div>

                <div>
                    <h2>Séance de Yoga </h2>
                </div>

                <div>
                    <p>
                        Durée : 10 minutes
                    </p>
                    <p>
                        Matériel : une écharpe & une couverture pliée ou un gros livre.
                    </p>
                </div>
                <div>
                    <p id="para">
                        Effectuer une séance de yoga le soir permet de préparer son corps et son esprit pour le sommeil. Le yoga permet de prendre conscience des différentes tensions enfouies au fond de soi. Atteindre un état de détente profonde permet d'accepter de manière naturelle le moment du sommeil.Installez-vous confortablement et  appuyez sur commencer. Bonne nuit.

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
                    <p><a href="T_createaccount.php">Créer un compte ici</a></p>
                </div>
                    
            </section>
                
        </div>    
            
        <footer>

        </footer>
        

        </div>
    <script src="../asset/script/T_versYogaCourt.js"></script>
</body>
</html>