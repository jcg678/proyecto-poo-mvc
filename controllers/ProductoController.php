<?php
require_once 'models/producto.php';
class productoController{
	public function index(){
		require_once 'views/producto/destacado.php';
	}

	public function gestion(){
		Utils::isAdmin();
		$producto = new Producto();
		$productos = $producto->getAll();

		require_once 'views/producto/gestion.php';
	}

	public function crear(){
		Utils::isAdmin();
		require_once 'views/producto/crear.php';
	}

}