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

    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('css/font-awesome.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('css/elegant-icons.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('css/plyr.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('css/nice-select.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('css/owl.carousel.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('css/slicknav.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>" type="text/css">
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="<?= base_url() ?>">
                            <img src="<?= base_url('img/logo.png') ?>" alt="Logo Blockbuster">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="<?= base_url() ?>">Inicio</a></li>
                                <li><a href="#">Categorias <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="#">Películas</a></li>
                                        <li><a href="#">Series</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Planes</a></li>
                                <li><a href="#" class="search-switch"><span class="icon_search"></span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right d-flex align-items-center justify-content-end">
                        <?php if(session()->get('is_logged_in')): ?>
                            <a href="<?= base_url('perfil') ?>" style="margin-left: 10px;"><span class="icon_profile"></span> Mi Perfil</a>
                            <a href="<?= base_url('logout') ?>" class="text-danger" style="margin-left: 20px;" title="Cerrar Sesión"><i class="fa fa-sign-out"></i></a>
                        <?php else: ?>
                            <a href="<?= base_url('login') ?>" style="margin-left: 10px; color: #b7b7b7;">Entrar</a>
                            <a href="<?= base_url('registro') ?>" class="primary-btn" style="margin-left: 20px;">Registrarse</a>
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
                        <a href="<?= base_url() ?>"><img src="<?= base_url('img/logo.png') ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="<?= base_url() ?>">Inicio</a></li>
                            <li><a href="#">Categorias</a></li>
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
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <script src="<?= base_url('js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('js/player.js') ?>"></script>
    <script src="<?= base_url('js/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= base_url('js/mixitup.min.js') ?>"></script>
    <script src="<?= base_url('js/jquery.slicknav.js') ?>"></script>
    <script src="<?= base_url('js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('js/main.js') ?>"></script>
</body>
</html>