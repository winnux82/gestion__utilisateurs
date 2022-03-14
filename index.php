<?php
session_start();
require_once('pays.php');


$position = null;
if(isset($_GET['position'])){
    $position = $_GET['position'];
    $user = $_SESSION['user'][$position];
}


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
    <?php if($position=== null) : ?>
        <h1>Ajout</h1>
    <?php else: ?>
        <h1>Edition</h1>
    <?php endif; ?>
    <form action="sauvegarde.php" method="POST">
        Nom : <input type="text" name="nom" value="<?= $user['nom']?>">
        <br> Prenom : <input type="text" name="prenom" value="<?= $user['prenom']?>">
        <br> Pseudo : <input type="text" name="pseudo" value="<?= $user['pseudo']?>">
        <br> Date de Naissance : <input type="date" name="datedenaissance" value="<?= $user['datedenaissance']?>"><br> Pays :
        <select name="pays">
            <?php foreach ($pays as $p) :  ?>
                <?php $checked = '';?>
                <option value="<?= $p ?>"><?= $p ?></option>
            <?php endforeach; ?>
        </select><br> Mot de passe: <input type="password" name="password"><br>
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>