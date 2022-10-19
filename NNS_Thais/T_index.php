<?php
include_once 'NC:\MAMP\htdocs\Projet NNS\Projet_now_no_stress\NOWS_Chaimae\asset\src\C_db_membres.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/T_reset.css">
    <link rel="stylesheet" href="./asset/css/T_style.css">
    <img id="fondecran" class="fondecran" src="./asset/img/T_fond-maquette2.png">
    <link rel="stylesheet" href="./asset/css/T_container.css">
    
    <title>NNSpage d'acceuil</title>
</head>
<body>
    <div id="container">
        <header>
                
            <div>
                <img src="./asset/img/T_logo.png" alt="logo now no stress">
            </div>
            <div>
                 <button class="burger" onclick="show()"><img src="../assets/img/menu-burger.png" alt="" id="menuBurger"></button>
            </div>
           
            
        </header>
        

        <div id="content">
    
            <div id="titres-div">
                <section id="titres">
                    <h2>Connectez-vous</h2>
                    <h2>Découvrir?</h2>
            
                </section>
            </div>
            <div id="content-login">
                <form id="login">
                        
                    <!-- <div>
                        <input type="email">
                        <input type="password">
                    </div> -->



                    
                    <div>
                        <p><a href="#">Mot de passe oublié?</a></p>
                    </div>
                    
                    <div>
                        <button class="classic-btn" id="log-in" type="submit">S'enregistrer</button>
                    </div>
                    
                    <div id="creer-compte">
                        <p>Pas de compte?</p>
                        <p><a href="http://localhost/Projet_now_no_stress/NNS_Thais/views/T_createaccount.php">Créer un compte ici</a></p>
                    </div>

                </form>
                <section id="essai">
                    <button class="classic-btn" id="essai-btn" type="submit">Essai</button>
                </section>
                
            </div>
        </div> 
        
        <!-- <footer>
            <p>Footer</p>
        </footer> -->
    </div>
            

    
    <script src="./asset/script/T_versBienvenue.js"></script>
</body>
</html>