<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<section class="spad" style="background-color: #040814; min-height: 100vh; padding-top: 50px;">
    <div class="container">
        <a href="<?= base_url('/') ?>" class="btn btn-outline-light mb-4" style="border-radius: 20px;">
            <i class="fa fa-arrow-left mr-2"></i> Volver al Catálogo
        </a>

        <?php if(session()->getFlashdata('mensaje')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="background-color: rgba(0,255,0,0.1); border: 1px solid #00FF00; color: #00FF00;">
                <i class="fa fa-check-circle mr-2"></i> <?= session()->getFlashdata('mensaje') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" style="color: white;">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        
        <div class="row">
            <div class="col-lg-12 text-center mb-4">
                <h2 style="color: #FFCC00; font-weight: bold; text-transform: uppercase;">
                    <?= esc($pelicula['nombre_streaming']) ?>
                </h2>
                <span class="badge badge-warning text-dark mt-2 p-2">Película Completa</span>
            </div>
            
            <div class="col-lg-10 offset-lg-1">
                <div class="embed-responsive embed-responsive-16by9" style="border: 2px solid #00FF00; border-radius: 10px; box-shadow: 0 10px 30px rgba(0, 255, 0, 0.2);">
                    <?php 
                        // Si no pusiste link de película completa, usa el tráiler por defecto para que no salga error
                        $link_video = !empty($pelicula['url_pelicula_completa']) ? $pelicula['url_pelicula_completa'] : $pelicula['trailer_streaming'];
                    ?>
                    <iframe class="embed-responsive-item" src="<?= $link_video ?>?autoplay=1" allowfullscreen allow="autoplay"></iframe>
                </div>
                
                <div class="mt-4 text-white" style="background-color: #070e20; padding: 20px; border-radius: 8px;">
                    <h5 style="color: #FFCC00;">Sinopsis</h5>
                    <p style="color: #ccc;"><?= esc($pelicula['sipnosis_streaming']) ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>