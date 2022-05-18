<?php
#abstract não estancia em outro arquivo
abstract class ClassConexao {  
    #Realizara a conexao com o banco de dados
    public function conectaDB() {
        try {
            $Con=new PDO("mysql:host=localhost;dbname=teste", "root","");
            return $Con;
        } 
        catch (PDOException $Erro){
            
        }
    }

}
 #PARA TESTAR NA INDEX A CONEXAO COM O BANCO DE DADOS
 #$conexao=new ClassConexao();
 #teste de conexao
 #var_dump($conexao->conectaDB());
?>