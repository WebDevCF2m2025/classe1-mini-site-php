<?php
# public\index.php

// Affiche la variable Globale $_GET => tableau associatif
// des variables se trouvant dans l'URL
// var_dump($_GET);

// constantes de la base de donnée
const DB_MYSQL_TYPE = "mysql";
const DB_MYSQL_HOST = "localhost"; // hôte de connexion (url ou adresse ip)
const DB_MYSQL_NAME = "db_mini_site"; // nom de la DB
const DB_MYSQL_LOGIN = "root"; // login
const DB_MYSQL_PWD = ""; // mot de passe
const DB_MYSQL_PORT = 3306;
const DB_MYSQL_ENCODE = "utf8";

// echo DB_MYSQL_ENCODE;


// Connexion à la base de donnée
try{ // essai

    // connexion via PDO
    $connectDB = new PDO(DB_MYSQL_TYPE.":host=".DB_MYSQL_HOST.";dbname=".DB_MYSQL_NAME.";port=".DB_MYSQL_PORT.";charset=".DB_MYSQL_ENCODE, 
    DB_MYSQL_LOGIN, 
    DB_MYSQL_PWD
);
}catch(Exception $e){ // erreur
    // arrêt du script et affichage de du message d'erreur
    die($e->getMessage());
}



// on appel la vue
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <nav>
        <a href="./">Accueil</a> 
        <a href="./?requestGET=php">PHP</a> 
        <a href="./?requestGET=sql">SQL</a>
        <a href="./?requestGET=javascript">Javascript</a>
    </nav>
    <h1></h1>
    <p></p>
    <?php
    var_dump($_GET,$connectDB);
    ?>
</body>
</html>
