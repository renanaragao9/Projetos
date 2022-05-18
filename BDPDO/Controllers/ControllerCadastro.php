<?php
include("../Includes/Variaveis.php");
include("../Crud.php");

$Crud=new ClassCrud();

if($Acao=='Cadastrar'){
    $Crud->insertDB(
        "cadastro",
        "?,?,?,?",
        array(
            $Id,
            $Nome,
            $Sexo,
            $Cidade
        )
    
    );
    
    echo "Cadastro Realizado com sucesso!"; 
    
} else {
    $Crud->updateDB(
        "cadastro",
        "Nome=?, Sexo=?,Cidade=?",
        "Id=?",
        array(
            $Nome,
            $Sexo,
            $Cidade,
            $Id
        )
    );
}



    