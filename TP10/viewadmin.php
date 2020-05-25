<!DOCTYPE html>
<html lang="fr">

<head>
    <title>TP10</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


</head>

<main>
<?php
session_start();
$id = $_SESSION["adminId"];
$nom = $_SESSION["adminNom"];
$prenom = $_SESSION["adminPrenom"];


include "controlleur.php";

$dbh = connexion('pgsql:host=localhost;dbname=etudiants', 'postgres', 'isen2018');

echo '
<div class="container col-9" id="contact">
<h1 style="text-align: center"><b>Admin Page</b></h1>
    <hr>
    <br>
    <br>
    <h2 style="display: inline;">Connecter en tant que '.$prenom .' '. $nom.'</h2>
        <a style="float: right;" href="controlleur.php?func=Deconnexion">
            <button class="btn btn-info">Deconnexion</button>
        </a><br>';

echo'<br>
    <h3>Liste des étudiants</h3>';
ListeEtudiant();
echo '<br>
    <div>
        <a href="viewnewstudent.php" class="button-pe-connect is-blue" data-toggle="tooltip" data-placement="bottom" title="">
            <button class="btn btn-info">Ajouter un étudiant</button>
        </a>
    </div>';

Moyenne();
echo '
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</div></main></html>';