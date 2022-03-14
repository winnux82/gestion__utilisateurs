<?php
session_start();

if (isset($_SESSION['user'])) {
    echo '<table>';
    echo '<tr><td>ID</td><td>Nom</td><td>Prenom</td><td>pseudo</td><td>Date de naissance</td><td>pays</td><td>password</td><td>modifier</td><td>Supprimer</td></tr>';
    foreach ($_SESSION['user'] as $position => $utilisateur) {
        echo "<tr><td>$position</td><td>" . $utilisateur['nom'] . '</td>';
        echo '<td>' . $utilisateur['prenom'] . '</td>';
        echo '<td>' . $utilisateur['pseudo'] . '</td>';
        echo '<td>' . $utilisateur['datedenaissance'] . '</td>';
        echo '<td>' . $utilisateur['pays'] . '</td>';
        echo '<td>' . $utilisateur['password'] .  '</td>';

        
        echo '<td><a href="index.php?position=' . $position . '">Modifier</a></td>
        <td><a href="supprimer.php?position=' . $position . '">Supprimer</a></td></tr>';
    }
    echo '</table>';
}

echo "<a href='index.php'>Ajouter une entreprise</a>";
