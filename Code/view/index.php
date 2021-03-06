<?php
  include '../controller/login/login.php';
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    
    <title>Toque Cultural</title>
  </head>
  <style>
    label{
      font-family: 'Roboto',sans-serif;
      font-weight: 300;
    }
    .form-container{
      animation: drop 1.0s ease;
    }
    .formulario{       
      padding: 20px;
      border-radius: 15px;
    }
    .azul-cultural{
      background-color: #005790;
    }
    .btn:hover{
      background-color: rgb(238, 238, 238);
    }
    .flash-msg{
    animation: fadeOut 10s ease;
    animation-fill-mode: forwards;
    }

    @keyframes fadeOut {
        0% {opacity: 1;}
        100% {opacity: 0;} 
    } 
    @keyframes drop {
            0% {
                opacity: 0;
                transform: translateY(-80px);
            }
            100% {
                opacity: 1;
                transform: translateY(0px);
            }
        }
  </style>
  <body class="container-fluid">
    <div class="row  d-flex justify-content-center ">
        <div class="col-md-6 col-sm-12 " style="position: absolute;top: 40%;transform: translateY(-50%);">
          <div class="form-container">
              <div class=" text-center">
                  <img src="../images/logo-1-azul.png" height="280 px">
              </div>
              <form class="col-12 formulario shadow azul-cultural" action="index.php" method="POST">
                  <div class="mb-3">
                      <label for="email" class="form-label text-white">Login</label>
                      <input type="text" class="form-control p-2" name="email" id="email" aria-describedby="emailHelp" style="font-size: 16px;">                    
                  </div>
                  <div class="mb-3">
                      <label for="senha" class="form-label text-white">Senha</label>
                      <input type="password" class="form-control p-2" id="senha" name="senha"  style="font-size: 16px;">
                  </div>                
                  <button type="submit" class="btn btn-light col-12 p-2" style="font-weight: bold;color: #005790; font-size: 22px;">LOGIN</button>
                
                  <?php
                    if(isset($_SESSION['flash-msg'])&&isset($_SESSION['flash-bg'])){
                        echo'
                        <div class="flash-msg container bg-'.$_SESSION['flash-bg'].' text-center rounded mt-3 " >
                            <p class="text-white p-1 m-0">'.$_SESSION['flash-msg'].'</p>
                        <div>';
                        unset($_SESSION['flash-msg']);
                        unset($_SESSION['flash-bg']);
                    }                    
                  ?>
                </form>
              
          </div>
        </div>
    </div>
  </body>
  </html>