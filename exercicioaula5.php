1. Criar um arquivo imprimir.php que imprima a variável $_GET através de
um var_dump.
2. Com base no seguinte código:
<!DOCTYPE HTML>
<html>
<body>
<form action="imprimir.php" method="get">
Nome: <input type="text" name="nome"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
</body>
</html>
a. O que acontece agora em imprimir.php?
b. Modificar imprimir.php para que imprima algum valor específico
de $_GET.
c. Modificar imprimir.php para que imprima todos os valores
utilizando um foreach.
3. Modificar o HTML do ponto 2 para que ele envie os dados através de
POST. Como deveríamos modificar imprimir.php para que continue
funcionando?
4. Adicionar ao formulário os seguintes inputs:
a. Adicionar uma checkbox com opções, que responda à pergunta
“Como você ficou sabendo deste site?”.
b. Adicionar um radio button para selecionar o sexo.
c. Adicionar um select de 1 a 10 que responda à pergunta “Dormiu
bem ontem?”.
d. Adicionar uma checkbox para aceitar “Termos e Condições”.
e. Completar o formulário, selecionando várias opções das
checkboxes, e enviá-lo através do método POST. O resultado
mudou como você esperava?
5. Testar a função de php getAllHeaders() e imprimir o resultado. O que
encontramos? Imprimir todos os valores usando foreach.
6. Assim como imprimimos $_POST e $_GET, existem outras variáveis
globais vamos imprimir. Testar cada variável em um pedido vazio ou
vindo de um formulário:
a. $_SERVER
b. $_FILES
c. $_REQUEST
d. $_SESSION
e. $_ENV
f. $_COOKIE
g. $GLOBALS