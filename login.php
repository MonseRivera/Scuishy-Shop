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
            width: 380px;
            margin: 0 auto;
            margin-top: 100px;
            background-color: rgba(104, 83, 111, 0.8);
            padding: 20px;
            border-radius: 2px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
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
        input[type="password"] {
            width: 95%;
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
            text-align: center;
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
        <h2>Iniciar Sesión</h2>
        <form action="login_proceso.php" method="post">
            <div class="form-group">
                <label for="username">Usuario:</label>
                <input type="text"  id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="pass">Contraseña:</label>
                <input type="password"  id="pass" name="pass" required>
            </div>
            <div class="form-group">
            <input type="submit" value="Iniciar Sesión">
            </div>
        </form>
        <div class="register-link">
            <a href="registro.php">Si aún no tiene una cuenta, regístrese aquí</a>
        </div>
    </div>
</body>
</html>
