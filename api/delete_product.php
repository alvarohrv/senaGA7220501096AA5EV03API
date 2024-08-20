<?php
// Archivo: api/delete_product.php

//DELETE http://localhost:8000/api/delete_product.php/?id=6

require_once '../controllers/ProductoController.php';

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {

    // $uri = $_SERVER['REQUEST_URI'];
    // $uriParts = explode('/', $uri); //La URI se divide en partes utilizando explode('/'), lo que convierte la URI en un array.
    // $id = end($uriParts); //se usa para obtener la última parte de la URI, que se asume es el ID.
    // if (is_numeric($id)) {}

    if (isset($_GET['id'])) {
        $productoController = new ProductoController();
        $productoController->deleteProducto($_GET['id']);
    } else {
        header("HTTP/1.1 400 Bad Request");
        header("Content-Type: application/json");
        echo json_encode(["message" => "ID no proporcionado para eliminar el producto."]);
    }
} else {
    header("HTTP/1.1 405 Method Not Allowed");
    header("Content-Type: application/json");
    echo json_encode(["message" => "Método no permitido."]);
}


?>