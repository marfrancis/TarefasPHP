<pre><?php 
// JSON
// 2. Criar uma variável $a contendo um array ( 'a'=>1, 'b'=>2, 'c'=>'Eu <3 JSON'):

$a = array ( 'a'=>1, 'b'=>2, 'c'=>'Eu <3 JSON');

// a. Fazer echo da variável $a.
@print($a);
echo "<br>";

// b. Utilizando json_encode, transformar o array em um json e atribuí-lo
// a $a.
$a = json_encode($a);

// c. Fazer echo da variável $a.
echo $a;
echo "<br>";
// d. Criar uma nova variável $b contendo o json_decode da variável $a.
$b = json_decode($a);

// e. Fazer echo de $b.
print_r($b);
echo "<br>";

// f. Imprimir a frase “Eu <3 JSON | 1 | 2 |” utilizando os dados da variável
// $b.
echo $b->c . " | " . $b->a . " | " . $b->b . " |";
echo "<br>";

include 'arquivos.php';
verificaSeArquivoExiste();


// ARQUIVOS
// 3. Criar um arquivo novo chamado arquivos.php.
// a. Criar uma função que verifique se existe um arquivo chamado
// texto.txt no mesmo diretório de arquivos.php.
// Se o arquivo existir,
// deve ser aberto com direitos de leitura e escrita, para que seja
// possível adicionar informações. Se ele não existir, deve ser criado
// com direitos de leitura e escrita.


// b. A frase “Olá mundo! testando.” deve ser escrita 100 vezes no
// arquivo, 1 vez por linha. Depois disso, o arquivo deve ser fechado.
// c. Mostrar o conteúdo do arquivo texto.txt, lendo todo o arquivo de
// uma vez.
// d. Mostrar o conteúdo do arquivo texto.txt, lendo e imprimindo linha
// por linha.
// e. Excluir o arquivo texto.txt
// f. Criar um novo arquivo chamado texto2.txt contendo o texto: “Olá
// novamente, mundo!”.
// g. Escrever no arquivo texto2.txt “Este texto sobrescreve o anterior?”.
// E verificar se ele realmente sobrescreveu o texto que estava no
// arquivo.
// h. Escrever no arquivo texto2.txt: “NÃO!” depois do texto que já existe.



// ARQUIVOS JSON
// 4. Criar um arquivo categorias.json com os seguintes dados:
// {“categorias” : [
// {“id”: 1, “nome”: “Esportes”},
// {“id”: 2, “nome”: “História”},
// {“id”: 3, “nome”: “Entretenimento”},
// {“id”: 4, “nome”: “Geografia”},
// {“id”: 5, “nome”: “Arte”}
// ]}
// a. Ler o arquivo e imprimir uma checkbox para cada categoria

$fileStream = fopen("categorias.json", "r");
$size = filesize("categorias.json");
$conteudo = fread($fileStream, $size);
$json = json_decode($conteudo);
?></pre>
<?php foreach ($json->categorias as $key => $categoria): ?>
	<p><label for="categoria_<?php echo $categoria->id ?>"><input type="checkbox" id="categoria_<?php echo $categoria->id ?>" value="<?php echo $categoria->id ?>"> <?php echo $categoria->nome ?></label></p>
	<?php endforeach ?>


	<script>
		setTimeout(()=>{
			window.location = window.location;
		},2e3);
	</script>