<?php
namespace App\classes;

class inserir{
    public function cadastrar($peca,$marca,$veiculo,$ano,$modelo,$qtd){

        $sql = "SELECT id FROM pecas WHERE peca = ?";
        $stmt = conexao::getcon()->prepare($sql);
        $stmt->bindValue(1,$peca);
        $stmt->execute();
        if($stmt->rowCount() <= 0){
            return;
        }
        
        $sql = "INSERT INTO pecas(peca,marca,veiculo,ano,modelo,qtd)VALUES(?,?,?,?,?,?)";

            $stmt = conexao::getcon()->prepare($sql);
            $stmt->bindValue(1, $peca);
            $stmt->bindValue(2, $marca);
            $stmt->bindValue(3, $veiculo);
            $stmt->bindValue(4, $ano);
            $stmt->bindValue(5, $modelo);
            $stmt->bindValue(6, $qtd);
            $stmt->execute();
            return true;
    
    }
}
?>