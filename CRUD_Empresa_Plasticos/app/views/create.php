<div class="container">
    <div class="row">
        <div class="col">
            <h4>Agregar Empleados</h4>
            <hr>
            <div>
                <div class="mb-3">
                    <label for="id" class="form-label">id</label>
                    <input type="number" class="form-control" id="id">
                </div>
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="Nombre">
                </div>
                <div class="mb-3">
                    <label for="Apellido_Paterno" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" id="Apellido_Paterno">
                </div>
                <div class="mb-3">
                    <label for="Apellido_Materno" class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control" id="Apellido_Materno">
                </div>
                <div class="mb-3">
                    <label for="Telefono" class="form-label">Telefono</label>
                    <input type="number" class="form-control" id="Telefono">
                </div>
                <div class="mb-3">
                    <label for="Correo" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="Correo">
                </div>
                <div class="mb-3">
                    <label for="Ocupacion" class="form-label">Ocupación</label>
                    <input type="text" class="form-control" id="Ocupacion">
                </div>
                <div class="mb-3">
                    <label for="id_departamento" class="form-label">Departamento</label>
                    <input type="number" class="form-control" id="id_departamento">
                </div>

            </div>
        </div>
    </div>
</div>
 <button id="agregar" class="btn btn-outline-custom">Agregar Empleado</button>

<?php 
    require "./app/controllers/create.controller.php"
?>




