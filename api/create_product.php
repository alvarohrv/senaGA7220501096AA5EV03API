<?php
// Archivo: api/create_producto.php
require_once '../controllers/ProductoController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productoController = new ProductoController();
    $productoController->createProducto();
} else {
    header("HTTP/1.1 405 Method Not Allowed");
    header("Content-Type: application/json");
    echo json_encode(["message" => "Método no permitido."]);
}
?>