

<?php

class formulaire{

    private $formulaire;

    public function __construct($fichier,$m )
    {
        $this->formulaire = "<form action = "."$fichier"." method="."$m></form>";
    }

    public function ajouterzonetexte($texte){
    $mytext = $texte." : <input type='text' name'".$texte."'/>";
    $position = strrpos($this->formulaire,"<",-1);
    $part1 = substr($this->formulaire,0,$position);
    $part2 = substr($this->formulaire,$position);
    $this->formulaire = $part1.$mytext.$part2;
    }

    public function ajouterbouton($texte){
       $this->formulaire = "<input type="."submit"." value="."$texte"." />";
    }

    public function getform(){
        return $this->formulaire;
    }


}

?>
