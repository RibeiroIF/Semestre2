<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="https://rwnobrega.page/_assets/ifsc-logo.png">
   <link rel="stylesheet" href="moldeCSS.css">
   <title> Questão 1 - Lista 4 (Programação Web I) </title>
</head>
<body>
   <header>
      <h1> Questão 1 - Lista 4 (Programação Web) </h1>
   </header>

   <div class="corpo">
      <div class="enunciado">
         <h2 style="text-align: center;"> Enunciado da Questão X </h2>
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
                  <legend> Titulação do Formulário </legend>
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
            
            ?>
         </div>
      </div>
   </div>

   <footer>
      <h3> Aluno: Gabriel Ribeiro de Souza </h3>
   </footer>
</body>
</html>