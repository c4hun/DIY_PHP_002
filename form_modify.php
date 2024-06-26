<?php

// Connection
$objetPdo = new PDO('mysql:host=localhost;dbname=PDO_001','root','root');

// Request preparation
$pdoStat = $objetPdo->prepare('SELECT * FROM contact WHERE id = :num');

$pdoStat->bindValue(':num',$_GET['numContact'],PDO::PARAM_INT);

// Executing request
$executeIsOk = $pdoStat->execute();

// récupérer le contact
$contact = $pdoStat->fetch();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Modification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Modifier un contact</h1>
    <form action="modifying.php" method="post">
    <input type="hidden" name="numContact" value="<?= $contact['id'] ?>">
    <p>
        <label for="nom">Nom</label>
        <input id="nom" type="text" name="lastName" value="<?= $contact['nom'];?>">
    </p>
    <p>
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="firstName" value="<?= $contact['prenom'];?>">
    </p>
    <p>
        <label for="tel">Téléphone</label>
        <input type="text" id="tel" name="phone" value="<?= $contact['tel'];?>">
    </p>
    <p>
        <label for="mail">Mail</label>
        <input type="mail" id="mail" name="email" value="<?= $contact['mail'];?>">
    </p>
    <p>
        <input type="submit" value="Enregistrer">
    </p>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>