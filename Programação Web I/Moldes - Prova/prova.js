function realizarQuestao(){


  let resposta = "";
  let divResposta = document.getElementById("resultado-js");
  divResposta.innerHTML = resposta;

}
let button = document.getElementById("button");
button.addEventListener("click", realizarQuestao);