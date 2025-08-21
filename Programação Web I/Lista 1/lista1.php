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
    <script src="lista1.js"></script>
    <aside>
        
    </aside>

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
                    <input type="text" name="aluno" placeholder="Nome aqui..." ><br><br>
                    <label for="nota1" class="alinha"> Qual a sua primeira nota: </label>
                    <input type="number" name="nota1" min="0" max="10"><br>
                    <label for="peso1" class="alinha"> E qual o peso desta nota 1: </label>
                    <input type="number" name="peso1" min="0" max="10"><br>
                    <label for="nota2" class="alinha"> Qual a sua segunda nota: </label>
                    <input type="number" name="nota2" min="0" max="10"><br>
                    <label for="peso2" class="alinha"> E qual o peso desta nota 2: </label>
                    <input type="number" name="peso2" min="0" max="10"><br>
                </fieldset>
            </form>
            <button form="form1" type="submit" class="button" onclick="mostrarQ1()"> Enviar </button>
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
                    <input type="number" name="distancia"><br>
                    <label for="gasto"> Qual o gasto em litro por km do carro: </label>
                    <input type="number" name="gasto"><br>
                    <label for="valor"> E qual o valor da gasolina neste posto: </label>
                    <input type="number" name="valor"><br>
                </fieldset>
            </form>
            <button form="form2" type="submit" class="button" onclick="mostrarQ2()"> Enviar </button>
        </div>
        <!-- Questão 3: Script para auxiliar funcionários de venda (método GET) para ver:
         - valor do desconto obtido pelo cliente (10% da compra)
         - valo do ICMS pago pela loja (12% da compra)
         - comissão do vendedor (5% da compra)-->
        <div class="questao">
            <form action="lista1.php" method="get" id="form3">
                <fieldset>
                    <legend> Questão 3 - Lista 1 </legend>
                    <label for="desconto"> Qual o valor do desconto obtido pelo cliente </label>
                    <input type="number" name="desconto" min="0"><br>
                    <label for="ICMS"> Qual valor do ICMS pago pela loja </label>
                    <input type="number" name="ICMS" min="0"><br>
                    <label for="comissao"> E qual a comissão do vendedor: </label>
                    <input type="number" name="comissao" min="0">
                </fieldset>
            </form>
            <button form="form3" type="submit" class="button" onclick="SendData"> Enviar </button>
        </div>
        <!-- Questão 4: Script para receber a temperatura em Fahrenheit e converter para Celsius -->
        <div class="questao">
            <form action="lista1.php" method="post" id="form4">
                <fieldset>
                    <legend> Questão 4 - Lista 1 </legend>
                    <label for="tempF"> Qual a temperatura em Fahrenheit: </label>
                    <input type="number" name="tempF">
                </fieldset>
            </form>
            <button form="form4" type="submit" class="button" onclick="SendData"> Enviar </button>
        </div>
        <!-- Questão 5: Cliente realizando compras, recebe 5% desconto no cartão e cobram 2%
         da compra se for entrega. Usar radio buttons -->
        <div class="questao">
            <form action="lista1.php" method="post" id="form5">
                <fieldset>
                    <legend> Questão 5 - Lista 1</legend>
                    <label for="valor"> Qual o valor da compra do cliente: </label>
                    <input type="number" name="valor" min="0"><br>
                    <input type="radio" name="desconto">
                    <label for="desconto"> Pagamento feito no cartão </label><br>
                    <input type="radio" name="delivery">
                    <label for="delivery"> Foi pedido delivery </label> 
                </fieldset>
            </form>
            <button form="form5" type="submit" class="button" onclick="SendData"> Enviar </button>
        </div>
        <!-- Questão 6: Repetir a questão 5 só que com checkboxes-->
        <div class="questao">
            <form action="lista1.php" method="post" id="form6">
                <fieldset>
                    <legend> Questão 6 - Lista 1 </legend>
                    <label for="valor"> Qual o valor da compra do cliente: </label>
                    <input type="number" name="valor" min="0"><br>
                    <input type="checkbox" name="desconto">
                    <label for="desconto"> Pagamento feito no cartão </label><br>
                    <input type="checkbox" name="delivery">
                    <label for="delivery"> Foi pedido delivery </label> 
                </fieldset>
            </form>
            <button form="form6" type="submit" class="button" onclick="SendData"> Enviar </button>
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
                    <input type="number" name="valor" min="0"><br>
                    <input type="radio" name="pagamento">
                    <label for="pagamento"> Pagamento à vista </label>
                    <input type="radio" name="pagamento">
                    <label for="pagamento"> Pagamento a prazo </label><br>
                    <input type="checkbox" name="cartao">
                    <label for="cartao"> Pagamento com cartão </label>
                    <p id="valor_total"></p>
                    <p id="sorteio"></p>
                </fieldset>
            </form>
            <button form="form7" type="submit" class="button" onclick="SendData"> Enviar </button>
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
                    <label for="valor"> Qual o valor da compra: </label>
                    <input type="number" name="valor" min="0"><br>
                    <input type="radio" name="idade">
                    <label for="idade"> Abaixo de 55 anos: </label><br>
                    <input type="radio" name="idade">
                    <label for="idade"> Entre 55 e 70 anos: </label><br>
                    <input type="radio" name="idade">
                    <label for="idade"> Acima de 70 anos: </label><br>
                    <input type="checkbox" name="fidelidade">
                    <label for="fidelidade"> Pago com cartão fidelidade </label>
                </fieldset>
            </form>
            <button form="form8" type="submit" class="button" onclick="SendData"> Enviar </button>
        </div>
        <!-- Questão 9: Conversão de dólares em reais. Deve usar o método post. Mostrar:
         - valor convertido em reais
         - valor da taxa de câmbio -->
        <div class="questao">
            <form action="lista1.php" method="post" id="form9">
                <fieldset>
                    <legend> Questão 9 - Lista 1 </legend>
                    <label for="dolar"> Insira o valor em dólares </label>
                    <input type="number" name="dolar" min="0"><br>
                    <p id="valor_convertido"></p>
                    <p id="valor_cambio"></p>
                </fieldset>
            </form>
            <button form="form9" type="submit" class="button" onclick="SendData"> Enviar </button>
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
                    <input type="number" name="compra" min="0"><br>
                    <label for="comissao"> Percentual de comissão do vendedor </label>
                    <input type="number" name="comissao" min="0" max="100"><br>
                </fieldset>
            </form>
            <button form="form10" type="submit" class="button" onclick="SendData"> Enviar </button>
        </div>
    </div>

    <div class="amostra">
      <div id="questao1">
      <h3> Resultado do Formulário </h3>
      <?php
        $aluno = $_POST["aluno"];
        $nota1 = $_POST["nota1"];
        $peso1 = $_POST["peso1"];
        $nota2 = $_POST["nota2"];
        $peso2 = $_POST["peso2"];

        $media = ($nota1 * $peso1 + $nota2 * $peso2) / ($peso1 + $peso2);

        $mediaFormatada = number_format($media, 1, ",", ".");
        echo "<p> Resultados do processamento das notas do aluno: <br>  
        Nome do aluno = <span> $aluno </span> <br>
        Média do aluno = <span> $mediaFormatada </span>
        </p>";
      ?>
      </div>
      <div id="questao2">
        <?php
        echo "<p> Teste </p>";
        ?>
      </div>
    </div>


    <footer>
        <h5> Todos os direitos reservados </h5>
    </footer>
</body>
</html>
