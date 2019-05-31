<pre><?php

// 1. Criar as seguintes variáveis e mostrá-las usando echo e var_dump: -->
//a Uma variável com um número inteiro. -->
$n1 = 10; var_dump($n1); echo "<br>";
//<!-- b. Uma variável com um número decimal. -->
$n2 = 10.5; var_dump($n2); echo "<br>";
//<!-- c. Uma variável com um caractere, usando aspas duplas. -->
$nome = "M"; var_dump($nome); echo "<br>";
//<!-- d. Uma variável com um caractere, usando aspas simples. -->
$nome = 'M'; var_dump($nome); echo "<br>";
//!-- e. Uma variável com uma cadeia, usando aspas simples. -->
$frase = 'Curso de Full Stack'; var_dump($frase); echo "<br>";
//<!-- f. Uma variável com uma cadeia, usando aspas duplas. -->
$frase = "Curso de Full Stack"; var_dump($frase); echo "<br>";
//<!-- g. Atribuir uma cadeia de caracteres à variável do ponto a. -->
$n1 = "Php é tenso"; var_dump($n1); echo "<br>";
//<!-- h. Atribuir um número decimal à variável do ponto e. -->
$frase = 25.5; var_dump($frase); echo "<br>";
//<!-- i. O que acontece com o tipo de dado das variáveis do ponto g e do ponto h? -->
echo "ponto g passa a ser string e ponto h passa a ser decimal <br>";
//<!-- j. O que acontece se atribuirmos outro valor numérico à variável do ponto a,mas entre aspas? -->
echo "ela continua a ser uma string";
// <!-- 2. Com base na frase “Três pratos de trigo para três tigres tristes”, criar uma variável
// para cada palavra, de forma que o nome de cada variável indique a posição da
// palavra na frase. -->
$palavra1 = "Três";
$palavra2 = "pratos";
$palavra3 = "de";
$palavra4 = "trigo";
$palavra5 = "para";
$palavra7 = "tigres";
$palavra8 = "Tristes";

//<!-- a. É possível atribuir um número ($1, $2, $3) como nome da variável? -->
echo "nao <br>";
//<!-- b. Atribuir a cada variável sua posição numérica escrita como texto ($um,$dois, $tres). -->
$um = $palavra1;
$dois = $palavra2;
$tres = $palavra3;
$quatro = $palavra4;
$cinco = $palavra5;
$seis = $palavra1;
$sete = $palavra7;
$oito = $palavra8;

//<!-- c. Imprimir a frase usando todas as variáveis declaradas. -->
echo "$um $dois $tres $quatro $cinco $seis $sete $oito <br>";
//<!-- d. Imprimir uma oração usando pelo menos duas variáveis já declaradas no ponto anterior. -->
echo "$um $dois <br>";

// <!-- 3. Declarar as variáveis a seguir e executar o seguinte código. Substituir a variável
// $meuDado pelas variáveis declaradas no nosso arquivo. Por último, executar o
// arquivo e observar se o tipo de dado retorna true ou false. -->
$variable01 = true;
$variable02 = false;
$variable03 = 0;
$variable04 = 1;
$variable05 = 6;
$variable06 = '';
$variable07 = "3";
$variable08 = "true";
$variable09 = 'false';
$variable10 = null;

function tipoDado($varN)
{
	if ( $varN == true )
	{
		echo 'o valor ===> ' . $varN . ' <=== é verdadeiro. <br>';
	}
	else
	{
		echo 'o valor ===> ' . $varN . ' <=== é falso. <br>';
	}
}

tipoDado($variable01);
tipoDado($variable02);
tipoDado($variable03);
tipoDado($variable04);
tipoDado($variable05);
tipoDado($variable06);
tipoDado($variable07);
tipoDado($variable08);
tipoDado($variable09);
tipoDado($variable10);

// <!-- 4. Criar um array numérico com 5 strings de animais diferentes. Em seguida, executar
// um var_dump para ver os resultados. -->
$meuArray = ["cavalo","cachorro","gato","vaca","elefante"];
var_dump($meuArray);
echo "<br>";

