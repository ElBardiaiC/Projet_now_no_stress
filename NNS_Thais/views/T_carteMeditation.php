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
    <title>Carte Méditation</title>
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
                       <li><a href="../../NoStress_zahra/views/aPropos1.php">A propos de Now no Stress</a></li>
                            <li><a href="../../NoStress_zahra/views/aPropos2.php">Découvrir (Essai rapide)</a></li>
                            <li><a href="../../NoStress_zahra/views/contactezNous.php">Contactez-nous</a></li>
                            <li><a href="../../NNS_Thais/views/T_createaccount.php">Créez un compte</a></li>
                        </ul>     
                </div>
            </section>
        </header>

        <div id="content">
            
            <section id="carte">

                <div id="img-carte">
                    <img id="img-carte-ressource" src="../asset/img/T_meditation.jpg" alt="dame qui medite">
                </div>

                <div>
                    <h2>Méditation </h2>
                </div>

                <div>
                    <p id="para">
                        La méditation est une techique efficace qui permet de se recentrer et d'appaiser ses états de stress et d'angoisse.Cela vous permet de favoriser l'état de lâcher prise et de relaxtion nécéssaire au sommeil.
                        Installez-vous dans un endroit calme. Baissez ou étaignez la lumière et diminuez au maximum la luminosité de l'écran de votre appareil. Choisissez une position confortable, assis.e ou couché.e. Appuyez sur commencer et fermez les yeux. Répétez autant de fois que vous le souhaitez. Bonne nuit.
                    </p>
                </div>

                <div class="bouton">
                    <button class="classic-btn" id="versMeditation-btn">Commencer</button>
                </div>

            </section>

            <section id="liens">
                
                <div id="retour">
                    <a href="../../NOWS_Chaimae/views/C_ConnexionCmbDeTmps.php"><img class="icone-retour" src="../asset/img/T_retour.png" alt="icone-precedent"></a>
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
    <script src="../asset/script/T_versMeditation.js"></script>
</body>
</html>