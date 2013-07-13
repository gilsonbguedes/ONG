<?php

/**
 * @author gilson
 */
class Historico extends \Illuminate\Database\Eloquent\Model {

    /**
     * @var $table = nome da tabela na base de dados
     */
    protected $table = "historico";
    public function aluno() {
        return $this->belongsTo('aluno');        
    }

}

