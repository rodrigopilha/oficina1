<?php 

namespace App\classes;

class pegardados{
    public function pegardados(){
        $sql = "SELECT * FROM pecas ";
        $stmt = conexao::getcon()->prepare($sql);
        $stmt->execute();
        $dados = $stmt->fetch(\PDO::FETCH_ASSOC);
         return $dados;
    }
}
?>