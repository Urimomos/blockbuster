<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Blockbuster">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blockbuster | Portal Público</title>

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/css/plyr.css" type="text/css">
    <link rel="stylesheet" href="/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">

    <style>
        /* Fondo de la barra superior */
        .header {
            background-color: #000c2b !important;
            border-bottom: 4px solid #FFCC00;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.6);
        }

        /* Enlaces normales del menú */
        .header__menu ul li a {
            color: #ffffff !important;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        /* Efecto al pasar el cursor */
        .header__menu ul li a:hover {
            color: #FFCC00 !important;
        }

        /* EL MENÚ ACTIVO (El que está seleccionado actualmente) */
        .header__menu ul li.active > a {
            background-color: #FFCC00 !important;
            color: #001A5E !important;
            padding: 8px 15px !important;
            border-radius: 5px;
            font-weight: bold;
            box-shadow: 2px 2px 0px rgba(255,255,255,0.2);
        }

        /* Cajita del sub-menú desplegable */
        .header__menu ul li .dropdown {
            background-color: #001A5E !important;
            border: 2px solid #FFCC00;
            border-radius: 5px;
            padding: 10px 0;
            box-shadow: 0 10px 25px rgba(0,0,0,0.8);
        }

        /* Enlaces dentro del desplegable */
        .header__menu ul li .dropdown li a {
            color: #ffffff !important;
            padding: 10px 20px;
            display: block;
        }

        /* Hover dentro del desplegable */
        .header__menu ul li .dropdown li a:hover {
            background-color: #FFCC00 !important;
            color: #001A5E !important;
        }

        /* Iconos de Entrar y Perfil */
        .header__right a {
            color: #ffffff !important;
            transition: all 0.3s ease;
        }
        .header__right a:hover {
            color: #FFCC00 !important;
        }

        /* Botón especial para Registrarse */
        .bb-btn-register {
            background-color: #FFCC00 !important;
            color: #001A5E !important;
            font-weight: bold;
            padding: 8px 20px;
            border-radius: 5px;
            text-transform: uppercase;
            transition: all 0.3s ease;
            display: inline-block;
        }
        .bb-btn-register:hover {
            background-color: #ffffff !important;
            color: #001A5E !important;
            transform: scale(1.05);
        }

        /* ================================================== */
        /* --- DISEÑO DEL BUSCADOR (ADIÓS PANTALLA NEGRA) --- */
        /* ================================================== */
        
        .search-model {
            background: rgba(0, 12, 43, 0.85) !important;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }

        .search-model-form input {
            color: #ffffff !important;
            border-bottom: 2px solid #FFCC00 !important;
            font-family: 'Oswald', sans-serif;
            font-size: 2rem !important;
        }

        .search-model-form input::placeholder {
            color: rgba(255, 255, 255, 0.5) !important;
            font-size: 1.5rem;
        }

        .search-close-switch {
            color: #FFCC00 !important;
            background: rgba(255, 204, 0, 0.1);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.3s ease;
        }

        .search-close-switch:hover {
            background: #FFCC00;
            color: #001A5E !important;
            transform: scale(1.1);
        }
        /* ================================================== */
        /* --- FONDO CINEMATOGRÁFICO PREMIUM (TODO EL SITIO)- */
        /* ================================================== */
        
        /* Aplicamos el gradiente al fondo de toda la página */
        body, html {
            background-color: #01040a !important; /* Color de respaldo */
            /* Luz azul profunda en el centro superior que se difumina a negro espacial */
            background-image: radial-gradient(ellipse at 50% 0%, #001A5E 0%, #01040a 70%) !important;
            background-attachment: fixed !important; /* Congela el fondo al hacer scroll */
            color: #ffffff;
        }

        /* Hacemos que las secciones que trae tu plantilla por defecto 
           sean transparentes para que dejen ver nuestro nuevo fondo premium 
        */
        .normal-breadcrumb, 
        .spad, 
        .product-page, 
        .anime-details,
        .breadcrumb-option {
            background-color: transparent !important;
            background: transparent !important;
        }

        /* Le damos un toque elegante a los títulos de las secciones ("Más Alquilados", etc) */
        .section-title h4, .section-title h5 {
            color: #ffffff !important;
            text-shadow: 0px 4px 10px rgba(0,0,0,0.8);
        }
    </style>
    
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="/">
                            <img src="/img/blockbuster_logo.png" alt="Logo Blockbuster">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li id="nav-inicio"><a href="/">Inicio</a></li>
                                
                                <li id="nav-categorias"><a href="#">Categorias <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="/categorias/peliculas">Películas</a></li>
                                        <li><a href="/categorias/series">Series</a></li>
                                    </ul>
                                </li>
                                
                                <li id="nav-planes"><a href="/planes">Planes</a></li>
                                <li><a href="#" class="search-switch"><span class="icon_search"></span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right d-flex align-items-center justify-content-end">
                        <?php if(session()->get('is_logged_in')): ?>
                            <a href="/perfil" style="margin-left: 10px;"><span class="icon_profile"></span> Mi Perfil</a>
                            <a href="/logout" class="text-danger" style="margin-left: 20px; color: #ff4d4d !important;" title="Cerrar Sesión"><i class="fa fa-sign-out"></i></a>
                        <?php else: ?>
                            <a href="/login" style="margin-left: 10px;">Entrar</a>
                            <a href="/registro" class="bb-btn-register" style="margin-left: 20px;">Registrarse</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    
    <?= $this->renderSection('content') ?>

    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="/"><img src="/img/blockbuster_logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="/">Inicio</a></li>
                            <li><a href="/categorias/peliculas">Películas</a></li>
                            <li><a href="/categorias/series">Series</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>
    
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            
            <form class="search-model-form" action="<?= base_url('buscar') ?>" method="GET">
                <input type="text" name="q" id="search-input" placeholder="Buscar películas, series..." required autocomplete="off">
            </form>
        </div>
    </div>
    
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/player.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <script src="/js/mixitup.min.js"></script>
    <script src="/js/jquery.slicknav.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/main.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Obtenemos la dirección web actual (URL)
            var currentPath = window.location.pathname.toLowerCase();
            
            // Seleccionamos los items principales del menú
            var navInicio = document.getElementById('nav-inicio');
            var navCategorias = document.getElementById('nav-categorias');
            var navPlanes = document.getElementById('nav-planes');

            // Limpiamos todo
            navInicio.classList.remove('active');
            navCategorias.classList.remove('active');
            navPlanes.classList.remove('active');

            // Lógica para decidir cuál pintar de amarillo
            if (currentPath.includes('categorias')) {
                navCategorias.classList.add('active');
            } else if (currentPath.includes('planes')) {
                navPlanes.classList.add('active');
            } else {
                navInicio.classList.add('active');
            }
        });
    </script>
</body>
</html>