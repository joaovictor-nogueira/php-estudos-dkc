$(function(){
    /* aqui vai rodo nosso codigo de javascript */
    $('nav.mobile').click(function(){
        /* o que vai acontecer quando clicarmos na nav.mobile */
        var listaMenu = $('nav.mobile ul');
        /* ABRIR MENU ATRAVÉS DE FADE IN */
/*      if(listaMenu.is(':hidden')==true){
            listaMenu.fadeIn();
        }else{
            listaMenu.fadeOut();
        } */
        /* ABRIR OU FECHAR MENU */
      //listaMenu.slideToggle();

    /* Abrir e fechar sem efeitos. */
/* 
    if(listaMenu.is(':hidden')==true){
        //listaMenu.show();
        listaMenu.css('display','block');
    }else{
        //listaMenu.hide();
        listaMenu.css('display','none');
    } */

    if(listaMenu.is(':hidden')==true){
        /* var icone = $('.botao-menu-mobile i') */
        var icone = $('.botao-menu-mobile').find('i');
        icone.removeClass('fa-bars');
        icone.addClass('fa-xmark');
        listaMenu.slideToggle();
    }else{
        var icone = $('.botao-menu-mobile').find('i');
        icone.removeClass('fa-xmark');
        icone.addClass('fa-bars');
        listaMenu.slideToggle();
    } 
    //fa-solid fa-bars
    
    //fa-solid fa-xmark

    })
})