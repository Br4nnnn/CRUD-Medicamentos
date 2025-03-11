<?php

    $controlador = new controladorMedicamentos();

    if (isset($_GET["id"])){
        $registro = $controlador -> ver($_GET["id"]);
    } else {
        header("Location:index.php");
    }

    if (isset($_POST["eliminar"])){
        $controlador -> eliminar($_GET["id"]);
        header("Location:index.php");
    }

?>

<main>
    <form action="" method="post">
        <table>
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Codigo</th>
                    <th>Nombre Medicamento</th>
                    <th>Usuario</th>
                    <th>Clave</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $registro["id"] ?></td>
                    <td><?php echo $registro["codigo"] ?></td>
                    <td><?php echo $registro["n_medicamento"] ?></td>
                    <td><?php echo $registro["descripcion"] ?></td>
                    <td><?php echo $registro["f_vencimiento"] ?></td>
                    <td><?php echo $registro["c_stock"] ?></td>
                    <td><?php echo $registro["estado"] ?></td>
                    
                    <td><input class="btn btn-danger" type="submit" name="eliminar" value="Eliminar"></td>
                </tr>
            </tbody>
        </table>
    </form>
</main>