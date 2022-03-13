<?php
$pays = [
    'Sélectionner',
    'France',
    'Belgique',
    'Espagne',
    'Portugal',
    'Allemagne'
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <form action="sauvegarde.php" method="POST">
        Nom : <input type="text" name="nom"><br> Prenom : <input type="text" name="prenom"><br> Pseudo : <input type="text" name="pseudo"><br> Date de Naissance : <input type="date" name="datedenaissance"><br> Pays :
        <select name="pays">
            <?php foreach ($pays as $p) :  ?>
                <option value="<?= $p ?>"><?= $p ?></option>
            <?php endforeach; ?>
        </select><br> Mot de passe: <input type="password" name="password"><br>
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>