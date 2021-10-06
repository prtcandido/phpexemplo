<?php
header('location: projeto.index.php');
spl_autoload_register(function ($class_name) {
    include '..\\'.$class_name . '.php';
});

use Models\Projeto;
use Db\Persiste;

if ( isset($_POST['nome']) && isset($_POST['orcamento']) && isset($_POST['pessoa_id']))
{
	// id foi colocado 0 pois será gerado automaticamente pelo banco de dados
	$novaProjeto = new Projeto(0,$_POST['nome'],$_POST['orcamento'],$_POST['pessoa_id']);
	Persiste::Add($novaProjeto);
}

?>
