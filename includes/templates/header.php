<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="build/css/app.css" />
</head>

<body>
    <header class="header <?php echo $inicio ? 'inicio' : '' ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.php">
                    <img id="logo" src="build/img/logo.svg" alt="Logotipo de Bienes Raices" />
                </a>
                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="Icono Menu responsive" />
                </div>
                <div class="derecha">
                    <img src="build/img/dark-mode.svg" alt="Dark mode Button " class="darkmode-boton" />
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>