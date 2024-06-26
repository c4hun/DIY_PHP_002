<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=PDO_001','root','root');

// préparation de la requête (dans le cas présent, utiliser une requête préparée n'a aucun intérêt, mais je vais utiliser la même méthode que l'insertion pour rester simple. Pour d'avantage d'informations, je vous invite à visualiser la ou les vidéo(s) sur les requêtes préparées disponible sur chaîne Emmanuel Ravrat )
//préparation de la requête d'insertion (SQL) 
// from contact TABLE, not the file name
$pdoStat = $objetPdo->prepare('SELECT * FROM contact ORDER BY nom ASC');

//exécution de la requête
$executeIsOk = $pdoStat->execute();

//récupération des résultas en une seule fois. Pour d'autre méthodes d erécupération, regardez les vidéos adéquates dans la playlist "PHP - PDO"
$contacts = $pdoStat->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Liste des contacts</h1>

    <ul class="list-group list-group-flush">
        <?php foreach ($contacts as $contact): ?>
            <li class="list-group-item">
                <?= $contact['nom'] ?> <?= $contact['prenom'] ?> - <?= $contact['tel'] ?> - <?= $contact['mail'] ?>
                <a href="remove.php?numContact=<?= $contact['id'] ?>">▶ SUPPRIMER</a>
                <a href="form_modify.php?numContact=<?= $contact['id'] ?>">▶ MODIFIER</a>
            </li>
        <?php endforeach; ?>    
    </ul>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>