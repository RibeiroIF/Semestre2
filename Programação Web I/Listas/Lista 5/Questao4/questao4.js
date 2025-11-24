function criarVetor(){
   let nome1 = document.getElementById("nome1").value;
   let nome2 = document.getElementById("nome2").value;
   let nome3 = document.getElementById("nome3").value;

   let idade1 = parseInt(document.getElementById("idade1").value);
   let idade2 = parseInt(document.getElementById("idade2").value);
   let idade3 = parseInt(document.getElementById("idade3").value);

   let divResposta = document.getElementById("form-resposta")
   let resposta = "<table> <tr> <th> Nomes </th> <th> Idades </th> </tr>";

   var minhaLista = [];
   
   minhaLista[nome1] = idade1;
   minhaLista[nome2] = idade2;
   minhaLista[nome3] = idade3;

   for (var valor in minhaLista){
      resposta += "<tr> <td> "+valor+" </td> <td> "+minhaLista[valor]+" </td> </tr>";
      console.log(valor+" | "+minhaLista[valor]);
   }

   resposta += "</table>";

   divResposta.innerHTML = resposta;
}

let botao = document.getElementById("button");
botao.addEventListener("click", criarVetor);
