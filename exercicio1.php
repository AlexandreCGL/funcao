<?php

//  1 - Crie uma função em PHP que receba um nome como parâmetro e exiba uma mensagem de saudação personalizada.

echo "<br>";
function mensagemSaudacao($nome){
    echo "Olá, $nome! Seja bem-vindo ao curso de PHP!";
}
echo mensagemSaudacao("Alexandre");
echo "<br>";

//  2- Crie uma função que receba dois números como parâmetros, realize a soma e retorne o resultado.

echo "<br>";
function soma($num1, $num2)
{
    return $num1 + $num2;
}
echo soma(5, 10);
echo "<br>";    


//  3- Crie uma função que receba um número inteiro e retorne se ele é par ou ímpar.

echo "<br>";
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

echo "<br>";
function maiorValor($num1, $num2, $num3) {
    return max($num1, $num2, $num3);
}
echo maiorValor(5, 2, 3);
echo "<br>";

// 5- Crie uma função que receba uma string e retorne essa string invertida, sem utilizar funções prontas do PHP para inversão.

echo "<br>";
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

echo "<br>";
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

echo "<br>";
function gerarLogin($nome, $sobrenome) {
    $login = strtolower($nome) . "." . strtolower($sobrenome);
    return $login;
}
echo gerarLogin("Alexandre", "Galacho");
echo "<br>";



/* 8- Crie uma função que receba o valor de um produto e retorne o valor do frete:
até R$100 → R$20
até R$300 → R$15
acima disso → frete grátis*/

echo "<br>";
function Produto($valorProduto) {
    if ($valorProduto < 100) {
        $valorFrete = 20;
    } elseif ($valorProduto < 300) {
        $valorFrete = 15;
    } else {
        $valorFrete = 0;
    }

    return $valorFrete;

}
    echo "R$" . Produto (99);
    echo "<br>";
    echo "R$" . Produto (155);
    echo "<br>";
    echo "R$" . Produto (390);
    echo "<br>";


/* 9.Crie uma função que receba uma senha e verifique se ela atende aos critérios:

mínimo 8 caracteres
possui número
possui letra maiúscula*/

echo "<br>";
function senha($senha){
    

    if (strlen($senha) < 8){
    return "<br>A senha precisa ter no minimo 8 caracteres<br>";
    
} 
    if (!preg_match('/[0-9]/', $senha)){
        return "A senha precisa ter numeros<br>";

    } 
    if (!preg_match('/[A-Z]/', $senha)){
        return "A senha precisa ter letras maiusculas<br>";
    }
    return "Senha valida!";

}
    echo senha("ALe12151633");



/* 10. Crie uma função em PHP chamada gerarToken() que gere um token aleatório para ser utilizado em sistemas de login, recuperação de senha ou confirmação de cadastro.
A função deve:

gerar uma sequência aleatória de caracteres;
permitir definir o tamanho do token;
retornar o token gerado;
exibir o token na tela.
Ex.: A7x9Kp2LmQ */

echo "<br>";
echo "<br>";
function gerarToken($tamanho) {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $token = '';
    for ($i = 0; $i < $tamanho; $i++) {
        $token .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    return $token;
}
echo gerarToken(10);

?>