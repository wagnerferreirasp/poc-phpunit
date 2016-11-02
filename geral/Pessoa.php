<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace geral;

/**
 * Description of Pessoa
 *
 * @author wagner
 */
class Pessoa {
    private $nome;
    private $idade;
    
    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }
}
