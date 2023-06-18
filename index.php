<?php
    include './user.php';
    $obj = new user();

    if(isset($_POST['btn-login'])){

    $user = $_POST['usuario'];
    $senha = $_POST['senha'];

    if($obj->validate($user, sha1($senha))) {

    }else{
        header("Location: http://localhost/ListaTarefas/erro.php");
    }
    } 
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tarefas</title>

    <!--Links-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img-icon/agenda/16x16.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navbar fixed-top navbar-expand-lg">

        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img-icon/agenda/256x256.png" alt="agenda" width="56" height="56" class="logo-header d-inline-block align-text-center"><p id="texto-header">Lista de Tarefas</p>
            </a>

            <form action="login.php" method="POST">
                <button type="submit" id="btn-login" class="btn btn-primary">Login</button>
            </form>
        </div>

    </nav>

    <main class="container">

        <h1 id="titulo" class="display-6">Agenda</h1>

        <table id="tabela" class="table">
            <thead>
            <tr>
                <th style="border-bottom: 0;">
                    <button type="button" id="btn-tarefa" class="btn btn-primary">Nova Tarefa</button>
                </th>
            </tr>
            <tr>
                <th scope="col"><br>Status</th>
                <th scope="col">ID</th>
                <th scope="col">Título</th>
                <th scope="col">Descrição</th>
                <th scope="col">Data</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
                <th scope="col">Ver</th>
            </tr>
            </thead>

            
            <tbody>
            <tr>
                <th scope="row"><input type="checkbox" id="status" name="check-status" value="xxx"></th>
                    <td>0</td>
                    <td>Título da tarefa</td>
                    <td>Aqui vai a descrição da tarefa</td>
                    <td>13/06/2023</td>
                    <td><a href="#"><img src="img-icon/edit/512x512.png" alt="icon" width="32" height="32" id="btn-edit" class="icon-edit"></a></td>
                    <td><a href="#"><img src="img-icon/remove/512x512.png" alt="icon" width="32" height="32" id="btn-remove" class="icon-remove"></a></td>
                    <td><button type="button" id="btn-view" class="btn btn-glass" data-bs-toggle="modal" data-bs-target="#janelaModal"><img src="img-icon/view/512x512.png" alt="icon" width="24" height="24" class="icon-view"></button></td>
            </tr>

            </tbody>
        </table>

        
        
        <!--Modal-->
        <div class="modal fade" id="janelaModal" tabindex="-1" aria-labelledby="janelaModalLabel" aria-hidden="true">

            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 id="titulo-modal" class="modal-title fs-5" id="janelaModalLabel">Título da tarefa</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <h6 id="subtitulo-modal">Subtítulo</h6>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit vel sapiente autem culpa provident optio sint explicabo quas tempora eius doloremque asperiores eos, officiis nam atque totam voluptatum distinctio iste?</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit vel sapiente autem culpa provident optio sint explicabo quas tempora eius doloremque asperiores eos, officiis nam atque totam voluptatum distinctio iste?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
            
        </div>

    </main>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>

    