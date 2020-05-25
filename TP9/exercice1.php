<?php
function connexion($base, $user, $password){

    try {
        $dbh = new PDO($base, $user, $password);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    return $dbh;

}

$dbh = connexion('pgsql:host=localhost;dbname=graphenotes', 'postgres', 'isen2018');


header ("Content-type: image/png");
$image = imagecreate(600,200);

//PREMADE COLORS
$gris = imagecolorallocate($image, 125, 125, 125);
$blanc = imagecolorallocate($image, 255, 255, 255);
$orange = imagecolorallocate($image, 255, 128, 0);
$bleu = imagecolorallocate($image, 0, 0, 255);
$bleuclair = imagecolorallocate($image, 156, 227, 254);
$noir = imagecolorallocate($image, 0, 0, 0);


$compteur=0;
$compteurE1=0;
$compteurE2=0;

$resultatE1=0;
$resultatE2=0;

$courbeE1=array();
$courbeE2=array();

$query = "SELECT note, etudiant FROM notes";
$result = $dbh->query($query);

foreach ($result as $data){
    if ($data['etudiant']=="E1"){
        $resultatE1 = $resultatE1 + $data['note'];
        array_push($courbeE1, $data['note']);
        $compteurE1++;
    }
    if ($data['etudiant']=="E2"){
        $resultatE2 = $resultatE2 + $data['note'];
        array_push($courbeE2, $data['note']);
        $compteurE2++;
    }
    $compteur++;
}
$moyenneE1=$resultatE1/$compteurE1;
$moyenneE2=$resultatE2/$compteurE2;

//AFFICHAGE

for ($i=0; $i<$compteurE1; $i++){
    imageline($image, $i*60, (100-$courbeE1[$i]), ($i+1)*60, (100-$courbeE1[$i+1]), $blanc);
}

for ($i=0; $i<$compteurE2; $i++){
    imageline($image, $i*60, (100-$courbeE2[$i]), ($i+1)*60, (100-$courbeE2[$i+1]), $bleu);
}

imagestring($image, 4, 200, 5, "Notes des etudiants E1 et E2", $noir);

imagestring($image, 4, 350, 150, "Moyenne des notes de E1 : ".$moyenneE1 , $noir);
imagestring($image, 4, 350, 175, "Moyenne des notes de E2 : ".$moyenneE2 , $noir);

imagestring($image, 4, 5, 125, "E1" , $blanc);
imagestring($image, 4, 50, 125, "E2", $bleu);


imagepng($image);
?>