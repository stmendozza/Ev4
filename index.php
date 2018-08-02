<!DOCTYPE html>
<html>
<head>
	<title>Evidencia 4| Cristhian Danilo Carrillo Mendoza</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	require_once "./funciones.php";
	$listadoAsientos = array(
		array("", "1", "2", "3", "4", "5"),
		array("1", "L", "L", "L", "L", "L"),
		array("2", "L", "L", "L", "L", "L"),
		array("3", "L", "L", "L", "L", "L"),
		array("4", "L", "L", "L", "L", "L"),
		array("5", "L", "L", "L", "L", "L")
	);

	$fila = $_POST['fila'];
	$puesto = $_POST['puesto'];
	$comprar = $_POST['comprar'];
	$reservar = $_POST['reservar'];
	$liberar = $_POST['liberar'];

	switch (variable) {
		case 'value':
			# code...
			break;
		
		default:
			# code...
			break;
	}
	 ?>
	<center>
	<table width="300px" border="2">
		<tr>
			<td><center><h1>ESCENARIO</h1></center></td>
		</tr>
	</table>
	<table width="300px" border="2">
		<thead >
		
			
		
		</thead>
		<tbody>
			<?php 
			mostrarTabla($listadoAsientos);
			?>
		</tbody>
	</table>
	
		<form>
			<label>Fila</label>
			<input type="number" name="fila" placeholder="Fila">
			<br>
			<label>Puesto</label>
			<input type="number" name="puesto" placeholder="Puesto">
			<br>
			<select name="solicitud">
				<option value="V">Comprar</option>
				<option value="R">Reservar</option>
				<option value="L">Liberar</option>
			</select>
			<br>
			<input type="submit" name="enviar" value="Enviar">
			<input type="submit" name="borrar" value="Borrar">
			</form>
	</center>
</body>
</html>