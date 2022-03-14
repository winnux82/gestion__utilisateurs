<?php

// on démarre la session
session_start();
// on définit la variable position
$position = $_GET['position'];
// si la position existe, 
if (isset($position)) {
//on efface la ligne position de la session user
    unset($_SESSION['user'][$position]);
//on redirige vers la liste
    header('location: liste.php');
}
