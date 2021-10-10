# Variáveis

<p align="justify"> Variável é o conteúdo inicial e mais importante para quem está no início, visto que é através delas que você poderá criar scripts e algoritmos complexos.

Uma variável nada mais é que um espaço da memória que o script pede para seu Sistema Operacional (SO) reservar e dá um nome à mesma. Ou seja, eu posso declarar uma variável " $nome = "Ruan Sales" ", lembrando que as variáveis no php são declaradas sempre com um pré-fixo de dolar ou seja, "$nomedavariavel" sem as aspas.

Variáveis tem regras para que elas sejam consideradas válidas ou inválidas.

As variáveis válidas seguem o padrão abaixo:

+ Começam com letras, maiúscula ou minúsculas.
+ Podem conter números
+ Podem conter o caractere especial underline _

As variáveis não válidas são:

+ Que comecem com números
+ Com Espaços
+ Com Caracteres Especiais

Você poderá ver as atribuiçõed de variáveis consultando o script nesta pasta, chamado variaveis.php

Variáveis no PHP são CaseSensitive ou seja, fazem diferenciação entre letras maiúscula, você poderá ter uma variável chamada Nome ou nome, porém, ambas serão diferentes uma da outra, pois o fato de ter letras maiúscula ou minúsculas entre elas às diferenciam.

Obs: Ao executar o script variaveis.php contido na pasta, não será possível, pois os exemplo de variáveis inválidas, irá gerar um erro, então para devida execução remova as incorretas e atribua valor as válidas.

Exemplo prático:

```php
<?php

/* Variáveis válidas */

$nome;
$idade;
$numero1;
$numero_telefone;


/* Variáveis inválidas */

$1numero;
$-nome;

```

Você poderá ver a aula respectiva no Youtube.

</p>

[05 - Variáveis](https://www.youtube.com/watch?v=V49qYHDGn5E)