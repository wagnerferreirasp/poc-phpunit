<?php


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace geral;

/**
 * Description of newPHPClass
 *
 * @author wagner
 */
class PessoaDAO {
    public function getTodasAsPessoas() {
        $lista = array();
        $lista[] = new Pessoa("Wagner", 23);
        $lista[] = new Pessoa("Rigoni", 38);
        $lista[] = new Pessoa("Gubi", 57);
        $lista[] = new Pessoa("Victor", 6);
        sleep(10);
        return $lista;
    }
}
