<?php
function testeIdade($idade){
    if(is_numeric($idade) == true){
        echo "<p> A idade <span> $idade </span> é uma idade válida!! </p>";
    }
    else{
        die("<p> A idade inserida não é uma idade válida. Programa encerrado </p>");
    }
}
function podeVotar($idade){
    if($idade >= 16){
        echo "<p> E você já pode votar!! </p>";
    }
    else{
        echo "<p> Porém você ainda não pode votar :( </p>";
    }
}
if(isset($_POST["submit_form6"])){
    $idade = $_POST["idade"];

    testeIdade($idade);
    podeVotar($idade);
}
?>