<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Ajouter un contact</h1>

<form action="insertion.php" method="post">
    <p>
        <label for="inputPassword5" class="form-label"">Nom</label>
        <input id="nom" type="text" name="lastName">
    </p>
    <p>
        <label for="inputPassword5" class="form-label">Prénom</label>
        <input type="text" id="prenom" name="firstName">
    </p>
    <p>
        <label for="inputPassword5" class="form-label">Téléphone</label>
        <input type="text" id="tel" name="phone">
    </p>
    <p>
        <label for="inputPassword5" class="form-label">Mail</label>
        <input type="email" id="mel" name="email">
    </p>
    <<p>
        <input type="submit" value="Enregistrer" id="btn">
    </p>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

