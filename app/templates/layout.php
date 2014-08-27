<!DOCTYPE html>
<html>
<head>
	<title>Informacion Producto</title>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo "css/".Config::$mvc_vis_css ?>"/>
</head>
<body>
	<!-- header -->
	<div id="cabecera">
		<h1>Información</h1>
	</div>
	<!-- fin del header -->
	
	<!-- Menu de navegacion -->
	<div id="menu">
		<hr/>
		<a href="index.php?ctl=inicio">inicio</a> |
		<a href="index.php?ctl=listar">ver alimentos</a> |
		<a href="index.php?ctl=insertar">insertar alimento</a> |
		<a href="index.php?ctl=buscar">buscar por nombre</a> |
		<a href="index.php?ctl=buscarAlimentosPorEnergia">buscar por energia</a> |
		<a href="index.php?ctl=buscarAlimentosCombinada">búsqueda combinada</a>
		<hr/>
	</div>
	<!-- fin del menu -->

	<!-- Content -->
	<div id="contenido">
		<?php echo $contenido ?>
	</div>
	<!-- fin del content -->

	<!-- footer -->
	<div id="pie">
		<hr/>
		<div align="center">- pie de página -</div>
	</div>
	<!-- fin del Footer -->
</body>
</html>