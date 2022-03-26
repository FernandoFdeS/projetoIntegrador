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
  </style>
  <body class="container-fluid">
    <div class="row  d-flex justify-content-center">
        <div class="col-md-6 col-sm-12" style="position: absolute;top: 40%;transform: translateY(-50%);">
            <div class=" text-center">
                <img src="images/logo-1-azul.png" height="280 px">
            </div>
            <form class="col-12 formulario shadow azul-cultural">
                <div class="mb-3">
                    <label for="email" class="form-label text-white">Login</label>
                    <input type="email" class="form-control p-2" id="email" aria-describedby="emailHelp" style="font-size: 16px;">                    
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label text-white">Senha</label>
                    <input type="password" class="form-control p-2" id="senha"  style="font-size: 16px;">
                </div>                
                <button type="submit" class="btn btn-light col-12 p-2" style="font-weight: bold;color: #005790; font-size: 22px;">LOGIN</button>
            </form>
        </div>
    </div>
  </body>
  </html>