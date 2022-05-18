<?php include("Includes/Header.php"); 
    include("Crud.php");
?>

<?php
        $Crud=new ClassCrud();
        $Iduser=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

        $Crud->deleteDB(
            "cadastro",
            "id=?",
            array(
                $Iduser
            )
        );
        echo "Dado deletado com sucesso!"
    ?>
  
  
    
    <?php include("Includes/Footer.php"); ?>