# Operadores de Atribuição

<p align="justify"> 
Operadores de atribuição, como o próprio nome já indica, servem para atribuir algum valor à variáveis, podendo ser atribuído de forma simples ou de forma composta. 

O símbolo de (=) é justamente o caractere que faz a atribuição de um valor à uma variável, ou seja, na criação de uma variável como o exemplo abaixo:

```php
$nome = "Seu Nome";
```

Podemos ler que a primeira coisa que queremos é criar uma variável, segunda coisa é pedir que o script envie a mensagem ao seu sistema operacional, para dentro do espaço de memória nomeado como "nome", ele guarde o valor que vem posterior ao sinal de igualdade. Este é o primeiro e mais simples sinal de atribuição.

Porém, também podemos executar operações dentro própria atribuição, ao colocarmos algum operador aritimético ou de concatenação anterior ao de atribuição, como mostra o exemplo abaixo:

```php
//Primeira atribuição da idade
$idade = 1;

//Sobreposição do valor da idade com a soma de 20 resultando que a idade agora se torne 21
$idade += 20

//Impressão da idade agora como 21
echo $idade . PHP_EOL;

//Atribuição de nome
$nome = "Seu Nome";

//Atribuição de sobrenome
$sobrenome = " Sobrenome";

//Sobreposição do variável nome realizando concatenação com o sobrenome
$nome .= $sobrenome;

//Impressão do nome agora concatenado, resultando em Seu Nome Sobrenome
echo $nome . PHP_EOL;
```

Você também pode visitar nossa aula no YouTube.

[10 - Operadores de Atribuição](https://www.youtube.com/watch?v=61yxPjmL-mQ&list=PL9colCIIhmx0y7-jyE-88D-xAGL7VtNxX&index=10)
</p>