<?php
session_start();
require_once 'config.php';
$error = ""; // inicializamos


//carlos contraseña = 1234
//laura contraseña = abcd
//miguel contraseña = pass
// ana contraseña = qwerty

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $mysqli->prepare("SELECT id, nom, email, password, rol FROM usuaris WHERE email = ?");

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1){
        
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password']) || $password === $user['password']){
            // Login correcto
            if (!password_get_info($user['password'])['algo']) {
                $hashed = password_hash($password, PASSWORD_DEFAULT);
                $stmt_update = $mysqli->prepare("UPDATE usuaris SET password = ? WHERE id = ?");
                $stmt_update->bind_param("si", $hashed, $user['id']);
                $stmt_update->execute();
                $stmt_update->close();
            }
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['nom'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_rol'] = $user['rol'];
            header("Location: index.php");
            exit();
        } else {
            $error = "Contraseña incorrecta, inténtalo de nuevo.";
        }
    } else {
        $error = "No se encontró ningún usuario con ese email.";
    }
    $stmt->close();
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login de Usuario</title>
<style>
/* RESET */
* { margin:0; padding:0; box-sizing:border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }

body {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #4e54c8, #8f94fb);
    background-size: 400% 400%;
    animation: gradientBG 10s ease infinite;
}

@keyframes gradientBG {
    0% {background-position:0% 50%;}
    50% {background-position:100% 50%;}
    100% {background-position:0% 50%;}
}

/* CARD CENTRAL */
.login-container {
    width: 350px;
    max-width: 90%;
    padding: 40px 30px;
    border-radius: 20px;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(15px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.3);
    color: #fff;
    display: flex;
    flex-direction: column;
    align-items: center; /* hijos centrados */
}

/* TITULO */
h2 {
    margin-bottom: 20px;
    font-size: 2rem;
    text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
}

/* ERROR DENTRO DEL CARD */
.error-message {
    width: 100%;
    text-align: center;
    background: rgba(255,0,0,0.3);
    color: #fff;
    padding: 12px 15px;
    margin-bottom: 15px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    animation: fadeIn 0.5s ease;
}

/* FORMULARIO */
form {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

form input {
    width: 100%;
    padding: 15px 20px;
    margin: 10px 0;
    border-radius: 50px;
    border: none;
    outline: none;
    background: rgba(255,255,255,0.2);
    color: #fff;
    font-size: 1rem;
    transition: all 0.3s ease;
}

form input::placeholder { color: rgba(255,255,255,0.7); }

form input:focus {
    background: rgba(255,255,255,0.3);
    box-shadow: 0 0 10px rgba(255,255,255,0.5);
}

form input[type="submit"] {
    background: linear-gradient(135deg, #ff416c, #ff4b2b);
    font-weight: bold;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.4s ease;
}

form input[type="submit"]:hover {
    transform: scale(1.05);
    box-shadow: 0 5px 20px rgba(255,75,43,0.5);
}

@keyframes fadeIn {
    from {opacity:0; transform: translateY(-10px);}
    to {opacity:1; transform: translateY(0);}
}
</style>
</head>
<body>
<div class="login-container">
    <h2>Login de Usuario</h2>

    <!-- ERROR DENTRO DEL CARD -->
    <?php if(!empty($error)) { echo '<div class="error-message">'.$error.'</div>'; } ?>

    <form method="POST" action="login.php">
        <input type="email" id="email" name="email" placeholder="Email" required>
        <input type="password" id="password" name="password" placeholder="Contraseña" required>
        <input type="submit" value="Iniciar Sesión">
    </form>
</div>
</body>
</html>
