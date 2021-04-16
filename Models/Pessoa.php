<?php
namespace Models; // agrupamento de classes (caminho)

// Classe (ou Tipo) de Objeto
// obs.: Pessoa implementa a interface Idados, significando que implementa todos os métodos definidos pela interface.
class Pessoa implements Idados{
	// Propriedades
	protected $id;
	protected $nome;
	protected $endereco;
	protected $telefone;
	// obs.: propriedades protected são acessíveis por subclasses (extend)

	// Método construtor.
	public function __construct($id,$nome,$telefone,$endereco){
		$this->id=$id;
		$this->nome=$nome;
		$this->telefone=$telefone;
		$this->endereco=$endereco;
	}

	// Método obrigatório pois é definido na interface
	public function toString(){
		return $this->id.' '.$this->nome.' '.$this->telefone.' '.$this->endereco;
	}

	// Método obrigatório pois é definido na interface
	public function toJson() {
		return json_encode(['id'=>$this->id,'nome'=>$this->nome,'telefone'=>$this->telefone,'endereco'=>$this->endereco]);
	}

	// Métodos estáticos (static) são chamados sem instanciar objetos. Utiliza-se o nome da classe seguido de quatro pontos. Exemplo a seguir.
	// $jp = Pessoa::toJsonEstatico(20,'Maria','2222');
	public static function toJsonEstatico ($id,$nome,$telefone,$endereco) {
		return json_encode(['id'=>$id,'nome'=>$nome,'telefone'=>$telefone,'endereco'=>$this->endereco]);
	}

	// Inclui o conteúdo do Trait
	use trait__get;
}