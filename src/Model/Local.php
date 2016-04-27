<?php 

namespace EquipeBS\Model;

class Local
{

	private $idLocal;
	private $nomeLocal;
	private $descricaoLocal;
	private $contatoLocal;
	private $enderecoLocal;
	private $capacidadeLocal;

	public function getIdLocal(){
		return $this->idLocal;
	}

	public function setIdLocal($idLocal){
		$this->idLocal = $idLocal;
	}

	public function getNomeLocal(){
		return $this->nomeLocal;
	}

	public function setNomeLocal($nomeLocal){
		$this->nomeLocal = $nomeLocal;
	}

	public function getDescricaoLocal(){
		return $this->descricaoLocal;
	}

	public function setDescricaoLocal($descricaoLocal){
		$this->descricaoLocal = $descricaoLocal;
	}

	public function getContatoLocal(){
		return $this->contatoLocal;
	}

	public function setContatoLocal($contatoLocal){
		$this->contatoLocal = $contatoLocal;
	}

	public function getEnderecoLocal(){
		return $this->enderecoLocal;
	}

	public function setEnderecoLocal($enderecoLocal){
		$this->enderecoLocal = $enderecoLocal;
	}

	public function getCapacidadeLocal(){
		return $this->capacidadeLocal;
	}

	public function setCapacidadeLocal($capacidadeLocal){
		$this->capacidadeLocal = $capacidadeLocal;
	}
}

?>