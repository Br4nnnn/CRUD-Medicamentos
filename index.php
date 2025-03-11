<?php

include_once ("controladores/enrutador.php");

include_once ("controladores/ctr_medicamentos.php")



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina medicamentos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Agregar Nuevo Medicamento</h1>
    <form action="insert.php" method="POST">
        <label for="codigo">Código:</label><br>
        <input type="text" id="codigo" name="codigo" required><br><br>

        <label for="nombre">Nombre del Medicamento:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" required></textarea><br><br>

        <label for="fecha_vencimiento">Fecha de Vencimiento:</label><br>
        <input type="date" id="fecha_vencimiento" name="fecha_vencimiento" required><br><br>

        <label for="cantidad_stock">Cantidad en Stock:</label><br>
        <input type="number" id="cantidad_stock" name="cantidad_stock" required><br><br>

        <label for="estado">Estado:</label><br>
        <input type="text" id="estado" name="estado" required><br><br>

        <button type="submit">Registrar Medicamento</button>
    </form>
</body>
<main>
<?php
                $enrutador = new Enrutador();
                if (isset($_GET["cargar"])){
                    $cargar = $_GET["cargar"];
                } else {
                    $cargar = "";
                }

                if ($enrutador -> validar_vista($cargar)) {
                    $enrutador -> cargar_vista($cargar);
                }
            ?>
</main>
</html>
