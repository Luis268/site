function alertas(nameFormArray){      
      
    for(f = 0; f < nameFormArray.length; f++){
        verificador         = $(nameFormArray[f]);
        atributo_id         = $(nameFormArray[f]).attr('name');
        attribute_input     = $(nameFormArray[f]).attr('id');
        valores_id          = document.getElementById(`${atributo_id}`);
        valor_input         = $(valores_id).val();
        toCompare           = verificador[0].dataset.required;
        tipo_text           = $(verificador).attr('type');
        
        if(toCompare == "s"){
            if(valor_input === ""){
                $(valores_id).css({
                    backgroundColor:"#FDF5E6",
                    color: "#f00"
                });                    
                $("#texto_alerta_" + attribute_input).text("Campo Obrigatório!").show();   
                setTimeout(() => {
                    $("#texto_alerta_" + attribute_input).hide('slow');
                    $(valores_id).css({
                        backgroundColor:"#FFFFFF",
                        color: "#555"
                    });
                }, 10000);         
                $("#"+atributo_id).focus();                
                return false;
            }
            else if(tipo_text === "email"){
                parte1 = valor_input.indexOf("@");
                parte3 = valor_input.length;
                if (!(parte1 >= 3 && parte3 >= 9)) {
                    $("#texto_alerta_" + attribute_input).text("O campo E-MAIL deve conter um endereco eletronico!").show();
                    setTimeout(() => {
                        $("#texto_alerta_" + attribute_input).hide('slow');
                        $(valores_id).css({
                            backgroundColor:"#FFFFFF",
                            color: "#555"
                        });
                    }, 10000);                    
                    $(valores_id).css({
                        backgroundColor:"#FDF5E6",
                        color: "#f00"
                    });
                    $("#"+atributo_id).focus();
                    return false;
                }
            }
        }        
    }     
}

// Agendamento
function agendamentos(){
    ag = form_agenda;
    if(alertas(ag) !== false){
        $(ag).submit();
    }
}

// contato pagina
function faleConosco(){
    c1 = form_ext;
    if(alertas(c1) !== false){
        $(c1).submit();
    }    
}