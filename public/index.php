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

// Vérification de la variable get requestGET pour effectuer la requête SQL
if(isset($_GET['requestGET'])){

    // switch case pour déterminer l'id de la page (équivalent à un if elseif else)
    switch($_GET['requestGET']){
        case "php":
            $id = 2;
            break;
        case "sql":
            $id = 3;
            break;
        case "javascript":
            $id = 4;
            break;
        default:
            $id = 1;
            break;
    }

}else{
    // id de la page d'accueil
    $id = 1;
}

// requête $sql
$sql = "SELECT * FROM `pages` WHERE `id` = $id;";

// Exécution de la reqête
$recup = $connectDB->query($sql);
// transformation du résultat en format PHP tableau associatif
$response = $recup->fetch(PDO::FETCH_ASSOC);

// on appel la vue
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$response['titlep']?></title>
</head>
<body>
    <nav>
        <a href="./">Accueil</a> 
        <a href="./?requestGET=php">PHP</a> 
        <a href="./?requestGET=sql">SQL</a>
        <a href="./?requestGET=javascript">Javascript</a>
    </nav>
    <h1><?=$response['titlep']?></h1>
    <p><?=nl2br($response['textp'])?></p>
    <?php
    var_dump($_GET,$connectDB,$response);
    ?>
</body>
</html>
