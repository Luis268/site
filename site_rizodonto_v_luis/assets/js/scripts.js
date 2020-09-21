$(document).ready(function()
{     
    let url = document.location.href,     
    url_obj = url.substring(url.lastIndexOf("/") + 1, url.length), 
    tabs = [],
    menu = document.querySelectorAll(".nav-link"),
    nav = $("nav > ul"),
    li = nav.find('li');

    console.log(url)

    $.each(menu, function(i, v){

        tabs.push($(v).attr('id'));

        if($(v).attr('id') == url_obj){
            li.removeClass('active');
            $(this).closest('li').addClass('active');
        }
    });  
    
    if(url_obj == ""){
        $(menu[0]).closest('li').addClass('active');
    }   


    $('.day').on('click', function(e){
        e.preventDefault();
    var hoje = $(this).data('dia');
    $("#inputData").val(hoje);    

    $.ajax({
        url: '../../funcao/select.php',
        type: 'POST',
        data: {
            _dia: hoje
        },
        success: function(data){
            $(".response").html(data);
            console.log(data);
        }
    });
});
    
    
});


$(function(){
    var data = new Date();
    var mesAtual = data.getMonth() + 1;
    $('#mes_' + mesAtual).show();

    function hideShow(){
        if(mesAtual > 12){
            mesAtual = 1;
        }else if(mesAtual < 1){
            mesAtual = 12;
        }

        $('.mes').hide();
        $('#mes_' + mesAtual).show();
    }

    $('#proximo').on('click', function(e){
        e.preventDefault();
            mesAtual++;
            hideShow();
        return false;
    });

    $('#voltar').on('click', function(e){
        e.preventDefault();
            mesAtual--;
            hideShow();
        return false;
    });

    
});





