# Tipos Primitivos

Os tipos primitivos se referem aos tipos de dados que podem ser colocados (atribuídos) as variáveis, são chamados primitivos por serem de maior facilidade de atribuição e manipulação, pois todos conhecemos tipos naturalmente. São eles:

+ Número (inteiro)
+ Numérico (Ponto Flutuante / Número decimal / Float)
+ Boleano (Lógico, verdadeiro ou falso)
+ String (Textual)

Apenas com esses tipos de dados, já se pode criar diversas possibilidades e algoritmos de simples à complexos.

No Script dentro desta sessão chamado primitivos.php, você poderá ver as atribuições e retorno do script, através da CLI.

Por fim, você deverá ao acessar a pasta e o script, ir até seu terminal e executar o comando respectivo de execução CLI.

Vale salientar que ao executa o comando getType do PHP para obter como retorno dos tipos de variáveis, os respectivos retornos deverão ser:

+ String para texto
+ Integer para números inteiros
+ Double para Float ou números decimais
+ 1 para verdadeiro e 0 para falso quando boleano.

**Exemplo prático:**

```php
<?php

$string = "Essa variável é um texto";
$inteiro = 50;
$float = 15.75;
$boleana = true;

echo gettype($string) . PHP_EOL;
echo $string . PHP_EOL;

echo gettype($inteiro) . PHP_EOL;
echo $inteiro . PHP_EOL;

echo gettype($float) . PHP_EOL;
echo $float . PHP_EOL;

echo gettype($boleana) . PHP_EOL;
echo $boleana . PHP_EOL;

```

> **OBS:** Não precisa fechar a tag <?php quando se está trabalhando dentro de um arquivo .php.

Rode esse comando no terminal para ver o resultado:

```bash
php primitivos.php
```

**Visite a aula em vídeo no YouTube.**

[06 - Tipos Primitivos](https://www.youtube.com/watch?v=A884f4kiSW4)
