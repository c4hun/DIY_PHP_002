<?php

//ouverture d'une connection à la BDD(Base de données) Emmanuel_Ravrat
$objetPdo = new PDO('mysql:host=localhost;dbname=PDO_001','root','root');

//préparation de la requête d'insertion (SQL)
$pdoStat = $objetPdo->prepare('INSERT INTO contact VALUES (NULL, :nom, :prenom, :tel, :email)');

//Définition les marqueur à une valuer
$pdoStat->bindValue(':nom', $_POST['lastName'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['firstName'], PDO::PARAM_STR);
$pdoStat->bindValue(':tel', $_POST['phone'], PDO::PARAM_STR);
$pdoStat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);

//éxécution de la requête préparée
$insertIsOk = $pdoStat->execute();

if($insertIsOk){
    $message = 'Le contact a été ajouté dans la Base de données!';
}else{
    $message = 'Echec de l\insertion';

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation pour votre insertion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Insertion des contacts</h1>

    <p><?php echo $message; ?></p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>