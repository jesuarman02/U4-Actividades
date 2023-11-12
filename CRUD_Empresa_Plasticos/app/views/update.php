<div class="container">
    <div class="row">
        <div class="col">
            <h1>Actualizar Información</h1>
            <hr>
            <div>
                <input type="number" value="<?php echo $contacto["id"]?>" class="form-control" id="id" hidden>
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre</label>
                    <input type="text" value="<?php echo $contacto["Nombre"]?>" class="form-control" id="Nombre">
                </div>
                <div class="mb-3">
                    <label for="Apellido_Paterno" class="form-label">Apellido Paterno</label>
                    <input type="text" value="<?php echo $contacto["Apellido_Paterno"] ?>" class="form-control" id="Apellido_Paterno">
                </div>
                <div class="mb-3">
                    <label for="Apellido_Materno" class="form-label">Apellido Materno</label>
                    <input type="text" value="<?php echo $contacto["Apellido_Materno"] ?>" class="form-control" id="Apellido_Materno">
                </div>
                <div class="mb-3">
                    <label for="Telefono" class="form-label">Telefono</label>
                    <input type="number" value="<?php echo $contacto["Telefono"] ?>" class="form-control" id="Telefono">
                </div>
                <div class="mb-3">
                    <label for="Correo" class="form-label">Correo</label>
                    <input type="email" value="<?php echo $contacto["Correo"] ?>" class="form-control" id="Correo">
                </div>
                <div class="mb-3">
                    <label for="Ocupacion" class="form-label">Ocupación</label>
                    <input type="text" value="<?php echo $contacto["Ocupacion"] ?>" class="form-control" id="Ocupacion">
                </div>
                <div class="mb-3">
                    <label for="id_departamento" class="form-label">Id Departamento</label>
                    <input type="number" value="<?php echo $contacto["id_departamento"] ?>" class="form-control" id="id_departamento">
                </div>
                
            </div>
        </div>
    </div>
    <span>
    <button id="actualizar" class="btn btn-outline-custom">Actualizar Informacion</button>
    </span>
</div>

<?php 
    require "./app/controllers/update.controller.php"
?>