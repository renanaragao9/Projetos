<?php
		
		// VAI APAGAR A SESSAO CRIADA ATRAVES DO  LOGIN E NAO BURLAREM O SISTEMA
		session_start();
        unset($_SESSION['Email']);
		unset($_SESSION['Senha']);
		header('Location: login.php');
?>