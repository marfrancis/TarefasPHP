<pre><?php
$numeroMagico = 14;

// AULA 05 - FUNÇÕES
// 1.	Gerar um arquivo chamado funcoes.php:
include 'funcoes.php';
// a.	Definir uma função maior() que receba 3 números e retorne o maior deles.
echo maior([3,7,2]);
echo "<br>";

// b.	Definir uma função tabela() que receba um parâmetro base, um parâmetro limite, e retorne um array com a sequência de números a partir do número base até o número limite.
print_r( tabela(5,15) );
echo "<br>";

// c.	Definir uma variável chamada numeroMagico, que contenha um número. Tal variável deverá estar na primeira linha do nosso código PHP.

// d.	Modificar maior() de forma que, se receber apenas 2 parâmetros, a função compare esses dois números com numeroMagico.
echo maior([3,7]);
echo "<br>";

// e.	Modificar tabela de forma que, se a receber apenas um parâmetro, a função use numeroMagico como limite
echo maior([20]);
echo "<br>";

// 2.	Gerar um arquivo chamado superficie.php:
include 'superficie.php';
// a.	Definir uma função triangulo() que retorne sua superfície.
echo triangulo(3);
echo "<br>";

// b.	Definir uma função retangulo() que retorne sua superfície.
echo retangulo(5, 6);
echo "<br>";

// c.	Definir uma função quadrado() que retorne sua superfície.
echo quadrado(5);
echo "<br>";

// d.	Utilizando a função pi(), definir uma função circulo() que retorne sua superfície.

// 3.	Gerar um arquivo chamado incluir.php que retorne um echo com a seguinte string “Sou incluir.php”.
// a.	Incluir no arquivo, cumprimento.php. O que acontece?
// b.	Substituir include por require. O que acontece?
// c.	Gerar na mesma pasta um arquivo cumprimento.php que faça somente echo “Olá, Mundo”. O que acontece agora com o ponto a e o ponto b?
// d.	No arquivo incluir.php, substituir o require por include, e incluir 3 vezes o mesmo arquivo. O que acontece?
// e.	O arquivo incluir.php, substituir todos os include por include_once. 

?></pre>