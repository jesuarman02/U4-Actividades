<script>
    $(document).ready(() => {

        $("#actualizar").click(() => {
            let id = $("#id").val();
            let Nombre = $("#Nombre").val();
            let Apellido_Paterno = $("#Apellido_Paterno").val();
            let Apellido_Materno = $("#Apellido_Materno").val();
            let Telefono = $("#Telefono").val();
            let Correo = $("#Correo").val();
            let Ocupacion = $("#Ocupacion").val();
            let id_departamento = $("#id_departamento").val();

            $.ajax({
                data: {
                    id,
                    Nombre,
                    Apellido_Paterno,
                    Apellido_Materno,
                    Telefono,
                    Correo,
                    Ocupacion,
                    id_departamento
                },
                url: "./app/models/process/update.process.php",
                type: "POST",
                success: () => {
                    Swal.fire({
                        title: 'Empleado Actualizado',
                        text: "Actualizaste la información del empleado correctamente",
                        icon: 'success',
                        confirmButtonColor: '#cc2db0',
                        confirmButtonText: 'Aceptar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = "./read"
                        }
                    })
                },
                error: () => {
                    Swal.fire({
                        title: 'Contacto no actualizado',
                        text: "No se pudo actualizar la información del empleado",
                        icon: 'error',
                        confirmButtonColor: '#fd7e14',
                        confirmButtonText: 'Reintentar'
                    })
                }
            })
        })
    })
</script>