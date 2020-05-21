<?php
// Inclui automaticamente arquivos de classes usadas
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

// Referência a classes usadas no código
use Models\Pessoa;
use Models\Atividade;
use Models\Funcionario;
use Db\Persiste;

$p = new Pessoa(1,'joao','1111');

//echo Persiste::AddPessoa($p);

$pessoas = Persiste::GetAllPessoa(0,10);

foreach ($pessoas as $pessoa)
{
  echo $pessoa->toString()."<br/>";
}

?>