<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/T_reset.css">
    <link rel="stylesheet" href="../asset/css/T_container.css">
    <link rel="stylesheet" href="../asset/css/T_ressource.css">
    <img id="fondecran" class="fondecran" src="../asset/img/T_fond-maquette3.png">
    <title>Yoga Court </title>
</head>
<body>
    <div id="container">

        <header>
            <section>
                 <div>
                    <a href="http://localhost/Projet_now_no_stress/NNS_Thais/T_index.php"><img id="logo" src="../asset/img/T_logo.png" alt="logo now no stress"></a>
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
                            <li><a href="#"><Contactez-nous></Contactez-nous></a></li>
                            <li><a href="T_createaccount.php">Créez un compte</a></li>
                        </ul>     
                </div>
            </section>
        </header>
        <div id="content">
            
            <section id="carte">
                <div>
                    <video controls="controls">
                        <source src="../asset/médias/yoga10mn.mp4">
                    </video>
                </div>

            </section>

            <section id="liens">
                
                <div id="retour">
                    <a href="T_carte_yoga_court.php"><img class="icone-retour" src="../asset/img/T_retour.png" alt="icone-precedent"></a>
                </div>
                <div id="creer-compte">
                    <p>Pas de compte?</p>
                    <p><a href="http://localhost/Projet_now_no_stress/NNS_Thais/views/T_createaccount.php">Créer un compte ici</a></p>
                </div>

            </section>

        </div>
        <footer>

        </footer>

    </div>
    <script src="../asset/script/menuBurger.js"></script>
</body>
</html>