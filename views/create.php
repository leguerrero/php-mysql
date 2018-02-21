<!DOCTYPE html>
<html>
<head>
	<title>Crear Registro</title>
</head>
<body>
	<div class="contenedor">
		
		<form method = "post" 
			   action="../controlador/biblioteca.php"
		>
		
		<fieldset>
			<legend>Datos del Libro</legend>
			<div class="row codigo">
				<label for"codigo">Codigo</label>
				<input id="codigo" name="codigo" type="text"
				maxlength="8" requerid placeholder="ABCD12" 
				>
			</div>
			<div class="row titulo">
				<label for"titulo">Titulo</label>
				<input id="titulo" name="titulo" type="text"
				maxlength="20" requerid placeholder="EL secreto" 
				>
			</div>
			<div class="row autor">
				<label for"autor">Autor</label>
				<input id="autor" name="autor" type="text"
				maxlength="30" requerid placeholder="Luis Luis" 
				>
			</div>
			<div class="row fpublicacion">
				<label for"fpublicacion">Fecha Publicacion</label>
				<input id="fpublicacion" name="fpublicacion" type="date"
				requerid placeholder="Inserte DD/MM/YY" 
				>
			</div>
			<div class="row editorial">
				<label for"editorial">Editorial</label>
				<input id="editorial" name="editorial" type="text"
				maxlength="40" placeholder="uno" 
				>
			</div>
			<br>
			<input type="submit" name="Enviar">

		</fieldset>	

		</form>

	</div>
</body>
</html>