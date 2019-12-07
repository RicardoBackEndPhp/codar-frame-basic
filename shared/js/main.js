/* Inicializadores Bootstrap */
$( document ).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();

    $(function () {
        $('.popoverTrigger').popover({
          container: 'body'
        })
    });


});



//Toggle para as caixas de Log
//Lembrar de colocar display:none da box do toggle
//Na gatilho colocar os seguintes atributos class="btnLog" onclick="toggleLog(this.id, 'logBox[Nome]')" id="toggleLog[Nome]"
//No box colocar os seguites atributos class="box[Nome]"  id="logBox[Nome]" 
function toggleLog(btn, box){
    $("#"+btn).click(function(){
       if ($("#"+box).css("overflow") == "hidden"){
           event.preventDefault();
       }else{
           $("#"+box).slideToggle();
       }        
   });
}
//Inicializa o toggle
$( document ).ready(function() {
    $('.btnLog').click();
    $('.boxLog').css('display','none');
});
function toggleClose(box){
    $("#"+box).slideToggle();
}

//Interação com os ícones de download do arquivo
$(document).ready(function(){
    $(".iconArquivo").mouseenter(function(){
        $(this).children().removeClass("fa-file-alt");
        $(this).children().addClass("fa-download");
    });
    $(".iconArquivo").mouseleave(function(){
        $(this).children().removeClass("fa-download");
        $(this).children().addClass("fa-file-alt");
    });
});

//Função para fechar o menu se ele estiver em tela mobile
$(document).ready(function(){
    if ($("html").width() <= 768) {    
        $("body").toggleClass("sidebar-toggled");
        $(".sidebar").toggleClass("toggled");
        if ($(".sidebar").hasClass("toggled")) {
            $('.sidebar .collapse').collapse('hide');
        };
    }
});

//Função para mudar a informação que aparece quando mudamos a situação da empresa no acessa empresa.
function atualizarInfoSituacao(valor, localResultado){
    var info = "";
    if (valor != "") {
        if ($('.areaInfoSituacao').is(":hidden")) {
            $('.areaInfoSituacao').css('display','block');
        }
        switch(valor) {
            case 'ativo':
                info = "A situação da empresa se encontra normal, e sem nenhuma restrição ou pendências.";
            break;
            case 'desativado':
                info = "Esta empresa está com seu cadastro desativado, e possui restrições para atualizar seus clientes vinculados e manipulações financeiras";
            break;
            case 'bloqueado':
                info = "Empresa está a situação bloqueada em nosso cadastro, impedida até mesmo de acessar nossa plataforma, esta opção é preferencialmente utilizada para casos de pendências financeiras ou cadastrais.";
                break;
            default:
                info = "Houve algum erro";
        }
        $('.'+localResultado).html(info);
        
    }else{
        $('.areaInfoSituacao').css('display','none');
    }
}

//Função para abrir a tela popUP para o contrato de PJ no acessar empresa.
function popUpContratoPJ(link, width = 800, height = 800){
    varWindow = window.open(link, 'fatura_custo', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=100, LEFT=100, WIDTH='+width+', HEIGHT='+height);
}

//Função para abrir a tela popUP para o contrato de PJ no acessar empresa.
function popUpPadrao(link, width = 800, height = 800){
    varWindow = window.open(link, 'fatura_custo', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=100, LEFT=100, WIDTH='+width+', HEIGHT='+height);
}