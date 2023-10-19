<?php
require 'config/conexion.php';
require 'models/ClienteModel.php';
require 'models/PedidoModel.php';
require 'controladores/PedidoController.php';

$clienteModel = new ClienteModel($dbh);
$pedidoModel = new PedidoModel($dbh);
$pedidoController = new PedidoController($clienteModel, $pedidoModel);

$accion = isset($_GET['accion']) ? $_GET['accion'] : 'mostrarFormulario';

switch ($accion) {
    case 'mostrarFormulario':
        $pedidoController->mostrarFormulario();
        break;
    case 'procesar_pedido':
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $idCliente = $_POST['id_cliente'];
        $pedidoController->procesarPedido($producto, $cantidad, $idCliente);
        break;
    default:
        echo "Acción no válida.";
}
?>
