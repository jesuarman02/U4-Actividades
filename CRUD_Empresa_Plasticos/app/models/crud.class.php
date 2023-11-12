<?php

class Crud {
    private $conexion;
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $bd = "plasticos";

    public function __construct()
    {
        $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->bd",$this->user, $this->pass);
    }

    public function read()
    {
        $query = "SELECT * FROM empleados";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        unset($this->conexion);
        return $result;
    }

    public function create($datos_contacto) {
        $query = "INSERT INTO empleados(id, Nombre, Apellido_Paterno, Apellido_Materno, Telefono, Correo, Ocupacion, id_departamento) VALUES (:id, :Nombre, :Apellido_Paterno, :Apellido_Materno, :Telefono, :Correo, :Ocupacion, :id_departamento)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":id", $datos_contacto["id"]);
        $stmt->bindParam(":Nombre", $datos_contacto["Nombre"]);
        $stmt->bindParam(":Apellido_Paterno", $datos_contacto["Apellido_Paterno"]);
        $stmt->bindParam(":Apellido_Materno", $datos_contacto["Apellido_Materno"]);
        $stmt->bindParam(":Telefono", $datos_contacto["Telefono"]);
        $stmt->bindParam(":Correo", $datos_contacto["Correo"]);
        $stmt->bindParam(":Ocupacion", $datos_contacto["Ocupacion"]);
        $stmt->bindParam(":id_departamento", $datos_contacto["id_departamento"]);
        $stmt->execute();

        unset($this->conexion);
        return json_encode($stmt);
    }

    public function update($datos_contacto) {
        $query = "UPDATE empleados SET Nombre = :Nombre, Apellido_Paterno = :Apellido_Paterno, Apellido_Materno = :Apellido_Materno, Telefono = :Telefono, Correo = :Correo, Ocupacion = :Ocupacion, id_departamento = :id_departamento WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":id", $datos_contacto["id"]);
        $stmt->bindParam(":Nombre", $datos_contacto["Nombre"]);
        $stmt->bindParam(":Apellido_Paterno", $datos_contacto["Apellido_Paterno"]);
        $stmt->bindParam(":Apellido_Materno", $datos_contacto["Apellido_Materno"]);
        $stmt->bindParam(":Telefono", $datos_contacto["Telefono"]);
        $stmt->bindParam(":Correo", $datos_contacto["Correo"]);
        $stmt->bindParam(":Ocupacion", $datos_contacto["Ocupacion"]);
        $stmt->bindParam(":id_departamento", $datos_contacto["id_departamento"]);
        $stmt->execute();

        unset($this->conexion);
        return $stmt;
    }

    public function delete($id_contacto) {
        $query = "DELETE FROM empleados WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":id", $id_contacto);
        $stmt->execute();

        unset($this->conexion);
        return $stmt;
    }

    public function show($id_contacto) {
        $query = "SELECT * FROM empleados WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":id", $id_contacto);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        unset($this->conexion);
        return $result;
    }
}

?>