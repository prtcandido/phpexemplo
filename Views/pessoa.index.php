<?php
spl_autoload_register(function ($class_name) {
    include '..\\'.$class_name . '.php';
});
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Pessoas</h3>
	<p><a href="pessoa.create.php">Nova Pessoa</a></p>
	<?php
	use Db\Persiste;
	use Models\Pessoa;
	$pessoas = Persiste::GetAllPessoa(0,10);
	foreach($pessoas as $p){
		echo $p->getnome.'<br/>';
	}
	?>
</body>
</html>