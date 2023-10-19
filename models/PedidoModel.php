<?php
class PedidoModel {
    private $dbh;

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function guardarPedido($producto, $cantidad, $idCliente) {
        $query = "INSERT INTO pedidos (producto, cantidad, id_cliente) VALUES (?, ?, ?)";
        $stmt = $this->dbh->prepare($query);
        $stmt->execute([$producto, $cantidad, $idCliente]);
    }
}
?>
