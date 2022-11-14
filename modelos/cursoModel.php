<?php
    #CRUD da tabela de cursos;
    
    require_once "../controladores/conectarBd.php";

    class Curso
    {
        private $bd;
        public $tabela = "curso";

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
        #Importante mexer depois;
        public function add($nome) 
        {
            $sql = "INSERT INTO $this->tabela (nome) VALUES ('$nome')";
            return $this->bd->executeSQL($sql);
        }


        #Pesquisa de uma entidade especifica;
        public function listarPorId($id) 
        {
            $sql = "SELECT * FROM $this->tabela WHERE id = '$id'";
            return $this->bd->executeSQL($sql);
        }


        #Alteração em algum cadastro especifico;
        public function edit($id, $nome) 
        {
            $sql = "UPDATE $this->tabela SET nome = '$nome' WHERE id = '$id'";
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