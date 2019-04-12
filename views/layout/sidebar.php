<!--Barra Lateral-->
	        <aside id="lateral">
	        	<div id="carrito" class="block_aside">
	        		<?php $stats = Utils::statsCarrito();?>
	        		<h3>Mi carrito</h3>
	        		<ul>
	        			<li><a href="<?=base_url?>carrito/index">Productos (<?=$stats['count']?>)</a></li>
	        			<li><a href="<?=base_url?>carrito/index">Total:<?=$stats['total']?> Euros</a></li>
	        			<li><a href="<?=base_url?>carrito/index">Ver el carrito</a></li>
	        		</ul>	
	        	</div>	
	        	<div id="login" class="block_aside">
					<?php if(!isset($_SESSION['identity'])):?> 
		        		<h3>Entrar a la web</h3>
		        		<form action="<?=base_url?>usuario/login" method="post">
		        			<label form="email">Email</label>
		        			<input type="email" name="email" />
		        			<label for="password">Password</label>
		        			<input type="password" name="password">
		        			<input type="submit" value="Enviar">
		        		</form>

	        		<?php else: ?>
	        			<h3><?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></h3>
	        		
	        		<?php endif; ?>
	        		
	        		<ul>	
	        			<?php if(isset($_SESSION['admin'])): ?>
	        				<li><a href="<?=base_url?>categoria/index">Gestionar categorias</a></li>
	        				<li><a href="<?=base_url?>producto/gestion">Gestionar productos</a></li>
	        				<li><a href="<?=base_url?>pedido/gestion">Gestionar pedidos</a></li>
	        			<?php endif; ?>

	        			<?php if(isset($_SESSION['identity'])): ?>
	        				<li><a href="<?=base_url?>pedido/mis_pedidos">Mis pedidos</a></li>
	        				<li><a href="<?=base_url?>usuario/logout">Cerrar sesión</a></li>
	        			<?php else: ?>	        				
	        				<li><a href="<?=base_url?>usuario/registro">Registrate</a></li>
	        			<?php endif; ?>
	        		</ul>
	        	</div>
	        </aside>

			
			<!--Contenido Central-->
				<div id="central">	        	