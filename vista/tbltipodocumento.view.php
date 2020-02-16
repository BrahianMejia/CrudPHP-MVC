<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="content-type" content="text/html"; charset="UTF-8" />
		<title>Ejemplo 2 - MVC PHP</title>
	</head>
	<body>

		<h1>Nuevo registro</h1>

		<form name="form1" method="post" action="index.php?accion=guardar">
			<p>Nombre: <input type="text" name="txtnombre"></p>

			<p><input type="submit" name="btnguardar" value="Guardar"></p>
		</form>

		<br>

		<table border="1">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre documento</th>
					<th>Modificar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($consulta as $datos): ?>
					<tr>
						<td><?php echo $datos['idtipo']; ?></td>
						<td><?php echo $datos['nombre']; ?></td>
						<td><a href="index.php?accion=modificar&id=<?php echo $datos['idtipo']; ?>">Modificar</a></td>
						<td><a href="index.php?accion=eliminar&id=<?php echo $datos['idtipo']; ?>">Eliminar</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</body>
</html>