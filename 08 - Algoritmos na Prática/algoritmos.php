<?php
//Variável primeiro nome
$nome = "Ruan";
//Variável Sobrenome
$sobrenome = " Sales";
//Variável Idade
$idade = 27;
//Variável Instituicao
$instituicao = "IFPE - Instituto Federal de Pernambuco";

//Variáveis de nota
$nota1 = 8.2;
$nota2 = 7.4;
$nota3 = 5.8;
$nota4 = 9;

//Variável que guarda o valor da média.
$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

//Variável que faz a junção do nome e sobrenome
$nomeCompleto = $nome . $sobrenome;

//Chamada da variável e quebra de linha comum
echo $instituicao . PHP_EOL;

//Concatenação do texto com variável
echo "Aluno: " . $nomeCompleto . PHP_EOL;

//Interpolação da variável dentro de uma String, utilizando aspas duplas.
echo "Sua média foi: $media" . PHP_EOL ;


