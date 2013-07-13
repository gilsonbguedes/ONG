<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Aluno
 *
 * @author gilson
 */
class Aluno extends \Illuminate\Database\Eloquent\Model {

    protected $table = "aluno";
    /**
     * 
     * @return historico
     */
    public function historico() {
        return $this->hasOne('historico');
    }
    /**
     * 
     * @return filiacao
     */
    public function responsavel() {
        return $this->belongsTo('responsavel');
    }

}

