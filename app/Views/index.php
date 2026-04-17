<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<section class="hero">
    <div class="container">
        
        <?php if(session()->getFlashdata('mensaje')): ?>
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert" style="background-color: rgba(0,255,0,0.1); border: 1px solid #00FF00; color: #00FF00;">
                <i class="fa fa-check-circle mr-2"></i> <?= session()->getFlashdata('mensaje') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: white; opacity: 1;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if(session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert" style="background-color: rgba(255,0,0,0.1); border: 1px solid #FF0000; color: #FF0000;">
                <i class="fa fa-exclamation-circle mr-2"></i> <?= session()->getFlashdata('error') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: white; opacity: 1;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <div class="section-title"><h4>Streaming Más Visitados</h4></div>
        <div class="hero__slider owl-carousel">
            <?php if(!empty($recientes)): foreach($recientes as $item): ?>
            <div class="hero__items set-bg" data-setbg="<?= base_url('img/' . $item['caratula_streaming']) ?>">
                <div class="glass-box">
                    <span class="glass-tag"><?= mb_strtoupper($item['nombre_genero']) ?> | <?= $item['clasificacion_streaming'] ?></span>
                    <h2 class="glass-title"><?= esc($item['nombre_streaming']) ?></h2>
                    <p class="glass-desc"><?= esc(word_limiter($item['sipnosis_streaming'], 20)) ?></p>
                    <a href="#" data-toggle="modal" data-target="#modal-<?= $item['id_streaming'] ?>" class="primary-btn" style="background:#FFCC00; color:#000;">VER DETALLES</a>
                </div>
            </div>
            <?php endforeach; else: ?>
                <p class="text-white text-center">No hay estrenos recientes por mostrar.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="product spad" style="background-color: #070e20;">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="section-title" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
                    <h4>Disponibles Ahora</h4>
                    <div>
                        <a href="<?= base_url('categorias/peliculas') ?>" class="btn-nav-custom text-white mr-3">PELÍCULAS <i class="fa fa-film"></i></a>
                        <a href="<?= base_url('categorias/series') ?>" class="btn-nav-custom text-white">SERIES <i class="fa fa-tv"></i></a>
                    </div>
                </div>
                <div class="row">
                    <?php if(!empty($peliculas)): foreach($peliculas as $peli): ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="product__item" data-toggle="modal" data-target="#modal-<?= $peli['id_streaming'] ?>" style="cursor: pointer;">
                            <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/' . $peli['caratula_streaming']) ?>">
                                <div class="ep">DISPONIBLE</div>
                            </div>
                            <div class="product__item__text">
                                <h5 style="text-align:center; color:white;"><?= esc($peli['nombre_streaming']) ?></h5>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; else: ?>
                        <div class="col-12"><p class="text-white text-center">No hay películas disponibles.</p></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="section-title"><h4>Recién Agregados</h4></div>
                <div class="row">
                    <?php if(!empty($series)): foreach($series as $serie): ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="product__item" data-toggle="modal" data-target="#modal-<?= $serie['id_streaming'] ?>" style="cursor: pointer;">
                            <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/' . $serie['caratula_streaming']) ?>">
                                <div class="ep" style="background:#00ff00; color:#000;">NUEVO</div>
                            </div>
                            <div class="product__item__text">
                                <h5 style="text-align:center; color:white;"><?= esc($serie['nombre_streaming']) ?></h5>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; else: ?>
                        <div class="col-12"><p class="text-white text-center">No hay series recientes.</p></div>
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
        // Lógica para mostrar duración (si es película) o temporadas (si es serie)
        $duracion_texto = isset($modal_item['duracion_streaming']) && $modal_item['duracion_streaming'] != null 
            ? $modal_item['duracion_streaming'] . ' min' 
            : $modal_item['temporadas_streaming'] . ' Temporada(s)';
?>
<div class="modal fade bb-video-modal" id="modal-<?= $modal_item['id_streaming'] ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="background-color: #001A5E;"> 
            <div class="modal-header" style="border-bottom: 1px solid rgba(255,255,255,0.1);">
                <h5 class="modal-title" style="color:#FFCC00; font-weight:bold;"><?= esc($modal_item['nombre_streaming']) ?></h5>
                <button type="button" class="close" data-dismiss="modal" style="color:white; opacity: 1;">&times;</button>
            </div>
            <div class="modal-body" style="color: white;">
                
                <?php 
                // VERIFICAMOS SI EL USUARIO YA ALQUILÓ ESTE TÍTULO
                // $mis_alquileres debe venir del controlador Home.php
                $ya_la_tengo = isset($mis_alquileres) && in_array($modal_item['id_streaming'], $mis_alquileres); 
                ?>

                <div class="embed-responsive embed-responsive-16by9 mb-3" style="border: 2px solid <?= $ya_la_tengo ? '#00FF00' : '#FFCC00' ?>; border-radius: 5px;">
                    <?php if($ya_la_tengo && !empty($modal_item['url_pelicula_completa'])): ?>
                        <iframe class="embed-responsive-item" src="<?= $modal_item['url_pelicula_completa'] ?>" frameborder="0" allowfullscreen></iframe>
                    <?php else: ?>
                        <iframe class="embed-responsive-item" src="<?= $modal_item['trailer_streaming'] ?>" frameborder="0" allowfullscreen></iframe>
                    <?php endif; ?>
                </div>

                <?php if($ya_la_tengo): ?>
                    <div class="alert text-center font-weight-bold mb-3" style="background-color: rgba(0,255,0,0.1); color: #00FF00; border: 1px solid #00FF00;">
                        <i class="fa fa-unlock-alt mr-2"></i> Título Desbloqueado - Disfruta tu contenido
                    </div>
                <?php endif; ?>

                <p><strong>Descripción:</strong> <?= esc($modal_item['sipnosis_streaming']) ?></p>
                <hr style="border-top: 1px solid rgba(255,255,255,0.2);">
                <p>
                    <strong>Género:</strong> <?= esc($modal_item['nombre_genero']) ?> | 
                    <strong>Duración/Formato:</strong> <?= esc($duracion_texto) ?> | 
                    <strong>Clasificación:</strong> <span class="badge badge-warning text-dark"><?= esc($modal_item['clasificacion_streaming']) ?></span>
                </p>
                
                <div class="text-right mt-4">
                    <?php if(!$ya_la_tengo): ?>
                        <a href="<?= base_url('alquilar/' . $modal_item['id_streaming']) ?>" 
                           class="btn" 
                           style="background:#FFCC00; color:#000; font-weight:bold; padding: 10px 25px;"
                           onclick="return confirm('¿Deseas gastar 1 ticket para alquilar este título por 48 horas?');">
                           <i class="fa fa-ticket mr-1"></i> ALQUILAR AHORA
                        </a>
                    <?php else: ?>
                        <a href="<?= base_url('ver-pelicula/' . $modal_item['id_streaming']) ?>" 
                           class="btn font-weight-bold" 
                           style="background-color: #00FF00; color: #000; padding: 10px 25px; box-shadow: 0 0 10px rgba(0,255,0,0.5);">
                            <i class="fa fa-play-circle mr-1"></i> VER PELÍCULA AHORA
                        </a>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Solo actuamos cuando el modal se termina de Ocultar (Cerrar)
        $('.bb-video-modal').on('hidden.bs.modal', function () {
            var $iframe = $(this).find('iframe');
            if ($iframe.length) {
                var srcGuardado = $iframe.attr('src'); // Guardamos el link
                $iframe.attr('src', '');               // Lo borramos para cortar el audio
                $iframe.attr('src', srcGuardado);      // Lo volvemos a poner para la próxima vez
            }
        });
    });
</script>

<?= $this->endSection() ?>