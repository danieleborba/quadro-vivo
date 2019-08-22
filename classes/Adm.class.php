<?php

	require('autoload.php');

	class Adm extends Codigo {
		private $usuario, $senha;

		function setUsuario($usuario) {
			$this->usuario = $usuario;
		}
		
		function getUsuario() {
			return $this->usuario;
		}
	
		function setSenha($senha) {
			$this->senha = hash('sha512', $senha);
		}

		function getSenha() {
			return $this->senha;
		}

		function loginAdm() {
			$crud = new Crud;
			$crud->setTabela('adm');
			$dados = $crud->select("select * from adm where usuario = '" .$this->getUsuario(). "'");
			if(count($dados) != 0) {
				if ($this->getSenha() == $dados[0]['senha']) {
					session_start();
					$_SESSION['codigo'] = $this->getCodigo();
					$_SESSION['usuario'] = $this->getUsuario();
					header('location:adm.php');
				}
			} else {
				header('location:login.php');
			}
		}

		function logoutAdm() {
			session_destroy();
			header('location:login.php');
		}

		function Adm($codigo, $usuario, $senha, $acao) {
			$this->setCodigo($codigo);
			$this->setUsuario($usuario);
			$this->setSenha($senha);
			switch ($acao) {
				case 'login':
					$this->loginAdm();
					break;
				case 'logout':
					$this->logoutAdm();
					break;
				default:
					break;
			}
		}

		public function mostrarPlantasAdm() {
			$plantas = $this->select("select * from planta");
			echo '<table>
					<thead>
						<th>Espécie</th>
						<th>Nome</th>
					</thead>
					<tbody>';
			for ($i=0; $i < count($plantas); $i++) { 
				echo '<tr>
						<td>'.$plantas[$i][1].'</td>
						<td>'.$plantas[$i][2].'</td>
					  </tr>';
			}
			echo '<tr>
					<td class="grey-text text-darken-1">
						<a href="#adicionarPlanta" class="modal-trigger"><i class="material-icons green-text left">add_circle</i>
						Adicionar Planta</a>
					</td>
				  </tr>
				</tbody>
			</table>';

			echo '<div id="adicionarPlanta" class="modal">
					<div class="modal-content">
						<h3 class="titulo">Adicionar Planta</h3>
						<form action="acao.php" method="post">
							<div class="row">
								<div class="col s8 offset-s2 input-field">
									<i class="material-icons prefix">school</i>
									<label for="especie">Espécie</label>
									<input type="text" name="especie" id="especie">
								</div>
								<div class="col s8 offset-s2 input-field">
									<i class="material-icons prefix">nature</i>
									<label for="nome">Nome</label>
									<input type="text" name="nome" id="nome">
								</div>
								<div class="col s8 offset-s2 input-field">
								<i class="material-icons prefix">info</i>
									<label for="descricao">Descrição</label>
									<textarea name="descricao" id="descricao" class="materialize-textarea" data-length="600"></textarea>
								</div>
								<div class="col s8 offset-s2 input-field">
									<input type="hidden" name="acao" value="adicionarPlanta">
									<input type="submit" name="salvar" class="white-text waves-effect waves-light btn red" value="salvar" style="color: white">
								</div>
							</div>
						</form>
					</div>
				</div>';
		}

		public function __toString() {
			parent::__toString()." | Usuário: {$this->getUsuario()}";
		}
	}

?>