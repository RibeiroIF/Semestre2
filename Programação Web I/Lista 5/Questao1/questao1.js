function criarVetor(){
   let vetorIdades = [24, 12, 56, 34, 78, 16, 70, 48, 34, 27];
   vetorIdades = new Array(24, 12, 56, 34, 78, 16, 70, 48, 34, 27);

   let divResposta = document.getElementById("form-resposta")
   let tabela = "<table> <tr> <th> Idades </th> </tr>";

   for (let i = 0; i < vetorIdades.length; i++){
      tabela += "<tr> <td>" + vetorIdades[i] + "</td> </tr>";
   }

   tabela += "</table>";
   divResposta.innerHTML = tabela;
}

let botao = document.getElementById("button");
botao.addEventListener("click", criarVetor);
