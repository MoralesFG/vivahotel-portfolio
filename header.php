<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- FUENTES GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,300;0,500;1,200&family=Roboto+Mono:ital,wght@0,300;0,400;0,500;1,200;1,300&display=swap"
        rel="stylesheet">

    <!-- BT5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="js/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="js/jquery-ui/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="js/jquery-ui/jquery-ui.theme.min.css">

    <script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>

    <script type="text/javascript" src="js/calendario.js"></script>
    <!-- FIN JS -->
</head>

<body class="flex-column h-100">
    <!-- Cabecera BT5 -->
    <header class="grupo__cabecera">
        <article class="cabecera">
            <div class="cabecera__logo">
                <a class="navbar-brand logo__home" href="index.php">VIVA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
        
            <input type="checkbox" id="check">
            <label class="cabecera__isla" for="check">
                <div class="burger">
                    <div class="linea__burger linea-1"></div>
                    <div class="linea__burger linea-2"></div>
                    <div class="linea__burger linea-3"></div>
                </div>
            </label>
            
            <div class="cabecera__nav">
                <ul class="menu__burger">
                    <li><a href="nosotros.php" class="menu__items item-1">Nosotros</a></li>
                    <li><a href="salas.php" class="menu__items item-2">Experiencias</a></li>
                    <li><a href="capsulas.php" class="menu__items item-3">Habitaciones</a></li>
                    <li><a href="contacto.php" class="menu__items item-4">Contacto</a></li>
                </ul>
            </div>
        </article>
    </header>