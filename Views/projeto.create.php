<?php 
  include 'cabecalho.php';
  $pessoaid = $_GET['pessoaid']; 
?>

<h3>Criar Projeto</h3>
<div class=container>
	<div class="row">
		<div class="col-sm-6">
			<form action="projeto.store.php" method="post">
				<input type="hidden" name="pessoa_id" value="<?= $pessoaid ?>">
				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" name="nome" class="form-control" maxlength="100" required />
				</div>
				<div class="form-group">
					<label for="orcamento">Orcamento</label>
					<input type="number" name="orcamento" class="form-control" min="0" max="1000000" required/>
				</div>
				<div class="form-group">
					<input type="submit" value="Salvar" class="btn btn-primary btn-small"/>
					<a href="pessoa.index.php" class="btn btn-primary btn-small">Voltar</a>
				</div>
			</form>		
		</div>
	</div>
</div>

<?php include 'rodape.php'; ?>
