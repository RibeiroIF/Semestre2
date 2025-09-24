<?php
function calcularMediaSimples($nota1, $nota2, $nota3){
    $media = ($nota1 + $nota2 + $nota3) / 3;
    return $media;
}

function calcularMediaPonderada($nota1, $nota2, $nota3){
    $media = (($nota1 * 5) + ($nota2 * 3) + ($nota3 * 2)) / 10;
    return $media; 
}
// ESTE É UM EXTRA MEU PROFESSOR, PARA ADICIONAR UM POUCO A MAIS À QUESTÃO ME BASEANDO EM EXERCÍCIOS ANTERIORES
function condicaoAluno($mediaFinal){
    if($mediaFinal >= 6){
        $condicao = "Aprovado";
    }
    else{
        $condicao = "Reprovado";
    }
    return $condicao;
}

if(isset($_POST["submit_form8"])){
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    if(isset($_POST["mediasimples"])){
        $mediaFinal = calcularMediaSimples($nota1, $nota2, $nota3);
        $modoDeCalculo = "Média Aritmética Simples";
    }
    else if(isset($_POST["mediaponderada"])){
        $mediaFinal = calcularMediaPonderada($nota1, $nota2, $nota3);
        $modoDeCalculo = "Média Ponderada";
    }
    else{
        die("<p> Nenhuma opção de média foi escolhida. Operação Encerrada </p> ");
    }

    $condicaoAprovacao = condicaoAluno($mediaFinal);

    $nota1Formatada = number_format($nota1,1,".","");
    $nota2Formatada = number_format($nota2,1,".","");
    $nota3Formatada = number_format($nota3,1,".","");
    $mediaFinalFormatada = number_format($mediaFinal,1,".","");

    echo "<p> Olá caro aluno, suas notas foram: <br> 
            Nota 1: <span>$nota1Formatada</span> | Nota 2: <span>$nota2Formatada</span> | Nota 3: <span>$nota3Formatada</span> <br> <br>
            Sua opção para cálculo de média foi a de: <br> <span> $modoDeCalculo </span> <br> <br> 
            Levando em consideração as notas e a forma de cálculo escolhida, sua média final é de: <span> $mediaFinalFormatada </span> <br> <br>
            Portanto, você está: <span> $condicaoAprovacao </span> </p>";
}
?>