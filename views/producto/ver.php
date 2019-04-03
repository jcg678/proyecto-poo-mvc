<h1></h1>
<?php if(isset($pro)): ?>
<h1><?=$pro->nombre?></h1>
						<?php if($pro->imagen != null): ?>
								<img src="<?=base_url?>uploads/images/<?=$pro->imagen?>">
							<?php else: ?>
								<img src="<?=base_url?>assets/img/camiseta.png">	
							<?php endif ?>	
							
						<p><?=$pro->precio?> Euros</p>
						<a href="" class="button">Comprar</a>

<?php else: ?>
	<h1>No existe el producto</h1>
<?php endif; ?> 
