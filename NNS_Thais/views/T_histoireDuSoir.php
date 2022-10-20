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
    <title>histoire du soir</title>
</head>
<body>
    <div id="container">

        <header>
            <section>
                 <div>
                    <a href="http://localhost/Projet_now_no_stress/NNS_Thais/T_index.php"><img src="../asset/img/T_logo.png" alt="logo now no stress"></a>
                </div>
                <div>
                    <button class="burger"onclick="show()"><img src="../asset/img/menu-burger.png" alt="menu burger" id="menuBurger"></button>
                </div>
            </section>
            <section>
                <div class="navBar">
                    <h3>Menu</h3><br>
                    <nav>
                       <ul>
                            <li><a href="aPropos1.html">A propos de Now no Stress</a></li>
                            <li><a href="#">Découvrir (Essai rapide)</a></li>
                            <li><a href="#">Connectez-vous</a></li>
                            <li><a href="#">Créez un compte</a></li>
                        </ul>     
                    </nav>
                </div>
            </section>
        </header>
        <div id="content"> 
            <section id="carte">
                <div>
                    <audio controls="controls">
                        <source src="../asset/médias/histoireDuSoir44mn.mp3">
                    </audio>
                </div>

            </section>

            <section id="liens">
                
                <div id="retour">
                    <a><img class="icone-retour" src="../asset/img/T_retour.png" alt="icone-precedent"></a>
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