<?php

function mensagem(){
    echo "Olá, seja bem-vindo ao curso de PHP!";
}

function comParametro($nome){
    echo "Seja bem vindo, $nome!";
}

function soma($valor1, $valor2){
return $valor1 + $valor2;

}

function horaAtual(){
    return date("H:i:s");
}

echo horaAtual();
echo "<br>";


$resultado = soma(10, 5);
echo $resultado;
echo "<br>";

mensagem();
echo "<br>";
mensagem();
echo "<br>";
mensagem();
echo "<br>";
mensagem();
echo "<br>";
mensagem();
echo "<br>";
mensagem();
echo "<br>";

comParametro("Alexandre");
echo "<br>";
comParametro("Maria");

?>