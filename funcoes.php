<?php 

function maior($valores = []) {
	global $numeroMagico;
	switch(sizeof($valores)) {
		case 1 : return $valores[0] > $numeroMagico ? $numeroMagico : $valores[0]; break;
		case 2 : $maior = $numeroMagico; break;
		default : $maior = array_shift($valores); break;
	}
	foreach ($valores as $key => $value) {
		if( $value > $maior ) $maior = $value;
	}
	return $maior;
}

function tabela($base = 0, $limite = 1) {
	return range($base, $limite);
}