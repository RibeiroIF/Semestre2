function limiteCompra1(){
    let tresProdutos = document.querySelectorAll('.produto');
    let selecionado1 = 0;

    for(let count = 0; count < tresProdutos.length; count++){
        if(tresProdutos[count].checked == true){
            selecionado1 += 1;
        }   
    }
    if(selecionado1 > 3){
        document.querySelector('#invalido1').innerText = "Você pode escolher apenas 3 produtos";
        return false;
    }
    else{
       document.querySelector('#invalido1').innerText = ""; 
    }
}

function limiteCompra2(){
    let tresRemedios = document.querySelectorAll('.remedio');
    let selecionado2 = 0;

    for(let count = 0; count < tresRemedios.length; count++){
        if(tresRemedios[count].checked == true){
            selecionado2 += 1;
        }   
    }
    if(selecionado2 > 3){
        document.querySelector('#invalido2').innerText = "Você pode escolher apenas 3 produtos";
        return false;
    }
    else{
       document.querySelector('#invalido2').innerText = ""; 
    }
}

function limiteCompra3(){
    let quatroAlimentos = document.querySelectorAll('.alimento');
    let selecionado3 = 0;

    for(let count = 0; count < quatroAlimentos.length; count++){
        if(quatroAlimentos[count].checked == true){
            selecionado3 += 1;
        }   
    }
    if(selecionado3 > 4){
        document.querySelector('#invalido3').innerText = "Você pode escolher apenas 4 produtos";
        return false;
    }
    else{
       document.querySelector('#invalido3').innerText = ""; 
    }
}