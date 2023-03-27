<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Acesse sua conta</h1>
    <form action="../control/login.php" method="POST" autocomplete="off">
        <p>
            <label>Username: </label>
            <input type="text" name="username" placeholder="Digite seu username">
        </p>
        <p>
            <label>Password: </label>
            <input type="password" name="password" placeholder="Digite sua password">
        </p>
        <p>
            <input type="submit" value="Recuperar Senha">
        </p>
        <p>
            <input type="submit" value="Logar">
        </p>
    </form>
</body>

</html>