<?php
    session_start();
    require_once "Seguranca.php";
    Seguranca::verificaAutenticacao();
?>