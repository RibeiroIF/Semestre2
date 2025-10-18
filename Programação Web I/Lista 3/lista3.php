<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://rwnobrega.page/_assets/ifsc-logo.png">
    <link rel="stylesheet" href="lista3.css">
    <title>Lista 3 - Programação Web I</title>
</head>
<body>
   <header>
        <h2> Lista 3 - Programação Web </h2>
    </header>

    <h4 id="cabecalho"> Acesso aos formulários da Lista 3 - Programação Web I </h4>
    <div class="wraper">
         <!-- Questão 1: Cadastre no sistema os dados: Nome do aluno; Número de Matrícula; Média Final
          Mostre:
          a) Armazenar em uma matriz, a matrícula é o índice associativo
          b) Mostrar os 3 dados em formato tabular -->
        <div class="questao">
         <h2> Questao 1 </h2>
         <form action="lista3.php" method="post" id="form1">
            <fieldset>
               <legend> Informações do primeiro aluno: </legend>
               <label for="matricula1"> Matrícula: </label>
               <input type="text" name="matricula1"><br>
               <label for="nome1"> Nome: </label>
               <input type="text" name="nome1"><br>
               <label for="media1"> Média Final: </label>
               <input type="number" name="media1" min="0" max="10" step="0.1"><br>
            </fieldset>
            <fieldset>
               <legend> Informações do segundo aluno: </legend>
               <label for="matricula2"> Matrícula: </label>
               <input type="text" name="matricula2"><br>
               <label for="nome2"> Nome: </label>
               <input type="text" name="nome2"><br>
               <label for="media2"> Média Final: </label>
               <input type="number" name="media2" min="0" max="10" step="0.1"><br>
            </fieldset>
            <fieldset>
               <legend> Informações do terceiro aluno: </legend>
               <label for="matricula3"> Matrícula: </label>
               <input type="text" name="matricula3"><br>
               <label for="nome3"> Nome: </label>
               <input type="text" name="nome3"><br>
               <label for="media3"> Média Final: </label>
               <input type="number" name="media3" min="0" max="10" step="0.1"><br>
            </fieldset>
         </form>
         <button form="form1" type="submit" class="button" name="submit_form1"> Enviar </button>
        </div>
         <!--Questão 2: Mesma questão que a 1, mas ao invés de mostrar a tabela, mostrar a média geral dos alunos cadastrados -->
        <div class="questao">
         <h2> Questao 2 </h2>
         <form action="lista3.php" method="post" id="form2">
            <fieldset>
               <legend> Informações do primeiro aluno: </legend>
               <label for="matricula1"> Matrícula: </label>
               <input type="text" name="matricula1"><br>
               <label for="nome1"> Nome: </label>
               <input type="text" name="nome1"><br>
               <label for="media1"> Média Final: </label>
               <input type="number" name="media1" min="0" max="10" step="0.1"><br>
            </fieldset>
            <fieldset>
               <legend> Informações do segundo aluno: </legend>
               <label for="matricula2"> Matrícula: </label>
               <input type="text" name="matricula2"><br>
               <label for="nome2"> Nome: </label>
               <input type="text" name="nome2"><br>
               <label for="media2"> Média Final: </label>
               <input type="number" name="media2" min="0" max="10" step="0.1"><br>
            </fieldset>
            <fieldset>
               <legend> Informações do terceiro aluno: </legend>
               <label for="matricula3"> Matrícula: </label>
               <input type="text" name="matricula3"><br>
               <label for="nome3"> Nome: </label>
               <input type="text" name="nome3"><br>
               <label for="media3"> Média Final: </label>
               <input type="number" name="media3" min="0" max="10" step="0.1"><br>
            </fieldset>
         </form>
         <button form="form2" type="submit" class="button" name="submit_form2"> Enviar </button>
        </div> 
         <!-- Questão 3: Mesma questão que a 1, porém dessa vez mostrar todos os dados do aluno com a MAIOR MÉDIA entre os cadastrados -->      
        <div class="questao">
         <h2> Questao 3 </h2>
         <form action="lista3.php" method="post" id="form3">
            <fieldset>
               <legend> Informações do primeiro aluno: </legend>
               <label for="matricula1"> Matrícula: </label>
               <input type="text" name="matricula1"><br>
               <label for="nome1"> Nome: </label>
               <input type="text" name="nome1"><br>
               <label for="media1"> Média Final: </label>
               <input type="number" name="media1" min="0" max="10" step="0.1"><br>
            </fieldset>
            <fieldset>
               <legend> Informações do segundo aluno: </legend>
               <label for="matricula2"> Matrícula: </label>
               <input type="text" name="matricula2"><br>
               <label for="nome2"> Nome: </label>
               <input type="text" name="nome2"><br>
               <label for="media2"> Média Final: </label>
               <input type="number" name="media2" min="0" max="10" step="0.1"><br>
            </fieldset>
            <fieldset>
               <legend> Informações do terceiro aluno: </legend>
               <label for="matricula3"> Matrícula: </label>
               <input type="text" name="matricula3"><br>
               <label for="nome3"> Nome: </label>
               <input type="text" name="nome3"><br>
               <label for="media3"> Média Final: </label>
               <input type="number" name="media3" min="0" max="10" step="0.1"><br>
            </fieldset>
         </form>
         <button form="form3" type="submit" class="button" name="submit_form3"> Enviar </button>
        </div> 
         <!-- Questão 4: Mesma questão que a 1, porém agora deverá ter uma aba de pesquisa pelo nome de um aluno qualquer, encontrando o nome dele na matriz já salva -->
        <div class="questao">
         <h2> Questao 4 </h2>
         <form action="lista3.php" method="post" id="form4">
            <fieldset>
               <legend> Informações do primeiro aluno: </legend>
               <label for="matricula1"> Matrícula: </label>
               <input type="text" name="matricula1"><br>
               <label for="nome1"> Nome: </label>
               <input type="text" name="nome1"><br>
               <label for="media1"> Média Final: </label>
               <input type="number" name="media1" min="0" max="10" step="0.1"><br>
            </fieldset>
            <fieldset>
               <legend> Informações do segundo aluno: </legend>
               <label for="matricula2"> Matrícula: </label>
               <input type="text" name="matricula2"><br>
               <label for="nome2"> Nome: </label>
               <input type="text" name="nome2"><br>
               <label for="media2"> Média Final: </label>
               <input type="number" name="media2" min="0" max="10" step="0.1"><br>
            </fieldset>
            <fieldset>
               <legend> Informações do terceiro aluno: </legend>
               <label for="matricula3"> Matrícula: </label>
               <input type="text" name="matricula3"><br>
               <label for="nome3"> Nome: </label>
               <input type="text" name="nome3"><br>
               <label for="media3"> Média Final: </label>
               <input type="number" name="media3" min="0" max="10" step="0.1"><br>
            </fieldset>
            <fieldset>
               <legend> Pesquisa por aluno : </legend>
               <label for="pesquisa"> Insira o nome do aluno que deseja pesquisar: </label>
               <input type="text" name="pesquisa">
            </fieldset>
         </form>
         <button form="form4" type="submit" class="button" name="submit_form4"> Pesquisar </button>
        </div>  
         <!-- Questão 5: Mesma que a 4, porém pesquisando pela matrícula do aluno -->
        <div class="questao">
         <h2> Questao 5 </h2>
         <form action="lista3.php" method="post" id="form5">
            <fieldset>
               <legend> Informações do primeiro aluno: </legend>
               <label for="matricula1"> Matrícula: </label>
               <input type="text" name="matricula1"><br>
               <label for="nome1"> Nome: </label>
               <input type="text" name="nome1"><br>
               <label for="media1"> Média Final: </label>
               <input type="number" name="media1" min="0" max="10" step="0.1"><br>
            </fieldset>
            <fieldset>
               <legend> Informações do segundo aluno: </legend>
               <label for="matricula2"> Matrícula: </label>
               <input type="text" name="matricula2"><br>
               <label for="nome2"> Nome: </label>
               <input type="text" name="nome2"><br>
               <label for="media2"> Média Final: </label>
               <input type="number" name="media2" min="0" max="10" step="0.1"><br>
            </fieldset>
            <fieldset>
               <legend> Informações do terceiro aluno: </legend>
               <label for="matricula3"> Matrícula: </label>
               <input type="text" name="matricula3"><br>
               <label for="nome3"> Nome: </label>
               <input type="text" name="nome3"><br>
               <label for="media3"> Média Final: </label>
               <input type="number" name="media3" min="0" max="10" step="0.1"><br>
            </fieldset>
            <fieldset>
               <legend> Pesquisa por matrícula: </legend>
               <label for="pesquisa"> Insira a matrícula do aluno que deseja pesquisar: </label>
               <input type="text" name="pesquisa">
            </fieldset>
         </form>
         <button form="form5" type="submit" class="button" name="submit_form5"> Enviar </button>
        </div> 
         <!-- Questão 6: -->
        <div class="questao">
         <h2> Questao 6 </h2>
         <form action="lista3.php" method="post" id="form6">
            <fieldset>
               <legend> Informações do primeiro aluno: </legend>
               <label for="matricula1"> Matrícula: </label>
               <input type="text" name="matricula1"><br>
               <label for="nome1"> Nome: </label>
               <input type="text" name="nome1"><br>
               <label for="media1"> Média Final: </label>
               <input type="number" name="media1" min="0" max="10" step="0.1"><br>
            </fieldset>
            <fieldset>
               <legend> Informações do segundo aluno: </legend>
               <label for="matricula2"> Matrícula: </label>
               <input type="text" name="matricula2"><br>
               <label for="nome2"> Nome: </label>
               <input type="text" name="nome2"><br>
               <label for="media2"> Média Final: </label>
               <input type="number" name="media2" min="0" max="10" step="0.1"><br>
            </fieldset>
            <fieldset>
               <legend> Informações do terceiro aluno: </legend>
               <label for="matricula3"> Matrícula: </label>
               <input type="text" name="matricula3"><br>
               <label for="nome3"> Nome: </label>
               <input type="text" name="nome3"><br>
               <label for="media3"> Média Final: </label>
               <input type="number" name="media3" min="0" max="10" step="0.1"><br>
            </fieldset>
         </form>
         <button form="form6" type="submit" class="button" name="submit_form6"> Enviar </button>
        </div>
    </div>

    <div class="amostra">
      <div>
      <h3 style="margin-bottom: -3%;"> Resultado do Formulário </h3>
      <?php
      if(isset($_POST['submit_form1'])){
      // ESPAÇO PARA A QUESTÃO 1, MOSTRAR EM FORMATO TABULAR
      $aluno1 = $_POST['nome1'];
      $aluno2 = $_POST['nome2'];
      $aluno3 = $_POST['nome3'];

      $matricula1 = $_POST['matricula1'];
      $matricula2 = $_POST['matricula2'];
      $matricula3 = $_POST['matricula3'];

      $media1 = $_POST['media1'];
      $media2 = $_POST['media2'];
      $media3 = $_POST['media3'];

      $matrizAlunos = [$matricula1 => [$aluno1, $media1], 
                       $matricula2 => [$aluno2, $media2], 
                       $matricula3 => [$aluno3, $media3]];

      echo "<table>
            <caption> Rendimento semestral do aluno de Programação Web I </caption>
            <tr>
               <th> Matrícula do aluno </th>
               <th> Nome do aluno </th>
               <th> Média de PRW1 do aluno <th>
            </tr>";

      foreach($matrizAlunos as $matricula => $vetorInterno){
         echo "<tr>
               <td> $matricula </td>
               <td> $vetorInterno[0]</td>
               <td> $vetorInterno[1]</td>
               </tr>";
         }
         echo "</table>";
      }
      if(isset($_POST['submit_form2'])){
      // ESPAÇO PARA A QUESTÃO 2, MOSTRAR A MÉDIA GERAL DOS ALUNOS
      $aluno1 = $_POST['nome1'];
      $aluno2 = $_POST['nome2'];
      $aluno3 = $_POST['nome3'];

      $matricula1 = $_POST['matricula1'];
      $matricula2 = $_POST['matricula2'];
      $matricula3 = $_POST['matricula3'];

      $media1 = $_POST['media1'];
      $media2 = $_POST['media2'];
      $media3 = $_POST['media3'];

      $matrizAlunos = [$matricula1 => [$aluno1, $media1], 
                       $matricula2 => [$aluno2, $media2], 
                       $matricula3 => [$aluno3, $media3]];

      foreach($matrizAlunos as $matricula => $vetorInterno){
         $vetorAuxiliar[] = $vetorInterno[1];
      }
      $mediaGeralNotas = array_sum($vetorAuxiliar)/count($vetorAuxiliar);
      $mediaGeralNotasFormatado = number_format($mediaGeralNotas, 2, ",", ".");

      echo "<p> A média geral das notas da turma é de <span> $mediaGeralNotasFormatado </span> </p>";

      }
      if(isset($_POST['submit_form3'])){
      // ESPAÇO PARA A QUESTÃO 3, MOSTRAR TODOS OS DADOS DO ALUNO COM A MAIOR MÉDIA
      $aluno1 = $_POST['nome1'];
      $aluno2 = $_POST['nome2'];
      $aluno3 = $_POST['nome3'];

      $matricula1 = $_POST['matricula1'];
      $matricula2 = $_POST['matricula2'];
      $matricula3 = $_POST['matricula3'];

      $media1 = $_POST['media1'];
      $media2 = $_POST['media2'];
      $media3 = $_POST['media3'];

      $matrizAlunos = [$matricula1 => [$aluno1, $media1], 
                       $matricula2 => [$aluno2, $media2], 
                       $matricula3 => [$aluno3, $media3]];

      foreach($matrizAlunos as $matricula => $vetorInterno){
         $vetorAuxiliar[$matricula] = $vetorInterno[1];
      }

      $melhorNota = max($vetorAuxiliar);
      $melhorNotaFormatada = number_format($melhorNota, 2, ",", ".");

      $matriculaMelhorNota = array_search($melhorNota, $vetorAuxiliar);
      $alunoMelhorNota = $matrizAlunos[$matriculaMelhorNota][0];

      echo "<p> Resultado do processamento de dados na matriz: <br>
            Maior nota = <span> $melhorNotaFormatada </span> <br>
            Matrícula do aluno com maior nota = <span> $matriculaMelhorNota </span> <br>
            Nome do aluno com maior nota = <span> $alunoMelhorNota </span> </p>";
      }
      if(isset($_POST['submit_form4'])){
      // ESPAÇO PARA A QUESTÃO 4, PESQUISAR PELO NOME DE UM ALUNO PRESENTE NA MATRIZ
      $aluno1 = $_POST["nome1"];
      $aluno2 = $_POST["nome2"];
      $aluno3 = $_POST["nome3"];

      $matric1 = $_POST["matricula1"];
      $matric2 = $_POST["matricula2"];
      $matric3 = $_POST["matricula3"];

      $media1 = $_POST["media1"];
      $media2 = $_POST["media2"];
      $media3 = $_POST["media3"];

      $matrizAlunos = [$matricula1 => [$aluno1, $media1],
                       $matricula2 => [$aluno2, $media2],
                       $matricula3 => [$aluno3, $media3]];

      $alunoPesquisado = $_POST['pesquisa'];

      foreach($matrizAlunos as $matricula => $vetorInterno)
         {
         $vetorAuxiliar[$matricula] = $vetorInterno[0];
         }
      $matriculaEncontrada = array_search($alunoPesquisado, $vetorAuxiliar);

      if(!$matriculaEncontrada)
         { 
         die("<p> Caro usuário, o aluno pesquisado, de nome <span> $alunoPesquisado, </span> não foi encontrado na matriz de alunos. Aplicação encerrada! </p>");
         }

      $mediaProcurada = $matrizAlunos[$matriculaEncontrada][1];

      echo "<p> Resultados da busca do aluno na matriz: <br>
            Aluno procurado = <span> $alunoPesquisado </span> <br>
            Matrícula deste aluno = <span> $matriculaEncontrada </span> <br>
            Média de PRW1 = <span> $mediaProcurada </span> </p>"; 
      }

      if(isset($_POST['submit_form5'])){
      // ESPAÇO PARA A QUESTÃO 5, PESQUISAR PELA MATRÍCULA DE UM ALUNO PRESENTE NA MATRIZ
      $aluno1 = $_POST["nome1"];
      $aluno2 = $_POST["nome2"];
      $aluno3 = $_POST["nome3"];

      $matric1 = $_POST["matricula1"];
      $matric2 = $_POST["matricula2"];
      $matric3 = $_POST["matricula3"];

      $media1 = $_POST["media1"];
      $media2 = $_POST["media2"];
      $media3 = $_POST["media3"];

      $matrizAlunos = [$matricula1 => [$aluno1, $media1],
                       $matricula2 => [$aluno2, $media2],
                       $matricula3 => [$aluno3, $media3]];

      $matriculaPesquisada = $_POST['pesquisa'];
      $encontrou = array_key_exists($matriculaPesquisada, $matrizAlunos);

      if($encontrou){ 
         $aluno = $matrizAlunos[$matriculaPesquisada][0];
         $media = $matrizAlunos[$matriculaPesquisada][1];
         echo "<p> Resultados da busca da matrícula do aluno na matriz: <br>
                   Matrícula procurada = <span> $matriculaPesquisada </span> <br>
                   Nome deste aluno = <span> $aluno </span> <br>
                   Média de PRW1 = <span> $media </span> </p>"; 
         }
      else{
         echo "<p> Caro usuário, o aluno pesquisado, de matrícula <span> $matriculaPesquisada, </span> não foi encontrado na matriz de alunos. Aplicação encerrada! </p>";
         }
      }
      if(isset($_POST['submit_form6'])){
      // ESPAÇO PARA A QUESTÃO 6, ORGANIZAR EM FORMATO TABULAR ORDEM DESCRESCENTE
      $aluno1 = $_POST['nome1'];
      $aluno2 = $_POST['nome2'];
      $aluno3 = $_POST['nome3'];

      $matricula1 = $_POST['matricula1'];
      $matricula2 = $_POST['matricula2'];
      $matricula3 = $_POST['matricula3'];

      $media1 = $_POST['media1'];
      $media2 = $_POST['media2'];
      $media3 = $_POST['media3'];

      $matrizAlunos = [$matricula1 => [$aluno1, $media1], 
                       $matricula2 => [$aluno2, $media2], 
                       $matricula3 => [$aluno3, $media3]];
      
      foreach($matrizAlunos as $matricula => $vetorInterno){
         $vetorAuxiliar[$matricula] = $vetorInterno[1];
      }
      arsort($vetorAuxiliar);

      echo "<table>
            <caption> Rendimento semestral do aluno de Programação Web I </caption>
            <tr>
               <th> Matrícula do aluno </th>
               <th> Nome do aluno </th>
               <th> Média de PRW1 do aluno <th>
            </tr>";

         foreach($vetorAuxiliar as $matricula => $mediaPRW1){
         $aluno = $matrizAlunos[$matricula][0];
         echo "<tr>
               <td> $matricula </td>
               <td> $aluno</td>
               <td> $mediaPRW1</td>
               </tr>";
         }
         echo "</table>";
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