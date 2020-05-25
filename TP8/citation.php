<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Citations</title>
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
            <li class="nav-item active">
                <a class="nav-link" href="citation.php">Informations <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="recherche.php">Recherche <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="modification.php">Modification <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<h1><b>La citation du jour</b></h1>

<hr>


<?php

include 'connexpdo.php';
$dbh = test('pgsql:host=localhost;dbname=citations', 'postgres', 'isen2018');
$query1 = "SELECT * from citation";
$result1 = $dbh->query($query1);
$compteur = 0;

// Nombre de citation répértoriées

foreach($result1 as $data)
{
    $compteur++;
}

echo "<p>"."Il y a "."<b>"."$compteur"."</b>"." citations répértoriées"."</p>";

echo "<p>"."Et voici l'une d'entre elles qui est générée aléatoirement :"."</p>";

$randomId = rand(1,$compteur);

$query2 = "SELECT * from citation where id="."$randomId";
$result2 = $dbh->query($query2);
$result2->execute();
$data = $result2->fetch();

echo "<p>"."<b>".$data['phrase']."</b>"."</p>";
$auteur_id = $data['auteurid'];
$siecle_id = $data['siecleid'];



$query3 = "SELECT nom, prenom from auteur where id=".$auteur_id;
$result3 = $dbh->query($query3);
$result3->execute();
$data2 = $result3->fetch();

echo $data2['prenom']." ".$data2['nom']." ";


$query4 = "SELECT numero FROM siecle WHERE id="."$siecle_id";
$siecle = $dbh->query($query4);
foreach ($siecle as $data){
    echo $data['numero'] . "ème siècle";
}

?>
</body>
</html>

