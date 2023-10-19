<?php
class PedidoController {
    private $clienteModel;
    private $pedidoModel;

    public function __construct($clienteModel, $pedidoModel) {
        $this->clienteModel = $clienteModel;
        $this->pedidoModel = $pedidoModel;
    }

    public function mostrarFormulario() {
        $clientes = $this->clienteModel->obtenerClientes();
        require 'views/formulario.php';
    }

    public function procesarPedido($producto, $cantidad, $idCliente) {
        $this->pedidoModel->guardarPedido($producto, $cantidad, $idCliente);
        echo "guardo...";
    }
}
?>
