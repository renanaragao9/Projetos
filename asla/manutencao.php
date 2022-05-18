
<?php include_once("crud.php"); ?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilo/manutencao.css">
    <title>Document</title>
</head>
<body>
	<div>
		<input type="search" placeholder="Pesquisar" id="pesquisar">
		<button onclick="searchData()">Procurar</button>
	</div>
		<div>
			<table class="tabela">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nome</th>
						<th scope="col">Sobrenome</th>
						<th scope="col">Email</th>
						<th scope="col">Senha</th>
						<th scope="col">Data de nascimento</th>
						<th scope="col">Sexo</th>
						<th scope="col">Ações</th>

					</tr>
				</thead>
				
				<tbody>
				
				<?php 
					
						while($usuario = mysqli_fetch_assoc($resultado)){
							
						
							echo "<tr>";
							echo "<td>" . $usuario['id'] . " </td>";
							echo "<td>" . $usuario['nome'] . "</td>";
							echo "<td>" . $usuario['sobrenome'] . "</td>";
							echo "<td>" . $usuario['email'] . "</td>";
							echo "<td>" . $usuario['senha'] . "</td>";
							echo "<td>" . $usuario['nascimento'] . "</td>";
							echo "<td>" . $usuario['sexo'] . "</td>";
							echo "<td><a href='editar.php?id=$usuario[id]'><img src='img/editar-64.png' alt=''></a>
							<a href='controllerDeletar.php?id=$usuario[id]'><img src='img/lixo-64.png' alt=''></a>
							</td>";
							echo "</tr>";

						}
				?>
				</tbody>
			</table>
 		</div>
		 
</body>

<script>
		var search = document.getElementById('pesquisar');

		search.addEventListener("keydown", function(event) {
			if (event.key === "Enter") {
				searchData();
			}
		});

		function searchData(){
			window.location = 'manutencao.php?search='+search.value;
		}
</script>

</html>