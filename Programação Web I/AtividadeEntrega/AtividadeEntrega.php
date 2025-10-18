<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://rwnobrega.page/_assets/ifsc-logo.png">
    <link rel="stylesheet" href="AtividadeEntrega.css">
    <title>Atividade para Entrega - Programação Web 1</title>
</head>
<body>
    <header>  
        <h2> Questão para Entrega - Programação Web 1 </h2>
    </header>

    <div class="amostra">
        <div class="enunciado">
            <h2 class="titulo-enunciado"> Questão 7 - Lista L3 (Programação Web I) </h2>
            <p> Uma farmácia registra as seguintes informações para cada um de seus medicamentos </p>
            <ul>
                <li> Código do Medicamento (Identificador único) </li>
                <li> Nome do Medicamento </li>
                <li> Preço de Venda </li>
            </ul>
            <p> Criar um formulário que cadastre estes dados para três medicamentos quaisquer. Em seguida, criar um script em PHP que: </p>
            <ol>
                <li> Armazene estes dados em uma estrutura matricial. Use o código do medicamento como índice associativo </li>
                <li> Mostre os dados de todos os medicamentos cadastrados na matriz no formato tabular </li>
                <li> Mostre, na página Web, o nome do medicamento <b><u> mais barato </u></b> cadastrado </li>
                <li> Receba, do formulário acima, devidamente modificado, o código de um medicamento qualquer. O script em PHP deverá pesquisar este código na matriz e mostrar todas as informações do respectivo medicamento. Se o mesmo não for encontrado, mostrar uma mensagem apropriada </li>
                <li> Ordenar os dados de todos os medicamentos por meio do <b><u> nome do medicamento, em ordem alfabética crescente </u></b>, e exibir estes dados no formato tabular </li>
            </ol>
        </div>
        <div class="resolucao">
            <div class="formulario-texto">
                <h2> Farmácias Itabinoca </h2>
                <form action="AtividadeEntrega.php" method="post" id="form-entrega">
                    <fieldset class="form1">
                        <legend> Registro do Medicamento 1 </legend>
                        <label class="alinha"> Código do Medicamento: </label>
                        <input type="text" name="codigo1"><br>
                        <label class="alinha"> Nome do Medicamento: </label>
                        <input type="text" name="nome1"><br>
                        <label class="alinha"> Preço do Medicamento: </label>
                        <input type="text" name="preco1">
                    </fieldset>
                    <fieldset class="form1">
                        <legend> Registro do Medicamento 2 </legend>
                        <label class="alinha"> Código do Medicamento: </label>
                        <input type="text" name="codigo2"><br>
                        <label class="alinha"> Nome do Medicamento: </label>
                        <input type="text" name="nome2"><br>
                        <label class="alinha"> Preço do Medicamento: </label>
                        <input type="text" name="preco2">
                    </fieldset>
                    <fieldset class="form1">
                        <legend> Registro do Medicamento 3 </legend>
                        <label class="alinha"> Código do Medicamento: </label>
                        <input type="text" name="codigo3"><br>
                        <label class="alinha"> Nome do Medicamento: </label>
                        <input type="text" name="nome3"><br>
                        <label class="alinha"> Preço do Medicamento: </label>
                        <input type="text" name="preco3">
                    </fieldset>
                    <fieldset class="form2">
                        <legend> Pesquisa de Medicamentos </legend>
                        <label class="alinha"> Código do Medicamento pesquisado: </label>
                        <input type="text" name="pesquisa">
                    </fieldset>
                    <button form="form-entrega" type="submit" class="button" name="submit_form-entrega"> Cadastrar Dados e Pesquisar </button>
                </form>
            </div>
            <div class="formulario-resposta">
                <h2> Resultado da Atividade: </h2>
                <?php
                if(isset($_POST['submit_form-entrega'])){
                    // ESPAÇO PARA RESOLUÇÃO DA ATIVIDADE PARA ENTREGAR
                    $codigo1 = $_POST['codigo1'];
                    $codigo2 = $_POST['codigo2'];
                    $codigo3 = $_POST['codigo3'];

                    $nome1 = $_POST['nome1'];
                    $nome2 = $_POST['nome2'];
                    $nome3 = $_POST['nome3'];

                    $preco1 = $_POST['preco1'];
                    $preco2 = $_POST['preco2'];
                    $preco3 = $_POST['preco3'];

                    $preco1formatado = number_format($preco1,2,'.','');
                    $preco2formatado = number_format($preco2,2,'.','');
                    $preco3formatado = number_format($preco3,2,'.','');

                    // QUESTÃO 1: ORGANIZANDO A MATRIZ INICIAL
                    $matrizMedicamentos = [$codigo1 => [$nome1, $preco1formatado],
                                        $codigo2 => [$nome2, $preco2formatado],
                                        $codigo3 => [$nome3, $preco3formatado]];

                    // QUESTÃO 2: FORMATO TABULAR PADRÃO
                    echo "<h3> Questão 2: </h3>
                            <table>
                            <caption> Tabela de Remédios da Farmácia Itabinoca </caption>
                            <tr>
                                <th> Nome do Medicamento </th> 
                                <th> Código do medicamento </th> 
                                <th> Preço do Medicamento </th> 
                            </tr>";
                    foreach($matrizMedicamentos as $codigo => $valorInterno){
                        echo "<tr>
                                <td> $valorInterno[0] </td>
                                <td> $codigo </td>
                                <td> R$ $valorInterno[1] </td>";
                        }
                        echo "</table>";
                    // QUESTÃO 3: MOSTRAR O NOME DO MEDICAMENTO MAIS BARATO
                    foreach($matrizMedicamentos as $codigo => $valorInterno){
                        $vetorAuxiliar1[$codigo] = $valorInterno[1];
                    }

                    $medicamentoMaisBarato = min($vetorAuxiliar1);
                    $valorMedicamentoMaisBarato = array_search($medicamentoMaisBarato, $vetorAuxiliar1);
                    $nomeMedicamentoMaisBarato = $matrizMedicamentos[$valorMedicamentoMaisBarato][0];

                    echo "<h3> Questão 3: </h3>
                            <p> Nome do medicamento mais barato entre os inseridos: <span> $nomeMedicamentoMaisBarato </span> </p> ";
                    // QUESTÃO 4: PESQUISAR O NOME DO MEDICAMENTO
                    $codigoPesquisado = $_POST['pesquisa'];
                    $codigoEncontrado = array_key_exists($codigoPesquisado, $matrizMedicamentos);

                    if(!$codigoEncontrado){
                        die("<h3> Questão 4: </h3>
                            <p> Caro usuário, o medicamento pesquisado de nome <span> $medicamentoEncontrado </span> não foi encontrado nos registros :( </p>");
                    }

                    $medicamentoEncontrado = $matrizMedicamentos[$codigoPesquisado][0];
                    $precoEncontrado = $matrizMedicamentos[$codigoPesquisado][1];

                    echo "<h3> Questão 4: </h3>
                            <p> Resultado da busca por código de medicamento no registro: <br>
                            Código do medicamento pesquisado: <span> $codigoPesquisado </span> <br>
                            Nome do medicamento pesquisado: <span> $medicamentoEncontrado </span> <br>
                            Preço do medicamento pesquisado: <span> R$ $precoEncontrado </span> </p>";
                    // QUESTÃO 5: ORDENAR OS DADOS DE TODOS OS MEDICAMENTOS PELO NOME, EM ORDEM ALFABÉTICA CRESCENTE, E EXIBIR EM TABELA
                    foreach($matrizMedicamentos as $codigo => $valorInterno){
                        $vetorAuxiliar3[$codigo] = $valorInterno[0];
                    }
                    asort($vetorAuxiliar3);

                    echo "<h3> Questão 5: </h3>
                            <table>
                            <caption> Tabela de Remédios da Farmácia Itabinoca (Ordem Alfabética Crescente) </caption>
                            <tr>
                                <th> Nome do Medicamento </th> 
                                <th> Código do medicamento </th> 
                                <th> Preço do Medicamento </th> 
                            </tr>";

                            foreach($vetorAuxiliar3 as $codigo => $valorMedicamento){
                            $nome = $matrizMedicamentos[$codigo][0];
                            $valor = $matrizMedicamentos[$codigo][1];
                            echo "<tr> 
                                    <td> $nome </td>
                                    <td> $codigo </td>
                                    <td> R$ $valor </td>
                                    </tr>";
                            }
                            echo "</table>";
                        }
                ?>
            </div>
        </div>
    </div>

    <footer>
        <h3> Aluno: Gabriel Ribeiro de Souza <br>
        Whatsapp para contato: <a href="https://wa.me/5548996658244"><img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="Ícone do Whats" style="width:28px;height:28px;"></a> </h3>
    </footer>    
</body>
</html>