function criarLista(){

  let produto1 = document.getElementById("produto1").value;
  let produto2 = document.getElementById("produto2").value;
  let produto3 = document.getElementById("produto3").value;

  let quantidade1 = parseInt(document.getElementById("quantidade1").value);
  let quantidade2 = parseInt(document.getElementById("quantidade2").value);
  let quantidade3 = parseInt(document.getElementById("quantidade3").value);

  let preco1 = parseFloat(document.getElementById("preco1").value);
  let preco2 = parseFloat(document.getElementById("preco2").value);
  let preco3 = parseFloat(document.getElementById("preco3").value);

  let matrizProdutos = [];

  matrizProdutos[produto1] = [quantidade1, preco1];
  matrizProdutos[produto2] = [quantidade2, preco2];
  matrizProdutos[produto3] = [quantidade3, preco3];

  let divResposta = document.getElementById("form-resposta");

  let resposta = "<table> <tr> <th> Nome do Produto </th> <th> Quantidade em estoque </th> <th> Preço unitário </th> </tr>";

  // RESOLUÇÃO DA PRIMEIRA QUESTÃO: TABELA DOS PRODUTOS
  for(let produto in matrizProdutos){
    resposta += "<tr> <td>" + produto + "</td> <td>" + matrizProdutos[produto][0] + "</td> <td>" + matrizProdutos[produto][1] + "</td> </tr>";
  }
  resposta += "</table>";

  // RESOLUÇÃO DA SEGUNDA QUESTÃO: VALOR TOTAL DE VENDA
  let quantidadeProdutos = 0;
  let valorUnitario = 0;
  let lucroProduto = 0;
  let lucroTotal = 0;
  for (let produto in matrizProdutos){
    quantidadeProdutos = parseInt(matrizProdutos[produto][0]);
    valorUnitario = parseFloat(matrizProdutos[produto][1]);

    lucroProduto = quantidadeProdutos * valorUnitario;

    lucroTotal += lucroProduto;
  }

  lucroTotal = lucroTotal.toLocaleString("pt-BR", {
    minimumFractionDigits : 2,
    maximumFractionDigits : 2
  })

  // RESOLUÇÃO DA TERCEIRA QUESTÃO: PRODUTO MAIS BARATO CADASTRADO
  let nomeProdutoMaisBarato = "";
  let valorProdutoMaisBarato = 1000000;
  let valorProduto = 0; 
  for (let produto in matrizProdutos){
    valorProduto = parseFloat(matrizProdutos[produto][1]);
    if (valorProduto < valorProdutoMaisBarato){
      valorProdutoMaisBarato = valorProduto
      nomeProdutoMaisBarato = produto;
    }
  }

  resposta += "<ol>"
  resposta += "<li> Lucro somado dos produtos da tabela: <span>R$" + lucroTotal + "</span> </li>";
  resposta += "<li> Nome do produto mais barato: <span>" + nomeProdutoMaisBarato + "</span> </li> </ol>";

  divResposta.innerHTML = resposta;
}

let botao = document.getElementById("button");
botao.addEventListener("click", criarLista);