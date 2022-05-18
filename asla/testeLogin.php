<?php
session_start();
//REQUEST PARA SABER OS PARAMETROS QUE ESTAO VINDO DO LOGIN REQUEST == Solicitação

//print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['Email']) && !empty($_POST['Senha'])) {
    //Acessa
    include_once('config.php');

    $email = $_POST['Email'];
    $senha = $_POST['Senha'];
    
    //Teste para saber se os parametros estao passando
    //print_r('Email: ' . $email);
    //print_r('<br>');
    //print_r('Senha: ' . $senha);

    $sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";
    
    $resultado  = $conexao->query($sql);
    //pegar esses dados para colocar o acho 'nome' por exemplo
    $bd = mysqli_fetch_assoc($resultado);
    
    //Comparar se exite a conta no banco de dados
    //print_r($sql);
    //print_r($resultado);

    if(mysqli_num_rows($resultado) < 1) {
        //se o número for menor que 1 quer dizer nao tem conta no BD e a sessão é encerrada!
        unset($_SESSION['Email']);
        unset($_SESSION['Senha']);
        header('Location: login.php');
        
    }
    else {
        $_SESSION['Email'] = $email;
        $_SESSION['Senha'] = $senha;
        $_SESSION['Nome']  = $bd['nome'];

        header('Location: home.php');
    }
} 
else{
    // Não acessa
    header('Location: login.php');
    echo "Email ou Senha incorreto!";
    
}

?>
