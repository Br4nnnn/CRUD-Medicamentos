<?php

    $controlador = new controladorMedicamentos();

    if(isset($_GET["id"])){
        $registro = $controlador -> ver($_GET["id"]);
    } else {
        header("Location:index.php");
    }

?>

<main>
    <div>
        <table>
            <thead class="table-dark">
                <th>ID</th>
                <th>Codigo</th>
                <th>Nombre Medicamento</th>
                <th>Descripcion</th>
                <th>Fecha Vencimiento</th>
                <th>Stock</th>
                <th>Estado</th>
            </thead>
            <tbody>
                <?php
                
                    echo "<td>" . $registro["id"] . "</td>";
                    echo "<td>" . $registro["codigo"] . "</td>";
                    echo "<td>" . $registro["n_medicamento"] . "</td>";
                    echo "<td>" . $registro["descripcion"] . "</td>";
                    echo "<td>" . $registro["f_vencimiento"] . "</td>";
                    echo "<td>" . $registro["c_stock"] . "</td>";
                    echo "<td>" . $registro["estado"] . "</td>";

                ?>
            </tbody>
        </table>
    </div>
</main>