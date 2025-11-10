function criarLista(){

   let chassi1 = document.getElementById("chassi1").value;
   let chassi2 = document.getElementById("chassi2").value;
   let chassi3 = document.getElementById("chassi3").value;

   let marca1 = document.getElementById("marca1").value;
   let marca2 = document.getElementById("marca2").value;
   let marca3 = document.getElementById("marca3").value;

   let modelo1 = document.getElementById("modelo1").value;
   let modelo2 = document.getElementById("modelo2").value;
   let modelo3 = document.getElementById("modelo3").value;

   let fabricacao1 = parseInt(document.getElementById("fabricacao1").value);
   let fabricacao2 = parseInt(document.getElementById("fabricacao2").value);
   let fabricacao3 = parseInt(document.getElementById("fabricacao3").value);

   let preco1 = parseFloat(document.getElementById("preco1").value);
   let preco2 = parseFloat(document.getElementById("preco2").value);
   let preco3 = parseFloat(document.getElementById("preco3").value);

   let concessionaria = [];

   concessionaria[chassi1] = [marca1, modelo1, fabricacao1, preco1];
   concessionaria[chassi2] = [marca2, modelo2, fabricacao2, preco2];
   concessionaria[chassi3] = [marca3, modelo3, fabricacao3, preco3];

   let divResposta = document.getElementById("form-resposta");
   let resposta = "<ol>";

   // RESOLUÇÃO DA PRIMEIRA QUESTÃO, VENDO O LUCRO TOTAL DOS CARROS COM ANO DE FABRICAÇÃO POSTERIOR A 2024, MOSTRANDO UMA MENSAGEM ADEQUADA CASO NÃO HAJA CARRO
   let mensagemQuestao1 = "";
   let anoDeFabricacao = 0;
   let valorDoCarro = 0;
   let valorTotal = 0;
   
   for (carro in concessionaria){
      anoDeFabricacao = parseInt(concessionaria[carro][2]);
      if (anoDeFabricacao > 2024){
         valorDoCarro = parseFloat(concessionaria[carro][3]);
         valorTotal += valorDoCarro;
      }
   }

   console.log(anoDeFabricacao);
   if (valorTotal != 0){
     
      valorTotal = valorTotal.toLocaleString("pt-BR", {
      minimumFractionDigits: 2,
      maximumFractionDigits: 2
   })
      mensagemQuestao1 += "<li> O lucro da concessionária considerando a venda dos carros com ano de fabricação <span> POSTERIOR </span> a 2024 é de: <span> R$" +valorTotal+ " </span> </li>";
   }
   else{
      mensagemQuestao1 = "<li> Não há nenhum carro com ano de fabricação posterior a 2024, portanto, o lucro total da concessionária é de <span> R$0,00 (zero reais) </span> </li>";
   }

   // RESOLUÇÃO DA SEGUNDA QUESTÃO, MOSTRANDO O VEÍCULO COM MENOR PREÇO DE REVENDA
   let chassiCarroMaisBarato = "";
   let marcaCarroMaisBarato = "";
   let modeloCarroMaisBarato = "";
   let fabricacaoCarroMaisBarato = 0;
   let precoCarroMaisBarato = 10000000000;
   let precoComparativo = 0;
   for (carro in concessionaria){
      precoComparativo = parseFloat(concessionaria[carro][3]);
      if (precoComparativo < precoCarroMaisBarato){
         chassiCarroMaisBarato = carro;
         marcaCarroMaisBarato = concessionaria[carro][0];
         modeloCarroMaisBarato = concessionaria[carro][1];
         fabricacaoCarroMaisBarato = parseInt(concessionaria[carro][2]);
         precoCarroMaisBarato = precoComparativo;
      }
   }

   precoCarroMaisBarato = precoCarroMaisBarato.toLocaleString("pt-BR", {
      minimumFractionDigits: 2,
      maximumFractionDigits: 2
   })

   // RESOLUÇÃO DA TERCEIRA QUESTÃO, MOSTRANDO APENAS OS VEÍCULOS DA MARCA "FIAT", MOSTRANDO UMA MENSAGEM ADEQUADA CASO NÃO HAJA CARRO
   let respostaTerceiraQuestao = "";
   let tabelaCarros = "<table> <caption> 3. Tabela de Carros Fiat </caption>";
   tabelaCarros += "<tr> <th> Chassi </th> <th> Marca </th> <th> Modelo </th> <th> Ano de Fabricação </th> <th> Preço de Revenda </th> </tr>";
   let corpoTabela = "";

   let marcaEscolhida = "Fiat";
   let marcaAtual = "";

   let precoAtual = 0;

   for (carro in concessionaria){
      marcaAtual = concessionaria[carro][0];
      precoAtual = parseFloat(concessionaria[carro][3]);
      if (marcaAtual.localeCompare(marcaEscolhida) == 0){

         precoAtual = precoAtual.toLocaleString("pt-BR", {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
         })
         
         corpoTabela += "<tr> <td>" +carro+ "</td> <td>" +marcaAtual+ "</td> <td>" +concessionaria[carro][1]+ "</td> <td>" +concessionaria[carro][2]+ "</td> <td> R$" +precoAtual+ "</td> </tr>";
      }
   }

   if (corpoTabela == ""){
      respostaTerceiraQuestao = "<h4 style='text-align: center'> A concessionária não possui carros da marca Fiat, portanto, não há tabela a exibir :( </h4>";
   }
   else{
      tabelaCarros += corpoTabela;
      respostaTerceiraQuestao += tabelaCarros;
   }


   resposta += mensagemQuestao1;
   resposta += "<li> Informações do Carro mais Barato: ";
   resposta += "<ul>";
   resposta += "<li> Chassi: <span>" +chassiCarroMaisBarato+ "</span> </li>"
   resposta += "<li> Marca: <span>" +marcaCarroMaisBarato+ "</span> </li>"
   resposta += "<li> Modelo: <span>" +modeloCarroMaisBarato+ "</span> </li>"
   resposta += "<li> Fabricação: <span>" +fabricacaoCarroMaisBarato+ "</span> </li>"
   resposta += "<li> Preço: <span> R$" +precoCarroMaisBarato+ "</span> </li>"
   resposta += "</ul> </li>"
   resposta += "</ol>"
   resposta += respostaTerceiraQuestao;
   divResposta.innerHTML = resposta;

}

let botao = document.getElementById("button");
botao.addEventListener("click", criarLista);