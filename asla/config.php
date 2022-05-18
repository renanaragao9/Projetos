<?php

$bdHost = 'Localhost';
$bdUsername = 'root';
$bdPassword = '';
$bdName = 'asla';

$conexao = new mysqli($bdHost, $bdUsername, $bdPassword, $bdName);


            // TESTE DE CONECÃO //
           //if($conexao->connect_errno) {
          //    echo "Erro";
         //} else {
        //     echo "Conexão efetuada com sucesso";
       // }
   
   ?>