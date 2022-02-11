<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario de operaciones</title>
</head>
<body>
	<h1>Formulario de operaciones</h1>
	<form action="operacion" method="GET">
		<label for="oper1">Operando 1:</label>
		<input type="text" id="oper1" name="oper1">
		<br>
		<label for="oper2">Operando 2:</label>
		<input type="text" id="oper2" name="oper2">
		<br>
		<input type="radio" id="s" name="operacion" value="sum" checked>
		<label for="s">Suma</label>
		<br>
		<input type="radio" id="r" name="operacion" value="res">
		<label for="r">Resta</label>
		<br>
		<input type="radio" id="m" name="operacion" value="mul">
		<label for="m">Multiplicación</label>
		<br>
		<input type="radio" id="d" name="operacion" value="div">
		<label for="d">División</label>
		<br>
		<br>
		<input type="submit" value="Operar">
	</form>
</body>
</html>