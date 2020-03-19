<!DOCTYPE html>
<body>
    <h1>TP5</h1>
    <hr>
    <h2>Exercice 1</h2>
    <form action = "TP5-PHP-GROSS.php" method="post">
        <a href="TP5-PHP-GROSS.php">Cliquer pour avoir la valeur en degré</a>
        <br>
        Valeur en Fahrenheit :
            <input type="text" name="Valeur"/>

        <input type="submit" value="convertir" />

    </form>




<?php
    if(!empty($_POST['Valeur'])){
        echo "Température en Degrés : ".round(($_POST['Valeur']-32)*(5/9),1,0);
    }
    else{
        echo "Champ vide";
    }

?>

    <hr>

    <h2>Exercice 2</h2>
    <h3>Question 1</h3>

    <form action="TP5-PHP-GROSS.php" method="post">
        Nom : <input type="text" name="nom" value="<?php if (isset($_POST['nom'])){echo $_POST['nom'];} ?>">
        Prénom : <input type="text" name="prenom" value="<?php if (isset($_POST['prenom'])){echo $_POST['prenom'];} ?>">
        <br>
        Débutant : <input type="radio" name="one" value="<?php if (isset($_POST['one'])){echo $_POST['prenom'];} ?>">
        Avancé : <input type="radio" name="one" value="<?php if (isset($_POST['one'])){echo $_POST['prenom'];} ?>">
        <br>
        <input type="submit"  value="Effacer" >
        <input type="submit" value="Envoyer">
    </form>



<?php
if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['one'])){
    echo "Bonjour ".$_POST['prenom']." ".$_POST['nom'].". Vous avez un niveau ".$_POST['one'] ;
}
else {
    echo "VEUILLEZ RENTRER VOS COORDONNEES" . '<br>';
}
?>

    <hr>
    <h2>Exercice 3</h2>

    <form action="TP5-PHP-GROSS.php" method="post" >

        Nom <input type="text" name="nom" value="<?php if (isset($_POST['nom'])){echo $_POST['nom'];} ?>">
        Prénom <input type="text" name="prenom" value="<?php if (isset($_POST['prenom'])){echo $_POST['prenom'];} ?>">
        Age <input type="text" name="age" value="<?php if (isset($_POST['age'])){echo $_POST['age'];} ?>">

        <br>

        Langues pratiquées (choisir au minimum 2)

        <br>

        <select name="langues[]" multiple="multiple">
            <option value="français"> français</option>
            <option value="anglais"> anglais</option>
            <option value="allemdand"> allemand</option>
            <option value="espagnol"> espagnol</option>
        </select>

        <br>
        <br>

        Compétences informatiques (choisir minimum 2)

        <br>

        HTML <input type="checkbox" name="competence[]" value="HTML">
        CSS <input type="checkbox" name="competence[]" value="CSS">
        PHP <input type="checkbox" name="competence[]" value="PHP">
        SQL <input type="checkbox" name="competence[]" value="SQL">
        C <input type="checkbox" name="competence[]" value="C">
        C++ <input type="checkbox" name="competence[]" value="C++">
        JS <input type="checkbox" name="competence[]" value="JS">
        PYTHON <input type="checkbox" name="competence[]" value="PYTHON">

        <br>

        <input type="submit" value="EFFACER">
        <input type="submit" value="ENVOI">

        <br>
        <br>

    </form>

    <?php

    echo "<b>Récapitulatif de votre fiche d'information personelle : </b><br>";

    echo "Vous êtes ". $_POST['nom']." ".$_POST['prenom'].'<br>';
    echo "Vous avez ". $_POST['age']. "ans <br>";
    echo "Vous parlez :<br>";

    $langues=$_POST['langues'];
    foreach($langues as $valeur){
        echo " <li> $valeur </li>";
    }

    echo"<br> Vous avez des compétences informatiques en : <br>";

    $competences=$_POST['competence'];
    foreach($competences as $valeur2){
        echo " <li> $valeur2 </li>";
    }



    ?>

<hr>

<h2>Exercice 4</h2>

    <form action="TP5-PHP-GROSS.php" method="post">

        <table >

            <tr>
                <td> <b>Nombre 1</b> </td>
                <td> <input type="text" name="n1" value="<?php if (isset($_POST['n1'])){echo $_POST['n1'];} ?>"> </td>
            </tr>

            <tr>
                <td> <b>Nombre 2</b> </td>
                <td> <input type="text" name="n2" value="<?php if (isset($_POST['n2'])){echo $_POST['n2'];}?>"> </td>
            </tr>

            <tr>
                <td> <b>Résultat</b> </td>
                <td> <input type="text" name="result" value="<?php
                    if (isset($_POST['n1']) && isset($_POST['n2'])) {

                        switch ($_POST["but"]) {

                            case "Add" : $r = $_POST['n1'] + $_POST['n2'];
                            break;

                            case "Sou" : $r = $_POST['n1'] - $_POST['n2'];
                                break;

                            case "Div" : $r = $_POST['n1'] / $_POST['n2'];
                                break;

                            case "Pui" : $r = pow($_POST['n1'], $_POST['n2']);
                                break;
                        }
                        echo $r;
                    }
                    ?>">
                </td>
            </tr>

            <tr>
                <td> <b> Cliquer sur un boutton!</b> </td>
                <td>
                    <button value="Add" name="but">Addition x+y</button>
                    <button value="Sou" name="but">Soustraction x-y</button>
                    <button value="Div" name="but">Division x/y</button>
                    <button value="Pui" name="but">Puissance x^y</button>
                </td>
            </tr>
        </table>
    </form>