// <!-- a. Adicionar mais 2 animais ao final do array e executar outro var_dump para
// ver os resultados. -->
array_push($meuArray,"Tigre","pato");
var_dump($meuArray);
echo "<br>";
// <!-- b. Imprimir a seguinte oração “Eu gosto de animais: animal1, animal2, ...” com os
// 7 animais que declaramos. -->
echo "Eu gosto de animais:" . "$meuArray[0], $meuArray[1], $meuArray[2], $meuArray[3], $meuArray[4], $meuArray[5], $meuArray[6]";
echo "<br>";
// <!-- c. Substituir o primeiro animal por outro novo e imprimir o resultado. -->
$meuArray[0] = "Morcego";
// <!-- d. Adicionar um animal novo na posição 100 e imprimir o resultado. -->
$meuArray[99] = "Peixe";
// <!-- e. Adicionar um animal novo na posição 16 e imprimir o resultado. -->
$meuArray[15] = "Girafa";
print_r($meuArray);
echo "<br>";

// <!-- 5. Criar um array associativo que contenha as seguintes propriedades de um carro:
// Marca, Modelo, Cor, Ano e Placa. Em seguida, executar um var_dump para ver os
// resultados. -->
$meuArrayAssoc= [
	"Marca"=> "Peugeot",
	"Modelo"=> "XYZ",
	"Cor"=> "Prata",
	"Ano"=> 2013,
	"Placa"=> "fhp0945",
];
print_r($meuArrayAssoc);
// <!-- a. Adicionar o nome do dono na posição 0 do array e imprimir o resultado. -->
$meuArrayAssoc[0] = 'Marcelo';
print_r($meuArrayAssoc);
// <!-- b. Adicionar a empresa seguradora na posição 14 e imprimir o resultado. -->
$meuArrayAssoc[13] = 'Porto Seguro';
print_r($meuArrayAssoc);
// <!-- c. Adicionar o número da apólice de seguro à posição “apólice” e imprimir o // resultado. -->
$meuArrayAssoc['Apólice'] = '123.123.123';
print_r($meuArrayAssoc);

// <!-- d. Modificar o número da placa e imprimir o resultado. -->
$meuArrayAssoc['Placa'] = 'aaa1234';
print_r($meuArrayAssoc);

// <!-- e. Modificar o nome do dono e imprimir o resultado. -->
$meuArrayAssoc[0] = 'Carlos';
print_r($meuArrayAssoc);

// <!-- 6. Declarar a variável $inteiro e $decimal, com os respectivos valores. -->
$inteiro = 5;
$decimal = 1.5;
// <!-- a. Executar um echo com a soma dos dois valores. -->
echo $inteiro + $decimal;
echo "<br>";

// <!-- b. Executar um echo com a subtração dos dois valores. -->
echo $inteiro - $decimal;
echo "<br>";
// <!-- c. Executar um echo com a divisão dos dois valores. -->
echo $inteiro / $decimal;
echo "<br>";
// <!-- d. Executar um echo com a multiplicação dos dois valores. -->
echo $inteiro * $decimal;
echo "<br>";
// <!-- e. Atribuir a uma nova variável o resto da divisão dos valores e mostrar a nova variável. -->
$resto = $inteiro % $decimal;
echo $resto;
echo "<br>";
// <!-- f. Adicionar 1 a $inteiro e $decimal. -->
$inteiro += 1;
$decimal += 1;
// <!-- g. Adicionar 5 a $inteiro e subtrair 0,6 de $decimal. -->
$inteiro += 5;
$decimal -= 0.6;

// <!-- h. Na mesma linha, criar a variável $resultado, cujo valor seja o resultado da multiplicação $inteiro * 2, adicionar $decimal e dividir tudo pela metade de $inteiro. -->
$resultado = (($inteiro * 2) + $decimal) / ($inteiro/2);
echo $resultado;
echo "<br>";
// <!-- 7. Declarar uma variável com a string ‘Olá’ e outra com a string ‘mundo!’.
$var1 = "Olá";
$var2 = "mundo!";
// a. Em uma nova variável, concatenar as variáveis criadas recentemente para
// formar “Olá mundo!”. -->
$var3 = $var1 . " " . $var2;
echo $var3;
echo "<br>";
// <!-- b. Criar uma nova variável que concatene a variável criada no ponto a, e concatenar a ela a string ‘PHP é o máximo’. -->
$var4 = $var3 . " ‘PHP é o máximo’";
echo $var4;
echo "<br>";




?></pre>
