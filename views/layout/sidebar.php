<!--Barra Lateral-->
	        <aside id="lateral">
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
	        			<li><a href="#">Mis pedidos</a></li>
	        			<li><a href="#">Gestionar pedidos</a></li>
	        			<li><a href="#">Gestionar categorias</a></li>
	        		</ul>
	        	</div>
	        </aside>

			
			<!--Contenido Central-->
				<div id="central">	        	