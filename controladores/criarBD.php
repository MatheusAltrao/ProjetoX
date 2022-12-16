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

    mysqli_select_db($conexao, $nomeBD);

    #Criação das tabelas;
    $tabela = "CREATE TABLE atuacao(
        id int AUTO_INCREMENT PRIMARY KEY,
        nome varchar(200) NOT NULL,
        descricao text NOT NULL);";
    $conexao->query($tabela);

    $tabela = "CREATE TABLE profissao(
        id int AUTO_INCREMENT PRIMARY KEY,
        nome varchar(200) NOT NULL,
        mediaSalarial double not null,
        idAtuacao int not null,
        constraint fkAtuaProf foreign key (idAtuacao) references atuacao (id));";
    $conexao->query($tabela);

    $tabela = "CREATE TABLE relatos(
        id int auto_increment primary key,
        relato mediumtext not null,
        dataHora datetime not null,
        idUsuario int not null,
        constraint fkUsuRel foreign key (idUsuario) references usuario (id),
        idProfissao int not null,
        constraint fkProfRel foreign key (idProfissao) references profissao(id));";
    $conexao->query($tabela);
?>