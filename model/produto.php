<?php

include_once 'generic/generic_crud.php';

class Produto extends generic_crud {

    protected $tabela = 'produto';

    public function importarXML() {
        $xml = simplexml_load_file($_FILES['file']['tmp_name']);
        $json = json_encode($xml);
        $array = json_decode($json, TRUE);

        foreach ($array['produto'] as $prod) {
            $this->save($prod, 'id');
        }
    }

}
