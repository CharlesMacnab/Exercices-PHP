<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recherche</title>
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
            <li class="nav-item active">
                <a class="nav-link" href="recherche.php">Recherche <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="modification.php">Modification <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<hr>

<div class="container col-sm-9" >
    <h1>Rechercher une citation</h1>
    <hr>
    <form method="POST" action="recherche.php">
        <div class="form-group">
            <label>Auteur</label>
            <select class="form-control" name="auteur">

</body>
</html>

<?php

$comteur = 1;
$compteur2=0;

include 'connexpdo.php';
$dbh = test('pgsql:host=localhost;dbname=citations', 'postgres', 'isen2018');


$query = "SELECT nom, prenom, id FROM auteur";
$result= $dbh->query($query);
foreach ($result as $data){
    echo "<option value=".$data['id'].">".$data['prenom']." ".$data['nom']."</option>";
    $comteur++;
}


echo '</select>';
echo'</div>';
echo '<div class="form-group">
            <label>Siècle</label>
            <select class="form-control" name="siecle">';


$query1 = "SELECT numero, id FROM siecle";
$result = $dbh->query($query1);
foreach ($result as $data){
    echo "<option value=".$data['id'].">".$data['numero']."</option>";
}

echo '</select>';
echo'</div>';
echo '<button type="submit" class="btn btn-primary">Rechercher</button>';
echo'</form>';

echo'<br>';

echo'<table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Citation</th>
                <th scope="col">Auteur</th>
                <th scope="col">Siècle</th>
            </tr>
        </thead>
        <tbody>';



$query2 = "SELECT phrase FROM citation WHERE auteurid =".$_POST['auteur']. " AND siecleid = ".$_POST['siecle'];
$result1 = $dbh->query($query2);

foreach ($result1 as $data) {
    $compteur2++;
}

if($compteur2>=1) {
    $query3 = "SELECT phrase FROM citation WHERE auteurid =" . $_POST['auteur'] . " AND siecleid = " . $_POST['siecle'];
    $result2 = $dbh->query($query3);
    $result2->execute();
    $result3=$result2->fetchAll();

    for ($i = 0; $i < $compteur2; $i++) {
        $index=$i+1;
        echo '<tr>';
        echo '<th scope="row">'.$index.'</th>';
        echo '<td>' . $result3[$i]['phrase'] . '</td>';

        $query4 = "SELECT nom, prenom FROM auteur WHERE id =" . $_POST['auteur'];
        $result4 = $dbh->query($query4);
        foreach ($result4 as $data) {
            echo '<td>' . $data['prenom'] . " " . $data['nom'] . '</td>';
        }

        $query5 = "SELECT numero FROM siecle WHERE id =" . $_POST['siecle'];
        $result5 = $dbh->query($query5);
        foreach ($result5 as $data) {
            echo '<td>' . $data['numero'] . '</td>';
        }
        echo '</tr>';
    }
}
echo'</tbody>';
echo'</table>';
echo'</html>';

?>
