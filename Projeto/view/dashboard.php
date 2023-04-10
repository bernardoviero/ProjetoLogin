<?php
session_start();
if (empty($_SESSION)) {
    print "<script>alert('Usuário não logado!')</script>";
    print "<script> location.href='index.php'; </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    h1 {
        font-size: 24px;
        margin-top: 0;
    }

    p {
        font-size: 16px;
        margin: 0 0 10px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Bem vindo a Dashboard, <?php echo $_SESSION['name']; ?></h1>
        <p>Acesse o Urubu do Pix pelo botão</p>
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley"><button
                style="background: #069cc2; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size: 16px;">Acessar</button></a>
        <br>
        <br>
        <br>

        <a href="../control/logout.php" style="background: red; color: #fff; text-decoration: none;"><button
                style="background: red; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size: 16px;">Logout</button></a>
    </div>
</body>

</html>