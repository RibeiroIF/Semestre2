<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="https://rwnobrega.page/_assets/ifsc-logo.png">
   <link rel="stylesheet" href="questao6.css">
   <title> Questão 6 - Lista 4 (Programação Web I) </title>
</head>
<body>
   <header>
      <h1> Questão 6 - Lista 4 (Programação Web) </h1>
   </header>

   <div class="corpo">
      <div class="enunciado">
         <h2 style="text-align: center;"> Enunciado da Questão 6 </h2>
         <p> Criar um formulário em que o usuário fornece uma certa idade. Em seguida, o script deve:: </p>
         <ol>
            <li> Testar se o dado fornecido é valido usando uma função de usuário </li>
            <li> Verificar se a pessoa da idade inserida está apta a votar, validação feita por outra função de usuário </li>
            <li> Ambas as funções devem estar em um include </li>
         </ol>
      </div>
      <div class="formulario">
         <div class="formulario-texto">
            <form action="questao6.php" method="post" id="form6">
               <fieldset>
                  <legend> Conferência de Idade </legend>
                  <label class="alinha"> Idade: </label>
                  <input type="number" name="idade" min="0" max="120">
               </fieldset>
               <button form="form6" type="submit" class="button" name="submit_form6"> Confirmar </button>
            </form>
         </div>
         <div class="formulario-resposta">
            <h2> Resultado do formulário </h2>
            <?php include "questao6-externo.php" ?>
         </div>
      </div>
   </div>

   <footer>
      <h3> Aluno: Gabriel Ribeiro de Souza </h3>
   </footer>
</body>
</html>