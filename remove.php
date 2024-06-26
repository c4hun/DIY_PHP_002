<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=PDO_001','root','root');

$pdoStat = $objetPdo->prepare('DELETE FROM contact WHERE id=:num LIMIT 1');

$pdoStat->bindValue(':num', $_GET['numContact'], PDO::PARAM_INT);

$executeIsOk = $pdoStat->execute();

if($executeIsOk){
    $message = 'Le contact a été supprimé';
}else{
    $message = 'Echec de la suppression du contact';
}

?>

<!DOCTYPE html>
<html lang="efr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de votre suppression</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Suppression</h1>
    <p><?= $message ?></p>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
