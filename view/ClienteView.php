<?php

class ClienteView
{
    public function showAll($clientes)
    {
        echo '<table>';
        echo '<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Correo Electrónico</th><th>Contraseña</th><th>Acciones</th></tr>';
        foreach ($clientes as $cliente) {
            echo '<tr>';
            echo '<td>' . $cliente['Id'] . '</td>';
            echo '<td>' . $cliente['Nombre'] . '</td>';
            echo '<td>' . $cliente['Apellido'] . '</td>';
            echo '<td>' . $cliente['CorreoElectronico'] . '</td>';
            echo '<td>' . $cliente['contrasenia'] . '</td>';
            echo '<td>';
            echo '<a href="update.php?action=update&id=' . $cliente['Id'] . '">Editar</a> ';
            echo '<a href="index.php?action=delete&id=' . $cliente['Id'] . '">Eliminar</a>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';

        echo '<h2>Crear Cliente</h2>';
        echo '<form action="index.php" method="post">';
        echo '<input type="hidden" name="action" value="create">';
        echo 'Nombre: <input type="text" name="nombre"><br>';
        echo 'Apellido: <input type="text" name="apellido"><br>';
        echo 'Correo Electrónico: <input type="text" name="correoElectronico"><br>';
        echo 'Contraseña: <input type="password" name="contrasenia"><br>';
        echo '<input type="submit" value="Crear">';
        echo '</form>';
    }
}
