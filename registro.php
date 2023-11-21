<!DOCTYPE html>
    
<html>
<head>
    <title>Iniciar Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('fon.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 520px;
            margin: 0 auto;
            margin-top: 100px;
            background-color: rgba(104, 83, 111, 0.8);
            padding: 20px;
            border-radius: 2px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: left;
            color: white;
        }
        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: white;
        }

        input[type="text"],
        input[type="text"],
        input[type="text"],
        input[type="password"] {
            width: 85%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        form input[type="submit"] {
            background-color: #7d7488; 
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
	        width: 150px; 
    	    height: 30px; 
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }

        .register-link {
            text-align: right;
            margin-top: 10px;
        }

        .register-link a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
             <h2>Crea tu cuenta</h2>
        <form action="procesar.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre">Ingresa tu nombre completo:</label>
                <input type="text"   name="nombre" required>
            </div>
            <div class="form-group">
                <label for="user">Crea tu usuario:</label>
                <input type="text"  name="user" required>
            </div>
            <div class="form-group">
                <label for="email">Ingresa tu correo:</label>
                <input type="text"   name="email" required>
            </div>
            <div class="form-group">
                <label for="pass">Crea tu contraseña:</label>
                <input type="password" name="pass" required>
            </div>
            <div class="form-group">
                <label for="rol">Que eres 1-usuario | 0-admin:</label>
                <input type="text" name="rol" required>
            </div>
            <div class="form-group">
            <label for="ima">Cargar imagen:</label>
            <input type="file" name="imagenc" required>
            </div>
            <div class="form-group">
            <input type="submit" name="accion" value="Crear Cuenta">
            </div>
        </form>
        <div class="register-link">
            <a href="login.php">Si ya tienes cuenta, inicia sesión</a>
        </div>
</body>
</html>
