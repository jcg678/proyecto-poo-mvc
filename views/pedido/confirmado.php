<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'):?>
<h1>Tu pedido se ha confirmado </h1>
<p>Tu pedido ha sido guardado con exito, paga el pedido</p>
<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'): ?>
	<h1>Tu pedido no ha sido confirmado disculpa las molestias</h1>
<?php endif; ?>	