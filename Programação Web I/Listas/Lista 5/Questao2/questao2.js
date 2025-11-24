function pegarQuantidade(){
  let vetorExemplo = new Array(12)
  let resposta = vetorExemplo.length;
  let divResposta = document.getElementById("form-resposta")
  let textoResposta = "Número de elementos dentro do Array: <span>" + resposta + "</span>";

  divResposta.innerHTML = textoResposta;
}

let botao = document.getElementById("button")
botao.addEventListener("click", pegarQuantidade)