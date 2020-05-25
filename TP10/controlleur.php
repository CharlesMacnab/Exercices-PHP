<?php
//utilisation des sessions pour récupérer les variables de prénoms et nom de l'admin par l'id
session_start();


if($_GET['func'] == 'NewUser'){
    NewUser($_POST['login'], $_POST['password'], $_POST['mail'], $_POST['nom'], $_POST['prenom']);
}

if($_GET['func'] == 'Login'){
    Login($_POST['login'], $_POST['password']);
}

if($_GET['func'] == 'AddStudent'){
    AddStudent($_POST['nomStudent'], $_POST['prenomStudent'], $_POST['note']);
}

if($_GET['func'] == 'ModifyStudent'){
    ModifyStudent($_POST['Update'], $_POST['nomUpdateStudent'], $_POST['prenomUpdateStudent'], $_POST['noteUpdateStudent'] );
}

if($_GET['func'] == 'DeleteStudent'){
    DeleteStudent($_POST['Delete']);
}

if($_GET['func'] == 'Deconnexion'){
    Deconnexion();
}




function connexion($base, $user, $password){

    try {
        $dbh = new PDO($base, $user, $password);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    return $dbh;

}

function NewUser($login, $password, $mail, $nom, $prenom){

    $dbh = connexion('pgsql:host=localhost;dbname=etudiants', 'postgres', 'isen2018');

    $CriptedPassword = password_hash($password, PASSWORD_DEFAULT);


    echo "<h1> $CriptedPassword </h1>";


    $data = "INSERT INTO utilisateur VALUES (DEFAULT,?, ?, ?, ?, ?)";
    $data2 = $dbh->prepare($data);

    $data2->execute([$login,$CriptedPassword,$mail,$nom,$prenom]);

    header ('Location: index.php');
}

function Login($login, $password){

    $dbh = connexion('pgsql:host=localhost;dbname=etudiants', 'postgres', 'isen2018');

    $query = "SELECT id, nom, prenom, password FROM utilisateur WHERE login = '$login'";
    $result = $dbh->prepare($query);
    $result->execute();
    $result2=$result->fetchAll();

    if (password_verify($password, $result2[0]['password'])){
        $_SESSION["adminId"] = $result2[0]['id'];
        $_SESSION["adminPrenom"] = $result2[0]['prenom'];
        $_SESSION["adminNom"] = $result2[0]['nom'];
        header("Location: viewadmin.php");
    }
    else {
        echo "Mauvais mot de Passe";
    }

}

function AddStudent($nom, $prenom, $note) {

    $dbh = connexion('pgsql:host=localhost;dbname=etudiants', 'postgres', 'isen2018');

    $query = "INSERT INTO etudiant (user_id, nom, prenom, note) VALUES (?, ?, ?, ?)";
    $result = $dbh->prepare($query);
    $result->execute([$_SESSION["adminId"], $nom, $prenom, $note]);

    header("Location: viewadmin.php");
}


function ListeEtudiant() {
    $dbh = connexion('pgsql:host=localhost;dbname=etudiants', 'postgres', 'isen2018');

    $compteur=0;

    $query2 = "SELECT nom FROM etudiant WHERE user_id =".$_SESSION["adminId"];
    $result1 = $dbh->query($query2);
    foreach ($result1 as $data) {
        $compteur++;
    }

    if($compteur>=1) {
        echo'<table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Note</th>
                <th scope="col"></th> //Pour le premier bouton
                <th scope="col"></th> //Pour le second bouton
            </tr>
        </thead>
        <tbody>';
        $query2 = "SELECT id, nom, prenom, note FROM etudiant WHERE user_id =".$_SESSION["adminId"];
        $result2 = $dbh->prepare($query2);
        $result2->execute();
        $resultT=$result2->fetchAll();

        for ($k = 0; $k < $compteur; $k++) {
            $index=$k+1;
            echo '<tr>';
            echo '<th>'.$index.'</th>';
            echo '<td>' . $resultT[$k]['nom'] . '</td>';
            echo '<td>' . $resultT[$k]['prenom'] . '</td>';
            echo '<td>' . $resultT[$k]['note'] . '</td>';
            echo '<td><form method="POST" action="view-editetudiant.php?id='.$resultT[$k]['id'].'"><button style="float: right" type="submit" class="btn btn-info">Modifer</button></form></td>';
            echo '<td><form method="POST" action="controlleur.php?func=DeleteStudent"><button style="float: right" name="Supprimer" value="'.$resultT[$k]['id'].'" type="submit" class="btn btn-info">Supprimer</button></form></td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    }else{
        return;
    }
}

function ModifyStudent($id, $nom, $prenom, $note) {
    $dbh = connexion('pgsql:host=localhost;dbname=etudiants', 'postgres', 'isen2018');

    $query4 = "UPDATE etudiant SET nom='".$nom."', prenom ='".$prenom."', note ='".$note."' WHERE id=".$id;
    $result4 = $dbh->prepare($query4);
    $result4->execute();

    header("Location: viewadmin.php");
}

function DeleteStudent($id) {
    $dbh = connexion('pgsql:host=localhost;dbname=etudiants', 'postgres', 'isen2018');

    $query5 = "DELETE FROM etudiant WHERE id=".$id;
    $dbh->exec($query5);

    header("Location: viewadmin.php");
}

function Moyenne(){
    $dbh = connexion('pgsql:host=localhost;dbname=etudiants', 'postgres', 'isen2018');
    $compteur1 = 0;
    $total = 0;

    $query6 = "SELECT note FROM etudiant WHERE user_id=".$_SESSION['adminId'];
    $result6 = $dbh->query($query6);
    foreach ($result6 as $data) {
        $total+=$data['note'];
        $compteur1++;
    }
    if ($compteur1>0){

        echo'<br>
    <h3>Moyenne des étudiants</h3><hr>';
        echo'<h2>';
        $moyenne=$total/$compteur1;
        echo $moyenne."</h2>";
    }else {
        return;
    }
}


function Deconnexion(){
    if(isset($_SESSION))unset($_SESSION);
    header("Location : index.php");
}




?>

