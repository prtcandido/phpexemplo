<?php
spl_autoload_register(function ($class_name) {
    include '..\\'.$class_name . '.php';
});
?>

<?php include 'cabecalho.php'; ?>

	<h4>Projetos</h4>
	<a href="projeto.create.php" class="btn btn-primary btn-small">Nova Projeto</a>
	<table class="table table-striped" style="margin-top: 5px">
		<tr><th>ID</th><th>Nome</th><th>Orçamento</th><th>Pessoa</th><th></th><th></th></tr>
	<?php
	use Db\Persiste;
	use Models\Projeto;
	$projetos = Persiste::GetAll("Models\\Projeto");

	foreach($projetos as $p){
		echo "<tr><td>$p->getid</td><td>$p->getnome</td><td>$p->getorcamento</td>"
		    ."<td>$p->getpessoa_id</td>"
			."<td><a href='projeto.edit.php?id=$p->getid' class='btn btn-primary btn-small'>Editar</a></td>"
			."<td><a href='projeto.delete.php?id=$p->getid' class='btn btn-primary btn-small'>Excluir</a></td></tr>";
	}
	?>
	</table>

<?php include 'rodape.php'; ?>
