<?php 

namespace EquipeBS\Controller;

use Respect\Rest\Routable;
use EquipeBS\Model\Local;
use EquipeBS\Repository\LocalRepository;

class LocalController implements Routable
{
	private $localRepository;

	public function __construct(LocalRepository $repository){
		$this->localRepository = $repository;
	}

	public function get($idLocal){
		$local = $this->localRepository->obtem($idLocal);
		return $local;

	}
}
?>