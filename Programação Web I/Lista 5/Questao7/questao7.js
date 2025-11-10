function criarLista(){

  let isbn1 = document.getElementById("isbn1").value;
  let isbn2 = document.getElementById("isbn2").value;
  let isbn3 = document.getElementById("isbn3").value;

  let livro1 = document.getElementById("livro1").value;
  let livro2 = document.getElementById("livro2").value;
  let livro3 = document.getElementById("livro3").value;

  let preco1 = parseFloat(document.getElementById("preco1").value);
  let preco2 = parseFloat(document.getElementById("preco2").value);
  let preco3 = parseFloat(document.getElementById("preco3").value);

  let volume1 = parseInt(document.getElementById("volume1").value);
  let volume2 = parseInt(document.getElementById("volume2").value);
  let volume3 = parseInt(document.getElementById("volume3").value);

  let biblioteca = [];

  biblioteca[isbn1] = [livro1, preco1, volume1];
  biblioteca[isbn2] = [livro2, preco2, volume2];
  biblioteca[isbn3] = [livro3, preco3, volume3];

  let divResposta = document.getElementById("form-resposta");

  let resposta = "<table> <caption> Lista de livros da Biblioteca </caption> <tr> <th> ISBN do Livro </th> <th> Nome do Livro </th> <th> Preço Unitário </th> <th> Volumes Disponíveis </th> </tr>";

  // RESOLUÇÃO DA PRIMEIRA QUESTÃO: CRIAR TABELA DA BIBLIOTECA
  for(let livro in biblioteca){

   // FORMATAÇÃO DO VALOR DE CADA UNIDADE DE CADA LIVRO PARA A TABELA
   precoLivroAtual = biblioteca[livro][1];
   precoLivroAtual = precoLivroAtual.toLocaleString("pt-BR", {
      style: "currency",
      currency: "BRL",
      minimumFractionDigits: 2,
      maximumFractionDigits: 2
   })

    resposta += "<tr> <td>" +livro+ "</td> <td>" +biblioteca[livro][0]+ "</td> <td>" +precoLivroAtual+ "</td> <td>" +biblioteca[livro][2]+ "</td> </tr>"
  }

  resposta += "</table>";

  // RESOLUÇÃO DA SEGUNDA QUESTÃO: SOMAR O LUCRO CASO SEJAM VENDIDOS OS LIVROS COM MAIS DE 10 VOLUMES DISPONÍVEIS
  let valorLivro = 0;
  let volumesLivro = 0;
  let lucroLivro = 0;
  let lucroTotal = 0;

  for(let livro in biblioteca){
    valorLivro = parseFloat(biblioteca[livro][1]);
    volumesLivro = parseInt(biblioteca[livro][2]);
    if(volumesLivro > 10){
      lucroLivro = valorLivro * volumesLivro;
      lucroTotal += lucroLivro;
    }
  }

  // RESOLUÇÃO DA TERCEIRA QUESTÃO, MOSTRANDO OS DADOS DO LIVRO MAIS CARO
  let isbnLivroMaisCaro = "";
  let nomeLivroMaisCaro = "";
  let valorLivroMaisCaro = 0;
  let volumesLivroMaisCaro = 0;

  let valorComparativo = 0;
  for(let livro in biblioteca){
    valorComparativo = parseFloat(biblioteca[livro][1]);
    if(valorComparativo > valorLivroMaisCaro){
      isbnLivroMaisCaro = livro;
      nomeLivroMaisCaro = biblioteca[livro][0];
      valorLivroMaisCaro = valorComparativo;
      volumesLivroMaisCaro = biblioteca[livro][2];
    }
  }

  // FORMATAÇÃO DO VALOR DO LUCRO TOTAL DE VENDAS
  lucroTotal = lucroTotal.toLocaleString("pt-BR", {
   style: "currency",
   currency: "BRL",
   minimumFractionDigits: 2,
   maximumFractionDigits: 2
  })
  // FORMATAÇÃO DO VALOR DO LIVRO MAIS CARO
  valorLivroMaisCaro = valorLivroMaisCaro.toLocaleString("pt-BR", {
   style: "currency",
   currency: "BRL",
   minimumFractionDigits: 2,
   maximumFractionDigits: 2
  });

  resposta += "<ul>"
  resposta += "<li> Total de lucro da venda dos livros que possuem mais de 10 volumes: <span>" +lucroTotal+ "</span> </li>";
  resposta += "<li> Informações do livro mais caro: ";
  resposta += "<ol>";
  resposta += "<li> ISBN: <span>" +isbnLivroMaisCaro+ "</span> </li>";
  resposta += "<li> Nome: <span>" +nomeLivroMaisCaro+ "</span> </li>";
  resposta += "<li> Preço por unidade: <span>"+valorLivroMaisCaro+ "</span> </li>";
  resposta += "<li> Volumes disponíveis: <span>" +volumesLivroMaisCaro+ "</span> </li> </ol> </li>";

  divResposta.innerHTML = resposta;
}

let botao = document.getElementById("button");
botao.addEventListener("click", criarLista);