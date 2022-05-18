<?php
// VAI IMPEDIR DE BURLAREM O SISTEMA ATRAVES DO FECHAMENTO DA SESSAO
session_start();
	if((!isset($_SESSION['Email']) == true) and (!isset($_SESSION['Senha']) == true)){

		unset($_SESSION['Email']);
		unset($_SESSION['Senha']);
		header('Location: login.php');
	}
	include("config.php");
	
	$logado = $_SESSION['Email'];
	// variavel logado não interessa!

?>