<?php
function calcularMedia($nota1, $nota2) {
    $media = ($nota1 + $nota2)/2;
    return $media;
}

function conferirAprovacao($mediaFinal){
    if($mediaFinal >= 6){
        echo "<p> Parabéns, você está aprovado com média <span> $mediaFinal </span> </p>";
    }
    else{
        echo "<p> Desculpe, você está reprovado com média <span> $mediaFinal </span> </p>";
    }
}

if(isset($_POST['submit_form5'])){
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];

    $mediaFinal = calcularMedia($nota1, $nota2);
    conferirAprovacao($mediaFinal);
}
?>