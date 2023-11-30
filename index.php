<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estados Brasileiros</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cadastro</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=escolha">Cadastrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=listagens">Listagens</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col mt-5">

          <?php 
            include("config.php");
  
          switch(@$_REQUEST["page"]){

              case "escolha";
                include("escolha.php");
              break;

              case "cadEstado";
                include("cad-estado.php");
              break;

              case "cadCidade";
                include("cad-cidade.php");
              break;

              case "cadEndereco";
                include("cad-endereco.php");
              break;

              case "editarEstado";
                include("editar-estado.php");
              break;

              case "editarCidade";
                include("editar-cidade.php");
              break;
              
              case "listagens";
                include("listagens.php");
              break;

              case "listarEstado";
                include("listar-estado.php");
              break;

              case "listarCidade";
                include("listar-cidade.php");
              break;

              case "salvar";
                include("salvar.php");
              break;

              default;
                echo "Bem vindos!";
            }
          ?>

        </div>
      </div>
    </div>





    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>