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
/*
El FrontController recibe la petición HTTP, por ejemplo, http://localhost/dwcs/ud3/evalB/FrontController.php?controller=producto&action=list

En base al parámetro controller=producto, el FrontController crea un objeto de ProductoController, que establece la vista  'producto/list_products'
ProductoController, a su vez, crea un objeto ProductoServicio. 
El servicio crea, a su vez, un ProductoRepository.
A través del parámatro action, se el FrontController invoca al método list de ProductoController.
Este recupera a través del servicio un array de objetos Producto del repository.
El array de objetos Producto asciende hasta el ProductoController y se asigna a $dataToView["data"].
La vista list_products itera por los productos y muestra sus datos e imagen con la ayuda del trait ViewData, tal y como hacíamos con Nota

*/
   

}

?>
