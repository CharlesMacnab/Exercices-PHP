<!doctype html>
<html lang="fr">
<head>
    <title>TP10</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>

<?php
include 'controlleur.php';

echo '<body>
    <div class="container col-9" >
    <h1 style="text-align: center"><b>Nouvel Etudiant</b></h1>
    <hr>
    <br>
    <br>
        <form action="controlleur.php?func=AddStudent" method="POST">
            <div class="form-group">
                <label>Nom</label>
                <input name="nomStudent" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Prénom</label>
                <input name="prenomStudent" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Note</label>
                <input name="note" type="number" class="form-control" min="0" max="20"required>
            </div>
            <br>
            <button name = "validation" type="submit" class="btn btn-primary">Confirmer</button>
        </form>
    </div>
</body>';

?>
</html>