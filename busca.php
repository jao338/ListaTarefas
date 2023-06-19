<?php
    include './tarefa.php';
    include './user.php';
    $obj1 = new tarefa();
    $obj2 = new user();

    session_start();

    if(isset($_POST['btn-busca'])){


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
            <a class="navbar-brand" href="home.php">
                <img src="img-icon/agenda/256x256.png" alt="agenda" width="56" height="56" class="logo-header d-inline-block align-text-center"><p id="texto-header">Lista de Tarefas</p>
            </a>

            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <form class="d-flex" role="search" action="busca.php">
                    <input class="form-control me-2" type="search" placeholder="Titulo" aria-label="buscar">
                    <button id="btn-busca" class="btn btn-danger" type="submit">Buscar</button>
                    </form>
                </div>
            </nav>
            
            <?php

            
            if ($_SESSION["status"] == 1) {
                
               echo "<form action='perfil.php' method='POST'><button type='submit' id='btn-profile' class='btn btn-primary'><img src='img-icon/profile/512x512_.png' id='img-profile' alt='profile' width='32' height='32'>".$_SESSION["x1"]."</button></form>";
            }
            ?>
            
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
                    <button type="button" id="btn-tarefa" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#TarefaModal">Nova Tarefa</button>
                </th>
            </tr>
            <tr>
                <th scope="col"><br>Status</th>
                <th scope="col">Título</th>
                <th scope="col">Descrição</th>
                <th scope="col">Data</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
                <th scope="col">Ver</th>
            </tr>
            </thead>

                <?php
                
                $obj1->select_task($_SESSION["busca"]);
                    
                
                ?>
            <tbody>
            

            </tbody>
        </table>

        
        
        <!--Modal view-->
        <div class="modal fade" id="ViewModal" tabindex="-1" aria-labelledby="janelaModalLabel" aria-hidden="true">

            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 id="titulo-modal" class="modal-title fs-5" id="janelaModalLabel">Título da tarefa</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <h6 id="subtitulo-modal">Subtítulo</h6>
                        <p style='margin-top: 350px;'>Index: <span id='index'></span></p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit vel sapiente autem culpa provident optio sint explicabo quas tempora eius doloremque asperiores eos, officiis nam atque totam voluptatum distinctio iste?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
            
        </div>

        <!--Modal tarefa-->
        <div class="modal fade" id="TarefaModal" tabindex="-1" aria-labelledby="janelaModalLabel" aria-hidden="true">

            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 id="titulo-modal" class="modal-title fs-5" id="janelaModalLabel">Título da tarefa</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div>
                            <label for="formGroupExampleInput" class="form-label form-camp"><strong>Título</strong></label>
                            <input type="text" class="input-tarefa">

                            <label for="formGroupExampleInput" class="form-label form-camp"><strong>Descrição</strong></label>
                            <input type="text" class="input-tarefa">

                            <label for="formGroupExampleInput" class="form-label form-camp"><strong>Data</strong></label>
                            <input type="text" class="input-tarefa">
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <form action="home.php">
                            <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Criar</button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>

    <!--O parágrafo abaixo exibe o atual index da tr que foi clicada--> 
    
    <!-- <p style='margin-top: 350px;'>Index: <span id='xxx'></span></p> --> 
        
    </main>
    
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>


    