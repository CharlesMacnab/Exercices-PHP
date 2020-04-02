

<?php

/*final*/ class formulaire{

    protected $formulaire;

    public function __construct($fichier,$m )
    {
        $this->formulaire = "<form action = '".$fichier."' method='".$m."'></form>";
    }

    public function ajouterzonetexte($texte){
    $mytext = $texte." : <input type='text' name='".$texte."'><br>";
    $position = strrpos($this->formulaire,'<',-1);
    $part1 = substr($this->formulaire,0,$position);
    $part2 = substr($this->formulaire,$position);
    $this->formulaire = $part1.$mytext.$part2;
    }

    public function ajouterbouton($texte){
        $mytext = "<input type="."submit"." value=".$texte."><br>";
        $position = strrpos($this->formulaire,'<',-1);
        $part1 = substr($this->formulaire,0,$position);
        $part2 = substr($this->formulaire,$position);
        $this->formulaire = $part1.$mytext.$part2;
    }

    public function getform(){
        return $this->formulaire;
    }


}

?>
