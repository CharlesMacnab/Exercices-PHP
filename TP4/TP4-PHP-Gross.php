
<h1>TP4</h1>
<hr>
<h2>Exercice 1</h2>


<?php
    echo date('l j F Y', time());
    echo"<br>";
    setlocale(LC_TIME, "fr_FR.UTF8");
    echo strftime ('%A %d %B %G', time());

?>

<hr>

<h2>Exercice 2</h2>

<?php

$date1 = new DateTime("now");
$date2 = new DateTime("2000-05-13");
echo "Date de naissance : ".strftime("%d-%m-%Y",mktime(0,0,0,05,13,2000))."<br>";
echo "Date du jour : ".strftime("%d-%m-%Y",time())."<br>";
$datediff = date_diff($date1,$date2);
echo "Age : ".$datediff->format("%Y ans %m mois et %D jours")." = ".$datediff->days." jours = ".($datediff->days*86400)." secondes";
?>

<hr>

<h2>Exercice 3</h2>

<?php

$datelast = new DateTime("2020-02-09");
$daterot = new DateInterval('P29DT12H44M3S');


$datelast->add($daterot);

echo "Date de la prochaine lune : " .$datelast->format('Y-m-d H:i:s')."<br>";

?>
