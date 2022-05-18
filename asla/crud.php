<?php
include_once('config.php');
if(!empty($_GET['search'])){
	
    $data = $_GET['search'];
    $sql = "SELECT * FROM cadastro WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' or sexo LIKE '%$data%'  ORDER BY id";
}
else{
	$sql = "SELECT * FROM cadastro ORDER BY id";
}

$resultado = $conexao->query($sql);

$usuario = mysqli_fetch_assoc($resultado);