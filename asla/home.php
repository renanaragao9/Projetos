<?php include_once("controllerEntrar.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Asla</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilo/menu.css">
	<link rel="stylesheet" href="estilo/sistema.css">
	<link rel="stylesheet" href="estilo/home.css">
	<link rel="shortcut icon" href="img/icone.ico" type="image/x-icon">
	<script src="script/home.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body  onload="carregar()">
	   <!--      Menu do site        -->
	<nav>
		
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<span></span>
      		<span></span>
      		<span></span>
		</label>
	 
		<label class="logo"><img src="img/logo.png" alt="Logomarca"></label>
			<ul>
				<li><a class="active" href="#">Início</a></li>
				<li><a href="#">Sobre</a></li>
				<li><a href="#">Serviços</a></li>
				<li><a href="#">Contato</a></li>
				<li><a href="controllerSair.php">Sair</a></li>
			</ul>
			</ul>
	</nav>
	<!------ FIM DO MENU ------->
	
	<section>
		<div class="main">
		
			<div class="nome"><h2 id="msg"></h2></div>
			<div class="nome"><h2><?php echo $_SESSION['Nome']; ?></h2></div>
			<p>Seja Bem, Vindo(a)</p>	
		
				<div class="img">
					<h2>Em breve aqui será cheio de conteúdo</h2>
					<img src="img/Processing-bro.png" alt="Apresentação">
					<img src="img/presentation-pana.png" alt="Apresentação">
					<p class="p">Aqui você terá um site com qualidade, responsabilidade e acessibilidade</p>
					<p></p>

					<img src="img/Product presentation-cuate.png" alt="Apresentação">
					<img src="img/Product presentation-rafiki.png" alt="Apresentação">
					<p class="p">Responsivo para todas as plaformas</p>

					<img src="img/presentation-amico.png" alt="Apresentação">
					<img src="img/Devices-bro.png" alt="Apresentação">
					<p class="p">Exclusivo para você!</p>
				
				</div>

		</div>
	</section>
	
	<div class="rodape">
				<h3>&copy;Asla <br> Todos os direitos reservados.</h3>
                <h4 style="margin-bottom: 20px;">Site criado por Renan da Silva Aragao</h4>
                <p>
                <a  href="https://www.instagram.com/aslanetwork/" target="_blank" rel="noopener noreferrer"><ion-icon name="logo-instagram"></ion-icon></a>
                
				<a href="https://www.facebook.com/Asla-Network-101177042602259" target="_blank" rel="noopener noreferrer"><ion-icon name="logo-facebook"></ion-icon></a>
               
				<a href="https://www.linkedin.com/in/renan-arag%C3%A3o-947473213/" target="_blank" rel="noopener noreferrer"><ion-icon name="logo-linkedin"></ion-icon></a>
               
				<a href="https://twitter.com/Renanasla" target="_blank" rel="noopener noreferrer"><ion-icon name="logo-twitter"></ion-icon></a>
            </p>
                <br>
				<img style="width: 100px" src="img/icone.ico" alt="">
	</div>
	
</body>
</html>