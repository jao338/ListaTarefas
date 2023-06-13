<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tarefas</title>

    <!--Links-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img-icon/16x16.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navbar fixed-top navbar-expand-lg">

        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img-icon/256x256.png" alt="agenda" width="56" height="56" class="logo-header d-inline-block align-text-center"><p id="texto-header">Lista de Tarefas</p>
            </a>

            <button type="button" class="btn btn-primary">Login</button>
        </div>

    </nav>

    <main class="container">

        <h1 id="titulo" class="display-6">Agenda</h1>

        <table id="tabela" class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Data</th>
                    <th scope="col">Feito</th>
                </tr>
            </thead>

            
            <tbody>
                <tr>
                    <th scope="row">❤</th>
                        <td>1</td>
                        <td>Aqui vai a descrição da tarefa</td>
                        <td>13/06/2023</td>
                        <td><input type="checkbox" id="status" name="check-status" value="xxx"></td>
                </tr>
                <tr>
                    <th scope="row">❤</th>
                        <td>2</td>
                        <td>Aqui vai a descrição da tarefa</td>
                        <td>13/06/2023</td>
                        <td><input type="checkbox" id="status" name="check-status" value="xxx"></td>
                </tr>
                <tr>
                    <th scope="row">❤</th>
                        <td>3</td>
                        <td>Aqui vai a descrição da tarefa</td>
                        <td>13/06/2023</td>
                        <td><input type="checkbox" id="status" name="check-status" value="xxx"></td>
                </tr>

            </tbody>
        </table>
    </main>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>

    