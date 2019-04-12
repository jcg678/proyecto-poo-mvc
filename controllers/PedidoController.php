<?php
require_once 'models/pedido.php';

class pedidoController
{
	
	public function hacer(){
		require_once 'views/pedido/hacer.php';
	}

	public function add(){
		if(isset($_SESSION['identity'])){
			$usuario_id=$_SESSION['identity']->id;
			$provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;
			$localidad = isset($_POST['localidad']) ? $_POST['localidad'] : false;
			$direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false; 
			$stats = Utils::statsCarrito();
			$coste= $stats['total'];
			if($provincia && $localidad && $direccion){
				
				$pedido = new Pedido();
				$pedido->setUsuario_id($usuario_id);
				$pedido->setProvincia($provincia);
				$pedido->setLocalidad($localidad);
				$pedido->setDireccion($direccion);
				$pedido->setCoste($coste);
				$save = $pedido->save();

				//guardar linea pedido
				$save_linea = $pedido->save_linea();



				if($save && $save_linea){
					$_SESSION['pedido'] = "complete";
				}else{
					$_SESSION['pedido'] = "failed";
				}
				
			}else{
				$_SESSION['pedido'] = "failed";
			}
			header("Location:".base_url.'pedido/confirmado');

		}else{
			header('Location:'.base_url);
		}
	}

	public function confirmado(){
		$pedido = new Pedido();
		if(isset($_SESSION['identity'])){
			$pedido->setUsuario_id($_SESSION['identity']->id);
			$pedido=$pedido->getOneByUser();
			$pedido=$pedido->fetch_object();

			$pedido_productos= new Pedido();
			$productos=$pedido_productos->getProductosByPedido($pedido->id);
			
		}
		require_once 'views/pedido/confirmado.php';
	}

	public function mis_pedidos(){
		Utils::isIdentity();
		$pedido = new Pedido();
		$pedido->setUsuario_id($_SESSION['identity']->id);
		$pedidos=$pedido->getAllByUser();

		require_once 'views/pedido/mis_pedidos.php';
	}
}