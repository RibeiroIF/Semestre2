<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="https://rwnobrega.page/_assets/ifsc-logo.png">
   <link rel="stylesheet" href="questao7.css">
   <title> Questão 7 - Lista 4 (Programação Web I) </title>
</head>
<body>
   <header>
      <h1> Questão 7 - Lista 4 (Programação Web) </h1>
   </header>

   <div class="corpo">
      <div class="enunciado">
         <h2 style="text-align: center;"> Enunciado da Questão X </h2>
         <p> Criar um formulário que receba um número qualquer. Este valor representa uma temperatura (Celsius/Fahrenheit). Em seguida, dispor dois botôes de rádio para o usuário decidir a conversão: </p>
         <ol>
            <li> Criar um script que irá receber o valor fornecido e descobrir qual escala de conversão será utilizada </li>
            <li> A escala de conversão de Celsius para Fahrenheit deverá ser feita por uma função específica </li>
            <li> A escala de conversão de Fahrenheit para Celsius também deverá ser feita por uma função específica </li>
            <li> Ambas as funções devem estar em um include </li>
         </ol>
      </div>
      <div class="formulario">
         <div class="formulario-texto">
            <form action="questao7.php" method="post" id="form7">
               <fieldset>
                  <legend> Conversor de Temperatura </legend>
                  <label class="alinha"> Temperatura: </label>
                  <input type="number" name="temperatura"> <br>
                  <input type="radio" name="celsius">
                  <label class="alinha"> Converter para Celsius </label>
                  <input type="radio" name="fahrenheit">
                  <label class="alinha"> Converter para Fahrenheit </label>
               </fieldset>
               <button form="form7" type="submit" class="button" name="submit_form7"> Converter Temperatura </button>
            </form>
         </div>
         <div class="formulario-resposta">
            <h2> Resultado do formulário </h2>
            <?php include "questao7-externo.php" ?>
         </div>
      </div>
   </div>

   <footer>
      <h3> Aluno: Gabriel Ribeiro de Souza </h3>
   </footer>
</body>
</html>