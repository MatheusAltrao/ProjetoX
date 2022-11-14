<?php
    #CRUD da tabela de usuarios;

    require_once "../controladores/conectarBd.php";

    class Usuario
    {
        private $bd;
        public $tabela = "usuario";

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
        public function add($nome, $email, $senha, $ano) 
        {
            $sql = "INSERT INTO $this->tabela (nome, senha, email, anoEscolar) VALUES ('$nome', '$senha', '$email','$ano')";
            return $this->bd->executeSQL($sql);
        }


        #Pesquisa de uma entidade especifica;
        public function listarPorId($id) 
        {
            $sql = "SELECT * FROM $this->tabela WHERE id = '$id'";
            return $this->bd->executeSQL($sql);
        }


        #Alteração em algum cadastro especifico;
        public function edit($id, $nome, $senha, $email) 
        {
            $sql = "UPDATE $this->tabela SET nome = '$nome', senha = '$senha', email = '$email' WHERE id = '$id'";
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