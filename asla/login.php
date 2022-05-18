<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icone.ico" type="image/x-icon">
    <link rel="stylesheet" href="estilo/login.css">
    <title>Login</title>
</head>

<body>
    <form action="testeLogin.php" method="POST">
       
        <div class="main">
            <div class="leftLogin">
                <h1>Faça login <br> E me ajude a tirar 10!!</h1>
                <img src="svg/astronaut-animate.svg" alt="Astronauta" class="img">
            
            </div>
        
            <div class="rigthLogin">
                <div class="card">
                    <h1>LOGIN</h1>
                    <div class="textfield">
                        <label for="Email">Email</label>
                        <input type="text" name="Email" placeholder="Email" required>
                    </div>

                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="Senha" placeholder="Senha" required>
                    </div>
        
                    <input class="btnlogin" type="submit" name="submit" value="Login">
                    <br>
                    <p>Não tem cadastro ?  <a href="cadastro.php">Cadastre-se aqui!</a></p>

                </div>
            </div>
        </div>


    </form>
</body>
</html>