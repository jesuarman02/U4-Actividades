<?php
    require "../crud.class.php";
    $crud = new Crud();

    $crud->update([
        "id" => $_POST["id"],
        "Nombre" => $_POST["Nombre"],
        "Apellido_Paterno" => $_POST["Apellido_Paterno"],
        "Apellido_Materno" => $_POST["Apellido_Materno"],
        "Telefono" => $_POST["Telefono"],
        "Correo" => $_POST["Correo"],
        "Ocupacion" => $_POST["Ocupacion"],
    ])
?>