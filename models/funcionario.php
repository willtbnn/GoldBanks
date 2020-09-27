<?php
class funcionario extends model{
    public function getAll(){
        $array = array();

        $sql = "SELECT * FROM funcionarios ";
        $sql = $this->db->query($sql);
        if($sql->rowCount() > 0 ){
            $array = $sql->fetchAll();
        }

        return $array;
    }
    public function get($id){
        $array = array();
        $sql = "SELECT * FROM funcionarios WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
        if($sql->rowCount() > 0 ){
            $array = $sql->fetch();
        }
        return $array;
    }
}
?>