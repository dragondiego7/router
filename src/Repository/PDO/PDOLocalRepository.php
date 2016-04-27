<?php 

namespace EquipeBS\Repository\PDO;

use PDO;
use EquipeBS\Model\Local;
use EquipeBS\Repository\LocalRepository;

class PDOLocalRepository implements LocalRepository{
	
	private $conn;
	private $tabela = "local";

	public function __construct(PDO $conn) {
		$this->conn = $conn;
	}

	public function obtem($id) {
		$query = "SELECT * FROM " . $this->tabela . " WHERE idLocal = :idLocal";
		$statement = $this->conn->prepare($query);
		$statement->bindParam(":idLocal", $id);
		$statement->execute();
		$retorno = $statement->fetchObject("EquipeBS\Model\Local");

		return $retorno;
	}

	public function obtemLista() {

		return $retorno;
	}

	public function persiste(Local $local){

		if($local->getIdLocal() == NULL || $local->getIdLocal() < 1){
			$query = "INSERT INTO " . $this->tabela . " (nomeLocal, descricaoLocal, enderecoLocal, contatoLocal, capacidadeLocal) VALUES (:nomeLocal, :descricaoLocal, :enderecoLocal, :contatoLocal, :capacidadeLocal)";
			
			$statement = $this->conn->prepare($query);
		}else{
			$query = "UPDATE " . $this->tabela . " SET nomeLocal = :nomeLocal, descricaoLocal = :descricaoLocal, enderecoLocal = :enderecoLocal,  contatoLocal = :contatoLocal, capacidadeLocal = :capacidadeLocal WHERE idLocal = :idLocal";

			$statement = $this->conn->prepare($query);
			$statement->bindParam(":idLocal", $local->getIdLocal());
		}

		$statement->bindParam(":nomeLocal", $local->getNomeLocal());
		$statement->bindParam(":descricaoLocal", $local->getDescricaoLocal());
		$statement->bindParam(":enderecoLocal", $local->getEnderecoLocal());
		$statement->bindParam(":contatoLocal", $local->getContatoLocal());
		$statement->bindParam(":capacidadeLocal", $local->getCapacidadeLocal());

		$statement->execute();

	}

	public function remove(Local $local){
		$query = "DELETE FROM " . $this->tabela . " WHERE idLocal = :idLocal";

		$statement = $this->conn->prepare($query);
		$statement->bindParam(":idLocal", $local->getIdLocal());

		$statement->execute();
	}
}

?>