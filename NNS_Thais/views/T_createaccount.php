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
                
            <div>
                <img src="../asset/img/T_logo.png" alt="logo now no stress">
            </div>

        </header>
        <?php
            if(isset($_POST["submit"])) {

                if(
                    isset($_POST["nom"]) 
                    && isset($_POST["prenom"]) 
                    && isset($_POST["email"]) 
                    && isset($_POST["dateNaiss"]) 
                    && isset($_POST["password"]) 
                    && isset($_POST["confirm"]) 
                    && validateForm()
                ) {

                    // enregistrer les données dans la db
                    $pdo = new PDO("mysql:host=localhost;dbname=noStress.db", "root", "root");
                    $stmt = $pdo->prepare("INSERT INTO user (nom, prenom, email, password, genre, dateNaiss) VALUES (?, ?, ?, ?, ?, ?)");
                    $stmt->execute([
                        $_POST["nom"],
                        $_POST["prenom"], 
                        $_POST["email"], 
                        $_POST["password"], 
                        $_POST["genre"], 
                        $_POST["dateNaiss"]
                    ]);
                    // redirection vers index.html
                    header('location:http://localhost/Projet_now_no_stress/NNS_Thais/T_index.html');
                }

            }

            function validateForm() {
                if($_POST["password"] != $_POST["confirm"]) {
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
            <form  method="post" action="#">

                <section>
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
                            <input type="text" name="nom">
                            <input type="text" name="prenom">
                            <input type="date" name="dateNaiss">
                        </article>
                        
                    </div>
                    <div class="demi-form">
                        <article id="formu-part-2">
                            <input type="email" name="email">
                            <input type="password" name="password">
                            <input type="password" name="confirm">
                        </article>
                        
                    </div>
                </div>
            </section>    
            <section>
                <div id="bouton">
                    <input name="submit" class="classic-btn" type="submit" value="Créer mon compte">
                </div>
            </section>
        </form> 
                
        </div>
        <!-- <footer> 
            <p>Footer</p> 
        </footer> -->
    </div>
    <script src="../asset/script/T_versBienvenue.js"></script>      
</body>
</html>