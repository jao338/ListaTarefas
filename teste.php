<?php
    include './tarefa.php';
    $obj = new tarefa();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <h1>Teste</h1>
<?php

   $obj->insert_task("Titulo1", "Nenhum1", "19/06/2023", "1");
?>
</body>
</html>