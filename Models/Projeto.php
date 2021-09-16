<?php
namespace Models; // agrupamento de classes (caminho)

// Classe (ou Tipo) de Objeto
class Projeto{
	// Propriedades
	protected $id;
	protected $nome;
	protected $orcamento;
	protected $pessoa_id;
	// obs.: propriedades protected são acessíveis por subclasses (extend)

	// Método construtor.
	public function __construct($id,$nome,$orcamento,$pessoa_id){
		$this->id=$id;
		$this->nome=$nome;
		$this->orcamento=$orcamento;
		$this->pessoa_id=$pessoa_id;
	}

	// Inclui o conteúdo do Trait
	use trait__get;
}