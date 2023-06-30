<?php

class ClienteModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=onetable', 'root', '');
    }

    public function create($nombre, $apellido, $correoElectronico, $contrasenia)
    {
        $query = 'INSERT INTO cliente (Nombre, Apellido, CorreoElectronico, contrasenia) VALUES (?, ?, ?, ?)';
        $stmt = $this->db->prepare($query);
        $stmt->execute([$nombre, $apellido, $correoElectronico, $contrasenia]);
        return $stmt->rowCount();
    }

    public function readAll()
    {
        $query = 'SELECT * FROM cliente';
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($id, $nombre, $apellido, $correoElectronico, $contrasenia)
    {
        $query = 'UPDATE cliente SET Nombre=?, Apellido=?, CorreoElectronico=?, contrasenia=? WHERE Id=?';
        $stmt = $this->db->prepare($query);
        $stmt->execute([$nombre, $apellido, $correoElectronico, $contrasenia, $id]);
        return $stmt->rowCount();
    }

    public function delete($id)
    {
        $query = 'DELETE FROM cliente WHERE Id=?';
        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
        return $stmt->rowCount();
    }
}
