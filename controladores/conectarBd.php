<?php
    #Classe para conexão com o banco de dados;

    class Conexao
    {
        private $servidor;
        private $user;
        private $pass;
        private $nomeBanco;
        private $banco;


        function __construct($servidor = "localhost", $user = "root", $pass = "", $nomeBanco = "")
        {
            $this->setServidor($servidor);
            $this->setUser($user);
            $this->setPass($pass);
            $this->setNomeBanco($nomeBanco);
        }

        
        #Função para a conexão;
        public function conectar()
        {
            $this->banco = new mysqli(
                $this->getServidor(),
                $this->getUser(),
                $this->getPass(),
                $this->getNomeBanco()
                );
            if ($this->banco->connect_error) 
            {
                die("Erro de conexão: " . $this->banco->connect_errno . " - " . $this->banco->connect_error);
            }
            return $this->banco;
        }


        #Função para desconexão;
        public function desconectar()
        {
            $this->banco->close();
        }


        #Função para executar o sql;
        #Serve para mexer com o banco de dados no geral, não uma tabela especifica;
        public function executeSQL($sql)
        {
            $this->conectar();
            $rs = $this->banco->query($sql);
            $this->desconectar();
            return $rs;
        }


        #Getters e Setters
        public function getServidor()
        {
            return $this->servidor;
        }
        public function setServidor($servidor)
        {
            $this->servidor = $servidor;
            return $this;
        }

        
        public function getUser()
        {
            return $this->user;
        }
        public function setUser($user)
        {
            $this->user = $user;
            return $this;
        }


        public function getPass()
        {
            return $this->pass;
        }
        public function setPass($pass)
        {
            $this->pass = $pass;
            return $this;
        }


        public function getNomeBanco()
        {
            return $this->nomeBanco;
        }
        public function setNomeBanco($nomeBanco)
        {
            $this->nomeBanco = $nomeBanco;
            return $this;
        }


        public function getBanco()
        {
            return $this->banco;
        }
        public function setBanco($banco)
        {
            $this->banco = $banco;
            return $this;
        }
    }
?>