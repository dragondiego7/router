<?php 

namespace EquipeBS\Repository;

use EquipeBS\Model\Local;

interface LocalRepository{

	public function obtem($id);
	public function obtemLista();
	public function persiste(Local $local);
	public function remove(Local $local);
}
?>