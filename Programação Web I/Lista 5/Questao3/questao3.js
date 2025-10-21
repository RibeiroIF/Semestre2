function gerarTabela(){

  let precosAutomoveis = new Array(12750.60 , 28720.97, 145000.00, 879678.56);
  let resposta = "<p> O valor de cada carro na tabela é de: </p> <ul>"
  let respostaFinal = document.getElementById("form-resposta")

  for(let i = 0; i < precosAutomoveis.length; i++){
    resposta += "<li>" +(i+1)+ "° Carro: <span>"+precosAutomoveis[i]+ "</span> </li>" 
  }

  resposta+= "</ul>"

  respostaFinal.innerHTML = resposta;
}

let botao = document.getElementById("button")
botao.addEventListener("click", gerarTabela);