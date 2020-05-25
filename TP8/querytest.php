
<h1>Auteurs de la BD</h1>
<table>
    <tr><td>Nom</td><td>Prénom</td></tr>
<br>

<?php

include "connexpdo.php";



$dbh = test('pgsql:host=localhost;dbname=citations', 'postgres', 'isen2018');
$query1 = "SELECT * from auteur";
$result1 = $dbh->query($query1);

// Nom et prénom de chaque auteur

foreach($result1 as $data)
{
    echo "<tr><td>".$data['nom']."</td><td>".$data['prenom']."</td></tr>";
}
echo '</table>';



echo "<h1>Citations de la BD</h1>";
echo "<br>";

$query2 = "SELECT * from citation";
$result2 = $dbh->query($query2);

//Toutes les citations
foreach($result2 as $data)
{
    echo $data['phrase']."<br>";
}


//Tous les siècles
echo "<h1>Siècles de la BD</h1>";
echo "<br>";

$query3 = "SELECT * from siecle";
$result3 = $dbh->query($query3);

foreach($result3 as $data)
{
    echo $data['numero']."<br>";
}
?>