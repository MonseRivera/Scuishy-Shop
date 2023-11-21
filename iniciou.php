<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: loginu.php");
    exit;
}

$nombreUsuario = $_SESSION['username'];
include("conexion.php");
$conexion = conectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px 25px;
            text-align: left;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            display: block;
        }

        .sidebar a:hover {
            background-color: #555;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }
       

    </style>
</head>

<body>

    <div class="sidebar">
    <?php 
    $query = mysqli_query($conexion, "SELECT imagen FROM registros WHERE user_new = '$nombreUsuario'");
    $result = mysqli_num_rows($query);
    if($result>0){
    while($data = mysqli_fetch_array($query)){
        ?>
        <img height= "50px" src="data:image/jpg;base64,  <?php echo base64_encode($data['imagen']) ?>">
         
    <?php
    }
}
?>
        <?php echo $nombreUsuario; ?>  
        <a href="iniciou.php">Inicio</a>
        <a href="productos.php" target="programaIframe">Productos</a>
        <a href="carrito.php" target="programaIframe">Carrito</a>
        <a href="modelo.php" target="programaIframe">Modelo 3D</a>
    </div>

    <div class="content">

        <h1>Bienvenido a ScuishyShop</h1>
        <iframe src="" name="programaIframe" width="100%" height="610"></iframe>

    </div>

    <?php mysqli_close($conexion); ?>

</body>

</html>