<?php
//Aqui insere os dados no banco de dados
if(isset($_POST['submit'])) {
    /*
    -=-=-=-=TESTE PARA SABER SE OS DADOS ESTAO PASSANDO-=-=-=-=
            print_r('Nome: ' . $_POST['Nome']);
            print_r('<br>');
            print_r('Sobrenome: ' .$_POST['Sobrenome']);
            print_r('<br>');
            print_r('Email: ' .$_POST['Email']);
            print_r('<br>');
            print_r('Senha: ' .$_POST['Senha']);
            print_r('<br>');
            print_r('Data: ' .$_POST['nascimento']);
            print_r('<br>');
            print_r('Sexo: ' .$_POST['Sexo']);
    */  
    //inclusão da conexão do nosso banco de dadoos
    include_once('config.php');
    
    // recebimento de dados
    $nome = $_POST['Nome'];
    $sobrenome = $_POST['Sobrenome'];
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];
    $nascimento = $_POST['nascimento'];
    $sexo = $_POST['Sexo'];

    //passar os dados acima para o banco de dados 

    $passagem = mysqli_query($conexao, "INSERT INTO cadastro(nome, sobrenome, email, senha, nascimento, sexo) 
                VALUES ('$nome', '$sobrenome', '$email', '$senha', '$nascimento', '$sexo')");
}
echo "Cadastro realizado com sucesso!!";

header('Location: cadastro.php'); 
?>