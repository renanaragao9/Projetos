<?php
    if(!empty($_GET['id'])) {
        
        include_once('config.php');

        $id = $_GET['id'];
    
        $sqlselect = "SELECT * FROM cadastro WHERE id=$id";
    
        $resultado = $conexao->query($sqlselect);
        
        if($resultado->num_rows > 0){
            $sqldelete = "DELETE FROM cadastro WHERE id=$id";
            $resultDelete = $conexao->query($sqldelete);
        }
    }
    header('Location: manutencao.php');
?>