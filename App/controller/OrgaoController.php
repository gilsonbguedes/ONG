<?php

class OrgaoController {

    public static function presiste(array $params) {
        $result = Orgao::create($params);
        return $result;
    }

    public static function getAll() {
        $result = Orgao::all();
        return $result;
    }

    public static function getByName($nome) {
        $result = Orgao::where('nome', '=', $nome)->get();
        return $result;
    }

    public static function filterOrgao($name) {
        Orgao::with(array('orgao' => function($query) {
                $query->where('title', 'like', '%first%');
            }))->get();
    }

}

