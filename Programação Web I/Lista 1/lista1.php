<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://rwnobrega.page/_assets/ifsc-logo.png">
    <link rel="stylesheet" href="lista1.css">
    <title>Lista 1 - Programação Web I</title>
</head>
<body>
    <header>
        <h2> Portfólio para Acesso às listas de Programação Web </h2>
</header>
    <h4 id="cabecalho"> Acesso a todos os formulários da Lista 1 - Programação Web </h4>
    <div class="wraper">
        <!-- Questão 1: Script que receba o nome e duas notas do aluno e calcule sua média
         Mensagem: "Caro aluno, de acordo com os dados fornecidos, sua média na unidade de 
         Programação Web I é de:"-->
        <div class="questao">
            <form action="lista1.php" method="post" id="form1">
                <fieldset>
                    <legend> Questão 1 - Lista 1 </legend>
                    <label for="aluno" class="alinha"> Insira o seu nome: </label>
                    <input type="text" name="aluno" placeholder="Nome aqui..."  id="aluno"><br><br>
                    <label for="nota1" class="alinha"> Qual a sua primeira nota: </label>
                    <input type="number" name="nota1" min="0" max="10" id="nota1"><br>
                    <label for="peso1" class="alinha"> E qual o peso desta nota 1: </label>
                    <input type="number" name="peso1" min="0" max="10" id="peso1"><br>
                    <label for="nota2" class="alinha"> Qual a sua segunda nota: </label>
                    <input type="number" name="nota2" min="0" max="10" id="nota2"><br>
                    <label for="peso2" class="alinha"> E qual o peso desta nota 2: </label>
                    <input type="number" name="peso2" min="0" max="10" id="peso2"><br>
                </fieldset>
                <input type="hidden" name="type" value="form1">
            </form>
            <button form="form1" type="submit" class="button" name="submit_form1"> Enviar </button>
        </div>
        <!-- Questão 2: Cálculo de quantos litros de gasolina irá gastar, pegar dados de:
         - distância em km
         - gasto em litro por km
         - preço da gasolina no posto 
         Depois:
         a) armazene e manipule o preço como constante
         b) faça com que o gasto seja mostrado ao usuário
         c) faça com que mostre quantos litros serão gastos
         d) faça com que mostre o preço pago pelo combustível-->
        <div class="questao">
            <form action="lista1.php" method="get" id="form2">
                <fieldset>
                    <legend> Questão 2 - Lista 1 </legend>
                    <label for="distancia"> Qual a distância da viagem em km: </label>
                    <input type="number" name="distancia" id="distancia"><br>
                    <label for="gasto"> Qual o gasto em litro por km do carro: </label>
                    <input type="number" name="gasto" id="gasto"><br>
                    <label for="valor"> E qual o valor da gasolina neste posto: </label>
                    <input type="number" name="valor" id="valor"><br>
                </fieldset>
                <input type="hidden" name="type" value="form2">
            </form>
            <button form="form2" type="submit" class="button" name="submit_form2"> Enviar </button>
        </div>
        <!-- Questão 3: Script para auxiliar funcionários de venda (método GET) para ver:
         - valor do desconto obtido pelo cliente (10% da compra)
         - valo do ICMS pago pela loja (12% da compra)
         - comissão do vendedor (5% da compra)-->
        <div class="questao">
            <form action="lista1.php" method="get" id="form3">
                <fieldset>
                    <legend> Questão 3 - Lista 1 </legend>
                    <label for="desconto"> Forneça o valor da compra do cliente em reais: </label>
                    <input type="number" name="valor_compra" min="0"><br>
                </fieldset>
            </form>
            <button form="form3" type="submit" class="button" name="submit_form3"> Enviar </button>
        </div>
        <!-- Questão 4: Script para receber a temperatura em Fahrenheit e converter para Celsius -->
        <div class="questao">
            <form action="lista1.php" method="post" id="form4">
                <fieldset>
                    <legend> Questão 4 - Lista 1 </legend>
                    <label for="tempF"> Qual a temperatura em Fahrenheit: </label>
                    <input type="number" name="tempF" id="tempF">
                </fieldset>
            </form>
            <button form="form4" type="submit" class="button" name="submit_form4"> Enviar </button>
        </div>
        <!-- Questão 5: Cliente realizando compras, recebe 5% desconto no cartão e cobram 2%
         da compra se for entrega. Usar radio buttons -->
        <div class="questao">
            <form action="lista1.php" method="post" id="form5">
                <fieldset>
                    <legend> Questão 5 - Lista 1</legend>
                    <label for="valor2"> Qual o valor da compra do cliente: </label>
                    <input type="number" name="valor" min="0" id="valor2"><br>
                    <label for="desconto"> Pagamento feito no cartão </label> <br>
                    <input type="radio" name="desconto" value="sim" id="desconto_sim"> 
                    <label for="desconto_sim"> Sim </label> <br>
                    <input type="radio" name="desconto" value="nao" id="desconto_nao">
                    <label for="desconto_nao"> Não </label> <br>
                    <label for="delivery"> Foi pedido delivery </label> <br>
                    <input type="radio" name="delivery" value="sim" id="delivery_sim"> 
                    <label for="delivery_sim"> Sim </label> <br> 
                    <input type="radio" name="delivery" value="nao" id="delivery_nao">
                    <label for="delivery_nao"> Não </label> <br>
                </fieldset>
            </form>
            <button form="form5" type="submit" class="button" name="submit_form5"> Enviar </button>
        </div>
        <!-- Questão 6: Repetir a questão 5 só que com checkboxes-->
        <div class="questao">
            <form action="lista1.php" method="post" id="form6">
                <fieldset>
                    <legend> Questão 6 - Lista 1 </legend>
                    <label for="valor"> Qual o valor da compra do cliente: </label>
                    <input type="number" name="valor" min="0"><br>
                    <input type="checkbox" name="desconto" id="desconto">
                    <label for="desconto"> Pagamento feito no cartão </label><br>
                    <input type="checkbox" name="delivery" id="delivery">
                    <label for="delivery"> Foi pedido delivery </label> 
                </fieldset>
            </form>
            <button form="form6" type="submit" class="button" name="submit_form6"> Enviar </button>
        </div>
        <!-- Questão 7: Pagamento de loja, se for à vista recebe desconto de 5%, se pagar a 
         prazo acresce 2%, se pagar com cartão concorre a um sorteio. Pegar dados de: 
         - um campo para o valor da compra
         - botões de rádio para pagamento à vista ou prazo
         - checkbox para pagamento com cartão 
         Depois mostrar:
         a) valor total da compra
         b) mostrar se pode participar do sorteio-->
        <div class="questao">
            <form action="lista1.php" method="post" id="form7">
                <fieldset>
                    <legend> Questão 7 - Lista 1 </legend>
                    <label for="valor"> Qual foi o valor da compra: </label>
                    <input type="number" name="valor" min="0"><br><br>
                    <input type="radio" name="pagamento" value="vista" id="vista">
                    <label for="vista"> Pagamento à vista </label>
                    <input type="radio" name="pagamento" value="prazo" id="prazo">
                    <label for="prazo"> Pagamento a prazo </label><br><br>
                    <input type="checkbox" name="cartao" value="cartao" id="cartao">
                    <label for="cartao"> Pagamento com cartão </label>
                    <p id="valor_total"></p>
                    <p id="sorteio"></p>
                </fieldset>
            </form>
            <button form="form7" type="submit" class="button" name="submit_form7"> Enviar </button>
        </div>
        <!-- Questão 8: Farmácia gera desconto de acordo com idade:
         - abaixo de 55 anos não tem desconto
         - entre 55 e 70 anos (incluso) recebe 5%
         - acima de 70 anos ganham 7%
         Se for feito com cartão fidelidade soma 5% de desconto em cima do anterior
         Ao final, mostrar valor da compra
         Conferir se um botão de rádio da idade foi preenchido, se não for, encerrar
         a aplicação web-->
        <div class="questao">
            <form action="lista1.php" method="post" id="form8">
                <fieldset>
                    <legend> Questão 8 - Lista 1 </legend>
                    <label for="valor3"> Qual o valor da compra: </label>
                    <input type="number" name="valor" min="0" id="valor3"><br>
                    <input type="radio" name="idade" value="abaixo" id="abaixo">
                    <label for="abaixo"> Abaixo de 55 anos: </label><br>
                    <input type="radio" name="idade" value="entre" id="entre">
                    <label for="entre"> Entre 55 e 70 anos: </label><br>
                    <input type="radio" name="idade" value="acima" id="acima">
                    <label for="acima"> Acima de 70 anos: </label><br>
                    <input type="checkbox" name="fidelidade" id="fidelidade">
                    <label for="fidelidade"> Pago com cartão fidelidade </label>
                </fieldset>
            </form>
            <button form="form8" type="submit" class="button" name="submit_form8"> Enviar </button>
        </div>
        <!-- Questão 9: Conversão de dólares em reais. Deve usar o método post. Mostrar:
         - valor convertido em reais
         - valor da taxa de câmbio -->
        <div class="questao">
            <form action="lista1.php" method="post" id="form9">
                <fieldset>
                    <legend> Questão 9 - Lista 1 </legend>
                    <label for="dolar"> Insira o valor em dólares: </label>
                    <input type="number" name="dolar" min="0" id="dolar"><br>
                </fieldset>
            </form>
            <button form="form9" type="submit" class="button" name="submit_form9"> Enviar </button>
        </div>
        <!-- Questão 10: Criar aplicação web para vendas de loja de informática
         Enviar os dados: 
         - total de compra realizada pelo cliente
         - percentual de comissão do vendedor
         O script deverá escrever na página o ganho do vendedor -->
        <div class="questao">
            <form action="lista1.php" method="post" id="form10">
                <fieldset>
                    <legend> Questão 10 - Lista 1 </legend>
                    <label for="compra"> Valor total da compra realizada pelo cliente: </label>
                    <input type="number" name="compra" min="0" id="compra"><br>
                    <label for="comissao"> Percentual de comissão do vendedor </label>
                    <input type="number" name="comissao" min="0" max="100" id="comissao"><br>
                </fieldset>
            </form>
            <button form="form10" type="submit" class="button" name="submit_form10"> Enviar </button>
        </div>
    </div>

    <div class="amostra">
      <div id="questao1">
      <h3> Resultado do Formulário </h3>
      <?php
      if (isset($_POST['submit_form1'])){
        $aluno = $_POST["aluno"];
        $nota1 = $_POST["nota1"];
        $peso1 = $_POST["peso1"];
        $nota2 = $_POST["nota2"];
        $peso2 = $_POST["peso2"];

        $media = ($nota1 * $peso1 + $nota2 * $peso2) / ($peso1 + $peso2);

        $mediaFormatada = number_format($media, 1, ",", ".");
        echo "<p> <h3> Formulário 1: </h3> 
        Resultados do processamento das notas do aluno: <br>  
        Nome do aluno = <span> $aluno </span> <br>
        Média do aluno = <span> $mediaFormatada </span>
        </p>";
        }
      if (isset($_GET['submit_form2'])){
        $distancia = $_GET["distancia"];
        $gasto = $_GET["gasto"];
        $valor = $_GET["valor"];

        $litros_consumidos = $distancia / $gasto;

        $valor_final = $valor * $litros_consumidos;

        $litros_consumidos_formatado = number_format($litros_consumidos, 0, ",", ".");
        $valor_final_formatado = number_format($valor_final, 0, ",", ".");
        $gasto_formatado = number_format($gasto, 0, ",", ".");

        echo "<p> <h3> Formulário 2: </h3>
        Resultado do processamento da viagem: <br>
        Litros gastos na viagem = <span> $litros_consumidos_formatado </span> <br> 
        Gasto em dinheiro = <span> R$$valor_final_formatado </span> <br>
        Preço do Combustível = <span> R$$gasto_formatado <span> 
        </p>";
        }
        if (isset($_GET['submit_form3'])){
          define("DESCONTO", 10/100);
          define("ICMS", 12/100);
          define("COMISSAO", 5/100);

          $valor_compra = $_GET["valor_compra"];

          $desconto = $valor_compra * DESCONTO;
          $icms = $valor_compra * ICMS;
          $comissao = $valor_compra * COMISSAO;

          $valor_compra_final = $valor_compra - $desconto;
          
          echo "<p> <h3> Formulário 3 </h3> 
          Resultado da venda: <br>
          Valor inicial da compra = <span> R$$valor_compra </span> <br>
          Desconto dado ao cliente = <span> R$$desconto </span> <br>
          ICMS = <span> R$$icms </span> <br>
          Valor da comissão = <span> R$$comissao </span> <br>
          Valor final da compra = <span> R$$valor_compra_final </span> <br>
          TAXA do ICMS cobrado = <span>" , ICMS*100 , "% </span> </p>";
        }
        if (isset($_POST['submit_form4'])){
          $tempF = $_POST["tempF"];

          $tempC = ($tempF - 32) * 5/9;

          $tempF_formatada = number_format($tempF, 1, ",", ".");
          $tempC_formatada = number_format($tempC, 1, ",", ".");
          echo "<p> <h3> Formulário 4: </h3>
          Resultado da Conversão Termométrica: <br>  
          Temperatura fornecida em ºF = <span> $tempF_formatada </span> <br>
          Temperatura convertida para Cº = <span> $tempC_formatada </span> <br>
          </p>";
        }
        if (isset($_POST['submit_form5'])){
          $valor_compra_5 = $_POST['valor'];
          define("CARTAO", 5/100);
          define("DELIVERY", 2/100);
          $valor_cartao = $valor_compra_5 * CARTAO;
          $valor_delivery = $valor_compra_5 * DELIVERY;
          $valor_final_5 = 0;
          if (!isset($_POST['desconto'])){
            die("<p> <span> Erro fatal: a forma de pagamento deve ser fornecida. Aplicação encerrada </span> </p>");
          }
          if (!isset($_POST['delivery'])){
            die("<p> <span> Erro fatal: a forma de entrega deve ser fornecida. Aplicação encerrada </span> </p>");
          }
          if (($_POST['desconto'] == 'sim') && $_POST['delivery'] == 'sim'){
            $valor_final_5 = $valor_compra_5 - ($valor_cartao + $valor_delivery);
          }
          else if (($_POST['desconto'] == 'sim')){
            $valor_final_5 =  $valor_compra_5 - $valor_cartao;
          }
          else if (($_POST['delivery'] == 'sim')){
            $valor_final_5 = $valor_compra_5 + $valor_delivery;
          }
          else{
            $valor_final_5 = $valor_compra_5;
          }

          $valor_compra_5_formatado = number_format($valor_compra_5, 2, ",", ".");
          $valor_final_5_formatado = number_format($valor_final_5, 2, ",", ".");

          echo "<p> <h3> Formulário 5: </h3>
          Valor pré-cálculo = <span> $valor_compra_5_formatado </span> <br>  
          Valor pós-cálculo = <span> $valor_final_5_formatado </span> <br>
          </p>";
        }
        if (isset($_POST['submit_form6'])){
          $valor_compra_5 = $_POST['valor'];
          define("CARTAO", 5/100);
          define("DELIVERY", 2/100);
          $valor_cartao = $valor_compra_5 * CARTAO;
          $valor_delivery = $valor_compra_5 * DELIVERY;
          $valor_final_5 = 0;
          if (isset($_POST['desconto']) && isset($_POST['delivery'])){
            $valor_final_5 = $valor_compra_5 - ($valor_cartao + $valor_delivery);
          }
          else if (isset($_POST['desconto'])){
            $valor_final_5 =  $valor_compra_5 - $valor_cartao;
          }
          else if (isset($_POST['delivery'])){
            $valor_final_5 = $valor_compra_5 + $valor_delivery;
          }
          else{
            $valor_final_5 = $valor_compra_5;
          }

          $valor_compra_5_formatado = number_format($valor_compra_5, 2, ",", ".");
          $valor_final_5_formatado = number_format($valor_final_5, 2, ",", ".");

          echo "<p> <h3> Formulário 6: </h3>
          Valor pré-cálculo = <span>R$ $valor_compra_5_formatado </span> <br>  
          Valor pós-cálculo = <span>R$ $valor_final_5_formatado </span> <br>
          </p>";
        }
        if (isset($_POST['submit_form7'])){
          $valor_compra_7 = $_POST['valor'];
          define("VISTA", 5/100);
          define("PRAZO", 2/100);
          $valor_vista = $valor_compra_7 * VISTA;
          $valor_prazo = $valor_compra_7 * PRAZO;
          $valor_final_7 = 0;
          if(!isset($_POST['pagamento'])){
            die("<p> <span> Erro fatal: a forma de pagamento deve ser fornecida. Aplicação encerrada </span> </p>");
          }
          else if($_POST['pagamento'] == 'vista'){
            $valor_final_7 = $valor_compra_7 - $valor_vista;
          }
          else if($_POST['pagamento'] == 'prazo'){
            $valor_final_7 = $valor_compra_7 + $valor_prazo;
          }
          if(isset($_POST['cartao'])){
            $mensagem_sorteio = "<p> <span> Parabéns, você está apto a participar do sorteio!!! </span> </p>";
          }
          else{
            $mensagem_sorteio = "<p> <span> Desculpe, você não se qualificou para participar do sorteio!!! </span> </p>";
          }

          $valor_compra_7_formatado = number_format($valor_compra_7, 2, ",", ".");
          $valor_final_7_formatado = number_format($valor_final_7, 2, ",", ".");

          echo "<p> <h3> Formulário 7: </h3>
          Valor pré-cálculo = <span>R$ $valor_compra_7_formatado </span> <br>  
          Valor pós-cálculo = <span>R$ $valor_final_7_formatado </span> <br>
          $mensagem_sorteio
          </p>";
        }
        if (isset($_POST['submit_form8'])){
          $valor_compra_8 = $_POST['valor'];
          define("DESCONTO_ENTRE", 5/100);
          define("DESCONTO_ACIMA", 7/100);
          define("DESCONTO_CARTAO", 5/100);
          $valor_desconto_entre = $valor_compra_8 * DESCONTO_ENTRE;
          $valor_desconto_acima = $valor_compra_8 * DESCONTO_ACIMA;
          $valor_desconto_cartao = $valor_compra_8 * DESCONTO_CARTAO;
          $valor_pre_cartao_8 = 0;
          $valor_final_8 = 0;
          $resultado_desconto = 0;
          if(!isset($_POST['idade'])){
            die("<p> <span> Erro fatal: a idade deve ser fornecida. Aplicação encerrada </span> </p>");
          }
          if($_POST['idade'] == 'abaixo'){
            $valor_pre_cartao_8 = $valor_compra_8;
            $resultado_desconto = 0;
            if(isset($_POST['fidelidade'])){
              $valor_final_8 = $valor_pre_cartao_8 - $valor_desconto_cartao;
              $resultado_desconto = 5;
            }
            else{
              $valor_final_8 = $valor_pre_cartao_8;
              $resultado_desconto = 0;
            }
          }
          else if($_POST['idade'] == 'entre'){
            $valor_pre_cartao_8 = $valor_compra_8 - $valor_desconto_entre;
            $resultado_desconto = 5;
            if(isset($_POST['fidelidade'])){
              $valor_final_8 = $valor_pre_cartao_8 - $valor_desconto_cartao;
              $resultado_desconto = 10;
            }
            else{
              $valor_final_8 = $valor_pre_cartao_8;
              $resultado_desconto = 5;
            }
          }
          else if($_POST['idade'] == 'acima'){
            $valor_pre_cartao_8 = $valor_compra_8 - $valor_desconto_acima;
            $resultado_desconto = 7;
            if(isset($_POST['fidelidade'])){
              $valor_final_8 = $valor_pre_cartao_8 - $valor_desconto_cartao;
              $resultado_desconto = 12;
            }
            else{
              $valor_final_8 = $valor_pre_cartao_8;
              $resultado_desconto = 7;
            }
          }

          $valor_compra_8_formatado = number_format($valor_compra_8, 2, ",", ".");
          $valor_final_8_formatado = number_format($valor_final_8, 2, ",", ".");

          echo "<p> <h3> Formulário 8: </h3>
          Valor da venda pré-aplicação do desconto = <span>R$ $valor_compra_8_formatado </span> <br>  
          Valor da venda pós-aplicação do desconto = <span>R$ $valor_final_8_formatado </span> <br>
          Valor do desconto aplicado = <span>R$ $resultado_desconto% </span>
          </p>";
        }
        if (isset($_POST['submit_form9'])){

          $valor_dolares = $_POST['dolar'];
          $taxa_cambio = 5.41;
          $valor_reais = $valor_dolares * $taxa_cambio;

          $valor_dolares_formatado = number_format($valor_dolares, 2, ",", ".");
          $valor_reais_formatado = number_format($valor_reais, 2, ",", ".");

          echo "<p> <h3> Formulário 9: </h3>
          Valor em dólares inserido = <span>R$ $valor_dolares_formatado </span> <br>  
          Valor do dólar = <span>R$ $taxa_cambio </span> <br>
          Valor convertido para reais = <span>R$ $valor_reais_formatado </span> <br>
          </p>";

        }
        if (isset($_POST['submit_form10'])){

          $compra_cliente = $_POST['compra'];
          $comissao = ($_POST['comissao']);
          $comissao_percentual = $comissao * 1/100;

          $comissao_valor = $compra_cliente * $comissao_percentual;

          $compra_cliente_formatado = number_format($compra_cliente, 2, ",", ".");
          $comissao_valor_formatado = number_format($comissao_valor, 2, ",", ".");

          echo "<p> <h3> Formulário 10: </h3>
          Valor da compra total do cliente = <span>R$ $compra_cliente_formatado </span> <br>  
          Percentual de comissão = <span> $comissao% </span> <br>
          Valor da comissão repassado para o vendedor = <span>R$ $comissao_valor_formatado </span> <br>
          </p>";
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
