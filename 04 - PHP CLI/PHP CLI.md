# PHP CLI

O PHP CLI ou Command Line Interface do PHP, é a interface de linha de comandos que permite execução dos scripts direto no seu terminal, logo, não é necessário subir o servidor para verificar os retornos.

A CLI é uma ferramenta muito utilizada pelos programadores afim de criar ou verificar retorno de algoritmos / scripts, como por exemplo, é totalmente possível com PHP criar um script que crie um padrão de pastas no sistema, bem como realizar cálculos complexos de acordo com variáveis pré-definidas.

A seguir poderá ser visto um exemplo de como utilizar a CLI do PHP.

- Crie um arquivo com o nome ```calculo.php``` em seguida digite os códigos do script abaixo:

```php
<?php

$nota1 = 9;
$nota2= 10;
$nota3 = 7.8;
$nota4 = 5.9;

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

echo $media . PHP_EOL;
```

- Por fim execute o comando abaixo no terminal, desde que esteja na pasta onde o arquivo está contido.

```bash
php calculo.php
```

O retorno esperado é um número mais exatamente: **8.175.**

Se deu tudo certo, você poderá alterar os valores das notas e executar o comando diversas vezes para verificar o resultado dos cálculos, a partir deste momento, você já poderá criar seus próprios scripts seguindo a mesma linha de raciocínio.

**Visite a aula em vídeo no YouTube.**

[04 - PHP CLI](https://www.youtube.com/watch?v=QSsDptVx-1U)
