<?php

function connexion($base, $user, $password){

    try {
        $dbh = new PDO($base, $user, $password);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    return $dbh;

}

$dbh = connexion('pgsql:host=localhost;dbname=grapheactions', 'postgres', 'isen2018');

header ("Content-type: image/png");
$image = imagecreate(500,500);

//PREMADE COLORS
$gris = imagecolorallocate($image, 125, 125, 125);
$blanc = imagecolorallocate($image, 255, 255, 255);
$vert = imagecolorallocate($image, 0, 255, 0);
$rouge = imagecolorallocate($image, 255, 0, 0);

$courbe1=array();
$courbe2=array();
$compteur1 = 0;
$compteur2 = 0;

$query = "SELECT action, valeur  FROM statistique";
$result = $dbh->query($query);

foreach ($result as $data){
    if ($data['action']=="Als"){
        array_push($courbe1, $data['valeur']);
        $compteur1++;
    }
    if ($data['action']=="For"){
        array_push($courbe2, $data['valeur']);
        $compteur2++;
    }
}

//AFFICHAGE

for ($i=0; $i<$compteur1; $i++){
    imageline($image, $i*50, (500-$courbe1[$i]*7), ($i+1)*50, (500-$courbe1[$i+1]*7), $blanc);
}

for ($i=0; $i<$compteur2; $i++){
    imageline($image, $i*50, (500-$courbe2[$i]*7), ($i+1)*50, (500-$courbe2[$i+1]*7), $rouge);
}

imagestring($image, 4, 10, 5, "Cours des actions Als", $vert);
imagestring($image, 4, 10, 30, "et For en 2010", $vert);

imagestring($image, 4, 80, 460, "Als", $blanc);
imagestring($image, 4, 10, 460, "For" , $rouge);

imagepng($image);
?>