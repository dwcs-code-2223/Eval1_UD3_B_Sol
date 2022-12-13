<?php

class ProductoController {

    public $page_title;
    public $view;
    private $productoServicio;

    public function __construct() {
        $this->view = 'producto/list_products';
        $this->page_title = '';
        $this->productoServicio = new ProductoServicio();
    }

    /* List all products */

    public function list() {
        $this->page_title = 'Listado de productos';

        return $this->productoServicio->getProductos();
    }

   

}

?>