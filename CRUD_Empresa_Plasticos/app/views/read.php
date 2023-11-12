<div class="container">
    <div class="row my-4">
        <div class="col">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-danger">

                <thead>
                    <h3>Administración de Empleados Plasticos Juquilita</h3>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido_Paterno</th>
                        <th scope="col">Apellido_Materno</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Ocupación</th>
                        <th scope="col">Id Departamento</th>
                        <th scope="col">Actualizar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($contactos as $contacto):
                        ?>
                        <tr>
                            <td>
                                <?php echo $contacto["Nombre"] ?>
                            </td>
                            <td>
                                <?php echo $contacto["Apellido_Paterno"] ?>
                            </td>
                            <td>
                                <?php echo $contacto["Apellido_Materno"] ?>
                            </td>
                            <td>
                                <?php echo $contacto["Telefono"] ?>
                            </td>
                            <td>
                                <?php echo $contacto["Correo"] ?>
                            </td>
                            <td>
                                <?php echo $contacto["Ocupacion"] ?>
                            </td>
                            <td>
                                <?php echo $contacto["id_departamento"] ?>
                            </td>

                            <td>
                                <span>
                                    <a href="./update&id=<?php echo $contacto["id"] ?>" class="btn btn-warning btn-custom">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </span>
                            </td>
                            <td>
                                    <button onclick="eliminarContacto(<?php echo $contacto['id'] ?>)"class="btn btn-danger btn-custom1">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>

                            </td>
                        </tr>
                        <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <span>
        <a href="./create" id="contacto" class="btn btn-outline-custom">
            <i class="fas fa-plus-circle"></i> Agregar Empleado
        </a>
    </span>

</div>

<?php
require "./app/controllers/read.controller.php"
    ?>