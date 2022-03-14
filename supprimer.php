<?php
session_start();

$position = $_GET['position'];

if (isset($position)) {

    unset($_SESSION['user'][$position]);

    header('location: liste.php');
}
