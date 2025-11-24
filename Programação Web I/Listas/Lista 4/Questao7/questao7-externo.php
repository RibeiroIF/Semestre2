<?php
function conversaoParaFahrenheit($temperatura){
    $temperaturaFinal = ($temperatura * 1.8) + 32;
    return $temperaturaFinal;
}
function conversaoParaCelsius($temperatura){
    $temperaturaFinal = 1.8 * ($temperatura - 32);
    return $temperaturaFinal;
}

if(isset($_POST["submit_form7"])){
    $temperatura = $_POST["temperatura"];

    if(isset($_POST["celsius"])){
        $temperaturaFinal = conversaoParaCelsius($temperatura);
        echo "<p> A temperatura convertida é de <span> $temperaturaFinal °C </span> </p>";
    }
    else if(isset($_POST["fahrenheit"])){
        $temperaturaFinal = conversaoParaFahrenheit($temperatura);
        echo "<p> A temperatura convertida é de <span> $temperaturaFinal F° </span> </p>"; 
    }
    else{
        die("<p> Nenhuma opção de conversão foi selecionada. Programa finalizado!! </p>");
    }
}
?>