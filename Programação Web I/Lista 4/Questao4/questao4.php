<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="https://rwnobrega.page/_assets/ifsc-logo.png">
   <link rel="stylesheet" href="questao4.css">
   <title> Questão 4 - Lista 4 (Programação Web I) </title>
</head>
<body>
   <header>
      <h1> Questão 4 - Lista 4 (Programação Web) </h1>
   </header>

   <div class="corpo">
      <div class="enunciado">
         <h2 style="text-align: center;"> Enunciado da Questão 4 </h2>
         <p> Criar um formulário para auxiliar funcionários de venda de um empreendimento comercial, sendo fornecidos os seguintes dados </p>
         <ul>
            <li> Valor da venda inicial </li>
            <li> Percentual de comissão do vendedor </li>
            <li> 5% de desconto ao cliente caso tenha comprado com cartão </li>
         </ul>
         <p> Em seguida, o script deverá: </p>
         <ol>
            <li> Calcular o valor da comissão do vendedor; </li>
            <li> Calcular o valor do desconto oferecido ao cliente </li>
            <li> Calcular o valor final da venda, levando em consideração o desconto (deverá ser usada uma função) </li>
            <li> Mostrar na página web as seguintes informações 
               <ul>
                  <li> Valor inicial da venda: </li>
                  <li> Percentual de comissão do vendedor </li>
                  <li> Valor da comissão do vendedor </li>
                  <li> Valor do desconto dado ao cliente caso tenha pago com cartão </li>
                  <li> Valor final da compra paga pelo cliente </li>
               </ul>
            </li>
         </ol>
      </div>
      <div class="formulario">
         <div class="formulario-texto">
            <form action="questao4.php" method="post" id="form4">
               <fieldset>
                  <legend> Titulação do Formulário </legend>
                  <label class="alinha"> Valor inicial da venda: </label>
                  <input type="number" name="venda"> <br>
                  <label class="alinha"> Percentual de comissão do vendedor: </label>
                  <input type="number" name="comissao" min="0" max="100"> <br>
                  <input type="checkbox" name="cartao">
                  <label class="alinha"> Pagou com cartão fidelidade </label>
               </fieldset>
               <button form="form4" type="submit" class="button" name="submit_form4"> Calcular Venda </button>
            </form>
         </div>
         <div class="formulario-resposta">
            <h2> Resultado do formulário </h2>
            <?php
            function calculoComissao($vendaInicial, $comissaoPercentual){
               $comissaoValor = $vendaInicial * ($comissaoPercentual/100);
               return $comissaoValor;
            }

            function calculoDesconto($vendaInicial){
               if(isset($_POST["cartao"])){
                  $valorDesconto = $vendaInicial * DESCONTO;
               }
               else{
                  $valorDesconto = 0;
               }
               return $valorDesconto;
            }

            function calculoVendaFinal($vendaInicial, $valorDescontoCliente){
               if(isset($_POST['cartao'])){
                  $valorDescontoCliente = $vendaInicial * DESCONTO;
               }
               else{
                  $valorDescontoCliente = 0;
               }
               $valorFinalVenda = $vendaInicial - $valorDescontoCliente;
               return $valorFinalVenda;
            }

            if(isset($_POST["submit_form4"])){
               $vendaInicial = $_POST["venda"];
               $comissaoPercentual = $_POST["comissao"];
               $valorDescontoCliente = 0;
               define("DESCONTO", 5/100);

               $vendaInicialFormatado = number_format($vendaInicial, 2, ".", ",");

               $valorComissao = calculoComissao($vendaInicial, $comissaoPercentual);
               $valorComissaoFormatado = number_format($valorComissao,2, ".",",");

               $valorDescontoCliente = calculoDesconto($vendaInicial);
               $valorDescontoClienteFormatado = number_format($valorDescontoCliente,2, ".",",");

               $valorTotalVenda = calculoVendaFinal($vendaInicial, $valorDescontoCliente);
               $valorTotalVendaFormatado = number_format($valorTotalVenda,2, ".",",");

               echo "<p> O valor inicial da venda foi de <span> R$$vendaInicialFormatado </span> </p>";
               echo "<p> O percentual de comissão do vendedor foi de <span> $comissaoPercentual% </span> </p>";
               echo "<p> O valor da comissão do vendedor foi de <span> R$$valorComissaoFormatado </span> </p>";
               echo "<p> O valor do desconto recebido pelo cliente foi de: <span> R$$valorDescontoClienteFormatado </span> </p>";
               echo "<p> Por fim, o valor final da compra realizada foi de: <span> R$$valorTotalVendaFormatado </span> </p>";
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