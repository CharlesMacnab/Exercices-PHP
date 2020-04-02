<?php

trait Un{

    public function Small($texte){
        echo "<small>".'$texte'."<small/>";
    }

    public function Big($texte){
        echo "<small>".'$texte'>"<small/>";
    }

}

trait Deux{

    public function Small($texte){
        echo "<i>".'$texte'."<i/>";
    }

    public function Big($texte){
        echo "<h2>".'$texte'>"<h2/>";
    }
}

class texte{



    use Un, Deux{
        Deux::Small insteadof Un;
        Un::Small as Petit;

        Un::Big insteadof Deux;
        Deux::Big as Gros;
    }


}

$objetTest = new texte();
$objetTest->Small();
$objetTest->Big();
$objetTest->Petit();
$objetTest->Gros();


?>
