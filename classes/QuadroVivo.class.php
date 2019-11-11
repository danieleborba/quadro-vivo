<?php

	require('autoload.php');

	class QuadroVivo extends Codigo {
		private $tipoQuadro, $usuario;

		// TIPO DE QUADRO
		function setTipoQuadro($tipoQuadro) {
			if ($tipoQuadro instanceof TipoQuadro)
				$this->tipoQuadro = $tipoQuadro;
		}

		function getTipoQuadro() {
			return $this->tipoQuadro->getDescricao();
		}

		// USUÁRIO
		function setUsuario($usuario) {
			if ($usuario instanceof usuario)
				$this->usuario = $usuario;
		}

		function getUsuario() {
			return $this->usuario->getCodigo();
		}

		// MOSTRAR PLANTAS
		public function mostrarPlantas($usuario) {
			$crud = new Crud;
			$plantas = $crud->select("SELECT *
										FROM planta p
											INNER JOIN quadro_plantas qp
										    ON qp.planta = p.codigo 
												INNER JOIN quadro_vivo qv
												ON qv.quadro = qp.quadro
										WHERE qv.usuario = " .$usuario);
			if (is_countable($plantas)) {
				for ($i=0; $i < count($plantas); $i++) { 
					echo '<div class="col s12 m6 l4">
							<a href="#'.$plantas[$i]['codigo'].'" class="modal-trigger">
								<div class="card hoverable">
									<div class="card-image waves-effect waves-block waves-light">
										<img class="activator fotos" src="img/plantas/'.$plantas[$i]['nome'].'.svg" style="height: 40vh">
									</div>
									<div class="card-content">
										<span class="card-title activator grey-text text-darken-4">'.$plantas[$i]['nome'].'<i class="material-icons right">more_vert</i></span>
									</div>
								</div>
							</a>
						</div>
						
					<div id="'.$plantas[$i]['codigo'].'" class="modal modal-plantas">
						<div class="modal-content">
							<h3>'.$plantas[$i][2].'</h3>
							<h6 style="font-family: sans; font-style: italic">'.$plantas[$i][1].'</h6>
							<p><img src="img/plantas/'.$plantas[$i][2].'.jpeg" width="300rem"></p>
							<p>'.$plantas[$i][3].'</p>
						</div>
					</div>';
				}
			}
		}

		// ADICIONAR PLANTAS
		function adicionarPlanta($codigo, $especie, $nome, $descricao, $tipo) {
			$crud = new Crud;
			$crud->setTabela('planta');
			if($crud->inserir(['null', $especie, $nome, $descricao])) {
				$crud->setTabela('planta_has_tipoPlanta');
				$codigo_planta = $crud->select('select max(codigo) from planta');
				if($crud->inserir([$codigo_planta[0][0], $tipo])) {
					header('location:adm.php');
				}
			}
		}
	}

?>