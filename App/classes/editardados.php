<?php
namespace App\classes;

class editardados{
    public function editardados($peca,$marca,$veiculo,$ano,$modelo,$qtd){

        $sql = "UPDATE pecas SET peca = ?,
                                 marca = ?,
                                 veiculo = ?,
                                 ano = ?,
                                 modelo = ?,
                                 qtd = ? WHERE id = ?" ;
        $stmt = conexao::getcon()->prepare($sql);
        $stmt->bindValue(1, $peca);
        $stmt->bindValue(2, $marca);
        $stmt->bindValue(3, $veiculo);
        $stmt->bindValue(4, $ano);
        $stmt->bindValue(5, $modelo);
        $stmt->bindValue(6, $qtd);
        $stmt->execute();  
    }
}

?>