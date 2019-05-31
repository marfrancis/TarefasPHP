<pre><?php

// 1. Utilizando um for, imprimir os números de 1 a 100.
$imprimir = [];
for ($i=0; $i < 100; $i++) { 
	$imprimir[] = $i+1;
}
print_r($imprimir);

// 2. Modificar o exercício anterior para que, em vez de parar no número 100, pare
// em um número gerado aleatoriamente entre 0 e 100.
$imprimir = [];
$pararEm = mt_rand(0,100);
for ($i=0; $i < $pararEm; $i++) { 
	$imprimir[] = $i+1;
}
print_r($imprimir);

// 3. Mostrar a tabela de multiplicação do 2 utilizando um for.
$imprimir = [];
for ($i=1; $i <= 10; $i++) { 
	$imprimir["2 x $i"] = $i * 2;
}
print_r($imprimir);

// 4. Utilizando um while, fazer um programa que lance uma moeda (escolhendo
// um número aleatório que pode ser 0 ou 1) até tirar 5 vezes cara (o número 1).
// Ao terminar, imprimir o número de lançamentos da moeda até tirar 5 vezes
// cara.
$vezesJogadas = 0;
$vezesConsecutivas = 0;
while( $vezesConsecutivas < 5 ) {
	if( mt_rand(0,1) == 1 ) {
		$vezesConsecutivas++;
	}
	else {
		$vezesConsecutivas = 0;
	}
	$vezesJogadas++;
}
print_r(['vezes jogadas' => $vezesJogadas]);

// 5. Utilizando um do/while, realizar um programa que lance a moeda até tirar
// cara (o número 1). No final do programa, imprimir quantos lançamentos da
// moeda forem necessários.
$moeda = 0;
$vezesJogadas = 0;
do {
	$moeda = mt_rand(0,1);
	$vezesJogadas++;
} while( $moeda != 1 );
print_r(['vezes jogadas' => $vezesJogadas]);

// 6. Definir um array com 5 strings que sejam nomes. Percorrer esse array para
// imprimir todos os nomes na tela.
$nomes = ['Marcelo', 'Frederico', 'Carlos','Miguel','Rafael'];

// a. Resolver este problema com um for.
for ($i=0; $i < sizeof($nomes); $i++) { 
	print_r([$nomes[$i]]);
}

// b. Resolver este problema com while.
$i = 0;
while($i < sizeof($nomes)) {
	print_r([$nomes[$i]]);
	$i++;
}

// c. Resolver este problema com um do/while.
$i = 0;
do {
	print_r([$nomes[$i]]);
	$i++;
} while($i < sizeof($nomes));

// 7. Definir um array com 10 números aleatórios entre 0 e 10. Percorrer esse array
// para imprimir todos os números. A execução deve terminar se algum dos
// números encontrados for 5 (a mensagem impressa deve ser “Encontramos um
// 5!”).
$numerosAleatorios = [
	mt_rand(0,10),
	mt_rand(0,10),
	mt_rand(0,10),
	mt_rand(0,10),
	mt_rand(0,10),
	mt_rand(0,10),
	mt_rand(0,10),
	mt_rand(0,10),
	mt_rand(0,10),
	mt_rand(0,10)
];

// a. Resolver este problema com um for.
for ($i=0; $i < sizeof($numerosAleatorios); $i++) {
	if( $numerosAleatorios[$i] == 5 ) {
		echo "Encontramos um 5!";
		echo "<br>";
		break;
	}
	echo "Número da vez: " . $numerosAleatorios[$i];
	echo "<br>";
}

// b. Resolver este problema com um while.
$i = 0;
while($i < sizeof($numerosAleatorios)) {
	if( $numerosAleatorios[$i] == 5 ) {
		echo "Encontramos um 5!";
		echo "<br>";
		break;
	}
	echo "Número da vez: " . $numerosAleatorios[$i];
	echo "<br>";
	$i++;
}

// c. Resolver este problema com um do/while.
$i = 0;
do {
	if( $numerosAleatorios[$i] == 5 ) {
		echo "Encontramos um 5!";
		echo "<br>";
		break;
	}
	echo "Número da vez: " . $numerosAleatorios[$i];
	echo "<br>";
	$i++;
}
while($i < sizeof($numerosAleatorios));

