<?php

	require('autoload.php');

	class Crud {

		public $pdo, $tabela;

		public function mostrarPlantas() {
			$plantas = $this->select("select * from planta");
			for ($i=0; $i < count($plantas); $i++) { 
				echo '<div class="col s12 m6 l4">
						<a href="#'.$plantas[$i][0].'" class="modal-trigger">
							<div class="card hoverable">
								<div class="card-image waves-effect waves-block waves-light">
									<img class="activator fotos" src="img/plantas/'.$plantas[$i][2].'.jpeg">
								</div>
								<div class="card-content">
									<span class="card-title activator grey-text text-darken-4">'.$plantas[$i][2].'<i class="material-icons right">more_vert</i></span>
								</div>
							</div>
						</a>
					</div>
					
					<div id="'.$plantas[$i][0].'" class="modal modal-plantas">
					<div class="modal-content">
						<h3>'.$plantas[$i][2].'</h3>
						<h5>'.$plantas[$i][1].'</h5>
						<p><img src="img/plantas/'.$plantas[$i][2].'.jpeg" width="300rem"></p>
						<p>'.$plantas[$i][3].'</p>
					</div>
				  </div>';
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

        function adicionarPlanta($codigo, $especie, $nome, $descricao) {
            $this->setTabela('planta');
            $this->inserir([$codigo, $especie, $nome, $descricao]);
        }

		public function conexao() {
			try {
				$this->pdo = new PDO('mysql:host=localhost;dbname=quadro-vivo', "root", "");
				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
				echo 'Error: ' . $e->getMessage();
			}
		}

		function setTabela($tabela) {
			$this->tabela = $tabela;
		}

		function getTabela() {
			return $this->tabela;
		}

		function setPdo($pdo) {
			$this->pdo = $pdo;
		}

		function getPdo() {
			return $this->pdo;
		}

		public function obterCampos() {
			$consulta = $this->pdo->query("desc " . $this->tabela);

			while ($lista = $consulta->fetch()) {
				$campos [] = $lista[0];
			}
			return $campos;
		}

		public function validarData($campo) {
			$data = DateTime::createfromFormat('d/m/Y', $campo);
			if ($data && $data->format('d/m/Y')) {
				return true;
			} else {
				return false;
			}
		}
		
		public function geraStmt($sql, $vetor, $campos){
			$stmt = $this->pdo->prepare($sql);       
				for ($j = 1; $j <= count($vetor)-1; $j++) {
					if (is_numeric($vetor[$j])) {
						$stmt->bindParam (':' . $campos[$j], $vetor[$j], PDO::PARAM_INT);
						} elseif ($this->validarData($vetor[$j])) {
						$stmt->bindParam(':' . $campos[$j], date("Y-m-d", strtotime(str_replace("/", "-", $vetor[$j]))), PDO::PARAM_STR);
					} else {
						$stmt->bindParam(':' . $campos[$j], $vetor[$j], PDO::PARAM_STR);
					}
				}
				return $stmt;
		}

		public function select($sql) {
			$this->conexao();
			try {
				$consulta = $this->pdo->query($sql);
				$vetor = null;
				while ($linha = $consulta->fetch(PDO::FETCH_BOTH)) {
					$vetor[] = $linha; 
				}
				return $vetor;
			} catch (PDOException $e) {
				echo 'Error: ' . $e->getMessage();
			}
		}

		public function inserir($vetor) {
			$this->conexao();
			try {
				$campos = $this->obterCampos();
				$sql = "INSERT INTO " . $this->tabela . "(";
				$i = 0;
				foreach ($campos as $v) {
					if ($i == 1) {
						$sql .= $v;
					} elseif ($i > 1) {
						$sql .= ", " . $v;
					}
					$i++;
				}
				$sql .= ") VALUES(";
				$i = 0;
				foreach ($campos as $v) {
					if ($i == 1) {
						$sql .= ":" . $v;
					} elseif ($i > 1) {
						$sql .= ", :" . $v;
					}
					$i++;
				}
				$sql .= ")";
				$stmt = $this->geraStmt($sql, $vetor, $campos);
				
				$stmt->execute();
				return true;
			} catch (PDOException $e) {
				return 'Error: ' . $e->getMessage();
			}
		}

		public  function delete($id, $campo) {
			$this->conexao();
			try {
				$stmt = $this->pdo->prepare('DELETE FROM ' . $this->tabela . ' WHERE '.$campo.' = :id');
				$stmt->bindParam(':id', $id);
				$stmt->execute();
				return true;
			} catch (PDOException $e) {
				return 'Error: ' . $e->getMessage();
			}
		}

		function update($vetor) {
			$this->conexao();
			try {
				$sql = "UPDATE {$this->getTabela()} SET ";
				$campos = $this->obterCampos();
				$i = 0;
				foreach ($campos as $v) {
					if ($i == 1) {
						$sql .= $v." = :" . $v;
					} elseif ($i > 1) {
						$sql .= ", ".$v." = :" . $v;
					}
					$i++;
				}
				$sql .= " WHERE {$campos[0]} = :{$campos[0]}";
				$stmt = $this->geraStmt($sql, $vetor, $campos);
				$stmt->bindParam (':' . $campos[0], $vetor[0], PDO::PARAM_INT);
				$stmt->execute();
				$stmt->rowCount();
				return true;
			} catch (PDOException $e) {
				return 'Error: ' . $e->getMessage();
			}
		}

		public function inserirN($vetor) {
			$this->conexao();
			try {
				$campos = $this->obterCampos();
				$sql = "INSERT INTO " . $this->tabela . "(";
				$i = 0;
				foreach ($campos as $v) {
					if ($i == 0) {
						$sql .= $v;
					} elseif ($i > 0) {
						$sql .= ", " . $v;
					}
					$i++;
				}
				$sql .= ") VALUES(";
				$i = 0;
				foreach ($campos as $v) {
					if ($i == 0) {
						$sql .= ":" . $v;
					} elseif ($i > 0) {
						$sql .= ", :" . $v;
					}
					$i++;
				}
				$sql .= ")";
				$stmt = $this->geraStmt($sql, $vetor, $campos);
				$stmt->execute();
				return true;
			} catch (PDOException $e) {
				return 'Error: ' . $e->getMessage();
			}
		}

		public  function deleteN($id, $campo) {
			$this->conexao();
			try {
				$sql = 'DELETE FROM ' . $this->tabela . ' WHERE';
				$i = 0;
				foreach($id as $v){
					if ($i == 0) {
						$sql .= $v." = :" . $v;
					} elseif ($i > 0) {
						$sql .= "and ".$v." = :" . $v;
					}
					$i++;
				}
				$stmt = $this->pdo->prepare('DELETE FROM ' . $this->tabela . ' WHERE '.$campo.' = :id');
				$stmt->bindParam(':id', $id);
				$stmt->execute();
				return true;
			} catch (PDOException $e) {
				return 'Error: ' . $e->getMessage();
			}
		}


	}

?>