<pre><?php

// 1. Definir duas variáveis com números, comparar com um if para decidir qual
// deles é maior e imprimir “O maior número é N”, sendo que N é o valor da maior
// variável.
$n1 = 15;
$n2 = 10;

if($n1 > $n2) {
	echo "O maior valor é " .$n1;
}
echo "<br>";
// a. Adicionar um else ao exercício anterior para cobrir o caso inverso.
if($n1 > $n2) {
	echo "O maior valor é " .$n1;
} else {
	echo "O maior valor é " .$n2;
}
echo "<br>";

// 2. Usando a função mt_rand(x,y), em que “x” é o número mínimo e “y” é o número
// máximo, gerar um número aleatório entre 1 e 5, atribuí-lo a uma variável e
// imprimir essa variável apenas se o número gerado for 3 ou 5.
$numeroAleatorio = mt_rand(1,5);
if( $numeroAleatorio == 3 || $numeroAleatorio == 5 ) {
	echo "Número aleatório: " . $numeroAleatorio;
	echo "<br>";
}

// 3. Utilizando a variável do exercício anterior, imprimir “O número NÃO é 3” caso
// essa premissa seja verdadeira. Caso o número seja 3, imprimir simplesmente o
// número 3.
if( $numeroAleatorio == 3 ) {
	echo $numeroAleatorio;
} else {
	echo "O número NÃO é 3";
	echo "<br>";
}

// 4. Gerar um número entre 1 e 100, verificar se é maior que 50. Caso seja
// verdadeiro, retornar “O número é maior que 50” e, caso seja falso: “O número é
// menor que 50”.
$numeroAleatorio = mt_rand(1,100);
if( $numeroAleatorio > 50 ) {
	echo "O número é maior que 50";
	echo "<br>";
}
else {
	echo "O número é menor ou igual a 50";
	echo "<br>";
}


// 5. Gerar um número aleatório entre 0 e 100. Se ele for maior que 50 e par,
// imprimir “O número cumpre a condição”. Caso contrário, imprimir “O número
// NÃO cumpre a condição”
$numeroAleatorio = mt_rand(0,100);
if( $numeroAleatorio > 50 && $numeroAleatorio % 2 == 0 ) {
	echo "O número cumpre a condição";
	echo "<br>";
}
else {
	echo "O número NÃO cumpre a condição";
	echo "<br>";
}

// a. Modificar o exercício anterior para que o número 0 também cumpra a
// condição.
$numeroAleatorio = mt_rand(0,100);
if( ($numeroAleatorio > 50 && $numeroAleatorio % 2 == 0) || $numeroAleatorio == 0 ) {
	echo "O número cumpre a condição";
	echo "<br>";
}
else {
	echo "O número NÃO cumpre a condição";
	echo "<br>";
}

// 6. Teremos 3 variáveis: idade (um número), casado (um booleano) e sexo (string
// que pode ser “Masculino”, “Feminino” ou “Outro”). Se a pessoa tiver mais de 18
// anos e não for casada, será impressa a mensagem “Boas-vindas”.
$idade = 22;
$casado = true;
$sexo = "Masculino";
if( $idade > 18 && !$casado ) {
	echo "“Boas-vindas”";
	echo "<br>";
}

// a. Modificar o exercício anterior para também imprimir “Boas-vindas” se o
// sexo for “Outro”, sem importar o restante das condições.
if( 
	( $idade > 18 && !$casado ) || 
	( $sexo == 'Outro' )
) {
	echo "“Boas-vindas”";
	echo "<br>";
}

// 7. Definir uma variável chamada quantidadeDeAlunos, contendo um número. Em
// seguida, escrever o seguinte código: (sem copiar e colar!!)
$quantidadeDeAlunos = 40;
# if ($quantidadeDeAlunos) {
# 	echo “true”;
# } else {
# 	echo “false”;
# }
// a. O que é impresso?
echo "Será impresso true";
echo "<br>";

// b. Testar com os valores -100, -1, 0, 1 e 100 para quantidadeDeAlunos
// Testar o seguinte código:
# if ($quantidadeDeAlunos == 1 ) {
# 	echo “true”;
# } else {
# 	echo “false”;
# }
$quantidadeDeAlunos = -100;
if ($quantidadeDeAlunos == 1 ) { echo "“true”"; } else { echo "“false”"; }
echo "<br>";

$quantidadeDeAlunos = -1;
if ($quantidadeDeAlunos == 1 ) { echo "“true”"; } else { echo "“false”"; }
echo "<br>";

$quantidadeDeAlunos = 0;
if ($quantidadeDeAlunos == 1 ) { echo "“true”"; } else { echo "“false”"; }
echo "<br>";

$quantidadeDeAlunos = 1;
if ($quantidadeDeAlunos == 1 ) { echo "“true”"; } else { echo "“false”"; }
echo "<br>";

$quantidadeDeAlunos = 100;
if ($quantidadeDeAlunos == 1 ) { echo "“true”"; } else { echo "“false”"; }
echo "<br>";

// O que é impresso?

// 8. Se trocamos 1 por 0, o que é impresso?
$quantidadeDeAlunos = -100;
if ($quantidadeDeAlunos == 0 ) { echo "“true”"; } else { echo "“false”"; }
echo "<br>";

$quantidadeDeAlunos = -1;
if ($quantidadeDeAlunos == 0 ) { echo "“true”"; } else { echo "“false”"; }
echo "<br>";

$quantidadeDeAlunos = 0;
if ($quantidadeDeAlunos == 0 ) { echo "“true”"; } else { echo "“false”"; }
echo "<br>";

$quantidadeDeAlunos = 1;
if ($quantidadeDeAlunos == 0 ) { echo "“true”"; } else { echo "“false”"; }
echo "<br>";

$quantidadeDeAlunos = 100;
if ($quantidadeDeAlunos == 0 ) { echo "“true”"; } else { echo "“false”"; }
echo "<br>";


// 9. Definir uma variável $numero com um número. Imprimir “O número é par” ou
// “O número é impar”, de acordo com a situação. Este exercício deve ser
// resolvido com um if ternário (operador ?)
$numero = 1;
echo $numero % 2 == 0 ? 'O número é par' : 'O número é impar';
echo "<br>";

// 10. Utilizando mt_rand(), gerar um número aleatório entre 1 e 5 na variável “$i”.
// Utilizando SWITCH, imprimir “i é igual a X”.
$i = mt_rand(1,5);
switch($i) {
	case 1 : echo "i é igual a 1"; break;
	case 2 : echo "i é igual a 2"; break;
	case 3 : echo "i é igual a 3"; break;
	case 4 : echo "i é igual a 4"; break;
	case 5 : echo "i é igual a 5"; break;
}
echo "<br>";

// 11.Utilizando o mesmo switch, deixar apenas os casos do número 1 e 2. Se o
// número for outro, imprimir “NÃO é igual a 1 ou 2”
switch($i) {
	case 1 : echo "i é igual a 1"; break;
	case 2 : echo "i é igual a 2"; break;
	default : echo "i NÃO é igual a 1 ou 2"; break;
}
echo "<br>";

// 12.Utilizando mt_rand(), gerar dois números aleatórios entre 1 e 100 na variável
// “$x” e a variável “$y”. Imprimir qual é o maior entre os dois ou se são iguais
$x = mt_rand(1,100);
$y = mt_rand(1,100);
if( $x > $y ) echo "x é maior do que y";
else if( $y > $x ) echo "y é maior do que x";
else echo "x e y são iguais";
echo "<br>";

?></pre>