// 8. Utilizando a função “Range”(http://php.net/manual/en/function.range.php),
// criar um intervalo de letras (de a até o), imprimir um valor que diga “Na posição
// [index], está o valor [value]”, em que [value] será substituído por cada valor do
// array e [index] representa o índice.
$letras = range("a", "o");
for ($i=0; $i < sizeof($letras); $i++) { 
	echo "Na posição $i, está o valor " . $letras[$i];
	echo "<br>";
}

// 9. Definir uma variável $mascote que seja um array associativo
// a. No índice animal, deve dizer que animal é.



// b. No índice idade, deve dizer a idade.

// c. No índice altura, deve dizer a altura.

// d. No índice nome, deve dizer o nome

$mascote = [
	"Animal"=> 'Cachorro',
	"Idade"=> 6,
	"altura"=> 0.60,
	"nome"=> 'Bob',


];

// 10. Percorrer os valores do array com um foreach que imprima (por exemplo):
// animal: cachorro
// idade: 5
// altura: 0,60
// nome: Sonic

foreach ($mascote as $key => $value) {
	echo "$key => $value";
	echo "<br>";
	
}
// 11. A partir de um arquivo com a seguinte variável definida:
$ceu = array( "Itália"=>"Roma", "Luxemburgo"=>"Luxemburgo",
"Bélgica"=> "Bruxelas", "Dinamarca"=>"Copenhagen",
"Finlândia"=>"Helsinki", "França" => "Paris",
"Eslováquia"=>"Bratislava", "Eslovênia"=>"Liubliana",
"Alemanha" => "Berlim", "Grécia" => "Atenas",
"Irlanda"=>"Dublin", "Holanda"=>"Amsterdã",
"Portugal"=>"Lisboa", "Espanha"=>"Madri",
"Suécia"=>"Estocolmo", "Reino Unido"=>"Londres",
"Chipre"=>"Nicósia", "Lituânia"=>"Vilnius", "República
Tcheca"=>"Praga", "Estônia"=>"Tallinn",
"Hungria"=>"Budapeste", "Letônia"=>"Riga",
"Malta"=>"Valletta", "Áustria" => "Viena",
"Polônia"=>"Varsóvia") ;
// Criar um script que mostre o nome da capital e o país a partir da variável $ceu.
foreach ($ceu as $key => $value) {
	echo "$key => $value";
	echo "<br>";
	

}

// Opcional: Organizar a lista por nome de país.
foreach ($ceu as $key => $value) {
	echo ("A capital da " . $key . " é " . $value);
	echo "<br>";
}

// Exemplo de output:

// A capital da Holanda é Amsterdã.

// 12. A partir de um arquivo com a seguinte variável definida:
$ceu = [
"Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé", "naAmerica"=> true],
"Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo","naAmerica"=> true],
"Colômbia" => ["Cartagena", "Bogotá", "Barranquilla","naAmerica"=> true],
"França" => ["Paris", "Nantes", "Lyon","naAmerica"=> false],
"Itália" => ["Roma", "Milão", "Veneza","naAmerica"=> false],
"Alemanha" => ["Munique", "Berlim", "Frankfurt","naAmerica"=>false]
];
// Criar um script que mostre o nome de cada país e suas cidades a partir da
// variável $ceu com o seguinte formato:
// As cidades da Argentina são:

foreach ($ceu as $pais => $value) {
	if ($value['naAmerica']){
		echo $pais;
		foreach($value['cidades']as $value){
			echo "$cidade <br>";
		}

	}
}
// ● Buenos Aires
// ● Córdoba
// ● Santa Fé
// As cidades do Brasil são:
// ● Brasília
// ● Rio de Janeiro
// ● São Paulo
// 13. A partir do exercício anterior:
// ● Adicionar a cada país um dado extra, além das cidades, chamado
// naAmerica. Esse valor deve ser true ou false.
// ● Fazer com que a impressão anterior não mostre países que não estejam
// na América.
// IMPORTANTE: Para que isso funcione bem, os alunos devem criar um array
// associativo para cada país, de forma que cada país tenha os dados de suas
// cidades e naAmerica.
?></pre>