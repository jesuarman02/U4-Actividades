<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Plasticos Juquilita
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="username">Nombre de Usuario:</label>
                            <input type="text" class="form-control border border-light" id="username" placeholder="Ingresa tu nombre de usuario">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" class="form-control border border-light" id="password" placeholder="Contraseña">
                        </div>
                        <br>
                        <a href="./read" class="btn btn-outline-danger" >Iniciar Sesión</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    require "./app/models/process/home.process.php"
?>