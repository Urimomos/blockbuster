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
                        <span style="color: #FFCC00;">Series</span> 
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
                                        <h4>Catálogo de Series</h4> 
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
                                    <input type="text" id="buscadorSeries" class="bb-search-bar" placeholder="🔍 Buscar serie por título...">
                                </div>
                            </div>
                        </div>

                        <div class="row" id="contenedorSeries">
                            
                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 serie-card" data-titulo="los expedientes secretos x x-files">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/Drake_josh.jpg') ?>" data-toggle="modal" data-target="#modalXF" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">T. 1-3</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Drake y Josh</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 serie-card" data-titulo="friends comedia amigos">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/friends.jpg') ?>" data-toggle="modal" data-target="#modalFriends" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">T. 1-10</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Friends</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 serie-card" data-titulo="malcolm el de en medio in the middle">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/malcom.jpg') ?>" data-toggle="modal" data-target="#modalMalcolm" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">T. 1-7</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Malcolm el de en medio</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 serie-card" data-titulo="el principe del rap fresh prince bel air will smith">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/principe.jpg') ?>" data-toggle="modal" data-target="#modalPrincipe" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">CLÁSICO</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">El Príncipe del Rap</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 serie-card" data-titulo="la casa de papel money heist atraco profesor">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/caratula_casa_de_papel.png') ?>" data-toggle="modal" data-target="#modalLCDP" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">T. 1-5</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">La Casa de Papel</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 serie-card" data-titulo="breaking bad walter white heisenberg">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/break.jpg') ?>" data-toggle="modal" data-target="#modalBB" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">HOT</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Breaking Bad</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 serie-card" data-titulo="the office michael scott comedia oficina">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/the_office.jpg') ?>" data-toggle="modal" data-target="#modalOffice" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">T. 1-9</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">The Office</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 serie-card" data-titulo="game of thrones juego de tronos dragones">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/game_of_thrones.jpg') ?>" data-toggle="modal" data-target="#modalGOT" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">ÉPICO</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Game of Thrones</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 serie-card" data-titulo="stranger things eleven monstruos 80s">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/stranger_things.jpg') ?>" data-toggle="modal" data-target="#modalStranger" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">SCI-FI</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Stranger Things</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 serie-card" data-titulo="los simpson the simpsons homero animacion">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/los_simpson.jpg') ?>" data-toggle="modal" data-target="#modalSimpsons" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">T. 1-15</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Los Simpson</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 serie-card" data-titulo="espiritu de lucha hajime no ippo anime boxeo">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/ippo.jpg') ?>" data-toggle="modal" data-target="#modalBCS" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">Anime</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">Espiritu de Lucha</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4 serie-card" data-titulo="icarly miranda cosgrove comedia">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/icarly.jpg') ?>" data-toggle="modal" data-target="#modalSopranos" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">CLÁSICO</div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;">iCarly</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                        <div id="mensajeVacio" style="display: none; text-align: center; margin-top: 20px; color: white;">
                            <h5 style="color: #FFCC00;"><i class="fa fa-frown-o"></i> No se encontraron series con ese nombre.</h5>
                        </div>

                    </div>
                    
                    <div class="product__pagination">
                        <a href="#" class="current-page" style="background: #FFCC00; color: #001A5E; border: 2px solid #001A5E;">1</a>
                        <a href="#" style="color: white;">2</a>
                        <a href="#" style="color: white;"><i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title bb-title">
                                <h5>Más Maratoneadas</h5>
                            </div>
                            
                            <ul class="filter__controls" style="color: white; margin-bottom: 20px;">
                                <li style="color: #FFCC00; display: inline-block; margin-right: 15px; font-weight: 700;">Día</li>
                                <li style="display: inline-block; margin-right: 15px; cursor: pointer;">Semana</li>
                                <li style="display: inline-block; margin-right: 15px; cursor: pointer;">Mes</li>
                            </ul>
                            
                            <div class="filter__gallery_fixed">
                                <div class="product__sidebar__view__item set-bg" data-setbg="<?= base_url('img/Peliculas/caratula_casa_de_papel.png') ?>" style="border: 2px solid #001A5E; cursor: pointer; margin-bottom: 20px;" data-toggle="modal" data-target="#modalLCDP">
                                    <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">TOP 1</div>
                                    <div class="view" style="background: rgba(0, 26, 94, 0.8); color: white;"><i class="fa fa-eye"></i> 15,420 Vistas</div>
                                    <h5 style="background: rgba(0, 0, 0, 0.7); padding: 5px;"><a href="#" style="color: white;">La Casa de Papel</a></h5>
                                </div>
                                
                                <div class="product__sidebar__view__item set-bg" data-setbg="<?= base_url('img/series/break.jpg') ?>" style="border: 2px solid #001A5E; cursor: pointer; margin-bottom: 20px;" data-toggle="modal" data-target="#modalBB">
                                    <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">TOP 2</div>
                                    <div class="view" style="background: rgba(0, 26, 94, 0.8); color: white;"><i class="fa fa-eye"></i> 12,350 Vistas</div>
                                    <h5 style="background: rgba(0, 0, 0, 0.7); padding: 5px;"><a href="#" style="color: white;">Breaking Bad</a></h5>
                                </div>
                                
                                <div class="product__sidebar__view__item set-bg" data-setbg="<?= base_url('img/series/the_office.jpg') ?>" style="border: 2px solid #001A5E; cursor: pointer; margin-bottom: 20px;" data-toggle="modal" data-target="#modalOffice">
                                    <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">TOP 3</div>
                                    <div class="view" style="background: rgba(0, 26, 94, 0.8); color: white;"><i class="fa fa-eye"></i> 10,115 Vistas</div>
                                    <h5 style="background: rgba(0, 0, 0, 0.7); padding: 5px;"><a href="#" style="color: white;">The Office</a></h5>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade bb-video-modal" id="modalXF" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Drake y Josh</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/xgeoy7DB9nY" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Dos hermanastros adolescentes con personalidades opuestas deben aprender a vivir bajo el mismo techo.</p>
                    <p><strong>Género:</strong> Comedia</p>
                    <p><strong>Precio Alquiler:</strong> $4.00 (Pack Temporada)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalFriends" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Friends</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/ki6Mbtnl_9I" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Sigue las vidas, amores y risas de seis jóvenes amigos que viven en Manhattan.</p>
                    <p><strong>Género:</strong> Comedia (Sitcom)</p>
                    <p><strong>Precio Alquiler:</strong> $3.50 (Pack Temporada)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalMalcolm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Malcolm el de en medio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/PfID_33TL_A" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Un niño prodigio intenta sobrevivir a su excéntrica y disfuncional familia de clase media.</p>
                    <p><strong>Género:</strong> Comedia</p>
                    <p><strong>Precio Alquiler:</strong> $3.50 (Pack Temporada)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalPrincipe" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">El Príncipe del Rap</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/1nCqRmx3Dnw" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Un joven de Filadelfia es enviado a vivir con sus tíos ricos en Bel-Air, chocando con su estilo de vida.</p>
                    <p><strong>Género:</strong> Comedia</p>
                    <p><strong>Precio Alquiler:</strong> $3.00 (Pack Temporada)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalLCDP" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">La Casa de Papel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/hMANIarjT50" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Ocho ladrones toman rehenes en la Fábrica Nacional de Moneda y Timbre de España, mientras el líder intelectual manipula a la policía para cumplir su plan.</p>
                    <p><strong>Género:</strong> Acción / Suspenso</p>
                    <p><strong>Precio Alquiler:</strong> $4.50 (DVD Temporada)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalBB" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Breaking Bad</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/HhesaQXLuRY" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Un profesor de química diagnosticado con cáncer inoperable se asocia con un exalumno para fabricar y vender metanfetamina para asegurar el futuro financiero de su familia.</p>
                    <p><strong>Género:</strong> Drama / Crimen</p>
                    <p><strong>Precio Alquiler:</strong> $4.50 (DVD Temporada)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalOffice" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">The Office</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/2iKZnMOSBiw" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Un falso documental que sigue las interacciones divertidas, y a veces inapropiadas, de los empleados de la sucursal en Scranton de la empresa papelera Dunder Mifflin.</p>
                    <p><strong>Género:</strong> Comedia</p>
                    <p><strong>Precio Alquiler:</strong> $3.50 (Pack Temporada)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalGOT" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Game of Thrones</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/KPLWWIOCOOQ" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Nueve familias nobles luchan por el control de las míticas tierras de Poniente, mientras un antiguo enemigo regresa tras estar inactivo durante miles de años.</p>
                    <p><strong>Género:</strong> Fantasía / Drama</p>
                    <p><strong>Precio Alquiler:</strong> $5.00 (Blu-Ray Temporada)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalStranger" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Stranger Things</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/b9EkMc79ZSU" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Cuando un niño desaparece, sus amigos, la familia y la policía local se ven envueltos en un misterio extraordinario que involucra experimentos secretos del gobierno y fuerzas sobrenaturales.</p>
                    <p><strong>Género:</strong> Sci-Fi / Terror</p>
                    <p><strong>Precio Alquiler:</strong> $4.00 (DVD Temporada)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalSimpsons" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Los Simpson</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/_h93U8jqq4E" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Las aventuras satíricas de una familia de clase trabajadora en la inadaptada ciudad de Springfield.</p>
                    <p><strong>Género:</strong> Animación / Comedia</p>
                    <p><strong>Precio Alquiler:</strong> $3.00 (Pack VHS)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalBCS" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Espiritu de Lucha</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/-LD0SUdJfeU" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Un estudiante de secundaria tímido que es víctima de bullying da un giro a su vida cuando es rescatado por un boxeador profesional y descubre su talento para el boxeo.</p>
                    <p><strong>Género:</strong> Anime / Deportes</p>
                    <p><strong>Precio Alquiler:</strong> $4.00 (DVD Temporada)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalSopranos" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">iCarly</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/V3pEAJ36YG0" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Carly, junto a sus amigos Sam y Freddie, crea un exitoso programa web transmitido desde un estudio improvisado en su apartamento, lo que la convierte en una celebridad de internet.</p>
                    <p><strong>Género:</strong> Comedia</p>
                    <p><strong>Precio Alquiler:</strong> $3.50 (DVD Temporada)</p>
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
                
                // Cargar el video solo cuando se abre el modal
                $(modal).on('show.bs.modal', function () {
                    var iframe = modal.querySelector('iframe');
                    if (iframe) {
                        var enlaceReal = iframe.getAttribute('data-src');
                        iframe.src = enlaceReal; 
                    }
                });

                // Apagar el video y limpiar el src al cerrar el modal
                $(modal).on('hidden.bs.modal', function () {
                    var iframe = modal.querySelector('iframe');
                    if (iframe) {
                        iframe.src = ''; 
                    }
                });
            });

            // 2. SCRIPT DEL BUSCADOR EN TIEMPO REAL
            var searchInput = document.getElementById('buscadorSeries');
            var series = document.querySelectorAll('.serie-card');
            var mensajeVacio = document.getElementById('mensajeVacio');

            if(searchInput) {
                searchInput.addEventListener('keyup', function() {
                    var filtro = searchInput.value.toLowerCase();
                    var seriesVisibles = 0;

                    series.forEach(function(serie) {
                        var titulo = serie.getAttribute('data-titulo');
                        
                        if (titulo && titulo.includes(filtro)) {
                            serie.style.display = ''; 
                            seriesVisibles++;
                        } else {
                            serie.style.display = 'none'; 
                        }
                    });

                    if (seriesVisibles === 0) {
                        mensajeVacio.style.display = 'block';
                    } else {
                        mensajeVacio.style.display = 'none';
                    }
                });
            }
        });
    </script>

<?= $this->endSection() ?>