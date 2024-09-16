<?php
function setModeCookie($mode) {
    setcookie("theme_mode", $mode, time() + (86400 * 30), "/"); 
}

$mode = $_GET['mode'] ?? $_COOKIE['theme_mode'] ?? 'light';

setModeCookie($mode);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modo Claro/Oscuro</title>
    <style>
        body.light {
            background-color: #ffffff;
            color: #000000;
        }
        body.dark {
            background-color: #2c2c2c;
            color: #ffffff;
        }
        .switch-links {
            margin: 20px;
        }
        .switch-links a {
            margin: 10px;
            padding: 10px;
            text-decoration: none;
            border: 1px solid;
        }
    </style>
</head>
<body class="<?php echo $mode; ?>">
    <div class="switch-links">
        <a href="?mode=light">Modo Claro</a>
        <a href="?mode=dark">Modo Oscuro</a>
    </div>
    <h1>Bienvenido a la página en modo <?php echo ucfirst($mode); ?></h1>
    <p>Elige entre modo claro u oscuro utilizando los enlaces de arriba.</p>
</body>
</html>