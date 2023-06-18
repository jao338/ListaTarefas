<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Perfil</h1>
<?php

    include './user.php';
    session_start();
    $obj = new user();

    echo "Usuário - " . $_SESSION["x1"];
    echo "Senha - " . $_SESSION["x2"];
?>
    
    <form action="home.php">
        <input type="submit" value="Voltar">
    </form>
</body>
</html>