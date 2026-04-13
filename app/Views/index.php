<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<section class="hero">
    <div class="container">
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
        <div class="modal-content" style="background-color: #001A5E;"> <div class="modal-header" style="border-bottom: 1px solid rgba(255,255,255,0.1);">
                <h5 class="modal-title" style="color:#FFCC00; font-weight:bold;"><?= esc($modal_item['nombre_streaming']) ?></h5>
                <button type="button" class="close" data-dismiss="modal" style="color:white; opacity: 1;">&times;</button>
            </div>
            <div class="modal-body" style="color: white;">
                <div class="embed-responsive embed-responsive-16by9 mb-3" style="border: 2px solid #FFCC00; border-radius: 5px;">
                    <iframe class="embed-responsive-item" src="" data-src="<?= base_url('videos/' . $modal_item['trailer_streaming']) ?>" allowfullscreen></iframe>
                </div>
                <p><strong>Descripción:</strong> <?= esc($modal_item['sipnosis_streaming']) ?></p>
                <hr style="border-top: 1px solid rgba(255,255,255,0.2);">
                <p>
                    <strong>Género:</strong> <?= esc($modal_item['nombre_genero']) ?> | 
                    <strong>Duración/Formato:</strong> <?= esc($duracion_texto) ?> | 
                    <strong>Clasificación:</strong> <span class="badge badge-warning text-dark"><?= esc($modal_item['clasificacion_streaming']) ?></span>
                </p>
                
                <div class="text-right mt-4">
                    <button class="btn btn-alquilar" style="background:#FFCC00; color:#000; font-weight:bold; padding: 10px 25px;">ALQUILAR AHORA</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Carga el video al abrir y lo quita al cerrar
        $('.bb-video-modal').on('show.bs.modal', function () {
            var iframe = $(this).find('iframe');
            iframe.attr('src', iframe.data('src'));
        });
        $('.bb-video-modal').on('hidden.bs.modal', function () {
            $(this).find('iframe').attr('src', '');
        });
    });
</script>

<?= $this->endSection() ?>