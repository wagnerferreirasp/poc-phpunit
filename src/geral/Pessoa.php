<?php

/*
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
