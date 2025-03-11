<?php

    $controlador = new controladorMedicamentos();

    if (isset($_GET["id"])){
        $registro = $controlador -> ver($_GET["id"]);
    } else {
        header("Location:index.php");
    }

    if (isset($_POST["editar"])){
        $controlador -> editar($_POST["n_medicamentos"],$_POST["descripcion"], $_POST["f_vencimiento"], $_POST["codigo"]);
        header("Location:index.php");
    }

?>
<h1>Editar medicamento.</h1>

<main>
    <div>
        <form action="" method="post" class="w-50">
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" name="id" id="id" class="form-control" value="<?php echo $registro["id"]?>" readonly>
            </div>
            <div class="mb-3">
                <label for="n_medicamento" class="form-label">Nombre del medicamento</label>
                <input type="text" name="n_medicamento" id="n_medicamento" class="form-control" value="<?php echo $registro["n_medicamento"]?>">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion del medicamento</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" value="<?php echo $registro["descripcion"]?>">
            </div>
            <div class="mb-3">
                <label for="f_vencimiento" class="form-label">Fecha de vencimiento del Medicamento</label>
                <input type="text" name="f_vencimiento" id="f_vencimiento" class="form-control" value="<?php echo $registro["f_vencimiento"]?>">
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label">Estado Medicamento</label>
                <input type="text" name="estado" id="estado" class="form-control" value="<?php echo $registro["estado"]?>" readonly>
            </div>
            <div class="mb-3">
                <label for="codigo" class="form-label">Codigo</label>
                <input type="text" name="codigo" id="codigo" class="form-control" value="<?php echo $registro["codigo"]?>">
            </div>
            <div class="d-grid">
                <input type="submit" name="editar" value="Actualizar" class="btn btn-warning mb-3 mt-3">
            </div>
        </form>
    </div>
</main>