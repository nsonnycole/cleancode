<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username === 'toto' && $password === '1234'){
    header('Location: hello.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<h1>Formulaire de connexion</h1>
    <form action="login.php" method="post">
        <div class="form-control">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>
        <div class="form-control">
            <label for="password">password</label>
            <input type="password" name="password" id="password">
        </div>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>