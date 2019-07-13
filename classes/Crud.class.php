<?php

	require('../autoload.php');

	class Crud {

		public $pdo, $tabela;

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
				echo $sql."<br>";
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