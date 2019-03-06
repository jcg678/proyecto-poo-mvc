<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Tienda de Camisetas</title>
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	</head>	
	<body>
		<div id="container">
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
	        		<h3>Entrar a la web</h3>
	        		<form action="#" method="post">
	        			<label form="email">Email</label>
	        			<input type="email" name="email" />
	        			<label for="password">Password</label>
	        			<input type="password" name="password">
	        			<input type="submit" value="Enviar">
	        		</form>
	        		<ul>	
	        			<li><a href="#">Mis pedidos</a></li>
	        			<li><a href="#">Gestionar pedidos</a></li>
	        			<li><a href="#">Gestionar categorias</a></li>
	        		</ul>
	        	</div>
	        </aside>	
			<!--Contenido Central-->
				<div id="central">
					<h1>Productos Desctacados</h1>
					<div class="product">
						<img src="assets/img/camiseta.png">
						<h2>Camiseta Azul Ancha</h2>
						<p>30 Euros</p>
						<a href="" class="button">Comprar</a>
					</div>
					<div class="product">
						<img src="assets/img/camiseta.png">
						<h2>Camiseta Azul Ancha</h2>
						<p>30 Euros</p>
						<a href="" class="button">Comprar</a>
					</div>
					<div class="product">
						<img src="assets/img/camiseta.png">
						<h2>Camiseta Azul Ancha</h2>
						<p>30 Euros</p>
						<a href="" class="button">Comprar</a>
					</div>	
					<div class="product">
						<img src="assets/img/camiseta.png">
						<h2>Camiseta Azul Ancha</h2>
						<p>30 Euros</p>
						<a href="" class="button">Comprar</a>
					</div>	
					<div class="product">
						<img src="assets/img/camiseta.png">
						<h2>Camiseta Azul Ancha</h2>
						<p>30 Euros</p>
						<a href="" class="button">Comprar</a>
					</div>																			
				</div>


		    </div>
			<!-- Pie de Pagina -->
			<footer id="footer">
				<p>Desarrollado  por JD &copy; en <?=date('Y')?> </p>
				
			</footer>
	</div>
	</body>	
</html>