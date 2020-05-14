<?php
// Inclui automaticamente arquivos de classes usadas
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

// Referência a classes usadas no código
use Models\Pessoa;
use Models\Atividade;
use Models\Funcionario;

$p = new Pessoa(1,'joao','1111');

echo $p->toJson();

echo "<br/>";

echo Pessoa::toJsonEstatico(20,'Maria','2222');

?>