<?php

include_once '../conexao/conecta_db.php';


abstract class generic_crud extends DB {

    public function __construct() {

    }

    public function insert($dados) {

        $attributes = $this->limparCampos($dados);
        $keys = array_keys($attributes);
        $camposTabela = implode(',', $keys);
        $values = null;
        foreach ($keys as $key) {
            $values .= ',:' . $key;
        }
        $values = (trim(ltrim($values, ',')));

        $sql = "INSERT INTO $this->tabela($camposTabela) values($values)";
        $stm = DB::prepare($sql);
        $stm->execute($attributes);
        $ultimo_id = DB::getInstance()->lastInsertId();

        return $ultimo_id;
    }

    public function update($dados) {
        $attributes = $this->limparCampos($dados);

        $keys = array_keys($attributes);
        $values = null;
        foreach ($keys as $key) {
            $values .= ',' . $key . '=:' . $key;
        }
        $id = $attributes['id'];

        $values = (trim(ltrim($values, ',')));

        $sql = "UPDATE $this->tabela set $values WHERE id=:id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id);

        return $stm->execute($attributes);
    }

    public function delete($id) {

        $sql = "DELETE FROM $this->tabela WHERE id=:id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id);
        $delete_id = $stm->execute();

        return $delete_id;
    }

    public function findAll() {
        $sql = "SELECT * FROM $this->tabela ";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }

    public function findById($id) {
        $sql = "SELECT * FROM $this->tabela WHERE id=:id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id);
        $stm->execute();
        return $stm->fetch();
    }

}
