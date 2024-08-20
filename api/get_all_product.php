<?php
//get_all_product.php
require_once '../controllers/ProductoController.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $productoController = new ProductoController();
    $productoController->getAllProductos();
} else {
    header("HTTP/1.1 405 Method Not Allowed");
    header("Content-Type: application/json");
    echo json_encode(["message" => "Método no permitido."]);
}