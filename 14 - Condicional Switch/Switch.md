# Condicional Switch/Case

<p align="justify">
O bloco de condição Switch/Case é um bloco utilizado para verificar expressões ou valores pre-definidos dentro de variáveis, o maior exemplo da utilização desta condicional é um sistema de URA, atendimento eletrônico onde possue valores pré-definidos e a depender da escola do usuário, irá executar o código respectivo a opção, nada mais é que uma lista de opções a serem utilizadas onde o switch, irá verificar o caso em questão.

A estrutura padrão do switch/case pode ser vista no exemplo abaixo:

```php
$variavel = valor interno;
switch($variavel) {
    case $valorInternoDaVariavel:
        Código a ser executado;
        break;
}
```

No exemplo acima está a estrutura padrão, onde dentro da variável está seu valor respectivo, em seguida iniciada a condição swtich, dentro dos parâmetros colocamos a variável a ser observada/testada, então abrimos o bloco para os casos em questão.

Para verificação dos casos, colocamos a expressão "case" mais o valor a ser verificado:, por fim, para que o código fique devidamente amarrado, colocamos os comandos a serem executados finalizando com a expressão break, para em virtude daquela verificação ser executada o código possa parar nela, e não seguir a execução dos próximos casos. Vocẽ poderá verificar através dos exemplos abaixo:

```php
<?php

$dia = 7;

switch ($dia) {
    case 1:
        echo "Domingo" . PHP_EOL;
        break;
    case 2:
        echo "Segunda-Feira" . PHP_EOL;
        break;
    case 3:
        echo "Terça-Feira" . PHP_EOL;
        break;
    case 4:
        echo "Quarta-Feira" . PHP_EOL;
        break;
    case 5:
        echo "Quinta-Feira" . PHP_EOL;
        break;
    case 6:
        echo "Sexta-Feira" . PHP_EOL;
        break;
    case 7:
        echo "Sábado" . PHP_EOL;
        break;
    default:
        echo "Insira um valor válido" . PHP_EOL;
}

$ura = 3;
switch ($ura) {
    case 1:
        echo "Financeiro" . PHP_EOL;
        break;
    case 2:
        echo "Comercial" . PHP_EOL;
        break;
    case 3:
        echo "Falar com atendente" . PHP_EOL;
        break;
    default:
        echo "Insira opção válida" . PHP_EOL;
}

```

Neste caso, temos 2 Switchs, um para verificar o dia da semana, que irá 1 à 7, verificados dentro dos casos, e um switch para verificar as opções de URA, para saber qual o tipo de atendimento que o usuário deseja solicitar.

Obs: Por fim na estrutura do Switch/Case, colocamos sempre a expressão default, para que possa ser realizado um retorno quando não for escolhido nenhum dos casos esperados. Ou seja, no caso de valor inválido que será verificado nos casos, em virtude disto, será retornado o valor default (padrão), que costuma ser uma mensagem de erro, informando para que seja realizado o envio ou escolha de valor válido.
</p>