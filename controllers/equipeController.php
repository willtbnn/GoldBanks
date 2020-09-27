<?php
class equipeController extends controller {

	public function index() {
		$dados = array();

		$funcionarios = new funcionario();
		$dados['lista'] = $funcionarios->getAll();

		$this->loadTemplate('equipe', $dados);
	}
	public function perfil($id){
		$dados = array();
		if(!empty($id)){
			$funcionarios = new funcionario();

			if(!empty($_GET['id'])){
				$perfil = $_GET['id'];

				$funcionarios->edit($perfil, $name);
			} else{
				$dados['info'] = $funcionarios->get($id);
				if(isset($dados['info']['id'])) {
					$this->loadTemplate('perfil', $dados);
					exit;
				}
			}
		}
		header("Location: ".BASE_URL."equipe");
	}

}