<?php
namespace App\classes;

class apagardados{
    public function apagardados($id){
        $sql = "DELETE FROM pecas WHERE id = ?";
        $stmt = conexao::getcon()->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}

?>