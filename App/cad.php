<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cadastro de Peças</title>    
  </head>
  <body>

  <form  method="POST" class="row g-3 m-5 " >
        <div class="col-md-4 position-relative">
           
            <input type="text" class="form-control" placeholder="Peça" name="peca" value="<?php if (isset($dado)) {
                                                                                          echo $dado['modelo'];
                                                                                        } ?>">
            
        </div>
        <div class="col-md-4 position-relative">
           
            <input type="text" class="form-control" placeholder=" Marca" name="marca" value="<?php if (isset($dado)) {
                                                                                          echo $dado['modelo'];
                                                                                        } ?>">
            
        </div>
        <div class="col-md-4 position-relative">
                    
            <input type="text" class="form-control" placeholder="Veiculo" name="veiculo" value="<?php if (isset($dado)) {
                                                                                          echo $dado['modelo'];
                                                                                        } ?>">
           
            </div>
        </div>
        <div class="col-md-4 position-relative">
           
            <input type="text" class="form-control" placeholder="Ano" name="ano" value="<?php if (isset($dado)) {
                                                                                          echo $dado['modelo'];
                                                                                        } ?>">
            
        </div>
        <div class="col-md-6 position-relative">

        <input type="text" class="form-control" placeholder="Modelo" name="modelo" value="<?php if (isset($dado)) {
                                                                                          echo $dado['modelo'];
                                                                                        } ?>">

        </div>
        <div class="col-md-3 position-relative">

        <input type="text" class="form-control" placeholder="Quantidade"  name="qtd" value="<?php if (isset($dado)) {
                                                                                          echo $dado['modelo'];
                                                                                        } ?>">

        </div>
        <div class="col-12 ">
            <button class="btn btn-primary" type="submit" valur="<?php if (isset($dado)) {
            echo "Atualizar";
            } else {
            echo "Cadastrar";
        } ?>" >Cadastrar</button>
        </div>
</form>
    



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
  </body>
</html>
<?php
require_once '../vendor/autoload.php';
require_once '../App/classes/dados.php';
require_once '../App/classes/inserir.php';
require_once '../App/classes/conexao.php';
use App\classes\dados;
use App\classes\inserir;

$dado = new dados();
$dado->getdados();

$inserir = new Inserir();
$inserir->cadastrar($peca, $marca, $veiculo, $ano, $modelo, $qtd);
?>