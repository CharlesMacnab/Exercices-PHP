<!doctype html>
<html lang="fr">
<head>
    <title>TP10</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>

<?php
session_start();
include 'controlleur.php';
$dbh = connexion('pgsql:host=localhost;dbname=etudiants', 'postgres', 'isen2018');
$id = $_GET['id'];
$query = "SELECT nom, prenom, note FROM etudiant WHERE id =".$id;
$result = $dbh->query($query);
foreach ($result as $data) {
    $nom = $data['nom'];
    $prenom = $data['prenom'];
    $note = $data['note'];
}

echo '<body>
    <div class="container col-9" >
    <h1 style="text-align: center"><b>Modifier un etudiant</b></h1>
    <hr>
    <br>
    <br>
        <form action="controlleur.php?func=ModifyStudent" method="POST">
            <div class="form-group">
                <label>Nom</label>
                <input name="nomUpdateStudent" type="text" class="form-control" placeholder="'.$nom.'" required>
            </div>
            <div class="form-group">
                <label>Prénom</label>
                <input name="prenomUpdateStudent" type="text" class="form-control" placeholder="'.$prenom.'" required>
            </div>
            <div class="form-group">
                <label>Note</label>
                <input name="noteUpdateStudent" type="number" class="form-control" min="0" max="20" placeholder="'.$note.'" required>
            </div>
            <br>
            <button name = "Update" value="'.$id.'" type="submit" class="btn btn-primary">Confirmer</button>
        </form>
    </div>
</body>';
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
