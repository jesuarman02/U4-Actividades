<script>
    $(document).ready(() => {
        $("#agregar").click(() => {
            let id = $("#id").val()
            let Nombre = $("#Nombre").val()
            let Apellido_Paterno = $("#Apellido_Paterno").val()
            let Apellido_Materno = $("#Apellido_Materno").val()
            let Telefono = $("#Telefono").val()
            let Correo = $("#Correo").val()
            let Ocupacion = $("#Ocupacion").val()
            let id_departamento = $("#id_departamento").val()
            
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
                url: "./app/models/process/create.process.php",
                type: "POST",
                success: () => {
                    Swal.fire({
                        title: 'Empleado agregado',
                        text: "El empleado fue agregado con exito!",
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
                        title: 'Contacto no agregado',
                        text: "No se pudo agregar la información del empleado",
                        icon: 'error',
                        confirmButtonColor: '#fd7e14',
                        confirmButtonText: 'Reintentar'
                    })
                }
            })
        })
    })
</script>