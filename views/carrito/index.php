<h1>Carrito de la compra</h1>
<?php if(isset($_SESSION['carrito']) && count($_SESSION['carrito'])>= 1): ?>
	<table>
		<tr>
			<th>Imagen</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Unidades</th>
			<th>Eliminar</th>				
		</tr>
		<?php 
			foreach ($carrito as $indice => $elemento): 
			$producto = $elemento['producto'];
		?>
			<tr>
				<td>			
					<?php if($producto->imagen != null): ?>
						<img src="<?=base_url?>uploads/images/<?=$producto->imagen?>" class="img_carrito" />
					<?php else: ?>
						<img src="<?=base_url?>assets/img/camiseta.png" class="img_carrito" />	
					<?php endif ?>	
				</td>
				<td><a href="<?=base_url?>producto/ver&id=<?=$producto->id?>"><?=$producto->nombre?></a></td>
				<td><?=$elemento['precio']?> Euros</td>
				<td><?=$elemento['unidades']?></td>
				<td><a href="<?=base_url?>carrito/delete&index=<?=$indice?>" class="button button-carrito button-red">Eliminar</a></td>
			</tr>	
		<?php endforeach ?>	
	</table>
	<br/>

	<div class="delete-carrito">
		<a href="<?=base_url?>carrito/delete_all" class="button button-delete button-red">Vaciar carrito</a>
	</div>
	<?php $stats=Utils::statsCarrito(); ?>
	<div class="total-carrito">
		<h3>Precio Total: <?=$stats['total']?> Euros</h3>	
		<a href="<?=base_url?>pedido/hacer" class="button button-pedido">Hacer Pedido</a>
	</div>
<?php else: ?>
	<h3>No tienes productos en el carrito</h3>
<?php endif; ?>