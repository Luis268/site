const tratamentos = () => {

        const url_padrao = 'http://www.rizodonto.com.br/';

    let getTratamento = [
        {     
            nome:url_padrao + 'files/showcase_products_images/3/85008ea59e79d4875eeba4f3108a16ac.png',
            titulo: 'PERIODONTIA', 
            link: 'javascript:void(0);',
        },
        {
            nome:url_padrao + 'files/showcase_products_images/4/e546450aa0c76ed2dd4d3f2218e46a28.png',
            titulo:'DENTÍSTICA',
            link: 'javascript:void(0);',
        },
        {
            nome:url_padrao + 'files/showcase_products_images/5/8e37d9b063ce82659178bfc3a26f5b4a.png',
            titulo:'IMPLANTES',
            link: 'javascript:void(0);',
        },
        {
            nome:url_padrao + 'files/showcase_products_images/6/f82a64eaee54412ff376e5fa2037f8ed.png',
            titulo:'ODONTOPEDIATRIA',
            link: 'javascript:void(0);',
        },
        {
            nome:url_padrao + 'files/showcase_products_images/4/e546450aa0c76ed2dd4d3f2218e46a28.png',
            titulo:'DENTÍSTICA',
            link: 'javascript:void(0);',
        },
        {     
            nome:url_padrao + 'files/showcase_products_images/3/85008ea59e79d4875eeba4f3108a16ac.png',
            titulo: 'PERIODONTIA', 
            link: 'javascript:void(0);',
        },
        
    ];  

        
    template(getTratamento);

};


function template(params){   

    let j = 1;
    let montagem = [];
    let temp = "";
    let mTemp = "";

    $.each(params, function(i,v){
        temp = `
        
        <div class="col col-sm-3 col-md-3 texto_6">
            <div class="thumbnail">
                <img class="t_imagens img-thumbnail" src="${v.nome}" alt="...">
                <div class="texto_c">
                    <h5><b>${v.titulo}</b></h5>
                    <p>
                    <a href="${v.link}" class="btn btn-primary" role="button">Ver Detalhe</a>
                    </p>
                </div>
            
            </div>
        </div>
     
     `;
        
        montagem.push(temp);        
       
    });      
    

    $.each(montagem, function(index, value){  
        
        if(j == 1){
            mTemp += `<div class="row">${value}`;
        }
        else
        if(j == 4){
            mTemp += `${value}</div>`;
            j = 0;        
        }else{
            mTemp += value;
        }

        j++;
    });
    $("#resp").append(mTemp);   
}


tratamentos();