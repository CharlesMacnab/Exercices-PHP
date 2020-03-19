<h1>TP1 : Variables et Constantes</h1>
<hr>
<h2>Excercice 1</h2>

<h3>Question 1</h3>
<?php
echo '1 - le livre "ma vie" est terrible !! '."<br>";
echo "2 - le livre \"ma vie\" est terrible !! "."<br>";
echo '3 - le livre "ma vie" est terrible !!'. '<br>';
echo "4 - le livre 'ma vie' est terrible !! et le public
l'apprécie.".'<br><br>';
$mavie = "ma vie";
echo "5 - le livre $mavie est terrible !! <br>";
echo '6 - le livre $mavie est terrible !! <br>';
?>
<hr>
<h2>Exercice 2</h2>
<h3>Question 1</h3>
<?php
echo "J'ai l'esprit large et je n'admets pas qu'on dise le contraire. Citation de Coluche"."<br>";
?>
<h3>Question 2</h3>
<?php
echo "<i>J'ai l'esprit large et je n'admets pas qu'on dise le contraire.</i> Citation de Coluche"."<br>";
?>
<h3>Question 3</h3>
<?php
echo "<b>J'ai l'esprit large et je n'admets pas qu'on dise le contraire.</b> Citation de Coluche"."<br>";
?>
<h3>Question 4</h3>
<?php
echo "J'ai l'esprit large et je n'admets pas qu'on dise le contraire.".strtoupper("Citation de Coluche")."<br>";
?>
<hr>
<h2>Exercice 3</h2>
<h3>Question 1</h3>
<?php
$citation = "J'ai l'esprit large et je n'admets pas qu'on dise le contraire. ";
$auteur = "Citation de Coluche";
echo $citation.$auteur;
?>
<h3>Question 2</h3>
<?php
$citation1;
$auteur1;
var_dump($citation1);
var_dump($auteur1);
$citation1 = "J'ai l'esprit large et je n'admets pas qu'on dise le contraire. ";
$auteur1 ="Citation de Coluche";
$bool = isset ($citation1);
$bool1 = isset ($auteur1);
var_dump($bool);
var_dump($bool1);
?>

<h3>Question 3</h3>
<?php

$citation1;
$auteur1;
var_dump($citation1);
var_dump($auteur1);
$citation1 = "J'ai l'esprit large et je n'admets pas qu'on dise le contraire. ";
$auteur1 = "Citation de Coluche";
$bool = isset ($citation1);
$bool1 = isset ($auteur1);
var_dump($bool);
var_dump($bool1);
define('AUTEUR', "Coluche");
echo AUTEUR;
?>

<h3>Question 4</h3>
<?php

$citation1;
$auteur1;
var_dump($citation1);
var_dump($auteur1);
$citation1 = "J'ai l'esprit large et je n'admets pas qu'on dise le contraire. ";
$auteur1 = "Citation de Coluche";
$bool = isset ($citation1);
$bool1 = isset ($auteur1);
var_dump($bool);
var_dump($bool1);
define('AUTEUR', "Coluche");
echo AUTEUR;
unset($citation1,$auteur1,$bool,$bool1);
isset($citation1);
?>
<hr>
<h2>Exercice 4</h2>
<h3>Question 1</h3>
<?php
echo "$_SERVER";
echo "$GLOBALS";
?>

<hr>

<h2>Exercice 5</h2>
<h3>Question 1 et 2</h3>
<?php
ini_set('display_errors', 'on');
echo ini_get('display_errors');
echo phpinfo();
?>
