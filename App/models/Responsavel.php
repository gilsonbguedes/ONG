<?php

/**
 * @author gilson
 */
class Responsavel extends \Illuminate\Database\Eloquent\Model {

    /**
     * @var $table = nome da tabela na base de dados
     */
    protected $table = 'responsavel';
    /**
     * 
     * @return Responsavel tem N -> alunos
     */
    public function aluno() {
        return $this->hasMany('aluno');
    }

}

