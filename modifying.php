<?php

// Connection
$objetPdo = new PDO('mysql:host=localhost;dbname=PDO_001','root','root');

// Request preparation
$pdoStat = $objetPdo->prepare('UPDATE contact set nom=:nom, prenom=:prenom, tel=:tel, mail=:mail WHERE id=:num LIMIT 1');

// Liaison du paramètre nommé. 3eme argument indigue, valer type INT = une identifiante, une securite assure 
$pdoStat->bindValue(':num', $_POST['numContact'], PDO::PARAM_INT);
$pdoStat->bindValue(':nom', $_POST['lastName'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['firstName'], PDO::PARAM_STR);
$pdoStat->bindValue(':tel', $_POST['phone'], PDO::PARAM_STR);
$pdoStat->bindValue(':mail', $_POST['email'], PDO::PARAM_STR);

// Executing request
$executeIsOk = $pdoStat->execute();

if($executeIsOk){
    $message = 'Le contact a été mis à jour';
}else{
    $message = 'Echec de la mise à jour du contact';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation pour votre modification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Résultat de la modification</h1>
    <p><?= $message ?></p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>