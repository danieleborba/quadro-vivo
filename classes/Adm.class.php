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
				} else {
					header('location:loginAdm.php');
				}
			} else {
				header('location:loginAdm.php');
			}
		}

		function logoutAdm() {
			session_destroy();
			header('location:login.php');
		}

		function Adm($codigo, $usuario, $senha, $acao) {
			switch ($acao) {
				case 'login':
					$this->setCodigo($codigo);
					$this->setUsuario($usuario);
					$this->setSenha($senha);
					$this->loginAdm();
					break;
				case 'logout':
					$this->logoutAdm();
					break;
				case 'mostrarPlantasAdm':
					$this->mostrarPlantasAdm();
				default:
					break;
			}
		}

		public function mostrarPlantasAdm() {
			if(isset($_SESSION['usuario'])) {
			$crud = new Crud;
			$plantas = $crud->select('select * from planta');
			if(!is_null($plantas)) {
			echo '
			<form action="acao.php" method="post"><table>
					<thead>
						<th>Espécie</th>
						<th>Nome</th>
						<th>Tipo</th>
					</thead>
					<tbody>';
			$tipo = $crud->select('select tipoPlanta from planta_tipo');
			for ($i=0; $i < count($plantas); $i++) { 
				echo '<tr>
						<td>'.$plantas[$i][1].'</td>
						<td>'.$plantas[$i][2].'</td>
						<td>'.$tipo[$i][0].'</td>
					  </tr>';
			}
			echo '
				</tbody>
			</table>';

			echo '<div id="adicionarPlanta">
		
						<h4 class="titulo red-text">Adicionar Planta</h4>
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
									'.geraSelect("Selecione o tipo de planta", "tipoPlanta", 0, "codigo", "descricao", "tipo").'
								</div>
								<div class="col s8 offset-s2 input-field">
									<input type="hidden" name="acao" value="adicionarPlanta">
									<button class="waves-effect waves-light btn red white-text" type="submit" name="salvar" value="salvar">salvar<i class="material-icons right">send</i></button>
								</div>
							</div>
						</form>
				</div>';
				}
			}
		}

		public function __toString() {
			parent::__toString()." | Usuário: {$this->getUsuario()}";
		}
	}

?>