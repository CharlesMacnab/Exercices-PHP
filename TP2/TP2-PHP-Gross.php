<h1>TP2</h1>
<hr>
<h2>Exercice 1</h2>
<h3>Question 1</h3>
<?php
$age = random_int(1,90);
if ($age <= 12){
    echo "$age enfant <br>";
}
if ($age > 12 && $age <= 19){
    echo "$age ado <br>";
}
if ($age > 19 && $age <= 50){
    echo "$age adulte <br>";
}
if ($age > 50 && $age <= 70){
    echo "$age sénior <br>";
}
if ($age > 70){
    echo "$age agé <br>";
}
?>

<h3>Question 2</h3>

<?php
$age = random_int(1,90);
switch ($age){
    case ($age <= 12) :
        echo "$age enfant <br>";
        break;
    case ($age > 12 && $age <= 19) :
        echo "$age ado <br>";
        break;
    case ($age > 19 && $age <= 50) :
        echo "$age adulte <br>";
        break;
    case ($age > 50 && $age <= 70) :
        echo "$age sénior <br>";
        break;
    case ($age > 70) :
        echo "$age agé <br>";
        break;
}
?>

<hr>

<h2>Exercice 2</h2>

<h3>Question 1</h3>

<?php
$j = 0;
$i = 1;
$k = 0;
$o = 1;
while ($o <= 20){
   $k = $i + $j ;
   $i = $j;
   $j = $k;
   $o++;
   echo "$k <br>";;
}
?>

<h3>Question 2</h3>

<?php
$j = 0;
$i = 1;
$k = 0;
$o = 0;
$p = 0;
do{
    $k = $i + $j ;
    $i = $j;
    $j = $k;
    $o++;
    $p = $k/$i;
    echo "$p <br>";;
}
while ($o <= 30)
?>

<hr>

<h2>Exercice 3</h2>

<h3>Question 1</h3>

<?php
$pi1 = 0;
$pi2 = 0;
$pi3 = 0;
$pi4 = 0;
$test1 = 0;
$test2 = 0;
$test3 = 0;
$test4 = 0;

for ($i=1; $i<16; $i++){
    $test1 += 1/($i*$i);
}
$pi1 = sqrt($test1*6);
echo "$pi1 <br>";

for ($i=1; $i<160; $i++){
    $test2 += 1/($i*$i);
}
$pi2 = sqrt($test2*6);
echo "$pi2 <br>";

for ($i=1; $i<1600; $i++){
    $test3 += 1/($i*$i);
}

$pi3= sqrt($test3*6);
echo "$pi3<br>";

for ($i=1; $i <16000; $i++){
    $test4 += 1/($i*$i);
}
$pi4 = sqrt($test4*6);
echo "$pi4 <br>";

?>

<hr>

<h2>Exercice 4</h2>

<h3>Question 1</h3>


<?php

$tab = array('Einstein' => "La réussite? 95% de travail et 5% de connaissances <br>",
'Barjavel' => 'Il y a ceux qui sont heureux et ceux qui sont très heureux. Pour ceux-là, le mot bonheur ne suffit pas. Il est deux choses qui subsisteront sur terre, tant qu\'il y aura des humains : l\'amour et la guerre !<br>',
    'Rodrigues dos Santos' => 'L\'homme a inventé Dieu pour expliquer le monde et, surtout, pour l\'aider à faire face à ses peurs.<br>');
foreach ($tab as $key => $value){

    echo "|$key | $value|<br>";

}
?>

<hr>
<h2>Exercice 5</h2>
<h3>Quesiton 1</h3>

<?php

echo'<table><thead><tr><th><b>Table de 5</b></th></tr></thead><tbody>';
$l = mt_rand();
$tab = array("1 x $l" => $l*1, "2 x $l" => $l*2,"3 x $l" => $l*3,"4 x $l" => $l*4,"5 x $l" => $l*5);
foreach ($tab as $key => $value){

    echo "<tr style='border: black 2px;'><td >$key </td><td style='border: black 2px;'>$value</td></tr>";

}
echo "</tbody></thead></table>"
?>

<hr>

<h2>Exercice 6</h2>
<h3>Question 1</h3>

<?php
/*$y = 0;
for ($i=2; $i<97; $i=$i+1){
    $y = sqrt($i)+1;

    for ($j=2; $j<=$y; $j+=1){
        if($i%$j!=1){
            echo "$i est un nombre premier <br>";
        }
    }
}*/
?>

<hr>

<h2>Exercice 7</h2>

<h3>Question 1</h3>

<?php

$annuaire=array(
    "PUJOL Olivier"=>"03 89 72 84 48",
    "IMBERT Jo"=>"03 89 36 06 05",
    "SPIEGEL Pierre"=>"03 87 67 92 37",
    "THOUVENOT Frédéric"=>"01 42 86 02 12",
    "MEGEL Pierre"=>"09 59 71 46 96",
    "SUCHET Loïc"=>"03 89 33 10 54",
    "GIROIS Francis"=>"03 88 01 21 15",
    "HOFFMANN Emmanuel"=>"03 89 69 20 05",
    "KELLER Fabien"=>"04 18 52 34 25",
    "LEY Jean-Marie"=>"03 89 43 17 85",
    "ZOELLE Thomas"=>"04 18 65 67 69",
    "WILHELM Olivier"=>"03 89 60 48 78",
    "BLIN Nathalie"=>"01 28 59 23 25",
    "BICARD Pierre-Eric"=>"03 89 69 25 82",
    "ZIEGLER Thierry"=>"03 89 06 33 89",
    "BADER Jean"=>"03 89 25 65 72",
    "ROSSO Anne-Sophie"=>"01 56 20 02 36",
    "ROTTNER Thierry"=>"03 88 29 61 54",
    "WEBER Joao"=>"03 89 35 45 20",
    "SCHILLINGER Olivier"=>"03 84 21 38 40",
    "BICARD Muriel"=>"03 89 33 47 99 ",
    "KELLER Christian"=>"03 88 19 16 10 ",
    "GROELLY Antonio"=>"03 89 33 60 63",
    "ALLARD Aline"=>"03 89 56 49 19",
    "WINNINGER Bénédicte"=>"04 16 14 86 66");
ksort($annuaire);

echo'<table border=40 cellspacing=12 cellpadding=20><thead><tr><th colspan="2"><b>ANNUAIRE</b></th></tr></thead><tbody>';

foreach($annuaire as $key => $value){
    echo "<tr><td >$key </td><td >$value</td></tr>";
}
echo "</body></table>";
?>

<hr>

<h2>Exercice 8</h2>

<h3>Question 1</h3>

<?php

$A1 = rand(0,1);
$A2 = rand(0,1);
$A3 = rand(0,1);
$A4 = rand(0,1);
$A5 = rand(0,1);
$A6 = rand(0,1);

if ($A1==1 && $A3==1 || $A1==1 && $A4==1 && $A5==1 ||$A2==1 && $A6==1 ) {
    echo "La lampe est allulmée <br>";
}

else{
    echo "La lampe est éteinte";
}
?>

<hr>

<h2>Exercice 9</h2>

<h3>Question 1</h3>

<?php

$mot ="CIR";
$passeword = " ";

for ($i=0; $i<strlen($mot); $i++){
    $passeword[$i] = chr(ord($mot[$i]) + 1);
}

echo "$passeword";

?>