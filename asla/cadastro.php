<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon">
    <link rel="stylesheet" href="estilo/cadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <form action="controllerCadastro.php" method="POST">
    <div class="main">
        <div class="leftCadastro">
            <h1>Faça o seu cadastro <br> E me ajude a tirar 10!!</h1>
            <img src="svg/astronaut-suit-animate.svg" alt="Astronauta" class="img">
        </div>

        <div class="rigthCadastro">
            <div class="card">
                <h1>CADASTRO</h1>
                    
                    <div class="textfield">
                        <label for="Nome">Nome</label>
                        <input type="text" name="Nome" placeholder="Nome" required>
                    </div>

                    <div class="textfield">
                        <label for="Sobrenome">Sobrenome</label>
                        <input type="text" name="Sobrenome" placeholder="Sobrenome" required>
                    </div>
                    
                    <div class="textfield">
                        <label for="Email">Email</label>
                        <input type="text" name="Email" placeholder="exemplo@exemplo.com" required>
                    </div>
                    
                    <div class="textfield">
                        <label for="Senha">Senha</label>
                        <input type="password" name="Senha" placeholder="Senha" required>
                    </div>
                    
                    <div class="textfield">
                        <label for="nascimento">Data de nascimento</label>
                        <input type="date" name="nascimento" placeholder="nascimento" required>
                    </div>
                    
                    <div class="textfield">
                        <label for="Sexo">Sexo</label>
                        <select name="Sexo" class="Sexo" required>
                        <option value="Indefinido">Selecione</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        
                        
                    </select>
                    </div>
                
                    <input type="submit" name="submit" class="btnCadastro" value="Cadastrar">
                    <br>
                    <p>Já tem cadastro ?  <a href="login.php">Login</a></p>

            </div>
        </div>
    </div>
</form>
</body>
</html>