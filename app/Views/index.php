<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

    <style>
        /* --- ESTILOS PARA LAS TARJETAS INFERIORES --- */
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

        /* ================================================== */
        /* --- DISEÑO EXACTO A LA IMAGEN (BANNER CRISTAL) --- */
        /* ================================================== */
        
        /* Fondo de la sección Hero */
        .hero { 
            padding-top: 40px; 
            padding-bottom: 60px; 
            background-color: #070e20; /* Azul muy oscuro para que resalte la tarjeta */
        }
        
        /* Contenedor del Slider */
        .hero__slider.owl-carousel { 
            position: relative; 
        }

        /* Formato de la imagen (Bordes curvos y altura) */
        .hero__slider .hero__items {
            height: 480px;
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            display: flex;
            align-items: center;
            margin: 0;
            box-shadow: 0 15px 35px rgba(0,0,0,0.6);
        }

        /* Degradado oscuro para que la letra blanca se lea bien */
        .hero-dark-fade {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(90deg, rgba(7, 14, 32, 0.95) 0%, rgba(7, 14, 32, 0.6) 45%, rgba(7, 14, 32, 0) 100%);
            z-index: 1;
        }

        /* Panel de Cristal Difuminado (Glassmorphism) */
        .glass-box {
            position: relative;
            z-index: 2;
            background: rgba(255, 255, 255, 0.08); /* Blanco super transparente */
            backdrop-filter: blur(12px); /* Efecto difuminado */
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-left: 8px solid #FFCC00; /* La franja amarilla a la izquierda */
            border-radius: 10px;
            padding: 40px;
            max-width: 480px;
            margin-left: 50px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }

        /* Etiqueta amarilla pequeña */
        .glass-tag {
            background-color: #FFCC00;
            color: #000000;
            font-size: 0.8rem;
            font-weight: 800;
            padding: 5px 12px;
            border-radius: 4px;
            display: inline-block;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Título Grande */
        .glass-title {
            font-family: 'Oswald', sans-serif;
            font-size: 3.5rem;
            font-weight: 700;
            color: #ffffff;
            line-height: 1.1;
            text-transform: uppercase;
            margin-bottom: 20px;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
        }

        /* Texto de descripción */
        .glass-desc {
            color: #e0e0e0;
            font-size: 1rem;
            line-height: 1.5;
            margin-bottom: 30px;
            font-family: 'Mulish', sans-serif;
        }

        /* Botón Amarillo Alquilar */
        .glass-btn {
            background-color: #FFCC00;
            color: #000000 !important;
            font-weight: 800;
            font-size: 1rem;
            padding: 12px 25px;
            border-radius: 5px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .glass-btn:hover {
            background-color: #ffffff;
            transform: translateY(-3px);
        }

        /* Puntitos amarillos debajo del slider */
        .hero__slider .owl-dots {
            position: absolute;
            bottom: -45px;
            left: 0;
            width: 100%;
            text-align: center;
        }
        .hero__slider .owl-dots .owl-dot span {
            background: #FFCC00;
            width: 12px;
            height: 12px;
            margin: 0 6px;
            opacity: 0.4;
            border-radius: 50%;
            transition: 0.3s;
        }
        .hero__slider .owl-dots .owl-dot.active span {
            opacity: 1;
            transform: scale(1.3);
        }
    </style>

    <section class="hero">
        <div class="container"> 
            <div class="hero__slider owl-carousel">
                
                <div class="hero__items set-bg" data-setbg="<?= base_url('img/Peliculas/jurassic.jpg') ?>">
                    <div class="hero-dark-fade"></div>
                    <div class="glass-box">
                        <span class="glass-tag">CIENCIA FICCIÓN | SPIELBERG</span>
                        <h2 class="glass-title">Jurassic Park</h2>
                        <p class="glass-desc">Un multimillonario crea un parque temático con dinosaurios clonados, pero las cosas salen mal durante una visita de prueba.</p>
                        <a href="#" data-toggle="modal" data-target="#modalJP" class="glass-btn"><i class="fa fa-ticket"></i> ALQUILAR</a>
                    </div>
                </div>

                <div class="hero__items set-bg" data-setbg="<?= base_url('img/Peliculas/caratula_casa_de_papel.png') ?>">
                    <div class="hero-dark-fade"></div>
                    <div class="glass-box">
                        <span class="glass-tag">ACCIÓN | SUSPENSO</span>
                        <h2 class="glass-title">La Casa de Papel</h2>
                        <p class="glass-desc">Un misterioso personaje, "El Profesor", planea el mayor atracos jamás ideado. Únete a la resistencia.</p>
                        <a href="#" class="glass-btn"><i class="fa fa-ticket"></i> ALQUILAR</a>
                    </div>
                </div>

                <div class="hero__items set-bg" data-setbg="<?= base_url('img/Peliculas/caratula_mufasa.png') ?>">
                    <div class="hero-dark-fade"></div>
                    <div class="glass-box">
                        <span class="glass-tag">AVENTURA | FAMILIAR</span>
                        <h2 class="glass-title">Mufasa</h2>
                        <p class="glass-desc">El rey de la sabana, Mufasa, enseña a su hijo Simba el "ciclo de la vida" mientras se enfrenta a su envidioso hermano Scar.</p>
                        <a href="#" class="glass-btn"><i class="fa fa-ticket"></i> ALQUILAR</a>
                    </div>
                </div>

                <div class="hero__items set-bg" data-setbg="<?= base_url('img/Peliculas/terminator.jpg') ?>">
                    <div class="hero-dark-fade"></div>
                    <div class="glass-box">
                        <span class="glass-tag">ACCIÓN | SCI-FI</span>
                        <h2 class="glass-title">Terminator 2</h2>
                        <p class="glass-desc">Un cyborg es enviado desde el futuro para proteger a un joven John Connor de un androide asesino más avanzado.</p>
                        <a href="#" data-toggle="modal" data-target="#modalT2" class="glass-btn"><i class="fa fa-ticket"></i> ALQUILAR</a>
                    </div>
                </div>

                <div class="hero__items set-bg" data-setbg="<?= base_url('img/Peliculas/the_matrix.jpg') ?>">
                    <div class="hero-dark-fade"></div>
                    <div class="glass-box">
                        <span class="glass-tag">CIENCIA FICCIÓN | ACCIÓN</span>
                        <h2 class="glass-title">The Matrix</h2>
                        <p class="glass-desc">Un hacker descubre que la realidad que conoce es una simulación creada por máquinas, y se une a la rebelión para liberar a la humanidad.</p>
                        <a href="#" data-toggle="modal" data-target="#modalMatrix" class="glass-btn"><i class="fa fa-ticket"></i> ALQUILAR</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="product spad bb-background" style="background-color: #070e20;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="section-title bb-title" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
                        <h4>Películas Destacadas</h4>
                        <a href="<?= base_url('categorias/peliculas') ?>" class="btn-bb" style="padding: 10px 20px; font-size: 0.9rem;">Ver Catálogo <i class="fa fa-arrow-right"></i></a>   
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/jurassic.jpg') ?>" data-toggle="modal" data-target="#modalJP" style="cursor: pointer; border: 2px solid #001A5E;">
                                    <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">HOT</div>
                                </div>
                                <div class="product__item__text">
                                    <h5 style="color: white; margin-top: 10px;">Jurassic Park</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/terminator.jpg') ?>" data-toggle="modal" data-target="#modalT2" style="cursor: pointer; border: 2px solid #001A5E;">
                                    <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">VHS</div>
                                </div>
                                <div class="product__item__text">
                                    <h5 style="color: white; margin-top: 10px;">Terminator 2</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/Hombre_Negro.jpg') ?>" data-toggle="modal" data-target="#modalMIB" style="cursor: pointer; border: 2px solid #001A5E;">
                                    <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">VHS</div>
                                </div>
                                <div class="product__item__text">
                                    <h5 style="color: white; margin-top: 10px;">Hombres de Negro</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/volver_futuro.jpg') ?>" data-toggle="modal" data-target="#modalBTTF" style="cursor: pointer; border: 2px solid #001A5E;">
                                    <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">CLÁSICO</div>
                                </div>
                                <div class="product__item__text">
                                    <h5 style="color: white; margin-top: 10px;">Volver al Futuro</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="product spad bb-background" style="padding-top: 0; background-color: #070e20;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="section-title bb-title" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
                        <h4>Series Recomendadas</h4>
                        <a href="<?= base_url('categorias/series') ?>" class="btn-bb" style="padding: 10px 20px; font-size: 0.9rem;">Ver Todas <i class="fa fa-arrow-right"></i></a>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/Drake_josh.jpg') ?>" data-toggle="modal" data-target="#modalXF" style="cursor: pointer; border: 2px solid #001A5E;">
                                    <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">T. 1-3</div>
                                </div>
                                <div class="product__item__text">
                                    <h5 style="color: white; margin-top: 10px;">Drake y Josh</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/friends.jpg') ?>" data-toggle="modal" data-target="#modalFriends" style="cursor: pointer; border: 2px solid #001A5E;">
                                    <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">T. 1</div>
                                </div>
                                <div class="product__item__text">
                                    <h5 style="color: white; margin-top: 10px;">Friends</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/malcom.jpg') ?>" data-toggle="modal" data-target="#modalMalcolm" style="cursor: pointer; border: 2px solid #001A5E;">
                                    <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">T. 1-2</div>
                                </div>
                                <div class="product__item__text">
                                    <h5 style="color: white; margin-top: 10px;">Malcolm el de en medio</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/principe.jpg') ?>" data-toggle="modal" data-target="#modalPrincipe" style="cursor: pointer; border: 2px solid #001A5E;">
                                    <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">CLÁSICO</div>
                                </div>
                                <div class="product__item__text">
                                    <h5 style="color: white; margin-top: 10px;">El Príncipe del Rap</h5>
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
            </div>
        </div>
    </div>

    <div class="modal fade bb-video-modal" id="modalXF" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Drake y Josh</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="https://www.youtube.com/embed/2_mBf5z_VTo" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> Dos hermanastros adolescentes con personalidades opuestas deben aprender a vivir bajo el mismo techo.</p>
                    <p><strong>Género:</strong> Comedia</p>
                    <p><strong>Precio Alquiler:</strong> $4.00 (Pack Temporada)</p>
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
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var modals = document.querySelectorAll('.bb-video-modal');
            modals.forEach(function(modal) {
                
                $(modal).on('show.bs.modal', function () {
                    var iframe = modal.querySelector('iframe');
                    if (iframe) {
                        var enlaceReal = iframe.getAttribute('data-src');
                        iframe.src = enlaceReal; 
                    }
                });

                $(modal).on('hidden.bs.modal', function () {
                    var iframe = modal.querySelector('iframe');
                    if (iframe) {
                        iframe.src = ''; 
                    }
                });
            });
        });
    </script>

<?= $this->endSection() ?>