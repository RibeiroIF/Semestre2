<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="https://rwnobrega.page/_assets/ifsc-logo.png">
   <link rel="stylesheet" href="questao5.css">
   <title> Questão 5 - Lista 4 (Programação Web I) </title>
</head>
<body>
   <header>
      <h1> Questão 5 - Lista 4 (Programação Web) </h1>
   </header>

   <div class="corpo">
      <div class="enunciado">
         <h2 style="text-align: center;"> Enunciado da Questão 5 </h2>
         <p> Criar um formulário que permita ao usuário inserir as duas notas de um aluno. Em seguida, o script PHP deverá receber estes dados e: </p>
         <ol>
            <li> Calcular a média aritmética das notas por meio de uma função </li>
            <li> Mostrar a média do aluno e se ele está aprovado ou não usando também uma função (média = 6.0) </li>
            <li> Ambas as funções devem estar em um include </li>
         </ol>
      </div>
      <div class="formulario">
         <div class="formulario-texto">
            <form action="questao5.php" method="post" id="form5">
               <fieldset>
                  <legend> Cálculo da média Semestral de PRW1 </legend>
                  <label class="alinha"> Nota 1: </label>
                  <input type="number" name="nota1" min="0" max="10" step="0.1"> <br>
                  <label class="alinha"> Nota 2: </label>
                  <input type="number" name="nota2" min="0" max="10" step="0.1">
               </fieldset>
               <button form="form5" type="submit" class="button" name="submit_form5"> Calcular Média </button>
            </form>
         </div>
         <div class="formulario-resposta">
            <h2> Resultado do formulário </h2>
            <?php include 'questao5-externo.php'; ?>
         </div>
      </div>
   </div>

   <footer>
      <h3> Aluno: Gabriel Ribeiro de Souza </h3>
   </footer>
</body>
</html>