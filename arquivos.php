<?php 

function verificaSeArquivoExiste() {
	if(file_exists("texto.txt"))
		$fileStream = fopen("texto.txt", 'a+');
	else 
		$fileStream = fopen("texto.txt", 'a+');

	for ($i=0; $i < 10; $i++) { 
		fwrite($fileStream, "Olá mundo! testando.\n");
	}

	fclose($fileStream);

	$fileStream = fopen("texto.txt", 'a+');
	$fileSize = filesize("texto.txt");
	$conteudo = fread($fileStream, $fileSize);

	echo $conteudo;
	echo "--- impirmiu todo o arquivo ---<br>";

	fclose($fileStream);

	$fileStream = fopen("texto.txt", 'r');

	while( $linha = fgets($fileStream) ) {
		echo $linha;
	}

	echo "--- imprimiu linha por linha --- \n";

	@unlink("texto.txt");

	$fileStream = fopen("texto2.txt", 'w+');
	fwrite($fileStream, "Olá novamente, mundo!\n");
	fwrite($fileStream, "Este texto sobrescreve o anterior?\n");
	fwrite($fileStream, "NÃO!\n");

}