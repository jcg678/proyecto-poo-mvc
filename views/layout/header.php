
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Tienda de Camisetas</title>
		<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/styles.css">
	</head>	
	<body>
		<div id="container">
			<!--Cabecera-->
			<header id="header">
				<div id="logo">
					<img src="<?=base_url?>assets/img/camiseta.png" alt="camiseta logo" />
					<a href="index.php">
						Tienda de camisetas
					</a>	
				</div>	
			</header>
			<!--Menu-->
			<?php $categorias= Utils::showCategorias(); ?>
			<nav id="menu">
				<ul>
					<li>
						<a href="#">Inicio</a>
					</li>
					<?php while($cat = $categorias->fetch_object()): ?>
					<li>
						<a href="#"><?=$cat->nombre?></a>
					</li>
					<?php endwhile; ?>
																			
				</ul>	
				
			</nav>

			<div id="content">