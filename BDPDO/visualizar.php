<?php include("Includes/Header.php"); 
    include("Crud.php");
?>

<div class="Content">
    <?php
        $Crud=new ClassCrud();
        $Iduser=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

        $BFetch=$Crud->selectDB(
            "*",
            "cadastro",
            "where Id=?",
            array($Iduser)
        );
        $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
    ?>
    <h1>Dados do Usuário</h1>
    <hr>
    <strong>Nome:</strong> <?php echo $Fetch['Nome']; ?><br>
    <strong>Sexo:</strong> <?php echo $Fetch['Sexo']; ?><br>
    <strong>Cidade:</strong> <?php echo $Fetch['Cidade']; ?><br>
</div>

<?php include("Includes/Footer.php"); ?>