<?php
    include './tarefa.php';
    include './user.php';
    $obj1 = new tarefa();
    $obj2 = new user();

    session_start();
    
    if(isset($_POST['btn-edit'])){

        $obj1->edit_task($_POST['tit'], $_POST['tit'], $_POST['desc'], $_POST['dat'], $_SESSION["x3"]);

        header("Location: http://localhost/ListaTarefas/home.php");
        
    }else if(isset($_POST['btn-remove'])){

        $obj1->remove_task($_SESSION["busca"]);

        header("Location: http://localhost/ListaTarefas/home.php");
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

        <h1 id="titulo" class="display-4">Agenda</h1>

        <table id="tabela" class="table">
            <thead>

            <tr>
                <th scope="col">Título</th>
                <th scope="col">Descrição</th>
                <th scope="col">Data</th>

            </tr>
            </thead>

                <?php
                
                $obj1->select_task($_SESSION["busca"]);
                    
                ?>
            <tbody>
            

            </tbody>
        </table>

        <h1 id="titulo" class="display-6" style="margin-top: 50px;">Editar</h1>

        <table id="tabela1" class="table">
            <thead>

            <tr>
                <th scope="col">Título</th>
                <th scope="col">Descrição</th>
                <th scope="col">Data</th>
                <th scope="col">Editar</th>
                <th scope="col">Remover</th>

            </tr>
            </thead>

                
            <tbody>
            
                <tr>
                    <form action="busca.php" method="POST">
                        <td><input type="text" name="tit" value="<?php echo $obj1->select_title($_SESSION["busca"])?>"></td>
                        <td><input type="text" name="desc" value="<?php echo $obj1->select_desc($_SESSION["busca"])?>"></td>
                        <td><input type="text" name="dat" value="<?php echo $obj1->select_data($_SESSION["busca"])?>"></td>
                        <td><button type="submit" id="btn-edit" name="btn-edit" class="btn btn-primary">Editar</button></td>
                        <form action="busca.php" method="POST">
                            <td><button type="submit" id="btn-remove" name="btn-remove" class="btn btn-danger">Remover</button></td> 
                        </form>
                    </form>
                <tr>

            </tbody>
        </table>

    <!--O parágrafo abaixo exibe o atual index da tr que foi clicada--> 
    
    <!-- <p style='margin-top: 350px;'>Index: <span id='xxx'></span></p> --> 
        
    </main>
    
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>


    