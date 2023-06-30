<html>
<h2>Actualizar Cliente</h2>
<form action="index.php" method="post">
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"><br>
    Nombre: <input type="text" name="nombre"><br>
    Apellido: <input type="text" name="apellido"><br>
    Correo Electrónico: <input type="text" name="correoElectronico"><br>
    Contraseña: <input type="password" name="contrasenia"><br>
    <input type="submit" value="Update">
</form>

</html>