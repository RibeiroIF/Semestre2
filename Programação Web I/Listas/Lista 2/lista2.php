<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://rwnobrega.page/_assets/ifsc-logo.png">
    <link rel="stylesheet" href="lista2.css">
    <title>Lista 2 - Programação Web I</title>
</head>
<body>
   <script src="lista2.js"></script>
   <header>
        <h2> Lista 2 - Programação Web </h2>
    </header>

    <h4 id="cabecalho"> Acesso aos formulários da Lista 2 - Programação Web I </h4>
    <div class="wraper">
         <!-- Questão 1: Pegar uma nota de 3 alunos:
         a) Armazenar as notas em vetor de índice numérico
         b) Calcular a média -->
        <div class="questao">
         <h2> Questao 1 </h2>
         <form action="lista2.php" method="post" id="form1">
            <fieldset>
               <legend> Nota do Aluno 1: </legend>
               <label for="nota1"> Insira a nota do aluno 1: </label><br>
               <input type="number" name="nota1" min="0" max="10" step="0.1">
            </fieldset>
            <fieldset>
               <legend> Nota do Aluno 2: </legend>
               <label for="nota2"> Insira a nota do aluno 1: </label><br>
               <input type="number" name="nota2" min="0" max="10" step="0.1">
            </fieldset>
            <fieldset>
               <legend> Nota do Aluno 3: </legend>
               <label for="nota3"> Insira a nota do aluno 3: </label><br>
               <input type="number" name="nota3" min="0" max="10" step="0.1">
            </fieldset>
         </form>
         <button form="form1" type="submit" class="button" name="submit_form1"> Enviar </button>
        </div>
         <!--Questão 2: Pegar uma nota de 3 alunos: 
         a) Armazenar em um índice com o nome do aluno 
         b) Mostrar, em formato tabular, os dados de cada aluno
         c) Mostrar o nome e a nota do aluno com a maior nota -->
        <div class="questao">
         <h2> Questao 2 </h2>
         <form action="lista2.php" method="post" id="form2">
            <fieldset>
               <legend> Aluno 1: </legend>
               <label for="nome1"> Insira o nome do primeiro aluno: </label>
               <input type="text" name="nome1"><br><br>
               <label for="nota1"> Insira a nota do primeiro aluno: </label>
               <input type="number" name="nota1" min="0" max="10" step="0.1">
            </fieldset>
            <fieldset>
               <legend> Aluno 2: </legend>
               <label for="nome2"> Insira o nome do segundo aluno: </label>
               <input type="text" name="nome2"><br><br>
               <label for="nota2"> Insira a nota do segundo aluno: </label>
               <input type="number" name="nota2" min="0" max="10" step="0.1">
            </fieldset>
            <fieldset>
               <legend> Aluno 3: </legend>
               <label for="nome3"> Insira o nome do terceiro aluno: </label>
               <input type="text" name="nome3"><br><br>
               <label for="nota3"> Insira a nota do terceiro aluno: </label>
               <input type="number" name="nota3" min="0" max="10" step="0.1">
            </fieldset>
         </form>
         <button form="form2" type="submit" class="button" name="submit_form2"> Enviar </button>
        </div> 
         <!-- Questão 3: Mesma questão da 2, só que deverá ordenar o vetor de forma descrescente-->      
        <div class="questao">
         <h2> Questao 3 </h2>
         <form action="lista2.php" method="post" id="form3">
            <fieldset>
               <legend> Aluno 1: </legend>
               <label for="nome1"> Insira o nome do primeiro aluno: </label>
               <input type="text" name="nome1"><br><br>
               <label for="nota1"> Insira a nota do primeiro aluno: </label>
               <input type="number" name="nota1" min="0" max="10" step="0.1">
            </fieldset>
            <fieldset>
               <legend> Aluno 2: </legend>
               <label for="nome2"> Insira o nome do segundo aluno: </label>
               <input type="text" name="nome2"><br><br>
               <label for="nota2"> Insira a nota do segundo aluno: </label>
               <input type="number" name="nota2" min="0" max="10" step="0.1">
            </fieldset>
            <fieldset>
               <legend> Aluno 3: </legend>
               <label for="nome3"> Insira o nome do terceiro aluno: </label>
               <input type="text" name="nome3"><br><br>
               <label for="nota3"> Insira a nota do terceiro aluno: </label>
               <input type="number" name="nota3" min="0" max="10" step="0.1">
            </fieldset>
         </form>
         <button form="form3" type="submit" class="button" name="submit_form3"> Enviar </button>
        </div> 
         <!-- Questão 4: Simulação de carrinho de compras com checkboxes e valores associados (máximo 3 produtos)-->
        <div class="questao">
         <h2> Questao 4 </h2>
         <form action="lista2.php" method="post" id="form4">
            <fieldset>
               <legend> Mercados Itamaratinga </legend>
               <label for="nome"> Qual o seu nome?: </label>
               <input type="text" name="nome"><br>
               <h4> Preencha seu carrinho (máximo 3 produtos): </h4>
               <input type="checkbox" name="produtos[]" class="produto" value="Amaciante" onclick="return limiteCompra1()">
               <label for="produtos[]"> Amaciante </label>
               <input type="checkbox" name="produtos[]" class="produto" value="Creme de Leite" onclick="return limiteCompra1()">
               <label for="produtos[]"> Creme de Leite </label>
               <input type="checkbox" name="produtos[]" class="produto" value="Desodorante" onclick="return limiteCompra1()">
               <label for="produtos[]"> Desodorante </label><br><br>
               <input type="checkbox" name="produtos[]" class="produto" value="Iogurte" onclick="return limiteCompra1()">
               <label for="produtos[]"> Iogurte 1L </label>
               <input type="checkbox" name="produtos[]" class="produto" value="Pasta de Amendoim" onclick="return limiteCompra1()">
               <label for="produtos[]"> Pasta de Amendoim </label>
               <input type="checkbox" name="produtos[]" class="produto" value="Molho de Tomate" onclick="return limiteCompra1()">
               <label for="produtos[]"> Molho de Tomate </label><br>
               <h4 id="invalido1"></h4>
            </fieldset>
         </form>
         <button form="form4" type="submit" class="button" name="submit_form4"> Enviar </button>
        </div>  
         <!-- Questão 5: Vetor recebendo 3 idades e mostrando a média das 3 -->
        <div class="questao">
         <h2> Questao 5 </h2>
         <form action="lista2.php" method="post" id="form5">
            <fieldset>
               <legend> Idade 1 </legend>
               <label for="idade1"> Insira a primeira idade: </label>
               <input type="number" name="idade1"><br>
            </fieldset>
            <fieldset>
               <legend> Idade 2 </legend>
               <label for="idade2"> Insira a segunda idade: </label>
               <input type="number" name="idade2"><br>
            </fieldset>
            <fieldset>
               <legend> Idade 3 </legend>
               <label for="idade3"> Insira a terceira idade: </label>
               <input type="number" name="idade3"><br>
            </fieldset>
         </form>
         <button form="form5" type="submit" class="button" name="submit_form5"> Enviar </button>
        </div> 
         <!-- Questão 6: Pegar idade de 3 pessoas
         a) Armazenar em um índice com nome de cada pessoa
         b) Mostrar, em formato tabular, as idades 
         c) Mostrar o nome e a idade da pessoa mais nova -->
        <div class="questao">
         <h2> Questao 6 </h2>
         <form action="lista2.php" method="post" id="form6">
            <fieldset>
               <legend> Idade 1 </legend>
               <label for="nome1"> Insira o seu nome: </label>
               <input type="text" name="nome1"><br><br>
               <label for="idade1"> Insira a sua idade: </label>
               <input type="number" name="idade1"><br>
            </fieldset>
            <fieldset>
               <legend> Idade 2 </legend>
               <label for="nome1"> Insira o seu nome: </label>
               <input type="text" name="nome2"><br><br>
               <label for="idade2"> Insira a sua idade: </label>
               <input type="number" name="idade2"><br>
            </fieldset>
            <fieldset>
               <legend> Idade 3 </legend>
               <label for="nome1"> Insira o seu nome: </label>
               <input type="text" name="nome3"><br><br>
               <label for="idade3"> Insira a sua idade: </label>
               <input type="number" name="idade3"><br>
            </fieldset>
         </form>
         <button form="form6" type="submit" class="button" name="submit_form6"> Enviar </button>
        </div>
         <!-- Questão 7: Igual a 6, porém apenas organizar os nomes em ordem alfabética -->
        <div class="questao">
         <h2> Questao 7 </h2>
         <form action="lista2.php" method="post" id="form7">
            <fieldset>
               <legend> Idade 1 </legend>
               <label for="nome1"> Insira o seu nome: </label>
               <input type="text" name="nome1"><br><br>
               <label for="idade1"> Insira a sua idade: </label>
               <input type="number" name="idade1"><br>
            </fieldset>
            <fieldset>
               <legend> Idade 2 </legend>
               <label for="nome2"> Insira o seu nome: </label>
               <input type="text" name="nome2"><br><br>
               <label for="idade2"> Insira a sua idade: </label>
               <input type="number" name="idade2"><br>
            </fieldset>
            <fieldset>
               <legend> Idade 3 </legend>
               <label for="nome3"> Insira o seu nome: </label>
               <input type="text" name="nome3"><br><br>
               <label for="idade3"> Insira a sua idade: </label>
               <input type="number" name="idade3"><br>
            </fieldset>
         </form>
         <button form="form7" type="submit" class="button" name="submit_form7"> Enviar </button>
        </div>
        <!-- Questão 8: Igual a 4, porém em uma farmácia com medicamentos. Criar um checkbox para caso o cliente tenha mais de 60 anos (desconto de 5%)-->
        <div class="questao">
         <h2> Questao 8 </h2>
         <form action="lista2.php" method="post" id="form8">
            <fieldset>
               <legend> Farmácias Ibirajara </legend>
               <label for="nome"> Qual o seu nome?: </label>
               <input type="text" name="nome"><br>
               <h4> Preencha seu carrinho (máximo 3 produtos): </h4>
               <input type="checkbox" name="remedios[]" class="remedio" value="Dipirona" onclick="return limiteCompra2()">
               <label for="remedios[]"> Dipirona 1g </label>
               <input type="checkbox" name="remedios[]" class="remedio" value="Prednisona" onclick="return limiteCompra2()">
               <label for="remedios[]"> Prednisona </label>
               <input type="checkbox" name="remedios[]" class="remedio" value="Malvatricin" onclick="return limiteCompra2()">
               <label for="remedios[]"> Malvatricin Spray </label><br><br>
               <input type="checkbox" name="remedios[]" class="remedio" value="Salompas" onclick="return limiteCompra2()">
               <label for="remedios[]"> Salompas Adesivo </label>
               <input type="checkbox" name="remedios[]" class="remedio" value="Advil" onclick="return limiteCompra2()">
               <label for="remedios[]"> Advil </label>
               <input type="checkbox" name="remedios[]" class="remedio" value="Xarope Seki" onclick="return limiteCompra2()">
               <label for="remedios[]"> Xarope Seki </label><br>
               <h4 id="invalido2"></h4>
               <h4> Você possui mais de 60 anos?: </h4>
               <input type="checkbox" name="idadecheck">
               <label for="idadecheck"> Possuo mais de 60 anos </label>
            </fieldset>
         </form>
         <button form="form8" type="submit" class="button" name="submit_form8"> Enviar </button>
        </div>
        <!-- Questão 9: Igual a 8, porém compra de alimentos (máximo 4) e o desconto agora é com cartão fidelidade-->
        <div class="questao">
         <h2> Questao 9 </h2>
         <form action="lista2.php" method="post" id="form9">
            <fieldset>
               <legend> Farmácias Ibirajara </legend>
               <label for="nome"> Qual o seu nome?: </label>
               <input type="text" name="nome"><br>
               <h4> Preencha seu carrinho (máximo 4 produtos): </h4>
               <input type="checkbox" name="alimentos[]" class="alimento" value="Bolo de Fubá" onclick="return limiteCompra3()">
               <label for="alimentos[]"> Bolo de Fubá </label>
               <input type="checkbox" name="alimentos[]" class="alimento" value="Pão fatiado Integral" onclick="return limiteCompra3()">
               <label for="alimentos[]"> Pão fatiado Integral </label>
               <input type="checkbox" name="alimentos[]" class="alimento" value="Queijo Parmesão" onclick="return limiteCompra3()">
               <label for="alimentos[]"> Queijo Parmesão </label><br><br>
               <input type="checkbox" name="alimentos[]" class="alimento" value="Melado" onclick="return limiteCompra3()">
               <label for="alimentos[]"> Melado 300g </label>
               <input type="checkbox" name="alimentos[]" class="alimento" value="Paçoca" onclick="return limiteCompra3()">
               <label for="alimentos[]"> Paçoca 100g </label>
               <input type="checkbox" name="alimentos[]" class="alimento" value="Kiwi" onclick="return limiteCompra3()">
               <label for="alimentos[]"> Kiwi unidade </label><br><br>
               <input type="checkbox" name="alimentos[]" class="alimento" value="Barra de Cereal" onclick="return limiteCompra3()">
               <label for="alimentos[]"> Barra de Cereal </label>
               <input type="checkbox" name="alimentos[]" class="alimento" value="Suco de Caju" onclick="return limiteCompra3()">
               <label for="alimentos[]"> Suco de Caju 800ml </label><br>
               <h4 id="invalido3"></h4>
               <h4> Você possui cartão fidelidade?: </h4>
               <input type="checkbox" name="cartaocheck">
               <label for="cartaocheck"> Sim, possuo </label>
            </fieldset>
         </form>
         <button form="form9" type="submit" class="button" name="submit_form9"> Enviar </button>
        </div>
    </div>

    <div class="amostra">
      <div>
      <h3 style="margin-bottom: -3%;"> Resultado do Formulário </h3>
      <?php
      if(isset($_POST['submit_form1'])){
         //CÓDIGO PARA A QUESTÃO 1
         $nota1 = $_POST['nota1'];
         $nota2 = $_POST['nota2'];
         $nota3 = $_POST['nota3'];

         $vetorNotas = [$nota1, $nota2, $nota3];
         $mediaNotas = array_sum($vetorNotas)/count($vetorNotas);
         $mediaNotasFormatada = number_format($mediaNotas, 2, ",", ".");
         echo "<p> <h4 style='margin-bottom: -1%;'> Formulário 1 </h4>
         Resultado do processamento da média das notas: <br>
         Nota 1: <span> $nota1 </span> <br>
         Nota 2: <span> $nota2 </span> <br>
         Nota 3: <span> $nota3 </span> <br>
         Média das notas: <span> $mediaNotasFormatada </span>
         </p>";
      }
      if(isset($_POST['submit_form2'])){
         //CÓDIGO PARA A QUESTÃO 2
         $aluno1 = $_POST['nome1'];
         $nota1 = $_POST['nota1'];
         $aluno2 = $_POST['nome2'];
         $nota2 = $_POST['nota2'];
         $aluno3 = $_POST['nome3'];
         $nota3 = $_POST['nota3'];

         $vetorNotas = [$aluno1 => $nota1, $aluno2 => $nota2, $aluno3 => $nota3];
         
         // BUSCANDO A MAIOR NOTA E O NOME DO ALUNO COM A MAIOR NOTA 
         $maiorNota = max($vetorNotas);
         $maiorNotaAluno = array_search($maiorNota, $vetorNotas);

         echo "<table>
               <h4 style='margin-bottom: -7%;'> Formulário 2 </h4>
               <caption> Rendimento Semestral do Aluno de Programação Web I </caption>
               <br>
                  <tr>
                     <th> Nome do aluno: </th>
                     <th> Nota do aluno: </th>
                  </tr>";

            foreach($vetorNotas as $aluno => $nota){
               echo "<tr>
                        <td> $aluno </td>
                        <td> $nota </td>
                     </tr>";
            }
            echo "</table>";

            echo "<p> Resultado da busca on vetor: <br>
                  Aluno com maior nota cadastrada = <span> $maiorNotaAluno </span> <br>
                  Nota deste aluno = <span> $maiorNota </span> </p>";

      }
      if(isset($_POST['submit_form3'])){
         //CÓDIGO PARA A QUESTÃO 3
         $aluno1 = $_POST['nome1'];
         $nota1 = $_POST['nota1'];
         $aluno2 = $_POST['nome2'];
         $nota2 = $_POST['nota2'];
         $aluno3 = $_POST['nome3'];
         $nota3 = $_POST['nota3'];

         $vetorNotas = [$aluno1 => $nota1, $aluno2 => $nota2, $aluno3 => $nota3];
         arsort($vetorNotas);

         echo "<table>
               <h4 style='margin-bottom: -7%;'> Formulário 3 </h4>
               <caption> Rendimento Semestral do Aluno de Programação Web I (em ordem descrescente) </caption>
                  <tr>
                     <th> Nome do aluno: </th>
                     <th> Nota do aluno: </th>
                  </tr>";

            foreach($vetorNotas as $aluno => $nota){
               echo "<tr>
                        <td> $aluno </td>
                        <td> $nota </td>
                     </tr>";
            }
            echo "</table>";
      }
      if(isset($_POST['submit_form4'])){
         //CÓDIGO PARA A QUESTÃO 4
         //PRODUTOS: AMACIANTE, CREME DE LEITE, DESODORANTE, IOGURTE, PASTA DE AMENDOIM, MOLHO DE TOMATE
         $nomeComprador = $_POST['nome'];
         $vetorPrecos4 = ["Amaciante" => 27, 
                          "Creme de Leite" => 8, 
                          "Desodorante" => 14, 
                          "Iogurte" => 11, 
                          "Pasta de Amendoim" => 17, 
                          "Molho de Tomate" => 9];

         $valorTotalCompra4 = 0;

         if(!isset($_POST['produtos'])){
            die("<p> Caro(a) $nomeComprador, você não adquiriu nenhum produto da nossa loja virtual e portanto o valor total de sua compra é de <span> R$0,00 </span> </p>");
         }
         
         $produtosComprados = $_POST['produtos'];
         foreach($produtosComprados as $produto){
            $valorTotalCompra4 += $vetorPrecos4[$produto];
         }

         $valorCompraFormatado4 = number_format($valorTotalCompra4, 2, ",", ".");

         echo "<p> Caro usuário, de acordo com os produtos adquiridos, o valor final da sua compra é de <span> R$$valorCompraFormatado4 </span> <br> <br> 
         Confira, abaixo, a lista de produtos comprados <br> <ul>";

         foreach($produtosComprados as $produto){
            echo "<li> $produto </li>";
         }
         echo "</ul> </p>";
      }
      if(isset($_POST['submit_form5'])){
         //CÓDIGO PARA A QUESTÃO 5
         $idade1 = $_POST['idade1'];
         $idade2 = $_POST['idade2'];
         $idade3 = $_POST['idade3'];

         $vetorIdades = [$idade1, $idade2, $idade3];
         $mediaIdades = array_sum($vetorIdades)/count($vetorIdades);
         $mediaIdadesFormatada = number_format($mediaIdades, 2, ",", ".");
         echo "<p> <h4 style='margin-bottom: -1%;'> Formulário 5 </h4>
         Resultado do processamento da média das idades: <br>
         Idade 1: <span> $idade1 </span> <br>
         Idade 2: <span> $idade2 </span> <br>
         Idade 3: <span> $idade3 </span> <br>
         Média das idades: <span> $mediaIdadesFormatada </span>
         </p>";
      }
      if(isset($_POST['submit_form6'])){
         //CÓDIGO PARA A QUESTÃO 6
         $pessoa1 = $_POST['nome1'];
         $idade1 = $_POST['idade1'];
         $pessoa2 = $_POST['nome2'];
         $idade2 = $_POST['idade2'];
         $pessoa3 = $_POST['nome3'];
         $idade3 = $_POST['idade3'];

         $vetorIdades = [$pessoa1 => $idade1, $pessoa2 => $idade2, $pessoa3 => $idade3];
         
         $menorIdade = min($vetorIdades);
         $menorIdadeNome = array_search($menorIdade, $vetorIdades);
         
         echo "<table>
               <h4 style='margin-bottom: -7%;'> Formulário 6 </h4>
               <caption> Elencamento da Idade dos Entrevistados </caption>
               <br>
                  <tr>
                     <th> Nome do entrevistado: </th>
                     <th> Idade do entrevistado: </th>
                  </tr>";

            foreach($vetorIdades as $pessoa => $idade){
               echo "<tr>
                        <td> $pessoa </td>
                        <td> $idade </td>
                     </tr>";
            }
            echo "</table>";

            echo "<p> Resultado da busca no vetor: <br>
                  Nome da pessoa mais nova = <span> $menorIdadeNome </span> <br>
                  Idade desta pessoa = <span> $menorIdade </span> </p>";
      }
      if(isset($_POST['submit_form7'])){
         //CÓDIGO PARA A QUESTÃO 7
         $pessoa1 = $_POST['nome1'];
         $idade1 = $_POST['idade1'];
         $pessoa2 = $_POST['nome2'];
         $idade2 = $_POST['idade2'];
         $pessoa3 = $_POST['nome3'];
         $idade3 = $_POST['idade3'];

         $vetorIdades = [$pessoa1 => $idade1, $pessoa2 => $idade2, $pessoa3 => $idade3];
         ksort($vetorIdades);
         
         $maiorIdade = max($vetorIdades);
         $maiorIdadeNome = array_search($maiorIdade, $vetorIdades);
         
         echo "<table>
               <h4 style='margin-bottom: -7%;'> Formulário 7 </h4>
               <caption> Elencamento da Idade dos Entrevistados (ordem alfabética) </caption>
               <br>
                  <tr>
                     <th> Nome do entrevistado: </th>
                     <th> Idade do entrevistado: </th>
                  </tr>";

            foreach($vetorIdades as $pessoa => $idade){
               echo "<tr>
                        <td> $pessoa </td>
                        <td> $idade </td>
                     </tr>";
            }
            echo "</table>";

      }
      if(isset($_POST['submit_form8'])){
         //CÓDIGO PARA A QUESTÃO 8
         //PRODUTOS: DIPIRONA, PREDNISONA, MALVATRICIN, SALOMPAS, ADVIL, XAROPE SEKI
         define ("DESCONTO", 5/100);
         $nomeComprador = $_POST['nome'];
         $vetorPrecos8 = ["Dipirona" => 10, 
                          "Prednisona" => 22, 
                          "Malvatricin" => 15, 
                          "Salompas" => 13, 
                          "Advil" => 16, 
                          "Xarope Seki" => 27];
         
         $valorTotalCompra8 = 0;
         if(!isset($_POST['remedios'])){
            die("<p> Caro(a) $nomeComprador, você não adquiriu nenhum produto da nossa farmácia virtual e portanto o valor total de sua compra é de <span> R$0,00 </span> </p>");
         }
         $remediosComprados = $_POST['remedios'];
         foreach($remediosComprados as $remedio){
            $valorTotalCompra8 += $vetorPrecos8[$remedio];
         }

         $valorDesconto8 = $valorTotalCompra8 * DESCONTO;
         if(isset($_POST['idadecheck'])){
            $valorFinalCompra8 = $valorTotalCompra8 - $valorDesconto8;
         }
         else {
            $valorFinalCompra8 = $valorTotalCompra8;
         }

         $valorCompraFormatado8 = number_format($valorFinalCompra8, 2, ",", ".");

         echo "<p> Caro usuário, de acordo com os remédios adquiridos, o valor final da sua compra é de <span> R$$valorCompraFormatado8 </span> <br> <br> 
         Confira, abaixo, a lista de remédios comprados <br> <ul class='listaAlinha'>";

         foreach($remediosComprados as $remedio){
            echo "<li> $remedio </li>";
         }
         echo "</ul> </p>";
      }
      if(isset($_POST['submit_form9'])){
         //CÓDIGO PARA A QUESTÃO 9
         //PRODUTOS: BOLO DE FUBÁ, PÃO FATIADO INTEGRAL, QUEIJO PARMESÃO, MELADO, PAÇOCA, KIWI, BARRA DE CEREAL, SUCO DE CAJU
         define("FIDELIDADE", 5/100);
         $nomeComprador = $_POST['nome'];
         $vetorPrecos9 = ["Bolo de Fubá" => 12, 
                          "Pão Fatiado Integral" => 18, 
                          "Queijo Parmesão" => 8, 
                          "Melado" => 15, 
                          "Paçoca" => 10, 
                          "Kiwi" => 6,
                          "Barra de Cereal" => 13,
                          "Suco de Caju" => 17];
            
         $valorTotalCompra9 = 0;
         if(!isset($_POST['alimentos'])){
            die("<p> Caro(a) $nomeComprador, você não adquiriu nenhum produto do nosso mercado virtual e portanto o valor total de sua compra é de <span> R$0,00 </span> </p>");
         }
         $alimentosComprados = $_POST['alimentos'];
         foreach($alimentosComprados as $alimento){
            $valorTotalCompra9 += $vetorPrecos9[$alimento];
         }

         $valorDesconto9 = $valorTotalCompra9 * FIDELIDADE;
         if(isset($_POST['cartaocheck'])){
            $valorFinalCompra9 = $valorTotalCompra9 - $valorDesconto9;
         }
         else {
            $valorFinalCompra9 = $valorTotalCompra9;
         }

         $valorCompraFormatado9 = number_format($valorFinalCompra9, 2, ",", ".");

         echo "<p> Caro usuário, de acordo com os alimentos adquiridos, o valor final da sua compra é de <span> R$$valorCompraFormatado9 </span> <br> <br> 
         Confira, abaixo, a lista de alimentos comprados <br> <ul>";

         foreach($alimentosComprados as $alimento){
            echo "<li> $alimento </li>";
         }
         echo "</ul> </p>";
      }
      ?>
      </div>
    </div>

    <footer>
        <h3> Aluno: Gabriel Ribeiro de Souza <br>
        Whatsapp para contato: <a href="https://wa.me/5548996658244"><img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="Ícone do Whats" style="width:28px;height:28px;"></a> </h3>
    </footer>
</body>
</html>