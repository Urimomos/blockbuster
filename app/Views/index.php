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
            background-color: #070e20; 
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
            background: rgba(255, 255, 255, 0.08); 
            backdrop-filter: blur(12px); 
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-left: 8px solid #FFCC00; 
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
                <?php if(!empty($recientes)): foreach($recientes as $item): ?>
                    <div class="hero__items set-bg" data-setbg="<?= base_url('img/Peliculas/' . $item['caratula_streaming']) ?>">
                        <div class="hero-dark-fade"></div>
                        <div class="glass-box">
                            <span class="glass-tag"><?= mb_strtoupper($item['nombre_genero']) ?> | <?= $item['clasificacion_streaming'] ?></span>
                            <h2 class="glass-title"><?= esc($item['nombre_streaming']) ?></h2>
                            <p class="glass-desc"><?= esc(word_limiter($item['sipnosis_streaming'], 20)) ?></p>
                            <a href="#" data-toggle="modal" data-target="#modal-<?= $item['id_streaming'] ?>" class="glass-btn"><i class="fa fa-ticket"></i> DETALLES</a>
                        </div>
                    </div>
                <?php endforeach; else: ?>
                    <p class="text-white text-center">No hay estrenos recientes por mostrar.</p>
                <?php endif; ?>
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
                        <?php if(!empty($peliculas)): foreach($peliculas as $peli): ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/Peliculas/' . $peli['caratula_streaming']) ?>" data-toggle="modal" data-target="#modal-<?= $peli['id_streaming'] ?>" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;"><?= $peli['clasificacion_streaming'] ?></div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;"><?= esc($peli['nombre_streaming']) ?></h5>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; else: ?>
                            <div class="col-12"><p class="text-white">No hay películas disponibles.</p></div>
                        <?php endif; ?>
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
                        <?php if(!empty($series)): foreach($series as $serie): ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/series/' . $serie['caratula_streaming']) ?>" data-toggle="modal" data-target="#modal-<?= $serie['id_streaming'] ?>" style="cursor: pointer; border: 2px solid #001A5E;">
                                        <div class="ep" style="background-color: #FFCC00; color: #001A5E; font-weight: bold;">T. <?= $serie['temporadas_streaming'] ?></div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5 style="color: white; margin-top: 10px;"><?= esc($serie['nombre_streaming']) ?></h5>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; else: ?>
                            <div class="col-12"><p class="text-white">No hay series disponibles.</p></div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php 
        // Unimos los 3 arrays para crear los modales sin duplicarlos
        $todos_los_modales = array_merge($recientes ?? [], $peliculas ?? [], $series ?? []);
        $modales_unicos = [];
        foreach($todos_los_modales as $m) {
            $modales_unicos[$m['id_streaming']] = $m;
        }
        
        foreach($modales_unicos as $modal_item): 
    ?>
    <div class="modal fade bb-video-modal" id="modal-<?= $modal_item['id_streaming'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document"> 
            <div class="modal-content bb-modal">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #FFCC00; font-weight: bold;"><?= esc($modal_item['nombre_streaming']) ?> (<?= date('Y', strtotime($modal_item['fecha_lanzamiento_streaming'])) ?>)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: white;">&times;</span></button>
                </div>
                <div class="modal-body" style="color: white; background-color: #001A5E;">
                    <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px; border: 2px solid #FFCC00; border-radius: 5px;">
                        <iframe class="embed-responsive-item" src="" data-src="<?= base_url('videos/' . $modal_item['trailer_streaming']) ?>" allowfullscreen></iframe>
                    </div>
                    <p><strong>Sinopsis:</strong> <?= esc($modal_item['sipnosis_streaming']) ?></p>
                    <p><strong>Género:</strong> <?= esc($modal_item['nombre_genero']) ?></p>
                    <p><strong>Clasificación:</strong> <?= esc($modal_item['clasificacion_streaming']) ?></p>
                    <div class="text-right mt-3">
                        <a href="<?= base_url('detalles/' . $modal_item['id_streaming']) ?>" class="btn btn-warning" style="color: black; font-weight: bold;">Más Info / Alquilar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

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