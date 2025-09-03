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
               <label for="name"> Qual o seu nome?: </label>
               <input type="text" name="name"><br>
               <h4> Preencha seu carrinho (máximo 3 produtos): </h4>
               <input type="checkbox" name="compra" class="produto" onclick="return limiteCompra1()">
               <label for="compra"> Amaciante </label>
               <input type="checkbox" name="compra" class="produto" onclick="return limiteCompra1()">
               <label for="compra"> Creme de Leite </label>
               <input type="checkbox" name="compra" class="produto" onclick="return limiteCompra1()">
               <label for="compra"> Desodorante </label><br><br>
               <input type="checkbox" name="compra" class="produto" onclick="return limiteCompra1()">
               <label for="compra"> Iogurte 1L </label>
               <input type="checkbox" name="compra" class="produto" onclick="return limiteCompra1()">
               <label for="compra"> Pasta de Amendoim </label>
               <input type="checkbox" name="compra" class="produto" onclick="return limiteCompra1()">
               <label for="compra"> Molho de Tomate </label><br>
               <h4 id="invalido1"></h4>
            </fieldset>
         </form>
         <button form="form4" type="submit" class="button" name="submit_form4"> Enviar </button>
        </div>  
         <!-- Questão 5: Vetor recebendo 3 idades e mostrando a média das 3 -->
        <div class="questao">
         <h2> Questao 5 </h2>
         <form action="lista2.php" method="get" id="form5">
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
         <form action="lista2.php" method="get" id="form6">
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
               <input type="text" name="nome1"><br><br>
               <label for="idade2"> Insira a sua idade: </label>
               <input type="number" name="idade2"><br>
            </fieldset>
            <fieldset>
               <legend> Idade 3 </legend>
               <label for="nome1"> Insira o seu nome: </label>
               <input type="text" name="nome1"><br><br>
               <label for="idade3"> Insira a sua idade: </label>
               <input type="number" name="idade3"><br>
            </fieldset>
         </form>
         <button form="form6" type="submit" class="button" name="submit_form6"> Enviar </button>
        </div>
         <!-- Questão 7: Igual a 6, porém apenas organizar os nomes em ordem alfabética -->
        <div class="questao">
         <h2> Questao 7 </h2>
         <form action="lista2.php" method="get" id="form7">
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
               <input type="text" name="nome1"><br><br>
               <label for="idade2"> Insira a sua idade: </label>
               <input type="number" name="idade2"><br>
            </fieldset>
            <fieldset>
               <legend> Idade 3 </legend>
               <label for="nome1"> Insira o seu nome: </label>
               <input type="text" name="nome1"><br><br>
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
               <label for="name"> Qual o seu nome?: </label>
               <input type="text" name="name"><br>
               <h4> Preencha seu carrinho (máximo 3 produtos): </h4>
               <input type="checkbox" name="compra" class="remedio" onclick="return limiteCompra2()">
               <label for="compra"> Dipirona 1g </label>
               <input type="checkbox" name="compra" class="remedio" onclick="return limiteCompra2()">
               <label for="compra"> Prednisona </label>
               <input type="checkbox" name="compra" class="remedio" onclick="return limiteCompra2()">
               <label for="compra"> Malvatricin Spray </label><br><br>
               <input type="checkbox" name="compra" class="remedio" onclick="return limiteCompra2()">
               <label for="compra"> Salompas Adesivo </label>
               <input type="checkbox" name="compra" class="remedio" onclick="return limiteCompra2()">
               <label for="compra"> Advil </label>
               <input type="checkbox" name="compra" class="remedio" onclick="return limiteCompra2()">
               <label for="compra"> Xarope Seki </label><br>
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
         <form action="lista2.php" method="post" id="form8">
            <fieldset>
               <legend> Farmácias Ibirajara </legend>
               <label for="name"> Qual o seu nome?: </label>
               <input type="text" name="name"><br>
               <h4> Preencha seu carrinho (máximo 4 produtos): </h4>
               <input type="checkbox" name="compra" class="alimento" onclick="return limiteCompra3()">
               <label for="compra"> Bolo de Fubá </label>
               <input type="checkbox" name="compra" class="alimento" onclick="return limiteCompra3()">
               <label for="compra"> Pão fatiado Integral </label>
               <input type="checkbox" name="compra" class="alimento" onclick="return limiteCompra3()">
               <label for="compra"> Queijo Parmesão </label><br><br>
               <input type="checkbox" name="compra" class="alimento" onclick="return limiteCompra3()">
               <label for="compra"> Melado 300g </label>
               <input type="checkbox" name="compra" class="alimento" onclick="return limiteCompra3()">
               <label for="compra"> Paçoca 100g </label>
               <input type="checkbox" name="compra" class="alimento" onclick="return limiteCompra3()">
               <label for="compra"> Kiwi unidade </label><br><br>
               <input type="checkbox" name="compra" class="alimento" onclick="return limiteCompra3()">
               <label for="compra"> Barra de Cereal </label>
               <input type="checkbox" name="compra" class="alimento" onclick="return limiteCompra3()">
               <label for="compra"> Suco de Caju 800ml </label><br>
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
      <h3> Resultado do Formulário </h3>
      <?php
      if(isset($_POST['submit_form1'])){
         //CÓDIGO PARA A QUESTÃO 1
         $nota1 = $_POST['nota1'];
         $nota2 = $_POST['nota2'];
         $nota3 = $_POST['nota3'];

         $vetorNotas = [$nota1, $nota2, $nota3];
         $mediaNotas = array_sum($vetorNotas)/count($vetorNotas);
         $mediaNotasFormatada = number_format($mediaNotas, 2, ",", ".");
         echo "<p> <h3> Formulário 1 </h3>
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

         echo "<pre>";
         print_r($vetorNotas);
         echo "</pre>";

         echo "<table>
               <caption> Rendimento Semestral do Aluno de Programação Web I </caption>
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
      if(isset($_POST['submit_form3'])){
         //CÓDIGO PARA A QUESTÃO 3
         $aluno1 = $_POST['nome1'];
         $nota1 = $_POST['nota1'];
         $aluno2 = $_POST['nome2'];
         $nota2 = $_POST['nota2'];
         $aluno3 = $_POST['nome3'];
         $nota3 = $_POST['nota3'];

         $vetorNotas = [$aluno1 => $nota1, $aluno2 => $nota2, $aluno3 => $nota3];
         rsort($vetorNotas);

         echo "<pre>";
         print_r($vetorNotas);
         echo "</pre>";

         echo "<table>
               <caption> Rendimento Semestral do Aluno de Programação Web I </caption>
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
      }
      if(isset($_POST['submit_form5'])){
         //CÓDIGO PARA A QUESTÃO 5
      }
      if(isset($_POST['submit_form6'])){
         //CÓDIGO PARA A QUESTÃO 6
      }
      if(isset($_POST['submit_form7'])){
         //CÓDIGO PARA A QUESTÃO 7
      }
      if(isset($_POST['submit_form8'])){
         //CÓDIGO PARA A QUESTÃO 8
      }
      if(isset($_POST['submit_form9'])){
         //CÓDIGO PARA A QUESTÃO 9
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