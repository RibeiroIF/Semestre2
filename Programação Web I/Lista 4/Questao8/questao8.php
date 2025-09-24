<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="https://rwnobrega.page/_assets/ifsc-logo.png">
   <link rel="stylesheet" href="questao8.css">
   <title> Questão 8 - Lista 4 (Programação Web I) </title>
</head>
<body>
   <header>
      <h1> Questão 8 - Lista 4 (Programação Web) </h1>
   </header>

   <div class="corpo">
      <div class="enunciado">
         <h2 style="text-align: center;"> Enunciado da Questão 8 </h2>
         <p> Elabore um formulário que permita ao usuário fornecer 3 notas de um aluno. Ele também deve selecionar se fará o cálculo da Média Aritmética Simples ou da Média Ponderada, isso através de botões de rádio. A seguir: </p>
         <ol>
            <li> Criar um script que receba as 3 notas do aluno </li>
            <li> O script deverá testar qual média o usuário quer calcular </li>
            <li> Se for selecionada a Média Simples, deverá calcular através de uma função </li>
            <li> Se for selecionada a Média Ponderada também deverá ter seu cálculo feito através de uma função </li>
            <li> Ao final da aplicação, deverão ser mostradas as 3 notas e sua respectiva média </li>
            <li> Todas essas funções devem estar em um include </li>
         </ol>
      </div>
      <div class="formulario">
         <div class="formulario-texto">
            <form action="questao8.php" method="post" id="form8">
               <fieldset>
                  <legend> Cálculo do Boletim </legend>
                  <label class="alinha"> Nota 1: </label>
                  <input type="number" name="nota1" min="0" max="10" step="0.1"> <br>
                  <label class="alinha"> Nota 2: </label>
                  <input type="number" name="nota2" min="0" max="10" step="0.1"> <br>
                  <label class="alinha"> Nota 3: </label>
                  <input type="number" name="nota3" min="0" max="10" step="0.1"> <br>
                  <input type="radio" name="mediasimples">
                  <label class="alinha"> Calcular Média Simples </label>
                  <input type="radio" name="mediaponderada">
                  <label class="alinha"> Calcular Média Ponderada </label>
               </fieldset>
               <button form="form8" type="submit" class="button" name="submit_form8"> Confirmar </button>
            </form>
         </div>
         <div class="formulario-resposta">
            <h2> Resultado do formulário </h2>
            <?php include "questao8-externo.php" ?>
         </div>
      </div>
   </div>

   <footer>
      <h3> Aluno: Gabriel Ribeiro de Souza </h3>
   </footer>
</body>
</html>