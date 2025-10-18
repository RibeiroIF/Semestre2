<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="https://rwnobrega.page/_assets/ifsc-logo.png">
   <link rel="stylesheet" href="questao3.css">
   <title> Questão 3 - Lista 4 (Programação Web I) </title>
</head>
<body>
   <header>
      <h1> Questão 3 - Lista 4 (Programação Web) </h1>
   </header>

   <div class="corpo">
      <div class="enunciado">
         <h2 style="text-align: center;"> Enunciado da Questão 3 </h2>
         <p> Criar um formulário que receba um número qualquer. Este valor representa uma temperatura (Celsius/Fahrenheit). Em seguida, dispor dois botôes de rádio para o usuário decidir a conversão: </p>
         <ol>
            <li> Criar um script que irá receber o valor fornecido e descobrir qual escala de conversão será utilizada </li>
            <li> A escala de conversão de Celsius para Fahrenheit deverá ser feita por uma função específica </li>
            <li> A escala de conversão de Fahrenheit para Celsius também deverá ser feita por uma função específica </li>
         </ol>
      </div>
      <div class="formulario">
         <div class="formulario-texto">
            <form action="questao3.php" method="post" id="form3">
               <fieldset>
                  <legend> Conversor de Temperatura </legend>
                  <label class="alinha"> Temperatura: </label>
                  <input type="number" name="temperatura"> <br>
                  <input type="radio" name="celsius">
                  <label class="alinha"> Converter para Celsius </label>
                  <input type="radio" name="fahrenheit">
                  <label class="alinha"> Converter para Fahrenheit </label>
               </fieldset>
               <button form="form3" type="submit" class="button" name="submit_form3"> Converter temperatura </button>
            </form>
         </div>
         <div class="formulario-resposta">
            <h2> Resultado do formulário </h2>
            <?php
            function paraFahrenheit($temperatura){
               $temperaturaFinal = ($temperatura * 1.8) + 32;
               return $temperaturaFinal;
            }
            function paraCelsius($temperatura){
               $temperaturaFinal = 5/9 * ($temperatura - 32);
               return $temperaturaFinal;
            }

            if(isset($_POST['submit_form3'])){
               $temperatura = $_POST['temperatura'];
               $temperaturaFinal = 0;

               if(isset($_POST['celsius'])){
                  $temperaturaFinal = paraCelsius($temperatura);
                  echo "<p> A temperatura final é de <span> $temperaturaFinal °C </span> </p>";
               }
               else if(isset($_POST['fahrenheit'])){
                  $temperaturaFinal = paraFahrenheit($temperatura);
                  echo "<p> A temperatura final é de <span> $temperaturaFinal F° </span> </p>";
               }
               else{
                  die("<p> Nenhuma opção de conversão foi escolhida. Operação Finalizada </p>");
               }
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