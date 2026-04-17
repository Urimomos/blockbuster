<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

    <section class="normal-breadcrumb set-bg" style="background-color: #000c2b; padding: 60px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Resultados de Búsqueda</h2>
                        <p>Buscaste: <strong style="color: #FFCC00;">"<?= esc($termino_busqueda) ?>"</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="spad" style="min-height: 40vh; background-color: #0b0c2a;">
    <div class="container">
        <div class="row">
            <?php if(!empty($resultados)): foreach($resultados as $item): ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/' . $item['caratula_streaming']) ?>" data-toggle="modal" data-target="#modal-<?= $item['id_streaming'] ?>" style="cursor: pointer;">
                            <div class="ep"><?= esc($item['clasificacion_streaming']) ?></div>
                        </div>
                        <div class="product__item__text text-center mt-3">
                            <h5 style="color:white;"><a href="<?= base_url('detalles/' . $item['id_streaming']) ?>" style="color:white;"><?= esc($item['nombre_streaming']) ?></a></h5>
                            <span style="color:#b3b3b3; font-size:14px;"><?= esc($item['nombre_genero']) ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; else: ?>
                <div class="col-12 text-center">
                    <i class="fa fa-search fa-3x mb-3" style="color: #FFCC00;"></i>
                    <h4 style="color: white;">No se encontraron resultados para "<?= esc($termino_busqueda) ?>".</h4>
                    <p style="color: #b3b3b3; margin-top: 15px;">Intenta buscar con otra palabra clave, por título o género.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php if(!empty($resultados)): foreach($resultados as $item): 
    $duracion_texto = isset($item['duracion_streaming']) && $item['duracion_streaming'] != null 
        ? $item['duracion_streaming'] . ' min' 
        : $item['temporadas_streaming'] . ' Temporada(s)';
?>
<div class="modal fade bb-video-modal" id="modal-<?= $item['id_streaming'] ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="background-color:#001A5E; color:white; border: 2px solid #FFCC00; border-radius: 15px;">
            <div class="modal-header" style="border-bottom:1px solid #FFCC00;">
                <h5 class="modal-title" style="color:#FFCC00; font-weight:bold;"><?= esc($item['nombre_streaming']) ?></h5>
                <button type="button" class="close" data-dismiss="modal" style="color:white; opacity:1;">&times;</button>
            </div>
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9 mb-3" style="border: 2px solid #FFCC00; border-radius: 5px;">
                    <iframe class="embed-responsive-item" src="" data-src="<?= esc($item['trailer_streaming']) ?>" allowfullscreen></iframe>
                </div>
                <p><strong>Sinopsis:</strong> <?= esc($item['sipnosis_streaming']) ?></p>
                <p><strong>Género:</strong> <?= esc($item['nombre_genero']) ?> | <strong>Formato:</strong> <?= esc($duracion_texto) ?></p>
                <a href="<?= base_url('detalles/' . $item['id_streaming']) ?>" class="btn btn-warning btn-block mt-3" style="background:#FFCC00; color:#001A5E; font-weight:bold; text-transform:uppercase;">VER DETALLES Y ALQUILAR</a>
            </div>
        </div>
    </div>
</div>
<?php endforeach; endif; ?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        $('.bb-video-modal').on('show.bs.modal', function () {
            var iframe = $(this).find('iframe');
            if(iframe.length && iframe.data('src')){
                iframe.attr('src', iframe.data('src'));
            }
        });
        
        $('.bb-video-modal').on('hidden.bs.modal', function () {
            var iframe = $(this).find('iframe');
            if(iframe.length){
                iframe.attr('src', '');
            }
        });
        
        $('.set-bg').each(function () {
            var bg = $(this).data('setbg');
            if(bg) {
                $(this).css('background-image', 'url(' + bg + ')');
            }
        });
    });
</script>

<?= $this->endSection() ?>