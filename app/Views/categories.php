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
                        <div class="col-lg-6"><h4><?= esc($titulo_categoria ?? 'CATÁLOGO') ?></h4></div>
                        <div class="col-lg-6"><input type="text" id="buscadorPeliculas" class="bb-search-bar" placeholder="🔍 Buscar por título o género..."></div>
                    </div>
                </div>
                
                <div class="row" id="contenedorPeliculas">
                    <?php if(!empty($items)): foreach($items as $item): 
                        // Creamos la cadena de búsqueda uniendo título y género en minúsculas
                        $busqueda = strtolower($item['nombre_streaming'] . ' ' . $item['nombre_genero']);
                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-4 pelicula-card" data-titulo="<?= esc($busqueda) ?>">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/' . $item['caratula_streaming']) ?>" data-toggle="modal" data-target="#modal-<?= $item['id_streaming'] ?>">
                                    <div class="ep"><?= esc($item['clasificacion_streaming']) ?></div>
                                </div>
                                <div class="product__item__text">
                                    <h5 style="color:white;"><?= esc($item['nombre_streaming']) ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; else: ?>
                        <div class="col-12"><p class="text-white">No hay contenido disponible en esta categoría.</p></div>
                    <?php endif; ?>
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
                            <?php if(!empty($items[0])): ?>
                                <div class="product__sidebar__view__item set-bg" data-setbg="<?= base_url('img/' . $items[0]['caratula_streaming']) ?>" data-toggle="modal" data-target="#modal-<?= $items[0]['id_streaming'] ?>">
                                    <div class="ep">TOP 1</div><div class="view"><i class="fa fa-eye"></i> 9,141</div>
                                    <h5><a href="javascript:void(0)"><?= esc($items[0]['nombre_streaming']) ?></a></h5>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="tab-pane" id="p-sem" role="tabpanel">
                            <?php if(!empty($items[1])): ?>
                                <div class="product__sidebar__view__item set-bg" data-setbg="<?= base_url('img/' . $items[1]['caratula_streaming']) ?>" data-toggle="modal" data-target="#modal-<?= $items[1]['id_streaming'] ?>">
                                    <div class="ep">TOP 1</div><div class="view"><i class="fa fa-eye"></i> 15,300</div>
                                    <h5><a href="javascript:void(0)"><?= esc($items[1]['nombre_streaming']) ?></a></h5>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="tab-pane" id="p-mes" role="tabpanel">
                            <?php if(!empty($items[2])): ?>
                                <div class="product__sidebar__view__item set-bg" data-setbg="<?= base_url('img/' . $items[2]['caratula_streaming']) ?>" data-toggle="modal" data-target="#modal-<?= $items[2]['id_streaming'] ?>">
                                    <div class="ep">TOP 1</div><div class="view"><i class="fa fa-eye"></i> 45,000</div>
                                    <h5><a href="javascript:void(0)"><?= esc($items[2]['nombre_streaming']) ?></a></h5>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if(!empty($items)): foreach($items as $item): 
    // Determinamos si es película (minutos) o serie (temporadas)
    $duracion_texto = isset($item['duracion_streaming']) && $item['duracion_streaming'] != null 
        ? $item['duracion_streaming'] . ' min' 
        : $item['temporadas_streaming'] . ' Temporada(s)';
?>
<div class="modal fade bb-video-modal" id="modal-<?= $item['id_streaming'] ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="background-color:#001A5E; color:white;">
            <div class="modal-header" style="border-bottom:1px solid #FFCC00;">
                <h5 class="modal-title" style="color:#FFCC00; font-weight:bold;"><?= esc($item['nombre_streaming']) ?></h5>
                <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
            </div>
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 mb-3" style="border: 2px solid #FFCC00; border-radius: 5px;">
                    <iframe class="embed-responsive-item" src="" data-src="<?= esc($item['trailer_streaming']) ?>" allowfullscreen></iframe>
                </div>
                <p><strong>Sinopsis:</strong> <?= esc($item['sipnosis_streaming']) ?></p>
                <p><strong>Género:</strong> <?= esc($item['nombre_genero']) ?> | <strong>Formato:</strong> <?= esc($duracion_texto) ?></p>
                <a href="<?= base_url('detalles/' . $item['id_streaming']) ?>" class="btn btn-warning btn-block" style="color: black; font-weight: bold;">VER DETALLES Y ALQUILAR</a>
            </div>
        </div>
    </div>
</div>
<?php endforeach; endif; ?>

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