<hr>




    <form method="post" enctype="multipart/form-data">
        <p>
            Fichier <input type="file" name="fichier1">
            Fichier <input type="file" name="fichier2">
            Valider <input type="submit" value="Envoi">
        </p>
    </form>
    <?php
    $fichier1Name=$_FILES["fichier1"]["name"];
    $fichier1Type=$_FILES["fichier1"]["type"];
    $fichier1Size=$_FILES["fichier1"]["size"];
    $fichier1Tmp_Name=$_FILES["fichier1"]["tmp_name"];
    $fichier1Error=$_FILES["fichier1"]["error"];

    $fichier2Name=$_FILES["fichier2"]["name"];
    $fichier2Type=$_FILES["fichier2"]["type"];
    $fichier2Size=$_FILES["fichier2"]["size"];
    $fichier2Tmp_Name=$_FILES["fichier2"]["tmp_name"];
    $fichier2Error=$_FILES["fichier2"]["error"];

    move_uploaded_file($_FILES["fichier1"]["tmp_name"],$fichier1Name);
    move_uploaded_file($_FILES["fichier2"]["tmp_name"],$fichier2Name);
    echo "
                        <table width=60% border=1>
                        <thead>
                         <tr><th></th><th>Fichier 1</th><th>Fichier 2</th></tr>
                        </thead>
                        <tbody>
                        <tr><td>name</td><td>$fichier1Name</td><td>$fichier2Name</td></tr> 
                        <tr><td>type</td><td>$fichier1Type</td><td>$fichier2Type</td></tr> 
                        <tr><td>tmp_name</td><td>$fichier1Tmp_Name</td><td>$fichier2Tmp_Name</td></tr> 
                        <tr><td>error</td><td>$fichier1Error</td><td>$fichier2Error</td></tr>
                        <tr><td>size</td><td>$fichier1Size</td><td>$fichier2Size</td></tr>
                        <tr><td>Image</td><td><img src='$fichier1Name'></td><td><img src='$fichier2Name'></td></tr>
                        </tbody>
                        </table>";
    ?>
    <br>
    <hr>
    <?php
    setcookie ("cookie0","teset0",time()+9000 );
    setcookie ("cookie1","teset1",time()+(3600*24*14) );
    echo $_COOKIE['cookie1'];
    echo '<br>';
    echo $_COOKIE['cookie0'];
    echo '<br>';
    print_r($_COOKIE);
    echo '<br>';
    setcookie("cookie0"," ",time()+9000);
    echo $_COOKIE['cookie0'];
    echo '<br>';
    setcookie("cookie1","",time()-1);
    echo '<br>';
    ?>

    <?php
    $tab=array(
        "nom1"=>"valeur1",
        "nom2"=>"valeur2",
        "nom3"=>"valeur3"
    );

    foreach ($tab as $x=> $x_value)
    {
        setcookie($x,$x_value,time()+90000);
        echo $_COOKIE[$x];
    }
    ?>

    <br>
    <hr>

    <?php
    session_id("12");
    session_start();
    echo "id".session_id();
    $date =date("d-m-Y",time());
    $_SESSION['date']=$date;
    echo $_SESSION['date'];
    echo '<a href="TP5.php"> LA PAGE';
    ?>

    <br>
    <hr>

    <?php
    $file =fopen('test-fic.txt','a+');
    fwrite($file, "\n12");
    fclose($file);
    $file=fopen('test-fic.txt','r');
    $nbligne = 0;
    while($ligne=fgets($file))
    {
        $nbligne++;
        echo $nbligne.":".$ligne.'<br>';
    }?>
    <br>
    <hr>
    <?php
    //$file=fopen('contact.txt','r');
    //$nbligne = 0;
    //while($ligne=fgets($file))
    //{
    //$nbligne++;
    //echo $nbligne.":".$ligne.'<br>';
    //}?>
    <table>
        <?php
        $file=fopen('contact.txt','r');
        while($ligne=fgets($file))
        {
            $nbligne++;
            $ligne = "<tr><td>".str_replace(";" , "</td><td>", $ligne);
            echo $ligne.'</tr>';
        }?>



    </table>




</body>
