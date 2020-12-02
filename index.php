<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Correios</title>
</head>
<body>

	<h1>Informe seu CEP:</h1>
	<form name="Buscacep" id="Buscacep">
	CEP:<input type="text" name="cep" id="cep"><br><br>
	<input type="submit" name="Buscar">
	</form>
	<div class="ResultadoCep"></div>


	<h2>Busca Preços e Prazo de Entrega:</h2>
	<form name="Form2" id="Form2">
		<input type="text" name="cepOrigem" id="cepOrigem" placeholder="CEPOrigem"><br><br>
		<input type="text" name="cepDestino" id="cepDestino" placeholder="CEPDesitno"><br><br>
		<input type="text" name="peso" id="peso" placeholder="Peso"><br><br>
		<input type="text" name="formato" id="formato" placeholder="Formato"><br><br>
		<input type="text" name="comprimento" id="comprimento" placeholder="Comprimento"><br><br>
		<input type="text" name="altura" id="altura" placeholder="Altura"><br><br>
		<input type="text" name="largura" id="largura" placeholder="Largura"><br><br>
		<input type="text" name="diametro" id="diametro" placeholder="diametro"><br><br>
		<input type="text" name="mao" id="mao" placeholder="mao"><br><br>
		<input type="text" name="valorDeclarado" id="valorDeclarado" placeholder="valorDeclarado"><br><br>
		<input type="text" name="avidoRecebimento" id="avidoRecebimento" placeholder="avidoRecebimento"><br><br>
		<input type="text" name="codigo" id="codigo" placeholder="codigo"><br><br>
		<input type="submit" name="Pesquisar"><br>
		<br>
	</form>
	<br>
	<form action="rastreio.php" method="post">  
		Digite o Codigo de Rastreio: <input type="text" name="codigo"><br><br>
		<input type=submit name="OK">

	</form>
	<div class="ResultadoPP"></div>


</body>
<script src="Jquery.js"></script>
<script src="Javascript.js"></script>
</html> 

