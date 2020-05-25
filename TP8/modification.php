
<!doctype html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="citation.php">Informations <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="recherche.php">Recherche <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="modification.php">Modification <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<div class="container col-9" >
    <h1>Ajout</h1>
    <form method="POST" action="modification.php">
        <div class="form-group">
            <label>ID de l'auteur</label>
            <input name="authorId" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nom de l'auteur</label>
            <input name="authorLastName" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Prénom de l'auteur</label>
            <input name="authorFirstName" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label>ID du siècle</label>
            <input name="centuryId" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Siècle</label>
            <input name="century" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Citation</label>
            <input name="citation" type="text" class="form-control" required>
        </div><br>
        <button type="submit" class="btn btn-secondary">Ajouter</button>
    </form>

    <br>

    <h1>Supprimer une citation</h1>

    <br>

    <form method="POST" action="modification.php">
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected disabled>Sélectionnez l'ID d'une citation</option>





<?php

include 'connexpdo.php';
$dbh = test('pgsql:host=localhost;dbname=citations', 'postgres', 'isen2018');

$query5 = "SELECT id, phrase FROM citation";
$result = $dbh->query($query5);
foreach ($result as $data){
    echo "<option value=".$data['id'].">".$data['phrase']."</option>";
}

echo'</select></div><br><button type="submit" class="btn btn-secondary">Supprimer</button></div></div></form>';



//AUTEUR

$query6 = "INSERT INTO auteur (id, nom, prenom) VALUES (?, ?, ?)";
$result6 = $dbh->prepare($query6);
$result6->execute([$_POST['authorId'], $_POST['authorLastName'], $_POST['authorFirstName']]);


//SIECLE

$query7 = "INSERT INTO siecle (id, numero) VALUES (?, ?)";
$result7 = $dbh->prepare($query7);
$result7->execute([$_POST['centuryId'], $_POST['century']]);


//CITATION

$nbr_citations = $_POST['centuryId'] + $_POST['authorId'];

$query8 = "INSERT INTO citation (id, phrase, auteurid, siecleid) VALUES (?, ?, ?, ?)";
$result8 = $dbh->prepare($query8);
$result8->execute([$nbr_citations, $_POST["citation"], $_POST['authorId'], $_POST['centuryId']]);

//SUPRESSION

$citationId=$_POST['citationChoiceId'];

if($_POST['citationChoiceId'] != NULL) {
    $dbh->exec("DELETE FROM citation WHERE id=" . $citationId);
}

echo'</body>';
echo'</html>';
?>
