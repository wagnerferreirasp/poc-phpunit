<?php

use geral\PessoaBO;
require_once './vendor/autoload.php'; 

$pessoaBO = new PessoaBO();
var_dump($pessoaBO->getPessoaMaisVelha());


