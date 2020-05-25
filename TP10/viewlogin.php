<!doctype html>
<html lang="fr">
<head>
    <title>TP10</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


</head>

<body>
<div class="container col-9" >
    <h1 style="text-align: center"><b>Login</b></h1>
    <hr>
    <br>
    <br>
    <form method="POST" action="controlleur.php?func=Login">
        <div class="form-group">
            <label>Login</label>
            <input name="login" type="text" class="form-control" maxlength="50" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input name="password" type="password" class="form-control" maxlength="50" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>