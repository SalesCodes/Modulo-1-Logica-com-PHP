# PHP BuiltIn (Servidor Interno do PHP)

<p align="justify"> Como conversado nas aulas anteriores o PHP necessida de um servidor que leita e interprete os scrips da linguagem, o servidor mais utilizado nos hospedagens e ambientes de desenvolvimento é o Apache, porém, não se faz necessária a instalação de pacotes externos como por exemplo Xampp, Lampp ou afins.

A partir da versão 5.4 do PHP já está disponível o PHP BuiltIn ou servidor Imbutido do PHP. Logo para este treinamento será possível realizar os exercícios sem necessidade de ambientes ou pacotes de ferramentas externas. 

Os requisitos para o treinamento são vontade de aprender, instalar o PHP e um editor de código como Sublime Text ou uma IDE por exemplo Visual Studio Code (VsCode).

Para executar seu primeiro script em PHP, crie uma pasta de preferência para poder acompanhar o curso e criar dentro da mesma seus scripts. Após criar a pasta entre dentro da mesma e crie um arquivo chamado index.php.

Os servidores em sua grande maioria ao lerem os arquivos das pastas irão procurar primordialmente por arquivos chamados index ou home, como porta de entrada para a sua aplicação.

Siga o passo a passo abaixo para criar e executar seu primeiro programa em PHP</p>


<p align="justify">1. Crie o arquivo index.php e coloque o texto a seguir dentro do mesmo.</p>
<pre> <?php

echo "Olá mundo, este é o meu primeiro script em PHP.";
</pre>

<p align="justify">2. Execute o comando a seguir no terminal para iniciar o servidor. </p>

<pre> php -S localhost:8000</pre>

<p align="justify"> 3. Resultado no navegador

Vá até o seu navegador e digite  endereço 127.0.0.1:8000 o retorno será o resultado textual do script, vale salientar que no trecho o ponto 2 os valores que vem após os ( : ) depois pontos, se refere a porta utilizada para iniciar o servidor, logo vocẽ poderá ter diversos scripts rodando em portas diferentes desde que elas não estejam ocupadas, ou seja, você pode iniciar com a porta 8000, 8001, 8002 e assim sucessivamente, caso deseje executar aplicações diferentes ao mesmo tempo.

Aproveite visita a aula em vídeo no Youtube. </p>

[03 - PHP BuiltIN](https://www.youtube.com/watch?v=IyN2dPgmGJI)