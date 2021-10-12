# Condicional IF

<p align="justify">
A condicional IF, que vem do inglês "SE", faz a verificação entre expressões que podem conter valores diversos, sendo seu resultado, um valor lógico, em caso de o valor lógico da verificação ser falso, o bloco IF não será executado. Para esses casos nós temos o contrário do IF, que é o else, condição que é executada quando o valor lógico do IF for falso. 

Vale ressaltar que o else é uma expressão acessória do IF, não podendo ser utilizada de forma autoônoma, não é possível criar uma verificação de else (SE NÃO), sem ter o if (SE).

- Exemplo 1:

```php
if(1 > 0) {
     echo "Verdadeiro" . PHP_EOL;
 } else {
     echo "Entrei no bloco SENÃO" . PHP_EOL;
 }
```



No código acima, temos uma utilização simples do IF, comparando se o número 1 é maior que o número 2, sendo verdadeiro (true) o resultado dessa condição lógica, será executada a impressão do texto "Verdadeiro", caso falso, será executado o bloco else, com o resultado do texto "Entrei no bloco SENÂO".

- Exemplo 2:

```php
$idade = 27;
$matriculado = false;
$nome = 'Ruan';

 //If condições com variáveis
 if($idade > 26 && $matriculado == true) {
     echo "Matriculado" . PHP_EOL;
 } else {
     echo "Entrei no bloco SENÃO" . PHP_EOL;
 }
```

No segundo exemplo, temos a utilização das vriáveis guardando valores específicos para serem comparados. Neste caso a verificação que está sendo feita é se a idade que tem o valor de 27 é maior que 26, a primeira comparação (expressão) verdadeira, em seguida, verificamos se a variável matriculado que tem o valor falso, é igual a verdadeiro, deixando a segunda expressão falsa, logo, como utilizamos o conectivo "AND (e)" precisamos que ambas as expressões sejam verdadeiras.

- Exemplo 3:

```php
 //If aninhado ELSE IF
if($nome == "Lucas") {
    echo "Verdadeiro" . PHP_EOL;
} else if ($idade === 27) {
    echo "Idade OK" . PHP_EOL;
} else {
    echo "Nada feito";
}
```

No último exemplo temos o que é chamado de If aninhado ou múltipla verificação, onde a estrutura é simples, você pode realizar a primeira verificação e caso não seja verdadeiro o retorno, não abrir as chaves do else, mas sim, abrir outro if após a instrução else, ficando "else if", assim você pode realizar verificações encadeadas, por fim, não havendo mais verificações, você poderá abrir o bloco else e escrever a lógica que deseja executar no caso de nenhuma condição ser verdadeira.
</p>