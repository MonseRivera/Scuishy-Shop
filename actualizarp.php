<?php
include("conexion.php");

$conexion = conectar();

if(isset($_POST['id_producto'])) {
    $id_producto = $_POST['id_producto'];
    // Realiza una consulta SQL para obtener la información del producto con el id proporcionado
    $query = "SELECT * FROM inventario WHERE id = $id_producto";
    $result = mysqli_query($conexion, $query);
    $data = mysqli_fetch_array($result);
    
    // Mostrar un formulario de edición prellenado con los datos del producto
    ?>
    <!DOCTYPE html>
    <html>
    
    <body>
    <form method="post" action="guardare.php">
        <input type="hidden" name="id_producto" value="<?php echo $data['id'] ?>">
        Nombre del Producto: <input type="text" name="nombre_p" value="<?php echo $data['nombre_p'] ?>"><br>
        Descripción: <textarea  name="descripcion" value="<?php echo $data['descripcion'] ?>"></textarea><br>
        Precio: <input type="text" name="precio" value="<?php echo $data['precio'] ?>"><br>
        Stock: <input type="text" name="stock" value="<?php echo $data['cantidad'] ?>"><br>
    
        <input type="submit" value="Guardar Cambios">
    </form>
    </body>
    </html>
    <?php
}

mysqli_close($conexion);
?>