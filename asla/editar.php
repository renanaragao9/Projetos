<?php
//Aqui insere os dados no banco de dados
if(!empty($_GET['id'])) {

    include_once('config.php');

	$id = $_GET['id'];

	$sqlselect = "SELECT * FROM cadastro WHERE id=$id";

	$resultado = $conexao->query($sqlselect);
	
	if($resultado->num_rows > 0){
		
		while($usuario = mysqli_fetch_assoc($resultado)) { 
			$nome = $usuario['nome'];
			$sobrenome = $usuario['sobrenome'];
			$email = $usuario['email'];
			$senha = $usuario['senha'];
			$nascimento = $usuario['nascimento'];
			$sexo = $usuario['sexo'];
        }
	}
	else {
		header('Location: manutencao.php');
	}

    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="controllerEditar.php" method="POST">
    <div class="main">
        <div class="rigthCadastro">
            <div class="card">
                <h1>Editar/Cadastrar</h1>
                <div class="textfield">
                    <label for="Nome">Nome</label>
                    <input type="text" name="Nome" placeholder="Nome" required value="<?php echo $nome ?>"> 
                </div>
						<br>
                <div class="textfield">
                    <label for="Sobrenome">Sobrenome</label>
                    <input type="text" name="Sobrenome" placeholder="Sobrenome" required value="<?php echo $sobrenome ?>">
                </div>
				<br>
                <div class="textfield">
                    <label for="Email">Email</label>
                    <input type="text" name="Email" placeholder="exemplo@exemplo.com" required value="<?php echo $email ?>">
                </div>
				<br>
                <div class="textfield">
                    <label for="Senha">Senha</label>
                    <input type="text" name="Senha" placeholder="Senha" required value="<?php echo $senha ?>">
                </div>
				<br>
                <div class="textfield">
                    <label for="nascimento">Data de nascimento</label>
                    <input type="date" name="nascimento" placeholder="nascimento" required value="<?php echo $nascimento ?>">
                </div>
				<br>
                <div class="textfield">
                    <label for="Sexo">Sexo</label>
                    <select name="Sexo" class="Sexo" required value="<?php echo $sexo ?>"> 
                        <option value="Indefinido">Selecione</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        
                        
                    </select>
                </div>
				<br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="editar" class="btnCadastro" value="Editar">
                <br>
				
            </div>
        </div>
    </div>
</form>
</body>
</html>