<?php

include_once '../../conexao/conecta_db.php';

abstract class generic_crud extends DB {

    public function save($dados, $primary) {
        if (!empty($dados[$primary])) {
            $result = $this->update($dados, $primary);
        } else {
            $result = $this->insert($dados);
        }
        return $result;
    }

    public function insert($dados) {
        $keys = array_keys($dados);
        $camposTabela = implode(',', $keys);
        $values = null;
        foreach ($keys as $key) {
            $values .= ',:' . $key;
        }
        $values = (trim(ltrim($values, ',')));

        $sql = "INSERT INTO $this->tabela($camposTabela) values($values)";
        $stm = DB::prepare($sql);
        $stm->execute($dados);
        $ultimo_id = DB::getInstance()->lastInsertId();

        return $ultimo_id;
    }

    public function update($dados, $primary) {
        $keys = array_keys($dados);
        $values = null;
        foreach ($keys as $key) {
            $values .= ',' . $key . '=:' . $key;
        }
        $id = $dados[$primary];

        $values = (trim(ltrim($values, ',')));

        $sql = "UPDATE $this->tabela set $values WHERE id=:id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id);

        return $stm->execute($dados);
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
