
<!DOCTYPE HTML>
<html>
<body>
	<pre><?php var_dump($_REQUEST) ?></pre>
	<pre><?php var_dump($_REQUEST['nome']) ?></pre>
	<pre><?php foreach ($_REQUEST as $key => $value): ?><?php var_dump($value) ?><?php endforeach ?></pre>
	<pre><?php print_r(getAllHeaders()); ?></pre>
	<?php $headers = getAllHeaders() ?>
	<?php foreach ($headers as $key => $header): ?>
		<pre><?php var_dump($header) ?></pre>
	<?php endforeach ?>
	<pre><?php print_r($_SERVER) ?></pre>
	<pre><?php print_r($_FILES) ?></pre>
	<pre><?php print_r($_REQUEST) ?></pre>
	<pre><?php print_r($_SESSION) ?></pre>
	<pre><?php print_r($_ENV) ?></pre>
	<pre><?php print_r($_COOKIE) ?></pre>
	<pre><?php print_r($GLOBALS) ?></pre>
	<form action="imprimir.php" method="get">
		<h3>Enviando por GET</h3>
		Nome: <input type="text" name="nome"><br>
		E-mail: <input type="text" name="email"><br>
		<input type="submit">
	</form>
	<form action="imprimir.php" method="post">
		<h3>Enviando por POST</h3>
		Nome: <input type="text" name="nome"><br>
		E-mail: <input type="text" name="email"><br>
		Como você ficou sabendo deste site?
		<label><input type="checkbox" name="como_ficou_sabendo[]" value="Jornal"> Jornal</label>
		<label><input type="checkbox" name="como_ficou_sabendo[]" value="Redes Sociais"> Redes Sociais</label>
		<br>
		Sexo: 
		<label><input type="radio" name="sexo" value="Masculino">Masculino</label>
		<label><input type="radio" name="sexo" value="Feminino">Feminino</label>
		<br>
		“Dormiu bem ontem?
		<select name="dormiu_bem">
			<?php for($i = 1; $i <= 10; $i++) { ?>
				<option value="<?php echo $i ?>"><?php echo $i ?></option>
			<?php } ?>
		</select>
		<br>
		<label><input type="checkbox" name="termos" value="1">Li e aceito os termos</label>
		<br>
		<input type="submit">
	</form>
</body>
</html>