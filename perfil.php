<?php
    session_start(); 
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

            <form action="home.php" method="POST">
                <div class="row mb-3" style="margin-top: 30px;">

                    <div class="col-md-6 col-lg-12">
                        <?php echo "<label for='formGroupExampleInput' class='form-label form-camp'><strong>Id - ".$_SESSION['x3']."</strong></label>" ?>
                    </div>

                </div>    
                      
                <div class="row mb-3">

                    <div class="col-md-6 col-lg-12">
                        <?php echo "<label for='formGroupExampleInput' class='form-label form-camp'><strong>Usuário - ".$_SESSION['x1']."</strong></label>" ?>
                    </div>

                </div>

                <div class="row mb-3">

                    <div class="col-md-6 col-lg-12">
                        <?php echo "<label for='formGroupExampleInput' class='form-label form-camp'><strong>Senha - ".$_SESSION['x2']."</strong></label>" ?>
                     </div>

                </div>

                <div class="row mb-3">    
                    <div class="col-md-6 col-lg-12">
                        <button type="submit" class="btn-login">VOLTAR</button>
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