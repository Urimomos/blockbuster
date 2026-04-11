<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

    <style>
        /* --- ESTILOS BLOCKBUSTER --- */
        .product__item__pic {
            transition: transform 0.3s ease-out, box-shadow 0.3s ease-out, border-color 0.3s ease-out !important;
            position: relative;
            z-index: 1;
        }
        .product__item__pic:hover {
            transform: scale(1.08) translateY(-8px); 
            box-shadow: 8px 8px 0px #FFCC00; 
            border-color: #FFCC00 !important; 
            z-index: 10; 
        }
        .product__item:hover .product__item__text h5 {
            color: #FFCC00 !important;
            transition: color 0.2s ease-in-out;
        }

        /* Estilo para el buscador */
        .bb-search-bar {
            background-color: #001A5E;
            border: 2px solid #FFCC00;
            color: white;
            border-radius: 5px;
            padding: 10px 15px;
            width: 100%;
            font-weight: bold;
        }
        .bb-search-bar::placeholder {
            color: #b3b3b3;
        }
        .bb-search-bar:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(255, 204, 0, 0.5);
        }
    </style>

    <div class="breadcrumb-option" style="background-color: #000c2b; border-bottom: 1px solid #FFCC00;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?= base_url() ?>"><i class="fa fa-home"></i> Inicio</a>
                        <a href="#">Categorías</a>
                        <span style="color: #FFCC00;">Películas</span> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="product-page spad bb-background">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-8">
                    <div class="product__page__content">
                        
                        <div class="product__page__title">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="section-title bb-title">
                                        <h4>Catálogo de Películas</h4> 
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                                    <input type="text" id="buscadorPeliculas" class="bb-search-bar" placeholder="🔍 Buscar película por título...">
                                </div>
                            </div>
                        </div>

                        <div class="row" id="contenedorPeliculas">
                            
                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="jurassic park dinosaurios">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/jurassic.jpg') ?>" data-toggle="modal" data-target="#modalJP" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">HOT</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Jurassic Park</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="terminator 2 el juicio final accion">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/terminator.jpg') ?>" data-toggle="modal" data-target="#modalT2" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">VHS</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Terminator 2</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="hombres de negro men in black will smith">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/Hombre_Negro.jpg') ?>" data-toggle="modal" data-target="#modalMIB" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">VHS</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Hombres de Negro</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="volver al futuro back to the future marty mcfly">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/volver_futuro.jpg') ?>" data-toggle="modal" data-target="#modalBTTF" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">CLÁSICO</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Volver al Futuro</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="the matrix neo keanu reeves">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/the_matrix.jpg') ?>" data-toggle="modal" data-target="#modalMatrix" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">DVD</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">The Matrix</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="toy story disney pixar woody buzz">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/toy_story.jpg') ?>" data-toggle="modal" data-target="#modalToyStory" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">VHS</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Toy Story</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="titanic leonardo dicaprio romance barco">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/titanic.jpg') ?>" data-toggle="modal" data-target="#modalTitanic" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">VHSx2</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Titanic</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="el rey leon the lion king disney mufasa simba">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/caratula_mufasa.png') ?>" data-toggle="modal" data-target="#modalReyLeon" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">VHS</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Mufasa</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="star wars la guerra de las galaxias darth vader luke">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/starw.jpg') ?>" data-toggle="modal" data-target="#modalStarWars" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">CLÁSICO</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Star Wars: Ep. IV</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="jumanji robin williams juego de mesa selva">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/jumanji.jpg') ?>" data-toggle="modal" data-target="#modalJumanji" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">VHS</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Jumanji</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="et el extraterrestre alienigena steven spielberg">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/E_T.jpg') ?>" data-toggle="modal" data-target="#modalET" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">CLÁSICO</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">E.T. el Extraterrestre</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="indiana jones cazadores del arca perdida harrison ford">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/indi.jpg') ?>" data-toggle="modal" data-target="#modalIndiana" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">VHS</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Indiana Jones</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="forrest gump tom hanks correr">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/gump.jpg') ?>" data-toggle="modal" data-target="#modalForrest" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">HOT</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Forrest Gump</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="space jam michael jordan looney tunes bugs bunny">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/space.jpg') ?>" data-toggle="modal" data-target="#modalSpaceJam" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">VHS</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Space Jam</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="los cazafantasmas ghostbusters fantasmas">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/caza.jpg') ?>" data-toggle="modal" data-target="#modalGhostbusters" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">CLÁSICO</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Los Cazafantasmas</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="duro de matar die hard bruce willis accion">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/duro.jpg') ?>" data-toggle="modal" data-target="#modalDuroDeMatar" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">HOT</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Duro de Matar</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="alien el octavo pasajero terror espacio">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/alien.jpg') ?>" data-toggle="modal" data-target="#modalAlien" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">VHS</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Alien</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="rocky balboa sylvester stallone boxeo deporte">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/rocky.jpg') ?>" data-toggle="modal" data-target="#modalRocky" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">CLÁSICO</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Rocky</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="karate kid daniel san mr miyagi artes marciales">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/karate.jpg') ?>" data-toggle="modal" data-target="#modalKarateKid" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">VHS</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">The Karate Kid</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="gladiador russell crowe roma epico">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/gladiador.jpg') ?>" data-toggle="modal" data-target="#modalGladiador" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">DVD</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Gladiador</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                        <div id="mensajeVacio" style="display: none; text-align: center; margin-top: 20px; color: white;">
                            <h5 style="color: #FFCC00;"><i class="fa fa-frown-o"></i> No se encontraron películas con ese nombre.</h5>
                        </div>

                    </div>
                    
                    <div class="product__pagination">
                        <a href="#" class="current-page" style="background: #FFCC00; color: #001A5E; border: 2px solid #001A5E;">1</a>
                        <a href="#" style="color: white;">2</a>
                        <a href="#" style="color: white;">3</a>
                        <a href="#" style="color: white;"><i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title bb-title">
                                <h5>Más Alquilados</h5>
                            </div>
                            <ul class="filter__controls" style="color: white; margin-bottom: 20px;">
                                <li style="color: #FFCC00; display: inline-block; margin-right: 15px; font-weight: 700;">Día</li>
                                <li style="display: inline-block; margin-right: 15px; cursor: pointer;">Semana</li>
                                <li style="display: inline-block; margin-right: 15px; cursor: pointer;">Mes</li>
                            </ul>
                            
                            <div class="filter__gallery_fixed">
                                
                                <div class="product__sidebar__view__item set-bg" data-setbg="<?= base_url('img/Peliculas/jurassic.jpg') ?>" style="border: 2px solid #001A5E; cursor: pointer; margin-bottom: 20px;" data-toggle="modal" data-target="#modalJP">
                                    <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">TOP 1</div>
                                    <div class="view" style="background: rgba(0, 26, 94, 0.8); color: white;"><i class="fa fa-eye"></i> 9141 Alquileres</div>
                                    <h5 style="background: rgba(0, 0, 0, 0.7); padding: 5px;"><a href="#" style="color: white;">Jurassic Park</a></h5>
                                </div>
                                
                                <div class="product__sidebar__view__item set-bg" data-setbg="<?= base_url('img/Peliculas/terminator.jpg') ?>" style="border: 2px solid #001A5E; cursor: pointer; margin-bottom: 20px;" data-toggle="modal" data-target="#modalT2">
                                    <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">TOP 2</div>
                                    <div class="view" style="background: rgba(0, 26, 94, 0.8); color: white;"><i class="fa fa-eye"></i> 8520 Alquileres</div>
                                    <h5 style="background: rgba(0, 0, 0, 0.7); padding: 5px;"><a href="#" style="color: white;">Terminator 2</a></h5>
                                </div>
                                
                                <div class="product__sidebar__view__item set-bg" data-setbg="<?= base_url('img/Peliculas/Hombre_Negro.jpg') ?>" style="border: 2px solid #001A5E; cursor: pointer; margin-bottom: 20px;" data-toggle="modal" data-target="#modalMIB">
                                    <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">TOP 3</div>
                                    <div class="view" style="background: rgba(0, 26, 94, 0.8); color: white;"><i class="fa fa-eye"></i> 7412 Alquileres</div>
                                    <h5 style="background: rgba(0, 0, 0, 0.7); padding: 5px;"><a href="#" style="color: white;">Hombres de Negro</a></h5>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade bb-video-modal" id="modalJP" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document"> 
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Jurassic Park (1993)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/dLDkNge_AhE" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Un multimillonario crea un parque temático con dinosaurios clonados, pero las cosas salen mal durante una visita de prueba.</p>
                    <p><strong>Género:</strong> Ciencia Ficción / Aventura</p>
                    <p><strong>Precio Alquiler:</strong> $2.50 (VHS)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalT2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Terminator 2: El Juicio Final (1991)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/CRRlbK5w8AE" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Un cyborg es enviado desde el futuro para proteger a un joven John Connor de un androide asesino más avanzado.</p>
                    <p><strong>Género:</strong> Acción / Sci-Fi</p>
                    <p><strong>Precio Alquiler:</strong> $3.00 (VHS)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalMIB" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Hombres de Negro (1997)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/UxUTTrU6PA4" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Dos agentes secretos deben cazar extraterrestres en Nueva York y evitar un desastre intergaláctico.</p>
                    <p><strong>Género:</strong> Acción / Comedia</p>
                    <p><strong>Precio Alquiler:</strong> $2.50 (VHS)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalBTTF" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Volver al Futuro (1985)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/qvsgGtivCgs" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Un adolescente es enviado accidentalmente 30 años al pasado en un DeLorean que viaja en el tiempo.</p>
                    <p><strong>Género:</strong> Sci-Fi / Comedia</p>
                    <p><strong>Precio Alquiler:</strong> $2.00 (CLÁSICO)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalMatrix" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">The Matrix (1999)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/vKQi3bBA1y8" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Un hacker descubre que la realidad que conoce es una simulación creada por máquinas, y se une a la rebelión para liberar a la humanidad.</p>
                    <p><strong>Género:</strong> Sci-Fi / Acción</p>
                    <p><strong>Precio Alquiler:</strong> $3.50 (DVD)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalToyStory" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Toy Story (1995)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/v-PjgYDrg70" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Un muñeco vaquero se siente amenazado cuando un nuevo juguete espacial se convierte en el favorito de su dueño.</p>
                    <p><strong>Género:</strong> Animación / Familiar</p>
                    <p><strong>Precio Alquiler:</strong> $2.00 (VHS)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalTitanic" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Titanic (1997)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/G-M3zXm2fU0" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Una joven de clase alta se enamora de un artista pobre a bordo del desafortunado viaje inaugural del RMS Titanic.</p>
                    <p><strong>Género:</strong> Drama / Romance</p>
                    <p><strong>Precio Alquiler:</strong> $3.00 (VHSx2)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalReyLeon" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Mufasa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/lFzVJEksoDY" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> El príncipe león Simba es engañado por su traicionero tío para que huya, pero debe regresar para reclamar su trono.</p>
                    <p><strong>Género:</strong> Animación / Musical</p>
                    <p><strong>Precio Alquiler:</strong> $2.50 (VHS)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalStarWars" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Star Wars: Episodio IV (1977)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/vZ734NWnAHA" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Un joven granjero, un contrabandista y dos droides se unen para rescatar a una princesa y salvar la galaxia.</p>
                    <p><strong>Género:</strong> Sci-Fi / Épico</p>
                    <p><strong>Precio Alquiler:</strong> $2.50 (CLÁSICO)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalJumanji" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Jumanji (1995)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/yNy9jTeolUk" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Dos niños encuentran un juego de mesa mágico que libera a un hombre atrapado en él junto con peligros de la selva.</p>
                    <p><strong>Género:</strong> Aventura / Fantasía</p>
                    <p><strong>Precio Alquiler:</strong> $2.00 (VHS)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalET" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">E.T. el Extraterrestre (1982)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/qYAETtIIClk" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Un niño con problemas ayuda a un alienígena amigable a escapar de la Tierra y regresar a su mundo natal.</p>
                    <p><strong>Género:</strong> Sci-Fi / Familiar</p>
                    <p><strong>Precio Alquiler:</strong> $2.00 (CLÁSICO)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalIndiana" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Indiana Jones (1981)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/XkkzKHCx154" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> El arqueólogo y aventurero Indiana Jones es contratado por el gobierno para encontrar el Arca de la Alianza antes que los nazis.</p>
                    <p><strong>Género:</strong> Aventura / Acción</p>
                    <p><strong>Precio Alquiler:</strong> $2.50 (VHS)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalForrest" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Forrest Gump (1994)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/bLvqoHBptjg" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Las presidencias de Kennedy y Johnson, Vietnam y Watergate son vistas a través de la perspectiva de un hombre de Alabama con un coeficiente intelectual de 75.</p>
                    <p><strong>Género:</strong> Drama / Comedia</p>
                    <p><strong>Precio Alquiler:</strong> $3.00 (HOT)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalSpaceJam" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Space Jam (1996)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/oKNy-MWjkcU" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> En un intento desesperado por ganar un partido de baloncesto y ganar su libertad, los Looney Tunes buscan la ayuda del campeón retirado Michael Jordan.</p>
                    <p><strong>Género:</strong> Animación / Comedia</p>
                    <p><strong>Precio Alquiler:</strong> $2.50 (VHS)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalGhostbusters" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Los Cazafantasmas (1984)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/vntAEVjPBzQ" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Tres ex profesores de parapsicología abren un servicio de eliminación de fantasmas en la ciudad de Nueva York.</p>
                    <p><strong>Género:</strong> Comedia / Sci-Fi</p>
                    <p><strong>Precio Alquiler:</strong> $2.00 (CLÁSICO)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalDuroDeMatar" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Duro de Matar (1988)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/jaJuwKCmJbY" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> El oficial de la policía de Nueva York John McClane intenta salvar a su esposa y a otras personas tomadas como rehenes por terroristas alemanes en una fiesta de Navidad en Los Ángeles.</p>
                    <p><strong>Género:</strong> Acción</p>
                    <p><strong>Precio Alquiler:</strong> $3.00 (HOT)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalAlien" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Alien, el octavo pasajero (1979)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/LjLamj-b0I8" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Después de que una nave estelar comercial responde a una llamada de auxilio, la tripulación descubre una forma de vida letal que se reproduce dentro de los huéspedes humanos.</p>
                    <p><strong>Género:</strong> Terror / Sci-Fi</p>
                    <p><strong>Precio Alquiler:</strong> $2.50 (VHS)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalRocky" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Rocky (1976)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/3VUblDwa648" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Un boxeador de poca monta de Filadelfia tiene la oportunidad de pelear por el campeonato mundial de peso pesado.</p>
                    <p><strong>Género:</strong> Drama / Deportes</p>
                    <p><strong>Precio Alquiler:</strong> $2.00 (CLÁSICO)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalKarateKid" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Karate Kid (1984)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/n7JhKCQnEqQ" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Un joven acosado por sus compañeros aprende kárate de la mano de un sabio maestro de mantenimiento de su edificio.</p>
                    <p><strong>Género:</strong> Drama / Acción</p>
                    <p><strong>Precio Alquiler:</strong> $2.50 (VHS)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalGladiador" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Gladiador (2000)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/owK1qxDselE" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Un general romano es traicionado, y su familia asesinada por el hijo corrupto de un emperador, por lo que llega a Roma como gladiador para vengarse.</p>
                    <p><strong>Género:</strong> Acción / Épico</p>
                    <p><strong>Precio Alquiler:</strong> $3.50 (DVD)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            
            // 1. SCRIPT PARA CARGA DIFERIDA (LAZY LOAD) Y APAGAR VIDEOS
            var modals = document.querySelectorAll('.bb-video-modal');
            modals.forEach(function(modal) {
                
                // Cuando se abre el modal, inyectamos el enlace
                $(modal).on('show.bs.modal', function () {
                    var iframe = modal.querySelector('iframe');
                    if (iframe) {
                        var enlaceReal = iframe.getAttribute('data-src');
                        iframe.src = enlaceReal; 
                    }
                });

                // Cuando se cierra el modal, quitamos el enlace
                $(modal).on('hidden.bs.modal', function () {
                    var iframe = modal.querySelector('iframe');
                    if (iframe) {
                        iframe.src = ''; 
                    }
                });
            });

            // 2. SCRIPT DEL BUSCADOR EN TIEMPO REAL
            var searchInput = document.getElementById('buscadorPeliculas');
            var peliculas = document.querySelectorAll('.pelicula-card');
            var mensajeVacio = document.getElementById('mensajeVacio');

            if(searchInput) {
                searchInput.addEventListener('keyup', function() {
                    var filtro = searchInput.value.toLowerCase();
                    var peliculasVisibles = 0;

                    peliculas.forEach(function(peli) {
                        var titulo = peli.getAttribute('data-titulo');
                        
                        if (titulo && titulo.includes(filtro)) {
                            peli.style.display = ''; 
                            peliculasVisibles++;
                        } else {
                            peli.style.display = 'none'; 
                        }
                    });

                    if (peliculasVisibles === 0) {
                        mensajeVacio.style.display = 'block';
                    } else {
                        mensajeVacio.style.display = 'none';
                    }
                });
            }
        });
    </script>

<?= $this->endSection() ?>