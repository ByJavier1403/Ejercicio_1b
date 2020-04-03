<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="es">
	<head>
		<title>Walmart</title>
		<link rel="stylesheet" href="estilos.css">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scake=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta charset="utf-8">
	</head>
	<body>
		<p><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2Fc%2Fca%2FWalmart_logo.svg%2F1280px-Walmart_logo.svg.png&f=1&nofb=1" align="middle" width="200" height="75" class="center"></p>
		<?php
			$productos = ['Lamina de 8cm X 10cm', 'Cordon flex 5mts', 'Led blanco brillante'];
			$precio = [580,380,10];
			$descuento = [0.05,0.03,0.02];
			$aux=0;
			if(isset($_POST['boton1'])) $aux = 0;
			if(isset($_POST['boton2'])) $aux = 1;
			if(isset($_POST['boton3'])) $aux = 2;
			print_r("El cliente: ");
			echo '<script>let name= prompt("Ingrese su nombre");
			document.write(name);</script>';
			print_r(" tiene una cuenta de:<br/>");
		?>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Precio</th>
				</tr>
			</thead>
			<tr>
			<td><?php echo $productos[$aux]; ?></td>
			<td><?php echo $precio[$aux]; ?></td>
			</tr>
			<tr>
			<td><?php echo 'DESCUENTO' ?></td>
			<td><?php $des=$descuento[$aux] * $precio[$aux]; echo $des; ?></td>
			</tr>
			<tr>
			<td><?php echo 'IVA'; ?></td>
			<td><?php $iva= $precio[$aux]* 0.16; echo $iva; ?></td>
			</tr>
			<tr>
			<td><?php echo 'TOTAL'; ?></td>
			<td><?php $total = $precio[$aux] + $iva - $des; echo $total; ?></td>
			</tr>
		</table>
		<footer><i>Hernández Estrada Javier David 4AMP <br/> Practica 1b, programa de facturación de 1 producto php y html</i></footer>
	</body>
</html>