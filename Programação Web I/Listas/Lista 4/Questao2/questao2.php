<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="https://rwnobrega.page/_assets/ifsc-logo.png">
   <link rel="stylesheet" href="questao2.css">
   <title> Questão 2 - Lista 4 (Programação Web I) </title>
</head>
<body>
   <header>
      <h1> Questão 2 - Lista 4 (Programação Web) </h1>
   </header>

   <div class="corpo">
      <div class="enunciado">
         <h2 style="text-align: center;"> Enunciado da Questão 2 </h2>
         <p> Criar um formulário em que o usuário fornece uma certa idade. Em seguida, o script deve: </p>
         <ol>
            <li> Testar se o dado fornecido é valido usando uma função de usuário; </li>
            <li> Verificar se a pessoa da idade inserida está apta a votar, validação feita por outra função de usuário </li>
         </ol>
      </div>
      <div class="formulario">
         <div class="formulario-texto">
            <form action="questao2.php" method="post" id="form2">
               <fieldset>
                  <legend> Conferência de Idade </legend>
                  <label class="alinha"> Idade: </label>
                  <input type="number" name="idade" min="0" max="120">
               </fieldset>
               <button form="form2" type="submit" class="button" name="submit_form2"> Verificar idade </button>
            </form>
         </div>
         <div class="formulario-resposta">
            <h2> Resultado do formulário </h2>
            <?php
            function testeNumero($idade){
               if(is_numeric($idade) == true){
                  echo "<p> A idade <span> $idade </span> é uma idade válida </p>";
               }
               else{
                  die("<p> A idade inserida não é uma idade válida. Operação encerrada </p>");
               }
            }
            function podeVotar($idade){
               if($idade >= 16){
                  echo "<p> E também já está apto a votar </p> ";
               }
               else{
                  echo "<p> Porém infelizmente ainda não está apto a votar!! </p> ";
               }
            }

            if(isset($_POST['submit_form2'])){
               $idade = $_POST['idade'];

               testeNumero($idade);
               podeVotar($idade);
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