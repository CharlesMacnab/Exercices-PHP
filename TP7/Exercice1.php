
<?php

include "../TP6/Exercice2.php";


class form2 extends formulaire{


    public function __construct($fichier,$m ){
        formulaire::__construct($fichier,$m );
    }



    final public function ajouterradio($texte){
        $mytext = $texte." : <input type='radio' name='".$texte."'><br>";
        $position = strrpos($this->formulaire,'<',-1);
        $part1 = substr($this->formulaire,0,$position);
        $part2 = substr($this->formulaire,$position);
        $this->formulaire = $part1.$mytext.$part2;
    }

    public function ajoutercases($texte){
        $mytext = $texte." : <input type='checkbox' name='".$texte."'><br>";
        $position = strrpos($this->formulaire,'<',-1);
        $part1 = substr($this->formulaire,0,$position);
        $part2 = substr($this->formulaire,$position);
        $this->formulaire = $part1.$mytext.$part2;
    }

}

$test1 = new form2("testformulaire.php","post");
$test1->ajouterzonetexte("Votre nom ");
$test1->ajouterzonetexte("Votre code ");
$test1->ajouterbouton("Envoyer");
$test1->ajouterradio("Homme");
$test1->ajouterradio("Femme");
$test1->ajoutercases("Tennis");
$test1->ajoutercases("Equitation");
echo $test1->getform();


?>