<?php
    #CRUD da tabela de faculdades;
    
    require_once "../controladores/conectarBd.php";

    class Faculdade
    {
        private $bd;
        public $tabela = "faculdade";

        function __construct()
        {
            $this->bd = new Conexao();
        }


        #Função para listar todos as entidades da tabela;
        public function lista()
        {
            $sql = "SELECT * FROM $this->tabela";
            return $this->bd->executeSQL($sql);
        }


        #Cadastro no Banco de Dados;
        public function add($nome, $cidade, $estado, $cnpj) 
        {
            $sql = "INSERT INTO $this->tabela (nome, cidade, estado, cnpj) VALUES ('$nome', '$cidade', '$estado','$cnpj')";
            return $this->bd->executeSQL($sql);
        }


        #Pesquisa de uma entidade especifica;
        public function listarPorId($id) 
        {
            $sql = "SELECT * FROM $this->tabela WHERE id = '$id'";
            return $this->bd->executeSQL($sql);
        }


        #Alteração em algum cadastro especifico;
        public function edit($id, $nome, $cidade, $estado, $cnpj) 
        {
            $sql = "UPDATE $this->tabela SET nome = '$nome', cidade = '$cidade', estado = '$estado', cnpj = '$cnpj' WHERE id = '$id'";
            return $this->bd->executeSQL($sql);
        }

        
        #Remoção de uma entidade especifica do Banco de Dados;
        public function del($id) 
        {
            $sql = "DELETE FROM $this->tabela WHERE id = $id";
            return $this->bd->executeSQL($sql);
        }
    }
?>