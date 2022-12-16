<?php    
    require "../../models/usuarioModel.php";
    require "../../helpers/config.php";
    $usuario = new Usuario();
    $nome = $_POST['campoNome'];
    $email = $_POST['campoEmail'];
    $senha = md5($_POST['campoSenha']);
    $usuario->add($nome, $email, $senha, 1);
    header("Location: ../../paginas/login/");
?>