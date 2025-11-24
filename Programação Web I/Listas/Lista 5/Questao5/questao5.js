function gerarResultados(){

   const placaDeSom = [20, 5, 520];
   const placaDeVideo = [60, 5, 730];
   const processador = [12, 10, 840.12];
   const memoriaRam = [10, 10, 376.14];

   let matrizProdutos = [];
   matrizProdutos["Placa de Som"] = placaDeSom;
   matrizProdutos["Placa de Vídeo"] = placaDeVideo;
   matrizProdutos["Processador"] = processador;
   matrizProdutos["Memória RAM"] = memoriaRam;

   let divResposta = document.getElementById('form-resposta');
   let resposta = "<ol>";

   let produtosQtdAbaixo10 = ""
   let valorTotalRam = "";
   let valorTotalVenda = "";
   let nomeProdutoMaisCaro = "";

   // RESOLUÇÃO PARA A PRIMEIRA QUESTÃO
   for (let produto in matrizProdutos){
      if(matrizProdutos[produto][1] < 10){
         produtosQtdAbaixo10 += produto + " | ";
      }
   }

   // RESOLUÇÃO PARA A SEGUNDA QUESTÃO
   valorTotalRam = memoriaRam[0] * memoriaRam[2];
   valorTotalRam = valorTotalRam.toLocaleString("pt-BR",{
      minimumFractionDigits: 2,
      maximumFractionDigits: 2
   });

   // RESOLUÇÃO PARA A TERCEIRA QUESTÃO
   let valorProdutoAtual = 0;
   let quantidadeProdutos = 0;
   let valorProdutoTotal = 0;
   for (let produto in matrizProdutos){
      quantidadeProdutos = parseInt(matrizProdutos[produto][0]);
      valorProdutoAtual = parseFloat(matrizProdutos[produto][2]);
      valorProdutoTotal = parseFloat(valorProdutoAtual * quantidadeProdutos);
      console.log(valorProdutoTotal);
      valorTotalVenda += parseFloat(valorProdutoTotal);
   }

   // RESOLUÇÃO PARA A QUARTA QUESTÃO
   let valorMaior = 0;
   let valorComparativo = 0;
   for (let produto in matrizProdutos){
      valorComparativo = parseFloat(matrizProdutos[produto][2]);
      if(valorComparativo > valorMaior){
         valorMaior = valorComparativo;
         nomeProdutoMaisCaro = produto;
      }
   }
   
   resposta += "<li> <span> Produtos que podem ter menos que 10 em estoque: </span>" + produtosQtdAbaixo10 + "</li>";
   resposta += "<li> <span> Valor total da memória RAM: </span> R$ " + valorTotalRam + "</li>";
   resposta += "<li> <span> Resultado do valor total das vendas: </span> " +valorTotalVenda+ "</li>";
   resposta += "<li> <span> Nome do produto mais caro: </span> " + nomeProdutoMaisCaro + "</li>";

   divResposta.innerHTML = resposta;

}

let botao = document.getElementById('button');
botao.addEventListener("click", gerarResultados);