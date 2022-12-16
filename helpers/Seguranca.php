<?php
    class Seguranca
    {
        public static $id = "admin_id";
        public static $nome = "admin_nome";
        public static $email = "admin_email";
        public static function login($id, $nome, $email)
        {
            $_SESSION[Seguranca::$id] = $id;
            $_SESSION[Seguranca::$nome] = $nome;
            $_SESSION[Seguranca::$email] = $email;
            header("Location: ../../views/Home/");
            exit;
        }
        public static function sair()
        {
            unset($_SESSION[Seguranca::$id]);
            unset($_SESSION[Seguranca::$nome]);
            unset($_SESSION[Seguranca::$email]);
            header("Location: ../../");
            exit;
        }
        public static function verificaAutenticacao()
        {
            if (Seguranca::getVarSESSION(Seguranca::$nome) == '') 
            {
                header("Location: ../../views/Professor/login.php?erro=2");
                exit;
            }
        }
        public static function getVarSESSION($var)
        {
            return (isset($_SESSION[$var])) ? $_SESSION[$var] : '';
        }
    }
?>