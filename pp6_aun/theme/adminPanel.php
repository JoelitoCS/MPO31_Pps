<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin</title>
    <style>
        body {
            background: linear-gradient(135deg, #232526 0%, #414345 100%);
            min-height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', 'Roboto', Arial, sans-serif;
            color: #fff;
        }

        .admin-container {
            max-width: 500px;
            margin: 60px auto;
            background: rgba(34, 40, 49, 0.95);
            border-radius: 18px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            padding: 40px 30px;
            text-align: center;
        }

        .admin-container h1 {
            font-size: 2.2rem;
            margin-bottom: 18px;
            letter-spacing: 1px;
            font-weight: 700;
        }

        .admin-container p {
            color: #bfc9d1;
            margin-bottom: 32px;
        }

        .admin-links {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .admin-link {
            display: block;
            padding: 14px 0;
            background: linear-gradient(90deg, #11998e 0%, #38ef7d 100%);
            color: #fff;
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(56, 239, 125, 0.15);
            transition: background 0.2s, transform 0.2s, box-shadow 0.2s;
        }

        .admin-link:hover {
            background: linear-gradient(90deg, #38ef7d 0%, #11998e 100%);
            color: #232526;
            transform: translateY(-2px) scale(1.03);
            box-shadow: 0 4px 16px rgba(56, 239, 125, 0.25);
        }
    </style>
</head>

<body>
    <div class="admin-container">
        <h1>Panel de Administración</h1>
        <p>Bienvenido al panel de administración. Aquí puedes gestionar el sitio web.</p>
        <div class="admin-links">
            <a class="admin-link" href="adminUsers.php">Gestión de Usuarios</a>
            <a class="admin-link" href="adminTestimonios.php">Gestión de Testimonios</a>
            <a class="admin-link" href="adminNews.php">Gestión de Noticias</a>
            <a class="admin-link" href="adminPortfolio.php">Gestión de Portfolio</a>
        </div>
    </div>
</body>

</html>