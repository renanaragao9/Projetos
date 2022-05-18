
<?php include("Includes/Header.php"); ?>



<div class="Content">
<div class="resultadoExclusao">
    <p>Cadastro excluído com sucesso!</p>
    <a  href="selecao.php">Clique aqui para atualizar</a>
</div>
<table class="tabela">
    <tr>
        <td>Nome</td>
        <td>Sexo</td>
        <td>Cidade</td>
        <td>Ações</td>
    </tr>

    <!-- Estrutura de loop -->
    <?php
        include("Crud.php");
        $Crud=new ClassCrud();
            $BFetch=$Crud->selectDB(
            "*",
            "cadastro",
            "",
            array()    
            );

    while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
        ?>  
    <tr>    
        <td><?php echo $Fetch['Nome']; ?></td>
        <td><?php echo $Fetch['Sexo']; ?></td>
        <td><?php echo $Fetch['Cidade']; ?></td>
        <td>
            <a href=<?php echo "visualizar.php?id={$Fetch['id']}"; ?>><img title="Pesquisar" src="img/icons8-pesquisar-64.png" alt="Visualizar"></a>
            <a href=<?php echo "cadastro.php?id={$Fetch['id']}"; ?>><img title="Editar" src="img/icons8-editar-64.png" alt="Editar"></a>
            <a class="deletar" href=<?php echo "deletar.php?id={$Fetch['id']}"; ?>><img title="Excluír" src="img/icons8-lixo-64.png" alt="Deletar"></a>
        </td>
    </tr>
<?php
    }
    ?>
    
</table>
</div>



<script src="zepto.min.js"></script>
<script src="javaa.js"></script>
<?php include("Includes/Footer.php"); ?>
