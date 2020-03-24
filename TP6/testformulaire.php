

<?php

include "Exercice2.php";

$test1 = new formulaire("testformulaire.php","post");
$test1->ajouterzonetexte("Votre nom : ");
$test1->ajouterzonetexte("Votre code : ");
$test1->ajouterbouton("Envoyer");
$test1->getform();

?>