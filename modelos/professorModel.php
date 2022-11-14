<?php
    #CRUD da tabela de professores;

    require_once "../controladores/conectarBd.php";

    class Professor
    {
        private $bd;
        public $tabela = "professor";

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
        public function add($nome, $email, $senha, $nivel) 
        {
            $sql = "INSERT INTO $this->tabela (nome, senha, email, nivel) VALUES ('$nome', '$senha', '$email','$nivel')";
            return $this->bd->executeSQL($sql);
        }


        #Pesquisa de uma entidade especifica;
        public function listarPorId($id) 
        {
            $sql = "SELECT * FROM $this->tabela WHERE id = '$id'";
            return $this->bd->executeSQL($sql);
        }


        #Alteração em algum cadastro especifico;
        public function edit($id, $nome, $senha, $email, $nivel) 
        {
            $sql = "UPDATE $this->tabela SET nome = '$nome', senha = '$senha', email = '$email', nivel = '$nivel' WHERE id = '$id'";
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