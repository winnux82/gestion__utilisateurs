<?php
session_start();

echo "<pre>";

//on récupère  les infos dans la variable $user
$user = $_POST;
//print_r($user);


//vérifier si les valeurs sont remplies
if(!isset($user['nom'])|| empty($user['nom'])) {
    echo "Le nom est obligatoire";
    echo "<br><a href='index.php'>Retour au formulaire</a>";
    exit;}
if(!isset($user['prenom'])|| empty($user['nom'])) {
    echo "Le prénom est obligatoire";
    echo "<br><a href='index.php'>Retour au formulaire</a>";
    exit;
}

//création de la variable de session si elle n'existe pas
if(!isset($_SESSION['user'])) : $_SESSION[]=[];
endif;
//ajout dans la session
$_SESSION['user'][] = $user;

//print_r($_SESSION);

header('location: liste.php');
exit;


