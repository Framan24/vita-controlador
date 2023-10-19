<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Pedidos</title>
    <link href="../dist/output.css" rel="stylesheet">
</head>

<body class="bg-sky-200">
    <h2 class="my-3 flex justify-center text-center font-bold text-cyan-950 text-5xl">Formulario de Pedidos</h2>
    <div class="bg-white h-80 w-80 mx-auto flex justify-center text-center rounded-xl my-8">
        <form action="index.php?accion=procesar_pedido" method="post">
            <div class="my-4 border-4 border-solid rounded-md">
                <label for="producto">Producto:</label>
                <input type="text" name="producto" required><br>
            </div>
            <div class="my-4 border-4 border-solid rounded-md">
                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" required><br>
            </div>
            <div class="my-4 border-4 border-solid rounded-md">
                <label for="cliente">Cliente:</label>
                <select name="id_cliente">
                    <?php foreach ($clientes as $cliente) : ?>
                        <option value="<?= $cliente['id'] ?>"><?= $cliente['nombre'] ?></option>
                    <?php endforeach; ?>
                </select><br>
            </div>
            <div class="bg-blue-600 text-white p-3 my-4 border-4 border-solid rounded-xl">
                <input type="submit" value="Guardar Pedido">
            </div>

        </form>
    </div>
</body>

</html>