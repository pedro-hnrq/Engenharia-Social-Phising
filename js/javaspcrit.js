
$(document).ready(function() {
    $('#inputDnasc').mask('00/00/0000');
    $('#inputCont').mask('(00) 00000-0000');
    $('#inputcpf').mask('000.000.000-00', {reverse: true});
});


function confirmacao() {
    $.notify({
        // options
        message: 'Cadastro salvo com sucesso'
    },{
        // settings
        type: 'success'
    });
    return true

}