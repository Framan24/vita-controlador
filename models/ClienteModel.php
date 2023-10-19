<?php
class ClienteModel {
    private $dbh;

    public function __construct($dbh) {
        $this->dbh = $dbh;
    }

    public function obtenerClientes() {
        $query = "SELECT id, nombre FROM clientes";
        $stmt = $this->dbh->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
