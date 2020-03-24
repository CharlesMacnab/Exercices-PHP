

<form action="Exercice3.php" method="post">
    Nom : <input type="text" name="nom"><br>
    Prénom : <input type="text" name="prenom"><br>
    Mail : <input type="text" name="mail"><br>
    Age : <input type="number" name="age" value="--Age--" min="0" max="20"><br>
    Monsieur : <input type="checkbox" name="gender" value="Monsieur"> Madame : <input type="checkbox" name="gender" value="Madame"><br>
    <input type='submit' value='Valider'/><br>
</form>

<?php

class formulaire{

    /*public function __construct()
    {
        echo "nom : ".$_POST['nom']. "<br>" . "prenom : ".$_POST['prenom'];
    }*/

    public function getname(){
        echo "Nom : ".$_POST['nom']. "<br>";
    }

    public function getlastname(){
        echo  "Prénom : ".$_POST['prenom']. "<br>";
    }

    public function getmail(){
        echo "Mail : ".$_POST['mail']. "<br>";
    }

    public function getage(){
        echo "Age : ".$_POST['age']. "<br>";
    }

    public function getratio(){
        echo "Monsieur : ".$_POST['gender']. "Madame : ".$_POST['gender']. "<br>";
    }


}

$objet =  new formulaire();
$objet->getname();
$objet->getlastname();
$objet->getmail();
$objet->getage();
$objet->getratio();

?>