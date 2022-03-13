<?php
session_start();

if (isset($_SESSION['user'])) {
    echo '<table>';
    echo '<tr><td>Nom</td><td>Prenom</td></tr>';
    foreach ($_SESSION['user'] as $utilisateur) {
        echo '<tr><td>'. $utilisateur['nom'] . ' ' . $utilisateur['prenom'] . ' ' .$utilisateur['pseudo']. ' ' . $utilisateur['datedenaissance']. ' ' . $utilisateur['pays']. ' '. $utilisateur['password'].  '</Td></tr>';
    }
    echo '</table>';
}

echo "<a href='index.php'>Ajouter une entreprise</a>";
