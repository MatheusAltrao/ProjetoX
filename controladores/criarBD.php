<?php
    #Script para criar o banco de dados localmente;
    #Basta executar uma só vez;

    #Conexão com o banco de dados;

    $conexao = new mysqli('localhost', 'root', '', '');

    if($conexao)
    {
        echo "<p>Conexao ok</p>";
    }
    else
    {
        die('Connect Error('. mysqli_connect_errno() .')'. mysqli_connect_error());
    }

    $nomeBD = "projetoX";

    #Criação do Banco de Dados, caso não exista;
    $create = "CREATE SCHEMA IF NOT EXISTS $nomeBD";
    $conexao->query($create);

    if($conexao->query($create) === true)
    {
        echo "<p>Banco de Dados criado</p>";
    }
    else
    {
        echo "<p>Banco de Dados não criado</p>";
    }

    mysqli_select_db($conexao, $nomeBD);

    #Criação das tabelas;
    $tabelas = "CREATE TABLE usuario(
        id int AUTO_INCREMENT PRIMARY KEY,
        nome varchar(200) NOT NULL,
        email varchar(200) NOT NULL,
        senha varchar(32) NOT NULL,
        anoEscolar int NOT NULL)";
    $conexao->query($tabelas);
?>