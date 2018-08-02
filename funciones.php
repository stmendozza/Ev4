<?php
// función que muestra en una tabla cualquier arreglo de tipo matriz indexado, sin importar el número de filas o columnas que
// 	tenga, en este caso la tabla no tiene una fila en la que están los títulos de cada columna, solo que se muestren los datos ordenadamente. por ello los titulos de cada columna deven ponerse antes de llamar la funcion	de la siguiente forma
// echo "<table border='1'>";
// 		echo "<thead>";
// 		echo "<tr>";
// 			echo "<td>Nombre</td>";
// 			echo "<td>Apellido</td>";
// 			echo "<td>Celular</td>";
// 			echo "<td>Direccion</td>";
// 			echo "<td>Comida Favorita</td>";
// 			echo "<td>id</td>";
// 		echo "</tr>";
// 		echo "</thead>";
// 	mostrarTabla($listadoPersonas);
function mostrarTabla($arreglo){

		echo "<tbody>";
	//se recorre el array multidimencional indexado listado de personas por medio de for
	for ($fila=0; $fila < count($arreglo) ; $fila++) { //for que recorre todas las filas
	 	echo "<tr>";
        for ($columna =0 ; $columna < count($arreglo[$fila]) ; $columna ++) {//for que recorre todas las columnas 
        echo "<td witdh='100px' ><center><h3>".$arreglo[$fila][$columna]."</h3></center></td>";
        }
        echo "</tr>";
    }
        echo "<tbody>";
		echo "</table>";
	  
}