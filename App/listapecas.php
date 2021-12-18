<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Lista da peças</title>

    <style>
    body{
      background-color: azure;
     
    }
   .btn{
       padding: 10px;
       text-decoration: none; 
      }
    </style>
  </head>
  <body>
    


 <div class="m-5">
     <table class="table " >
       <thead>
        <tr>
            <th scope="col">Peça</th>
            <th scope="col">Marca</th>
            <th scope="col">Veiculo</th>
            <th scope="col">Ano</th>
            <th scope="col">Modelo</th>
            <th scope="col">Quantidade</th>
        </tr>
      </thead>
   <?php
   require_once 'classes/conexao.php';
   require_once 'classes/pegardados.php';
   require_once 'classes/apagardados.php';

use App\classes\apagardados;
use App\classes\pegardados;

$pd = new pegardados();
  $dados = $pd->pegardados();
   foreach($dados as $key => $values){
     if($key != "id"){
        echo "<th>".$values."</th>";
     }
   }
  ?>
  <th><a href="" class="btn-success btn">Editar</a></th>
  <th><a href="listapecas.php?id=<?php echo $values; ?>" class="btn-danger btn">Excluir</a></th>
     </table>
  </div>

 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
  </body>
</html>