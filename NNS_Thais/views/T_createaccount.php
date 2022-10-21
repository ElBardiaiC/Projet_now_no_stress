<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/T_reset.css">
    <link rel="stylesheet" href="../asset/css/T_container.css">
    <link rel="stylesheet" href="../asset/css/T_createaccount.css">
    <img id="fondecran" class="fondecran" src="../asset/img/T_fond-maquette2.png">
    <title>Créer un Compte</title>
</head>

<body>
    <div id="container">
        <header>
            <section>
                 <div>
                    <a href="../T_index.php"><img src="../asset/img/T_logo.png" alt="logo now no stress"></a>
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
                            <li><a href="#">Contactez-nous</a></li>
                            <li><a href="T_createaccount.php">Créez un compte</a></li>
                        </ul>     
                    
                </div>
            </section>
        </header>
        <?php
        $msg = "";
        if (isset($_POST["submit"])) { //todo → on verifie qu'il y a des données soumises à POST //

            if ( //todo ↓ ensuite on vérifie qu'il existe bien un champ nom, un champ prenom etc dans POST //
                isset($_POST["nom"])
                && isset($_POST["prenom"])
                && isset($_POST["email"])
                && isset($_POST["dateNaiss"])
                && isset($_POST["password"])
                && isset($_POST["confirm"])
                && validateForm()
            ) {


                //todo ↓ On enregistre les données dans la db (PDO = PhP Data Object)// 
                //>< l'utilisation du try qu'on a vu avec espoir qui lui verifie juste la concordance avec une db existante //
                $pdo = new PDO("mysql:host=localhost;dbname=noStress.db", "root", "root"); //todo → On initialise la connexion à notre DB //
                $stmt = $pdo->prepare("INSERT INTO user (nom, prenom, email, password, genre, dateNaiss) VALUES (?, ?, ?, ?, ?, ?)"); //todo On produit le modèle(template) de la requete que l'on va faire au serveur//
                $stmt->execute([ //todo On exécute  mtn la requête "$stmt" en question //
                    $_POST["nom"],
                    $_POST["prenom"],
                    $_POST["email"],
                    $_POST["password"],
                    $_POST["genre"],
                    $_POST["dateNaiss"]
                ]);
                // redirection vers index.html

                header('location:http://localhost/Projet_now_no_stress/NNS_Thais/T_index.php'); //todo une fois les données enregistrées dans la DB, on redirige le visiteur vers la page de login //

            }else{
                $msg = "<p class='alerte'>Un ou plusieurs champs ne sont pas valides<p>";
            }
        }
        //todo ↓ on dévelope la fonction de validation des inputs values  remplies par l'utilisateur//
        function validateForm()
        {
            $dateJour = date_create(date("Y-m-d"));
            
            $dateNaissance = date_create($_POST["dateNaiss"]);
            $interval = date_diff($dateJour , $dateNaissance);
            $diff = $interval->format("%R%a");
            
        
            // if(($_POST["password"] != $_POST["confirm"]) && ($_POST["dateNaiss"]>$dateJour)) {
            if ($diff >= 0 || ($_POST["password"] != $_POST["confirm"])) {
                return false;
            }


            return true;
        }
        ?>
        <div id="content">
            <section>
                <div id="titre">
                    <h2>Créer mon compte</h2>
                </div>
            </section>

            <form method="post" action="#">
                <div id="formu">
                    <div class="demi-form">
                        <article id="radio">
                            <div>
                                <label for="f">F</label>
                                <input id="f" name="genre" value="F" type="radio">
                            </div>
                            <div>
                                <label for="h">H</label>
                                <input id="h" name="genre" value="H" type="radio">
                            </div>
                            <div>
                                <label for="x">X</label>
                                <input id="x" name="genre" value="X" type="radio">
                            </div>
                        </article>

                        <article id="formu-part-1">
                            <input placeholder="Nom" type="text" name="nom">
                            <input placeholder="Prénom" type="text" name="prenom">
                            <input placeholder="Date de Naissance" type="date" name="dateNaiss">
                                <!--! Checker comment arranger le placeholder de l'input date-->
                        </article>

                    </div>
                    <div class="demi-form">
                        <article id="formu-part-2">
                            <input placeholder="Email" type="email" name="email">
                            <input placeholder="Mot de Passe" type="password" name="password">
                            <input placeholder="Confirmez votre mot de passe" type="password" name="confirm">
                        </article>

                    </div>
                </div>

                <div>
                    <?= $msg ?> <!-- idem que < ? php echo .... -->
                    <div id="bouton">
                        <input name="submit" class="classic-btn" type="submit" value="Créer mon compte">
                    </div>
                </div>
            </form>

        </div>
        <!-- <footer> 
            <p>Footer</p> 
        </footer> -->
    </div>
    <script src="../asset/script/T_versBienvenue.js"></script>
</body>

</html>