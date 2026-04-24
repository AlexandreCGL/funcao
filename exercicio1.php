<?php

//  1 - Crie uma função em PHP que receba um nome como parâmetro e exiba uma mensagem de saudação personalizada.

function mensagemSaudacao($nome){
    echo "Olá, $nome! Seja bem-vindo ao curso de PHP!";
}
echo mensagemSaudacao("Alexandre");
echo "<br>";

//  2- Crie uma função que receba dois números como parâmetros, realize a soma e retorne o resultado.
function soma($num1, $num2)
{
    return $num1 + $num2;
}
echo soma(5, 10);
echo "<br>";    


//  3- Crie uma função que receba um número inteiro e retorne se ele é par ou ímpar.
function parOuImpar($numero) {
    if ($numero % 2 == 0) {
        return "O numero $numero é par";
    } else {
        return "O numero $numero é ímpar";
    }
}
echo parOuImpar(7);
    echo "<br>";

//  4- Crie uma função que receba três números como parâmetros e retorne o maior valor entre eles.


function maiorValor($num1, $num2, $num3) {
    return max($num1, $num2, $num3);
}
echo maiorValor(5, 2, 3);
echo "<br>";

// 5- Crie uma função que receba uma string e retorne essa string invertida, sem utilizar funções prontas do PHP para inversão.

function inverterString($string){
    $stringInvertida = "";
    for ($i = strlen($string) - 1; $i >= 0; $i--){
        $stringInvertida .= $string[$i];
    }
    return $stringInvertida;
}
echo inverterString("Alexandre");
echo "<br>";

// 6- Crie uma função que receba o valor de uma compra e aplique descontos conforme a regra: acima de R$ 100,00 recebe 10%; acima de R$ 300,00 recebe 15%; acima de R$ 500,00 recebe 20%.
function valorCompra($valor) {
    if ($valor > 500){
        $desconto = $valor * 0.20;
    } elseif ($valor > 300) {
        $desconto = $valor * 0.15;
    } elseif ($valor > 100) {   
        $desconto = $valor * 0.10;
    } else {
        $desconto = 0;
    }
    return $desconto;
}
echo valorCompra(350);
echo "<br>";


/* 7- Crie uma função que receba nome e sobrenome e gere um login no formato:
primeironome.sobrenome*/










/* 8- Crie uma função que receba o valor de um produto e retorne o valor do frete:
até R$100 → R$20
até R$300 → R$15
acima disso → frete grátis*/


/* 9.Crie uma função que receba uma senha e verifique se ela atende aos critérios:

mínimo 8 caracteres
possui número
possui letra maiúscula*/


/* 10. Crie uma função em PHP chamada gerarToken() que gere um token aleatório para ser utilizado em sistemas de login, recuperação de senha ou confirmação de cadastro.
A função deve:

gerar uma sequência aleatória de caracteres;
permitir definir o tamanho do token;
retornar o token gerado;
exibir o token na tela.
Ex.: A7x9Kp2LmQ */

?>