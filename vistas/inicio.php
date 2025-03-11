<?php
    $controlador = new controladorMedicamentos();

    $resultado = $controlador -> index();
?>

<main>
    <table>
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Codigo</th>
                <th>Nombre Medicamento</th>
                <th>Descripcion</th>
                <th>Fecha Vencimiento</th>
                <th>Stock</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($fila = mysqli_fetch_assoc($resultado)){
                    echo "<tr>";
                    echo "<td>" . $fila["id"] ."</td>";
                    echo "<td>" . $fila["codigo"] ."</td>";
                    echo "<td>" . $fila["n_medicamento"] . "</td>";
                    echo "<td>" . $fila["descripcion"] . "</td>";
                    echo "<td>" . $fila["f_vencimiento"] . "</td>";
                    echo "<td>" . $fila["c_stock"] . "</td>";
                    echo "<td>" . $fila["estado"] . "</td>";
                    echo "<td> <a href='?cargar=ver&id=".$fila["id"]."'>Ver</a><a href='?cargar=editar&id=".$fila["id"]."'>Editar</a><a href='?cargar=eliminar&id=".$fila["id"]."'>Eliminar</a>";
                }
                ?>
                
        </tbody>
    </table>
</main>