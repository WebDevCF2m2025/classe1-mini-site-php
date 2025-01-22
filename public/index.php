<?php
# public\index.php

// Affiche la variable Globale $_GET => tableau associatif
// des variables se trouvant dans l'URL
// var_dump($_GET);


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
    var_dump($_GET);
    ?>
</body>
</html>
