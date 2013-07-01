<?php

class Colaborador extends ActiveRecord\Model {

    static $table_name = 'colaboradores';

    public function set_senha($senha) {
        $this->encrypted_senha = md5($senha);
    }

}