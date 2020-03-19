<h1>TP3</h1>
<hr>
<h2>Exercice 1</h2>
<h3>Question 1</h3>
<?php
function increment(){
    static $hello=0;
    $hello++;
    echo $hello;
}

increment();
increment();
increment();
increment();

?>

<hr>

<h2>Exercice 2</h2>

<h3>Question 1</h3>

<?php
$bonjour = 0;

function increment2(&$hello){
    $hello = $hello + 10;
    echo "$hello";
}

increment2($bonjour);
echo "$bonjour";

?>

<hr>

<h2>Exercice 3</h2>

<h3>Question 1</h3>

<?php

$identite = ['alain', 'basile', 'David', 'Edgar'];
$age = [1,15,35,65];
$mail = ['prenom.nom@gtail.be', 'truc@bruce.zo', 'caro@caramel.org', 'trop@monmel.fr'];


function q1($tab)
{
    echo 'Nom de Domaine : <br>';
    foreach ($tab as $value) {
        $soluce = strstr($value, '@');
        $test = strtok($soluce,'.')." Extension :  ".strtok('\0');
        echo "$test<br>";

    }
}

q1($mail);
?>

<h3>Question 2</h3>

<?php
$identite = ['alain', 'basile', 'David', 'Edgar'];
$age = [1,15,35,65];
$mail = ['prenom.nom@gtail.be', 'truc@bruce.zo', 'caro@caramel.org', 'trop@monmel.fr'];

function q2 ($tab1,$tab2,$tab3){

    foreach ($tab1 as $value) {
        $maiil = $value;
        $soluce = strstr($value, '@');
        $test = strtok($soluce,'.');
        $extension =  strtok('\0');
    }
    foreach ($tab2 as $value1){
        $name = $value1;
    }
    foreach ($tab3 as $value2){
        $agge = $value2;
    }
echo "Je me nomme $name j'ai $agge ";
    if ($agge > 1){
        echo "ans et mon mail est $maiil du domaine $test avec l'extension $extension <br>";
    }
    else echo "an et mon mail est $maiil du domaine $test avec l'extension $extension <br>";

}
q2($mail,$identite,$age);
?>

<hr>

<h2>Exercice 4</h2>

<h3>Question 1</h3>
 <?php

function etoile(){
    echo "*";
    echo "*";
    echo "*";
    echo "*";
    echo "*<br>";
}
 function etoile2(){
     etoile();
     etoile();
     etoile();
     etoile();
     etoile();
 }

 function etoile3(){
   for ($i=1;$i<6;$i++){
       
   }
 }
etoile();
echo "<br>";
etoile2();
echo "<br>";
?>