<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="https://rwnobrega.page/_assets/ifsc-logo.png">
   <link rel="stylesheet" href="questao1.css">
   <title> Questão 1 - Lista 4 (Programação Web I) </title>
</head>
<body>
   <header>
      <h1> Questão 1 - Lista 4 (Programação Web) </h1>
   </header>

   <div class="corpo">
      <div class="enunciado">
         <h2 style="text-align: center;"> Enunciado da Questão 1 </h2>
         <p> Criar um formulário HTML5 que permita ao usuário da aplicação Web fornecer duas notas quaisquer para determinado aluno, juntamente com o seu nome. Em seguida, um script em PHP deverá receber estes valores e: </p>
         <ol>
            <li> Testar se a caixa para receber o nome não está vazia. Se sim, mostrar uma mensagem adequada e encerrar a aplicação. Esta operação deve estar dentro de uma função de usuário; </li>
            <li> Calcular a média aritmética simples do aluno. Esta operação deverá ser desenvolvida por meio de uma função de usuário </li>
            <li> Mostrar, na página Web, a respectiva média do aluno e se o mesmo está aprovado ou reprovado. Aprovado, caso a média seja 6,0 ou acima de 6,0. Reprovado, caso contrário. Esta operação deve estar em uma outra função de usuário </li>
         </ol>
      </div>
      <div class="formulario">
         <div class="formulario-texto">
            <form action="questao1.php" method="post" id="form1">
               <fieldset>
                  <legend> Cálculo da Média Final em PRW1 - CTDS </legend>
                  <label class="alinha"> Nome do Aluno: </label>
                  <input type="text" name="aluno"> <br>
                  <label class="alinha"> Nota 1: </label>
                  <input type="number" name="nota1" min="0" max="10" step="0.1"> <br>
                  <label class="alinha"> Nota 2: </label>
                  <input type="number" name="nota2" min="0" max="10" step="0.1">
               </fieldset>
               <button form="form1" type="submit" class="button" name="submit_form1"> Calcular Média </button>
            </form>
         </div>
         <div class="formulario-resposta">
            <h2> Resultado do formulário </h2>
            <?php
            function testarNome($nomeAluno){
               $nomeAluno = trim($nomeAluno);
               if(strlen($nomeAluno) == 0){
                  die ("<p> Nome de aluno inválido. Aplicação encerrada! </p>");
               }
            }
            function calculoMedia($nota1, $nota2){
               $mediaAluno = ($nota1 + $nota2)/2;
               return $mediaAluno;
            }

            function conferirAprovacao($media){
               if($media >= 6){
                  echo "<p> aluno<span> APROVADO</span>, com média <span> $media </span> </p>";
               }
               else{
                  echo "<p> aluno<span> REPROVADO</span>, com média <span> $media </span> </p>";
               }
            }

            if(isset($_POST['submit_form1'])){
               $nomeAluno = $_POST['aluno'];
               $nota1 = $_POST['nota1'];
               $nota2 = $_POST['nota2'];

               testarNome($nomeAluno);
               $media = calculoMedia($nota1, $nota2);
               conferirAprovacao($media);
            }
            ?>
         </div>
      </div>
   </div>

   <footer>
      <h3> Aluno: Gabriel Ribeiro de Souza </h3>
   </footer>
</body>
</html>