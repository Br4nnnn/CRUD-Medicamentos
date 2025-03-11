<main class="container-fluid d-flex justify-content-between align-items-center shadow p-8 mb-5 bg-body-tertiary rounded">
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <form action="" method="post">
            <label for="cedula">Cedula</label>
            <input class="form-control form-control-sm" type="text" name="cedula" required id="cedula">
        
            <label for="nombres">Nombres</label>
            <input class="form-control form-control-sm" type="text" name="nombres" required id="nombres">
        
            <label for="apellidos">Apellidos</label>
            <input class="form-control form-control-sm" type="text" name="apellidos" required id="apellidos">
        
            <label for="usuario">Usuario</label>
            <input class="form-control form-control-sm" type="text" name="usuario" required id="usuario">
        
            <label for="clave">Clave</label>
            <input class="form-control form-control-sm" type="text" name="clave" required id="clave">
        
            <input class="btn btn-success mb-3 mt-3" type="submit" name="enviar" value="Registrar" id="input_registrar">
        </form>
    </div>
</main>

<?php

    $controlador = new controladorMedicamentos();
    if(isset($_POST["enviar"])){
        $res = $controlador -> crear($_POST["codigo"], $_POST["n_medicamento"], $_POST["descripcion"], $_POST["f_vencimiento"], $_POST["c_stock"], $_POST["estado"]);
        echo $res;
    }
?>