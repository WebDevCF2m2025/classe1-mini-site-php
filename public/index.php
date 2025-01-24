<?php
# public\index.php

// Front Controller pour le MVC

// chargement des données (les dépendances) M -> Model
include "../datas/datas.php";

// vérification si on a bien importer les données
//var_dump($datas);

// Appel du router
include "../controller/router.php"; // C -> Controler


// Appel de la vue
include "../view/MyView.php"; // V -> View
