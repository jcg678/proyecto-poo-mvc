<h1>Detalle de pedido</h1>

	<?php if(isset($pedido)): ?>

		<?php if(isset($_SESSION['admin'])): ?>
			<h3>Cambiar estado del pedido</h3>
			<form action="<?=base_url?>pedido/estado" method="post">
				<input type="hidden" name="pedido_id" value="<?=$pedido->id?>" />
				<select name="estado">
					<option value="corfirm" <?=$pedido->estado == "corfirm" ? 'selected' : '' ?> >Pendiente</option> 
					<option value="preparation" <?=$pedido->estado == "preparation" ? 'selected' : '' ?>>En preparacion</option>
					<option value="ready" <?=$pedido->estado == "ready" ? 'selected' : '' ?> >Praparado para enviar</option>
					<option value="sended" <?=$pedido->estado == "sended" ? 'selected' : '' ?> >Enviado</option>												
				</select>
				<input type="submit" value="Cambiar estado">
			</form>
			<br/>
		<?php endif; ?>


		<h3>Detalles del envio</h3><br/>
		Estado:<?=Utils::showStatus($pedido->estado)?><br/>
		Provincia:<?=$pedido->provincia?><br/>
		Ciudad:<?=$pedido->localidad?><br/>
		Direccion:<?=$pedido->direccion?><br/><br/>
		<h3>Datos del Pedido:</h3><br/>

		Número de pedido:<?=$pedido->id?><br/>
		Total a pagar:<?=$pedido->coste?><br/>
		Productos:<br/>
		
		<TABLE>
			<tr>
				<th>Imagen</th>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Unidades</th>				
			</tr>
		<?php while($producto = $productos->fetch_object()): ?>

		<tr>
			<td>			
				<?php if($producto->imagen != null): ?>
					<img src="<?=base_url?>uploads/images/<?=$producto->imagen?>" class="img_carrito" />
				<?php else: ?>
					<img src="<?=base_url?>assets/img/camiseta.png" class="img_carrito" />	
				<?php endif ?>	
			</td>
			<td><a href="<?=base_url?>producto/ver&id=<?=$producto->id?>"><?=$producto->nombre?></a></td>
			<td><?=$producto->precio?> Euros</td>
			<td><?=$producto->unidades?></td>
		</tr>	

		<?php endwhile; ?> 
		</TABLE>	

	<?php endif; ?>