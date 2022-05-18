<?php

include_once('config.php');

    if(isset($_POST['editar'])) {
        $id = $_POST['id'];
        $nome = $_POST['Nome'];
        $sobrenome = $_POST['Sobrenome'];
        $email = $_POST['Email'];
        $senha = $_POST['Senha'];
        $nascimento = $_POST['nascimento'];
        $sexo = $_POST['Sexo'];

        $sqlEditar = "UPDATE cadastro SET nome='$nome', sobrenome='$sobrenome',email='$email',senha='$senha',nascimento = '$nascimento',sexo='$sexo' WHERE id='$id'";

        $resultado = $conexao->query($sqlEditar);
    }
    header('Location: manutencao.php');

?>