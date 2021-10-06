<?php
header('location: projeto.index.php'); // redireciona para o local indicado

spl_autoload_register(function ($class_name) {
    include '..\\'.$class_name . '.php';
});

use Db\Persiste;

if ( isset($_GET['id']) )
{
	// id foi colocado 0 pois será gerado automaticamente pelo banco de dados
	Persiste::Delete('Models\Projeto',$_GET['id']);
}

?>
