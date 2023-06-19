<?php
    include './tarefa.php';
    include './user.php';
    $obj1 = new tarefa();
    $obj2 = new user();
    
    session_start();

    if(isset($_POST['btn-criar'])){

        $obj1->insert_task($_POST['campo1'], $_POST['campo2'], $_POST['campo3'], $_SESSION["x3"]);

        header("Location: http://localhost/ListaTarefas/home.php");
    
    }
    
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <main class="container">

    <section class="row" style="height: 100vh;">

        <div class="col d-none d-sm-block" style="overflow: hidden; padding: 0;" >
            <img src="img-icon/background/background_01.svg" alt="" style="height: 100vh;" width="500px">
        </div>

        <div class="col d-flex justify-content-center">

          <div class="formulario" style="margin-top: auto; margin-bottom: auto;">

            <h2><strong>Meu perfil</strong></h2>

            <form action="novatarefa.php" method="POST">
                <div class="row mb-3" style="margin-top: 30px;">

                    <div class="col-md-6 col-lg-12">
                        <label for="campo1" class="form-label form-camp"><strong>Título</strong></label>
                        <input type="text" name="campo1" class="form-control inp text-center" id="formGroupExampleInput">
                    </div>

                </div>    

                <div class="row mb-3">

                    <div class="col-md-6 col-lg-12">
                        <label for="campo2" class="form-label form-camp"><strong>Descricão</strong></label>
                        <input type="text" name="campo2" class="form-control inp text-center" id="formGroupExampleInput">
                    </div>

                </div>

                <div class="row mb-3">

                    <div class="col-md-6 col-lg-6">
                        <label for="campo3" class="form-label form-camp"><strong>Data</strong></label>
                        <input type="text" name="campo3" class="form-control inp text-center" id="formGroupExampleInput" placeholder="xx/xx/xxxx">
                     </div>

                </div>

                <p></p>
                <hr>

                <div class="row mb-3">    
                    <div class="col-md-6 col-lg-12">
                        <button type="submit" name="btn-criar" class="btn-login">CRIAR</button>
                    </div> 

            </form>
            </div>

          </div>
            
        </div>


    </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>