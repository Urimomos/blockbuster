<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<style>
    /* Estilo para que el título sea visible sobre el fondo oscuro */
    .product__page__title h4 { color: #FFCC00 !important; font-weight: 800; }

    .product__item__pic, .product__sidebar__view__item { cursor: pointer; transition: all 0.3s ease; }
    .product__item__pic:hover { transform: scale(1.05); box-shadow: 0px 0px 15px #FFCC00; border: 2px solid #FFCC00 !important; }
    .bb-search-bar { background-color: #001A5E; border: 2px solid #FFCC00; color: white; border-radius: 5px; padding: 10px 15px; width: 100%; font-weight: bold; }
    .nav-tabs.bb-custom-tabs { border-bottom: none !important; justify-content: flex-end; }
    .nav-tabs.bb-custom-tabs .nav-link { color: #b3b3b3 !important; border: none !important; background: transparent !important; font-weight: 600; }
    .nav-tabs.bb-custom-tabs .nav-link.active { color: #FFCC00 !important; border-bottom: 2px solid #FFCC00 !important; }
    .modal-body p { margin-bottom: 5px; font-size: 14px; }
    .modal-body strong { color: #FFCC00; }
</style>

<section class="product-page spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="product__page__title">
                    <div class="row align-items-center">
                        <div class="col-lg-6"><h4>CATÁLOGO DE PELÍCULAS</h4></div>
                        <div class="col-lg-6"><input type="text" id="buscadorPeliculas" class="bb-search-bar" placeholder="🔍 Buscar por título o género..."></div>
                    </div>
                </div>
                <div class="row" id="contenedorPeliculas">
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="jurassic park dinosaurios aventura">
                        <div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/jurassic.jpg') ?>" data-toggle="modal" data-target="#modalJP"><div class="ep">B</div></div>
                        <div class="product__item__text"><h5 style="color:white;">Jurassic Park</h5></div></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="terminator 2 juicio final accion">
                        <div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/terminator.jpg') ?>" data-toggle="modal" data-target="#modalT2"><div class="ep">C</div></div>
                        <div class="product__item__text"><h5 style="color:white;">Terminator 2</h5></div></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="hombres de negro mib comedia">
                        <div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/Hombre_Negro.jpg') ?>" data-toggle="modal" data-target="#modalMIB"><div class="ep">B</div></div>
                        <div class="product__item__text"><h5 style="color:white;">Hombres de Negro</h5></div></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="volver al futuro bttf ciencia ficcion">
                        <div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/volver_futuro.jpg') ?>" data-toggle="modal" data-target="#modalBTTF"><div class="ep">A</div></div>
                        <div class="product__item__text"><h5 style="color:white;">Volver al Futuro</h5></div></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="the matrix neo accion">
                        <div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/The_matrix.jpg') ?>" data-toggle="modal" data-target="#modalMatrix"><div class="ep">B15</div></div>
                        <div class="product__item__text"><h5 style="color:white;">The Matrix</h5></div></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="toy story pixar infantil">
                        <div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/toy_story.jpg') ?>" data-toggle="modal" data-target="#modalToyStory"><div class="ep">AA</div></div>
                        <div class="product__item__text"><h5 style="color:white;">Toy Story</h5></div></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="titanic romance drama">
                        <div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/titanic.jpg') ?>" data-toggle="modal" data-target="#modalTitanic"><div class="ep">B</div></div>
                        <div class="product__item__text"><h5 style="color:white;">Titanic</h5></div></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="rey leon mufasa infantil">
                        <div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/caratula_mufasa.png') ?>" data-toggle="modal" data-target="#modalReyLeon"><div class="ep">AA</div></div>
                        <div class="product__item__text"><h5 style="color:white;">Mufasa</h5></div></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="star wars guerra galaxias">
                        <div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/starw.jpg') ?>" data-toggle="modal" data-target="#modalStarWars"><div class="ep">B</div></div>
                        <div class="product__item__text"><h5 style="color:white;">Star Wars: IV</h5></div></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="jumanji aventura">
                        <div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/jumanji.jpg') ?>" data-toggle="modal" data-target="#modalJumanji"><div class="ep">B</div></div>
                        <div class="product__item__text"><h5 style="color:white;">Jumanji</h5></div></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="et extraterrestre infantil">
                        <div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/E_T.jpg') ?>" data-toggle="modal" data-target="#modalET"><div class="ep">A</div></div>
                        <div class="product__item__text"><h5 style="color:white;">E.T.</h5></div></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="gladiador accion drama">
                        <div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/gladiador.jpg') ?>" data-toggle="modal" data-target="#modalGladiador"><div class="ep">C</div></div>
                        <div class="product__item__text"><h5 style="color:white;">Gladiador</h5></div></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="alien octavo pasajero terror">
                        <div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/alien.jpg') ?>" data-toggle="modal" data-target="#modalAlien"><div class="ep">C</div></div>
                        <div class="product__item__text"><h5 style="color:white;">Alien</h5></div></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="cazafantasmas comedia">
                        <div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/caza.jpg') ?>" data-toggle="modal" data-target="#modalCaza"><div class="ep">B</div></div>
                        <div class="product__item__text"><h5 style="color:white;">Cazafantasmas</h5></div></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="duro de matar accion">
                        <div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/duro.jpg') ?>" data-toggle="modal" data-target="#modalDuro"><div class="ep">C</div></div>
                        <div class="product__item__text"><h5 style="color:white;">Duro de Matar</h5></div></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="forrest gump drama">
                        <div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/gump.jpg') ?>" data-toggle="modal" data-target="#modalGump"><div class="ep">B</div></div>
                        <div class="product__item__text"><h5 style="color:white;">Forrest Gump</h5></div></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="indiana jones aventura">
                        <div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/indi.jpg') ?>" data-toggle="modal" data-target="#modalIndi"><div class="ep">B</div></div>
                        <div class="product__item__text"><h5 style="color:white;">Indiana Jones</h5></div></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="karate kid miyagi artes marciales">
                        <div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/karate.jpg') ?>" data-toggle="modal" data-target="#modalKarate"><div class="ep">A</div></div>
                        <div class="product__item__text"><h5 style="color:white;">Karate Kid</h5></div></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="rocky balboa boxeo">
                        <div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/rocky.jpg') ?>" data-toggle="modal" data-target="#modalRocky"><div class="ep">A</div></div>
                        <div class="product__item__text"><h5 style="color:white;">Rocky</h5></div></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="scream terror suspenso">
                        <div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/scream.jpg') ?>" data-toggle="modal" data-target="#modalScream"><div class="ep">C</div></div>
                        <div class="product__item__text"><h5 style="color:white;">Scream</h5></div></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="señor de los anillos fantasia">
                        <div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/señor_anillos.jpg') ?>" data-toggle="modal" data-target="#modalESDLA"><div class="ep">B</div></div>
                        <div class="product__item__text"><h5 style="color:white;">Lord of the Rings</h5></div></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="space jam deportes infantil">
                        <div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/space.jpg') ?>" data-toggle="modal" data-target="#modalSpace"><div class="ep">AA</div></div>
                        <div class="product__item__text"><h5 style="color:white;">Space Jam</h5></div></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="product__sidebar">
                    <div class="section-title"><h5>MÁS ALQUILADOS</h5></div>
                    <ul class="nav nav-tabs bb-custom-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#p-dia" role="tab">Día</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#p-sem" role="tab">Semana</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#p-mes" role="tab">Mes</a></li>
                    </ul>
                    <div class="tab-content mt-3">
                        <div class="tab-pane active" id="p-dia" role="tabpanel">
                            <div class="product__sidebar__view__item set-bg" data-setbg="<?= base_url('img/Peliculas/jurassic.jpg') ?>" data-toggle="modal" data-target="#modalJP">
                                <div class="ep">TOP 1</div><div class="view"><i class="fa fa-eye"></i> 9,141</div>
                                <h5><a href="javascript:void(0)">Jurassic Park</a></h5>
                            </div>
                        </div>
                        <div class="tab-pane" id="p-sem" role="tabpanel">
                            <div class="product__sidebar__view__item set-bg" data-setbg="<?= base_url('img/Peliculas/Hombre_Negro.jpg') ?>" data-toggle="modal" data-target="#modalMIB">
                                <div class="ep">TOP 1</div><div class="view"><i class="fa fa-eye"></i> 15,300</div>
                                <h5><a href="javascript:void(0)">Men in Black</a></h5>
                            </div>
                        </div>
                        <div class="tab-pane" id="p-mes" role="tabpanel">
                            <div class="product__sidebar__view__item set-bg" data-setbg="<?= base_url('img/Peliculas/The_matrix.jpg') ?>" data-toggle="modal" data-target="#modalMatrix">
                                <div class="ep">TOP 1</div><div class="view"><i class="fa fa-eye"></i> 45,000</div>
                                <h5><a href="javascript:void(0)">The Matrix</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade bb-video-modal" id="modalJP" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content" style="background-color:#001A5E; color:white;"><div class="modal-header" style="border-bottom:1px solid #FFCC00;"><h5 class="modal-title" style="color:#FFCC00;">Jurassic Park</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/dLDkNge_AhE" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Dinosaurios clonados en un parque temático.</p><p><strong>Género:</strong> Aventura / Ciencia Ficción | <strong>Duración:</strong> 127 min</p><button class="btn btn-warning btn-block">ALQUILAR POR $2.50</button></div></div></div></div>
<div class="modal fade bb-video-modal" id="modalT2" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content" style="background-color:#001A5E; color:white;"><div class="modal-header" style="border-bottom:1px solid #FFCC00;"><h5 class="modal-title" style="color:#FFCC00;">Terminator 2</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/CRRlbK5w8AE" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Un cyborg protege al futuro líder humano.</p><p><strong>Género:</strong> Acción | <strong>Duración:</strong> 137 min</p><button class="btn btn-warning btn-block">ALQUILAR POR $3.00</button></div></div></div></div>
<div class="modal fade bb-video-modal" id="modalMIB" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content" style="background-color:#001A5E; color:white;"><div class="modal-header" style="border-bottom:1px solid #FFCC00;"><h5 class="modal-title" style="color:#FFCC00;">Hombres de Negro</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/UxUTTrU6PA4" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Agentes que vigilan extraterrestres.</p><p><strong>Género:</strong> Comedia | <strong>Duración:</strong> 98 min</p><button class="btn btn-warning btn-block">ALQUILAR POR $2.50</button></div></div></div></div>
<div class="modal fade bb-video-modal" id="modalBTTF" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content" style="background-color:#001A5E; color:white;"><div class="modal-header" style="border-bottom:1px solid #FFCC00;"><h5 class="modal-title" style="color:#FFCC00;">Volver al Futuro</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/qvsgGtivCgs" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Viajes en el tiempo en un DeLorean.</p><p><strong>Género:</strong> Ciencia Ficción | <strong>Duración:</strong> 116 min</p><button class="btn btn-warning btn-block">ALQUILAR POR $2.00</button></div></div></div></div>
<div class="modal fade bb-video-modal" id="modalMatrix" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content" style="background-color:#001A5E; color:white;"><div class="modal-header" style="border-bottom:1px solid #FFCC00;"><h5 class="modal-title" style="color:#FFCC00;">The Matrix</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/vKQi3bBA1y8" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> La realidad es una simulación.</p><p><strong>Género:</strong> Acción / Sci-Fi | <strong>Duración:</strong> 136 min</p><button class="btn btn-warning btn-block">ALQUILAR POR $3.50</button></div></div></div></div>
<div class="modal fade bb-video-modal" id="modalToyStory" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content" style="background-color:#001A5E; color:white;"><div class="modal-header" style="border-bottom:1px solid #FFCC00;"><h5 class="modal-title" style="color:#FFCC00;">Toy Story</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/v-PjgYDrg70" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Juguetes que cobran vida.</p><p><strong>Género:</strong> Infantil / Animación | <strong>Duración:</strong> 81 min</p><button class="btn btn-warning btn-block">ALQUILAR POR $2.00</button></div></div></div></div>
<div class="modal fade bb-video-modal" id="modalTitanic" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content" style="background-color:#001A5E; color:white;"><div class="modal-header" style="border-bottom:1px solid #FFCC00;"><h5 class="modal-title" style="color:#FFCC00;">Titanic</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/G-M3zXm2fU0" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Romance y tragedia en el mar.</p><p><strong>Género:</strong> Drama / Romance | <strong>Duración:</strong> 194 min</p><button class="btn btn-warning btn-block">ALQUILAR POR $3.00</button></div></div></div></div>
<div class="modal fade bb-video-modal" id="modalReyLeon" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content" style="background-color:#001A5E; color:white;"><div class="modal-header" style="border-bottom:1px solid #FFCC00;"><h5 class="modal-title" style="color:#FFCC00;">Mufasa</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/lFzVJEksoDY" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> El ciclo de la vida en la selva.</p><p><strong>Género:</strong> Infantil / Animación | <strong>Duración:</strong> 88 min</p><button class="btn btn-warning btn-block">ALQUILAR POR $2.50</button></div></div></div></div>
<div class="modal fade bb-video-modal" id="modalStarWars" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content" style="background-color:#001A5E; color:white;"><div class="modal-header" style="border-bottom:1px solid #FFCC00;"><h5 class="modal-title" style="color:#FFCC00;">Star Wars</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/vZ734NWnAHA" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> La rebelión contra el imperio.</p><p><strong>Género:</strong> Fantasía | <strong>Duración:</strong> 121 min</p><button class="btn btn-warning btn-block">ALQUILAR POR $2.50</button></div></div></div></div>
<div class="modal fade bb-video-modal" id="modalJumanji" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content" style="background-color:#001A5E; color:white;"><div class="modal-header" style="border-bottom:1px solid #FFCC00;"><h5 class="modal-title" style="color:#FFCC00;">Jumanji</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/yNy9jTeolUk" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Un juego que libera la selva.</p><p><strong>Género:</strong> Aventura | <strong>Duración:</strong> 104 min</p><button class="btn btn-warning btn-block">ALQUILAR POR $2.00</button></div></div></div></div>
<div class="modal fade bb-video-modal" id="modalET" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content" style="background-color:#001A5E; color:white;"><div class="modal-header" style="border-bottom:1px solid #FFCC00;"><h5 class="modal-title" style="color:#FFCC00;">E.T.</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/qYAETtIIClk" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Un alienígena quiere volver a casa.</p><p><strong>Género:</strong> Ciencia Ficción | <strong>Duración:</strong> 115 min</p><button class="btn btn-warning btn-block">ALQUILAR POR $2.00</button></div></div></div></div>
<div class="modal fade bb-video-modal" id="modalGladiador" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content" style="background-color:#001A5E; color:white;"><div class="modal-header" style="border-bottom:1px solid #FFCC00;"><h5 class="modal-title" style="color:#FFCC00;">Gladiador</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/owK1qxDselE" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Venganza en el Coliseo Romano.</p><p><strong>Género:</strong> Acción / Épico | <strong>Duración:</strong> 155 min</p><button class="btn btn-warning btn-block">ALQUILAR POR $3.50</button></div></div></div></div>
<div class="modal fade bb-video-modal" id="modalAlien" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content" style="background-color:#001A5E; color:white;"><div class="modal-header" style="border-bottom:1px solid #FFCC00;"><h5 class="modal-title" style="color:#FFCC00;">Alien</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/LjLamj-b0I8" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Un pasajero mortal en la nave.</p><p><strong>Género:</strong> Terror / Ciencia Ficción | <strong>Duración:</strong> 117 min</p><button class="btn btn-warning btn-block">ALQUILAR POR $2.50</button></div></div></div></div>
<div class="modal fade bb-video-modal" id="modalCaza" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content" style="background-color:#001A5E; color:white;"><div class="modal-header" style="border-bottom:1px solid #FFCC00;"><h5 class="modal-title" style="color:#FFCC00;">Cazafantasmas</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/vntAEVjPBzQ" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Expertos en atrapar fantasmas.</p><p><strong>Género:</strong> Comedia | <strong>Duración:</strong> 105 min</p><button class="btn btn-warning btn-block">ALQUILAR POR $2.00</button></div></div></div></div>
<div class="modal fade bb-video-modal" id="modalDuro" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content" style="background-color:#001A5E; color:white;"><div class="modal-header" style="border-bottom:1px solid #FFCC00;"><h5 class="modal-title" style="color:#FFCC00;">Duro de Matar</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/jaJuwKCmJbY" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Acción pura en el edificio Nakatomi.</p><p><strong>Género:</strong> Acción | <strong>Duración:</strong> 132 min</p><button class="btn btn-warning btn-block">ALQUILAR POR $3.00</button></div></div></div></div>
<div class="modal fade bb-video-modal" id="modalGump" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content" style="background-color:#001A5E; color:white;"><div class="modal-header" style="border-bottom:1px solid #FFCC00;"><h5 class="modal-title" style="color:#FFCC00;">Forrest Gump</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/bLvqoHBptjg" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> La vida es como una caja de chocolates.</p><p><strong>Género:</strong> Drama | <strong>Duración:</strong> 142 min</p><button class="btn btn-warning btn-block">ALQUILAR POR $3.00</button></div></div></div></div>
<div class="modal fade bb-video-modal" id="modalIndi" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content" style="background-color:#001A5E; color:white;"><div class="modal-header" style="border-bottom:1px solid #FFCC00;"><h5 class="modal-title" style="color:#FFCC00;">Indiana Jones</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/XkkzKHCx154" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> En busca del arca perdida.</p><p><strong>Género:</strong> Aventura | <strong>Duración:</strong> 115 min</p><button class="btn btn-warning btn-block">ALQUILAR POR $2.50</button></div></div></div></div>
<div class="modal fade bb-video-modal" id="modalKarate" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content" style="background-color:#001A5E; color:white;"><div class="modal-header" style="border-bottom:1px solid #FFCC00;"><h5 class="modal-title" style="color:#FFCC00;">Karate Kid</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/n7JhKCQnEqQ" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Dar cera, pulir cera.</p><p><strong>Género:</strong> Acción | <strong>Duración:</strong> 126 min</p><button class="btn btn-warning btn-block">ALQUILAR POR $2.50</button></div></div></div></div>
<div class="modal fade bb-video-modal" id="modalRocky" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content" style="background-color:#001A5E; color:white;"><div class="modal-header" style="border-bottom:1px solid #FFCC00;"><h5 class="modal-title" style="color:#FFCC00;">Rocky</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/3VUblDwa648" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> El semental italiano.</p><p><strong>Género:</strong> Deporte / Drama | <strong>Duración:</strong> 119 min</p><button class="btn btn-warning btn-block">ALQUILAR POR $2.00</button></div></div></div></div>
<div class="modal fade bb-video-modal" id="modalScream" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content" style="background-color:#001A5E; color:white;"><div class="modal-header" style="border-bottom:1px solid #FFCC00;"><h5 class="modal-title" style="color:#FFCC00;">Scream</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/beToTslH17s" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> ¿Cuál es tu película de terror favorita?</p><p><strong>Género:</strong> Terror | <strong>Duración:</strong> 111 min</p><button class="btn btn-warning btn-block">ALQUILAR POR $2.50</button></div></div></div></div>
<div class="modal fade bb-video-modal" id="modalESDLA" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content" style="background-color:#001A5E; color:white;"><div class="modal-header" style="border-bottom:1px solid #FFCC00;"><h5 class="modal-title" style="color:#FFCC00;">Lord of the Rings</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/V75dMMIW2B4" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Un anillo para gobernarlos a todos.</p><p><strong>Género:</strong> Fantasía | <strong>Duración:</strong> 178 min</p><button class="btn btn-warning btn-block">ALQUILAR POR $3.50</button></div></div></div></div>
<div class="modal fade bb-video-modal" id="modalSpace" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered modal-lg"><div class="modal-content" style="background-color:#001A5E; color:white;"><div class="modal-header" style="border-bottom:1px solid #FFCC00;"><h5 class="modal-title" style="color:#FFCC00;">Space Jam</h5><button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9 mb-3"><iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/oKNy-MWjkcU" allowfullscreen></iframe></div><p><strong>Sinopsis:</strong> Jordan y los Looney Tunes.</p><p><strong>Género:</strong> Infantil / Deporte | <strong>Duración:</strong> 88 min</p><button class="btn btn-warning btn-block">ALQUILAR POR $2.50</button></div></div></div></div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var searchInput = document.getElementById('buscadorPeliculas');
        var peliculas = document.querySelectorAll('.pelicula-card');
        if(searchInput) {
            searchInput.addEventListener('keyup', function() {
                var filtro = searchInput.value.toLowerCase();
                peliculas.forEach(function(peli) {
                    var titulo = peli.getAttribute('data-titulo');
                    peli.style.display = (titulo && titulo.includes(filtro)) ? '' : 'none';
                });
            });
        }
        $('.bb-video-modal').on('show.bs.modal', function () {
            var iframe = $(this).find('iframe');
            iframe.attr('src', iframe.data('src'));
        });
        $('.bb-video-modal').on('hidden.bs.modal', function () {
            $(this).find('iframe').attr('src', '');
        });
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $('.set-bg').each(function () {
                var bg = $(this).data('setbg');
                $(this).css('background-image', 'url(' + bg + ')');
            });
        });
    });
</script>

<?= $this->endSection() ?>