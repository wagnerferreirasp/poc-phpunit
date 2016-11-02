<?php

use geral\Pessoa;
use geral\PessoaDAO;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace geral;

/**
 * Description of PessoaBO
 *
 * @author wagner
 */
class PessoaBO {
    /* @var $dao PessoaDAO */
    public $dao;
    
    function __construct($dao) {
        $this->dao = $dao;
    }

    
    public function getMaisNovo(Pessoa $p1, Pessoa $p2) {
        if ($p1->getIdade() < $p2->getIdade()) {
            return $p1;
        }
        return $p2;
    }
    
    public function getPessoaMaisVelha() {
        $dao = $this->dao;
        $pessoas = $dao->getTodasAsPessoas();
        $maiorIdade = -1;
        $maisVelho = null;
        foreach ($pessoas as $pessoa) {
            if ($pessoa->getIdade() > $maiorIdade) {
                $maiorIdade = $pessoa->getIdade();
                $maisVelho = $pessoa;
            }
        }
        return $maisVelho;
    }
}
