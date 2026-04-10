<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

    <style>
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
    </style>

    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                
                <div class="hero__items set-bg" data-setbg="<?= base_url('img/Peliculas/caratula_casa_de_papel.png') ?>">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text blockbuster-theme">
                                <div class="label bb-label">Acción / Suspenso</div>
                                <h2>La Casa de Papel</h2>
                                <p>Un misterioso personaje, que se hace llamar "El Profesor", planea el mayor de los atracos jamás ideado.</p>
                                <a href="#" class="btn-bb"><span>Alquilar Ahora</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hero__items set-bg" data-setbg="<?= base_url('img/Peliculas/caratula_mufasa.png') ?>">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text blockbuster-theme">
                                <div class="label bb-label">Aventura / Animación</div>
                                <h2>Mufasa</h2>
                                <p>El rey de la sabana, Mufasa, es un personaje icónico de Disney. Descubre su legado.</p>
                                <a href="#" class="btn-bb"><span>Alquilar Ahora</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="product spad bb-background">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="section-title bb-title" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
                        <h4>Películas Destacadas</h4>
                        <a href="<?= base_url('categorias/peliculas') ?>" class="btn-bb" style="padding: 10px 20px; font-size: 0.9rem;">Ver Catálogo Completo <i class="fa fa-arrow-right"></i></a>   
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

    <section class="product spad bb-background" style="padding-top: 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="section-title bb-title" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
                        <h4>Series Recomendadas</h4>
                        <a href="<?= base_url('categorias/series') ?>" class="btn-bb" style="padding: 10px 20px; font-size: 0.9rem;">Ver Todas las Series <i class="fa fa-arrow-right"></i></a>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/Drake_josh.jpg') ?>" data-toggle="modal" data-target="#modalXF" style="cursor: pointer; border: 2px solid #001A5E;">
                                    <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">T. 1-3</div>
                                </div>
                                <div class="product__item__text">
                                    <h5 style="color: white; margin-top: 10px;">Los Expedientes Secretos X</h5>
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white;">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dLDkNge_AhE" allowfullscreen></iframe>
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

    <div class="modal fade" id="modalT2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Terminator 2: El Juicio Final (1991)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
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

    <div class="modal fade" id="modalMIB" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Hombres de Negro (1997)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
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

    <div class="modal fade" id="modalBTTF" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Volver al Futuro (1985)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
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

    <div class="modal fade" id="modalXF" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Los Expedientes Secretos X</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <p><strong>Sinopsis:</strong> Dos agentes del FBI investigan casos inexplicables, fenómenos paranormales y conspiraciones alienígenas.</p>
                    <p><strong>Género:</strong> Misterio / Sci-Fi</p>
                    <p><strong>Precio Alquiler:</strong> $4.00 (Pack VHS)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalFriends" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Friends</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <p><strong>Sinopsis:</strong> Sigue las vidas, amores y risas de seis jóvenes amigos que viven en Manhattan.</p>
                    <p><strong>Género:</strong> Comedia (Sitcom)</p>
                    <p><strong>Precio Alquiler:</strong> $3.50 (Pack VHS)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalMalcolm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">Malcolm el de en medio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <p><strong>Sinopsis:</strong> Un niño prodigio intenta sobrevivir a su excéntrica y disfuncional familia de clase media.</p>
                    <p><strong>Género:</strong> Comedia</p>
                    <p><strong>Precio Alquiler:</strong> $3.50 (Pack VHS)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalPrincipe" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;">El Príncipe del Rap</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <p><strong>Sinopsis:</strong> Un joven de Filadelfia es enviado a vivir con sus tíos ricos en Bel-Air, chocando con su estilo de vida.</p>
                    <p><strong>Género:</strong> Comedia</p>
                    <p><strong>Precio Alquiler:</strong> $3.00 (Pack VHS)</p>
                </div>
                <div class="modal-footer" style="background-color: #001A5E; border-top: 1px solid #FFCC00;">
                    <button class="btn-bb">Alquilar Ahora</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var modals = document.querySelectorAll('.bb-video-modal');
            modals.forEach(function(modal) {
                $(modal).on('hidden.bs.modal', function () {
                    var iframe = modal.querySelector('iframe');
                    if (iframe) {
                        var src = iframe.src;
                        iframe.src = src; 
                    }
                });
            });
        });
    </script>

<?= $this->endSection() ?>