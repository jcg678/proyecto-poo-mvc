
<?php if(isset($pro)): ?>
<h1><?=$pro->nombre?></h1>
	<div id="detail-product">
		<div class="image">
			<?php if($pro->imagen != null): ?>
				<img src="<?=base_url?>uploads/images/<?=$pro->imagen?>">
			<?php else: ?>
				<img src="<?=base_url?>assets/img/camiseta.png">	
			<?php endif ?>	
		</div>			
		<div class="data">
			<p class="description"><?=$pro->descripcion?></p>			
			<p class="price"> <?=$pro->precio?> Euros</p>
			<a href="" class="button">Comprar</a>
		</div>				
	</div>					
<?php else: ?>
	<h1>No existe el producto</h1>
<?php endif; ?> 
