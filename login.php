<?php
    include './user.php';
    $obj = new user();

    if(isset($_POST['btn-login'])){

    $user = $_POST['usuario'];
    $senha = $_POST['senha'];

    if($obj->validate($user, sha1($senha))) {
      
      session_start();

      $_SESSION["status"] = 1;
      $_SESSION["x1"] = $user;
      $_SESSION["x2"] = sha1($senha);
      $_SESSION["x3"] = $obj->select_id($user);

      header("Location: http://localhost/ListaTarefas/home.php");
    }else{
        header("Location: http://localhost/ListaTarefas/erro.php");
    }
    } 
    
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
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

          <div class="formulario" style="margin-top: auto; margin-bottom: auto; " >

            <h2><strong>Fazer login</strong></h2>

            <div class="row mb-3" style="margin-top: 30px;">

            <form action="login.php" method="POST">
              <div class="col-md-6 col-lg-12">
                <label for="formGroupExampleInput" class="form-label form-camp"><strong>Usuário</strong></label>
                <input type="text" name="usuario" class="form-control inp" id="formGroupExampleInput" placeholder="Usuário">
              </div>
              
              </div>
              <div class="row mb-3">

                <div class="col-md-6 col-lg-12">
                  <label for="formGroupExampleInput2" class="form-label form-camp"><strong>Senha</strong></label>
                  <input type="password" name="senha" class="form-control inp" id="formGroupExampleInput2" placeholder="Senha">
                </div>
              </div>

              <div class="row mb-3">
                
                <div class="col-md-6 col-lg-12">

                    <button type="submit" name="btn-login" class="btn-login">ENTRAR</button>
                </form>

                    <p>Esqueceu a sua senha?</p>
                    <hr>
                    <p>Não tem cadastro?</p>
                    
                <form action="cadastro.php">
                    <button type="submit" class="btn-cad">CADASTRE-SE</button>
                </form>

                </div>
              </div>

          </div>
            
        </div>


    </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>