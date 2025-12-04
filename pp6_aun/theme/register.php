<?php
session_start();
require_once 'config.php';


//Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //1. Recoger los datos del formulario
    $nom = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rol = 'user';
    //2. Hasheamos la contraseña antes de guardarla
    $password_hasheada = password_hash($password, PASSWORD_DEFAULT);
    //3. Preparamos la consulta para insertar el nuevo usuario
    $stmt = $mysqli->prepare("INSERT INTO usuaris (nom, email, password, rol, data_registre) VALUES (?, ?, ?, 'user', NOW())");

    //4. Comprobamos si la preparación fue exitosa
    if (!$stmt) {
        die("Error en la preparación de la consulta: " . $mysqli->error);
    }
    //5. Vinculamos los parámetros
    $stmt->bind_param("sss", $nom, $email, $password_hasheada);
    //6. Ejecutamos la consulta
    if ($stmt->execute()) {
        echo "Registro exitoso. Ahora puedes <a href='login.php'>iniciar sesión</a>.";
    } else {
        echo "Error en el registro: " . $stmt->error;
    }
    //7. Cerramos la declaración (conexion)
    $stmt->close();
    $mysqli->close();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <style>
        /* RESET de estilos */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            background-size: 400% 400%;
            animation: gradientBG 10s ease infinite;
        }

        /* Crea un fondo animado de gradiente que cambia de posición continuamente */

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Animación que mueve el gradiente de fondo de izquierda a derecha */

        .login-container {
            width: 350px;
            max-width: 90%;
            padding: 40px 30px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Card central del login con fondo semi-transparente, blur y sombra */

        h2 {
            margin-bottom: 20px;
            font-size: 2rem;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
        }

        /* Título del login con sombra para destacar */

        .error-message {
            width: 100%;
            text-align: center;
            background: rgba(255, 0, 0, 0.3);
            color: #fff;
            padding: 12px 15px;
            margin-bottom: 15px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.5s ease;
        }

        /* Mensaje de error dentro del card con animación fadeIn */

        form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Estilo del formulario: columnas centradas */

        form input {
            width: 100%;
            padding: 15px 20px;
            margin: 10px 0;
            border-radius: 50px;
            border: none;
            outline: none;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        /* Inputs del formulario con fondo semitransparente y bordes redondeados */

        form input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        /* Color del placeholder */

        form input:focus {
            background: rgba(255, 255, 255, 0.3);
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        /* Estilo al enfocar el input */

        form input[type="submit"] {
            background: linear-gradient(135deg, #ff416c, #ff4b2b);
            font-weight: bold;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.4s ease;
        }

        /* Botón de submit con gradiente y efecto hover */

        form input[type="submit"]:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 20px rgba(255, 75, 43, 0.5);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Animación para que los elementos de error aparezcan suavemente */
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Registro de Usuario</h2>
        <!-- CREO EL FORMULARIO PARA NOM EMAIL PASSWORD -->
        <form method="POST" action="register.php">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Registrar">
        </form>
    </div>

</body>

</html>