<!doctype html>
<html lang="fr">
<head>
    <title>TP10</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<div class="container col-9" >
    <h1 style="text-align: center"><b>INSCRIPTION</b></h1>
    <hr>
    <br>
    <br>
    <form method="POST" action="controlleur.php?func=NewUser">
        <div class="form-group">
            <label>Login</label>
            <input name="login" type="text" class="form-control" maxlength="50" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input name="password" type="password" class="form-control" maxlength="50" required>
        </div>
        <div class="form-group">
            <label>Adresse Mail</label>
            <input name="mail" type="text" class="form-control" maxlength="50" required>
        </div>
        <div class="form-group">
            <label>Nom</label>
            <input name="nom" type="text" class="form-control" maxlength="50" required>
        </div>
        <div class="form-group">
            <label>Prénom</label>
            <input name="prenom" type="text" class="form-control" maxlength="50" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Ajouter Nouvel Utilisateur</button>
    </form>
</div>


</body>
</html>