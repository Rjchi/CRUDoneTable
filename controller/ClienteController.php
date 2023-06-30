<?php

require_once 'model/ClienteModel.php';
require_once 'view/ClienteView.php';

class ClienteController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new ClienteModel();
        $this->view = new ClienteView();
    }

    public function index()
    {
        $clientes = $this->model->readAll();
        $this->view->showAll($clientes);
    }

    public function create($nombre, $apellido, $correoElectronico, $contrasenia)
    {
        $result = $this->model->create($nombre, $apellido, $correoElectronico, $contrasenia);
        if ($result) {
            echo 'Cliente creado exitosamente.';
            header("Location: index.php?action=index");
        } else {
            echo 'Error al crear el cliente.';
        }
    }

    public function update($id, $nombre, $apellido, $correoElectronico, $contrasenia)
    {
        $result = $this->model->update($id, $nombre, $apellido, $correoElectronico, $contrasenia);
        if ($result) {
            echo 'Cliente actualizado exitosamente.';
            header("Location: index.php?action=index");
        } else {
            echo 'Error al actualizar el cliente.';
        }
    }

    public function delete($id)
    {
        $result = $this->model->delete($id);
        if ($result) {
            echo 'Cliente eliminado exitosamente.';
            header("Location: index.php?action=index");
        } else {
            echo 'Error al eliminar el cliente.';
        }
    }
}

?>
