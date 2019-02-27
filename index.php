<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Tienda de Camisetas</title>
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	</head>	
	<body>
		<!--Cabecera-->
		<header id="header">
			<div id="logo">
				<img src="assets/img/camiseta.png" alt="camiseta logo" />
				<a href="index.php">
					Tienda de camisetas
				</a>	
			</div>	
		</header>
		<!--Menu-->
		<nav id="menu">
			<ul>
				<li>
					<a href="#">Inicio</a>
				</li>
				<li>
					<a href="#">Cat 1</a>
				</li>
				<li>
					<a href="#">Cat 2</a>
				</li>
				<li>
					<a href="#">Cat 3</a>
				</li>
				<li>
					<a href="#">Cat 4</a>
				</li>																	
			</ul>	
			
		</nav>

		<div id="content">
		<!--Barra Lateral-->
        <aside id="lateral">
        	<div id="login" class="block_aside">
        		<form action="#" method="post">
        			<label form="email">Email</label>
        			<input type="email" name="email" />
        			<label for="password">Password</label>
        			<input type="password" name="password">
        			<input type="submit" value="Enviar">
        		</form>	
        		<a href="#">Mis pedidos</a>
        		<a href="#">Gestionar pedidos</a>
        		<a href="#">Gestionar categorias</a>
        	</div>
        </aside>	
		<!--Contenido Central-->
			<div id="central">
				<div class="product">
					<img src="assets/iimg/camiseta.png">
					<h2>Camiseta Azul Ancha</h2>
					<p>30 Euros</p>
					<a href="">Comprar</a>
				</div>
				<div class="product">
					<img src="assets/img/camiseta.png">
					<h2>Camiseta Azul Ancha</h2>
					<p>30 Euros</p>
					<a href="">Comprar</a>
				</div>
				<div class="product">
					<img src="assets/img/camiseta.png">
					<h2>Camiseta Azul Ancha</h2>
					<p>30 Euros</p>
					<a href="">Comprar</a>
				</div>	
				<div class="product">
					<img src="assets/img/camiseta.png">
					<h2>Camiseta Azul Ancha</h2>
					<p>30 Euros</p>
					<a href="">Comprar</a>
				</div>	
				<div class="product">
					<img src="assets/img/camiseta.png">
					<h2>Camiseta Azul Ancha</h2>
					<p>30 Euros</p>
					<a href="">Comprar</a>
				</div>																			
			</div>


	    </div>
		<!-- Pie de Pagina -->
		<footer id="footer">
			<p>Desarrollado  por JD &copy; en <?=date('Y')?> </p>
			
		</footer>
	</body>	
</html>