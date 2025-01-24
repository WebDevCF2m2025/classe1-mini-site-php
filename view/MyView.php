<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $datas['titre']?> | <?=$titrepage?></title>
    <!-- le css js, images doivent être -->
    <link rel="stylesheet" href="css/my.css">
</head>
<body>
    <nav>
        <a href="./">Accueil</a> 
        <a href="./?p=php">PHP</a> 
        <a href="./?p=sql">SQL</a>
        <a href="./?p=javascript">Javascript</a>
    </nav>
    <h1><?=$datas['titre']?> | <?=$titrepage?></h1>
    <p><?=nl2br($text)?></p>
    <?php
    /*
    $text = "Mike dit :<p onclick='alert(\"test\");'> \"l'école est sympa\"</p><script>alert('coucou');</script>";
    // echo $text;
    //$text = htmlspecialchars($text,ENT_QUOTES);
    $text = strip_tags($text,['p']);
    echo htmlspecialchars($text,ENT_QUOTES); 
    */
    ?>
    &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
    <?php
//var_dump($_GET);
    ?>
</body>
</html>