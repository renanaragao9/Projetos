/*FUNÇÃO AJAX PARA O BOTÃO DELETAR*/

$('.deletar').on('click', function (event) {
    event.preventDefault();
    var link=$(this).attr('href');
    
    if(confirm("Deseja mesmo excluir esse usuário?")){
        $.ajax({
            url: link, 
            success: function(){
                $('.resultadoExclusao').show().html();
            }
        });
    }else{
        return false;
    }
});