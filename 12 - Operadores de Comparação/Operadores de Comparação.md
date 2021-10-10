# Operadores de Comparação

<p align="justify">
Os operadores de comparação estão diretamente ligados aos operadores lógicos, enquanto os operadores lógicos, fazem a ligação entre as expressões, os operadores de comparação fazem a real verificação dos valores das expressões afim de trazer o complemento aos operadores lógicos.

Os operadores de comparação que iremos abordar são:

- Maior (>)
- Menor (<)
- Igual (==)
- Maior Diferente (!=)
- Maior ou Igual (>=)
- Menor ou Igual (<=)
- Estritamente Igual (===)
- Estritamente Diferente (!==)
- Negação (!)

A utilização dos mesmos você irá verificar nos exemplos abaixo, onde serão utilizados números padrões afim de comparar e por fim colocado o resultado da expressão se verdadeira ou falsa.

```php
//Verifica apenas o valor dos itens
1 > 2 = false
1 < 2 = true
1 == 2 = false
1 != 2 = true
1 >= 2 = false
1 <= 2 = true

//Verifica o tipo do dado e o valor
2 === 2 = true
2 === "2" =  false
2 !== 2 = false
2 !== "2" = true
!false = true
```

Nós temos 2 tipos de verificações, as estritas e as não estritas, quando verificamos de forma não estrita verificamos apenas o valor da expressão, ou seja, caso eu tenha uma expressão que o valor de 1 sendo número e "1" sendo string, o resultado seria verdadeiro, porém quando verificamos estritamente, estamos buscando veriicar o tipo de dado e o valor, logo, a expressão do exemplo acima, verificando o valor de 1 e "1", o resultado é falso, pois o valor em si é igual, porém o tipo de dado não.

**Visite a aula em vídeo no YouTube.**

</p>

[12 -Operadores de Comparação](https://youtu.be/Qy31PHaIjhc)