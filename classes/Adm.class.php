<?php

    require('autoload.php');

    class Adm extends Codigo {
        private $usuario, $senha;

        function logarAdm($codigo, $usuario, $senha) {
            $this->setCodigo($codigo);
            $this->setUsuario($usuario);
            $this->setSenha($senha);

            $crud = new Crud;
            $crud->setTabela('adm');
            $dados = $crud->select("select * from adm where usuario = '" .$this->getUsuario(). "'");
            if(count($dados) != 0) {
                if ($this->getSenha() == $dados[0]['senha']) {
                    session_start();
                    header('location:adm.php');
                }
            }
        }

        function Adm($codigo, $usuario, $senha, $acao) {
            switch ($acao) {
                case 'logar':
                    $this->logarAdm($codigo, $usuario, $senha);
                    break;
                default:
                    break;
            }
        }

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

        public function __toString() {
            parent::__toString()." | Usuério: {$this->getUsuario()}";
        }
    }

?>